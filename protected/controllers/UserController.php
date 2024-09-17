<?php

class UserController extends Controller
{
    // Aksi login
    public function actionLogin()
    {
        $model = new LoginForm();

        // Jika ada data POST
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // Validasi dan autentikasi
            if ($model->validate() && $model->login()) {
                // Redirect ke halaman yang diinginkan setelah login
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }

        $this->render('login', array('model' => $model));
    }

    // Aksi logout
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    // Aksi untuk menampilkan daftar pengguna
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('User');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionRegister()
    {
        $model = new RegisterForm();
    
        if (isset($_POST['RegisterForm'])) {
            $model->attributes = $_POST['RegisterForm'];
    
            if ($model->validate()) {
                $user = new User();
                $user->username = $model->username;
                $user->password = $user->hashPassword($model->password);
                $user->role = $model->role;
    
                if ($user->save()) {
                    // Pendaftaran berhasil, mungkin redirect ke login atau homepage
                    $this->redirect(array('site/index'));
                }
            }
        }
    
        $this->render('register', array('model' => $model));
    }
    


    // Aksi untuk membuat pengguna baru
    public function actionCreate()
    {
        $model = new User;

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array('model' => $model));
    }

    // Aksi untuk memperbarui pengguna
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('update', array('model' => $model));
    }

    // Aksi untuk menghapus pengguna
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel($id)->delete();

            if (!Yii::app()->request->isAjaxRequest) {
                $this->redirect(array('index'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    // Memuat model pengguna berdasarkan ID
    protected function loadModel($id)
    {
        $model = User::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    // Filter untuk hak akses
    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('login','register', 'logout'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('index', 'create', 'update', 'delete'),
                'roles' => array('admin'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
}
