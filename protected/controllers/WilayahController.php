<?php

class WilayahController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl', // Filter SRBAC
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',  
                'actions'=>array('index', 'view', 'create', 'update', 'delete'),
                'roles'=>array('admin'), // Hanya admin yang boleh
            ),
            array('deny',  
                'users'=>array('*'), // Menolak semua akses yang tidak diizinkan
            ),
        );
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Wilayah');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionView($id)
    {
        $this->render('view', array('model' => $this->loadModel($id)));
    }

    public function actionCreate()
    {
        $model = new Wilayah();

        if (isset($_POST['Wilayah'])) {
            $model->attributes = $_POST['Wilayah'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Wilayah'])) {
            $model->attributes = $_POST['Wilayah'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();
        $this->redirect(array('index'));
    }

    public function loadModel($id)
    {
        $model = Wilayah::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
}
