<?php

class SiteController extends Controller
{
    // Action untuk menampilkan halaman utama
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('User'); // Mengambil data user
        $this->render('index', array('dataProvider' => $dataProvider)); // Render view index
    }

    // Action untuk login
    public function actionLogin()
    {
        $model = new LoginForm; // Membuat instance model LoginForm

        // Jika form dikirimkan melalui POST
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm']; // Mengisi atribut model

            // Validasi input dan lakukan login
            if ($model->validate() && $model->login()) {
                $this->redirect(Yii::app()->user->returnUrl); // Redirect setelah login berhasil
            }
        }

        // Render halaman login
        $this->render('login', array('model' => $model)); // Render view login
    }

    // Action untuk logout
    public function actionLogout()
    {
        Yii::app()->user->logout(); // Logout pengguna
        $this->redirect(Yii::app()->homeUrl); // Redirect ke halaman utama
    }

    // Tambahan: Action untuk halaman pendaftaran (opsional)
    public function actionRegister()
    {
        $model = new RegisterForm(); // Membuat instance model RegisterForm

        // Jika form pendaftaran dikirimkan melalui POST
        if (isset($_POST['RegisterForm'])) {
            $model->attributes = $_POST['RegisterForm']; // Mengisi atribut model

            // Validasi dan simpan pengguna baru
            if ($model->validate()) {
                $user = new User(); // Membuat instance model User
                $user->username = $model->username;
                $user->password = $model->hashPassword(); // Menghash password
                $user->role = $model->role;

                // Simpan user ke database
                if ($user->save()) {
                    // Pendaftaran berhasil
                    $this->redirect(array('site/index')); // Redirect ke halaman utama
                }
            }
        }

        // Render halaman pendaftaran
        $this->render('register', array('model' => $model)); // Render view register
    }
}
