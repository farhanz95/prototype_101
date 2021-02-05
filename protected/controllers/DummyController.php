<?php

class DummyController extends Controller
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
		$model=new Dummy;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dummy']))
		{
			$model->attributes=$_POST['Dummy'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Dummy']))
		{
			$model->attributes=$_POST['Dummy'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$model=new Dummy('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dummy']))
			$model->attributes=$_GET['Dummy'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dummy('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dummy']))
			$model->attributes=$_GET['Dummy'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dummy the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dummy::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Dummy $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dummy-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function actionGetprogramme(){
		$negeri_id = $_POST['Dummy']['value1'];
		$district = ListDaerah::model()->findAllByAttributes(array('list_state_id'=>$negeri_id));
		$data = CHtml::listData($district, 'list_district_id', 'list_district_name');
		if(!empty($data)){
			foreach($data as $value=>$name){
				echo CHtml::tag('option', array('value'=>$value), CHtml::encode($name), true);
			}
		}else{
			echo CHtml::tag('option', array('value'=>''), CHtml::encode('Select District'), true);
		}
	}

}
