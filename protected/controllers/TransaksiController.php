<?php

class TransaksiController extends Controller
{
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
                'actions'=>array('index', 'view', 'create', 'update', 'delete'),
                'roles'=>array('admin'),
            ),
            array('deny',  
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Transaksi');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionView($id)
    {
        $this->render('view', array('model' => $this->loadModel($id)));
    }

    public function actionCreate()
    {
        $model = new Transaksi();

        if (isset($_POST['Transaksi'])) {
            $model->attributes = $_POST['Transaksi'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Transaksi'])) {
            $model->attributes = $_POST['Transaksi'];
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
        $model = Transaksi::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
}
