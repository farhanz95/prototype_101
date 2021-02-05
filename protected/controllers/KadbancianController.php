<?php

class KadbancianController extends Controller
{
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


	public function actionLaporanbancian()
	{
		$this->render('laporanbancian');
	}

	public function actionSoalan()
	{
		$this->render('soalan');
	}

	public function actionFormsoalan()
	{
		$this->render('formsoalan');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kadbancian;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kadbancian']))
		{
			$model->attributes=$_POST['Kadbancian'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->kadbancian_id));
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

		if(isset($_POST['Kadbancian']))
		{
			$model->attributes=$_POST['Kadbancian'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->kadbancian_id));
		}

		$this->render('update',array(
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
		$model=new Kadbancian('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kadbancian']))
			$model->attributes=$_GET['Kadbancian'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kadbancian('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kadbancian']))
			$model->attributes=$_GET['Kadbancian'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kadbancian the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kadbancian::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kadbancian $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kadbancian-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
