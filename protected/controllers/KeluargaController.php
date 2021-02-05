<?php

class KeluargaController extends Controller
{

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Keluarga;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Keluarga']))
		{
			$model->attributes=$_POST['Keluarga'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keluarga_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Keluarga']))
		{
			$model->attributes=$_POST['Keluarga'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keluarga_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionKemaskinidaftarkeluarga($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Keluarga']))
		{
			$model->attributes=$_POST['Keluarga'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keluarga_id));
		}

		$this->render('kemaskinidaftarkeluarga',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Keluarga('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Keluarga']))
			$model->attributes=$_GET['Keluarga'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Keluarga('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Keluarga']))
			$model->attributes=$_GET['Keluarga'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDaftarkeluarga()
	{
		$model=new Keluarga;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Keluarga']))
		{
			$model->attributes=$_POST['Keluarga'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keluarga_id));
		}

		$this->render('daftarkeluarga',array(
			'model'=>$model,
		));
	}

	public function actionPendaftarankeluarga()
	{
		$model=new Orangasli;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{
			$model->attributes=$_POST['Orangasli'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->orangasli_id));
		}

		$this->render('pendaftarankeluarga',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Keluarga the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Keluarga::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Keluarga $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='keluarga-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
