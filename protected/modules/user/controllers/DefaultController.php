<?php

class DefaultController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionViewprofile(){
		$this->render('viewprofile',array(
			'model'=>$this->loadModel(Yii::app()->user->id),
		));
	}

	public function actionChangepassword(){
		// $this->actionUpdate(Yii::app()->user->id);
		$model=$this->loadModel(Yii::app()->user->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];

			if ($model->password || $model->password_repeat)
				$model->scenario = 'password_set';

			if($model->save()){
				$this->redirect(array('viewprofile'));
			}
		}

		$this->render('changepassword',array(
			'user'=>$model,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$user=new User('password_set');
		$update = false;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$user->attributes=$_POST['User'];
			if($user->save()){
		        $auth = Yii::app()->authManager;
		        $auth->assign($_POST['User']['role'], $user->id, '', '');
				$this->redirect(array('view','id'=>$user->id));
			}
		}

		$this->render('create',array(
			'user'=>$user,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
			'update'=>$update,
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
		$update = true;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];

			if ($model->password || $model->password_repeat)
				$model->scenario = 'password_set';

			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
			'update'=>$update,
		));
	}

	public function actionEditprofile(){
		// $this->actionUpdate(Yii::app()->user->id);
		$model=$this->loadModel(Yii::app()->user->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];

			if ($model->password || $model->password_repeat)
				$model->scenario = 'password_set';

			if($model->save()){
				$this->redirect(array('viewprofile'));
			}
		}

		$this->render('editprofile',array(
			'model'=>$model,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		// $this->loadModel($id)->delete();
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		// $model=User::model()->findByPk($id);
		$model=User::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionAssignRole($id){
        // request must be made via ajax
        if(isset($_GET['ajax']) && isset($_GET['role'])) {
        	$model=$this->loadModel($id);
        	$auth = Yii::app()->authManager;
        	$auth->assign($_GET['role'], $id, '', '');
			$role=Assignments::model()->find("itemname='" . $_GET['role'] . "'");
			$this->renderPartial('includes/role_li', array('user'=>$model, 'assignment'=>$role,), false, true);
		}else
			throw new CHttpException(400,'Invalid request.');
	}

	public function actionRevokeRole($id){
		// request must be made via ajax
		if(isset($_GET['ajax'])) {
			$auth = Yii::app()->authManager;
			$auth->revoke($_GET['role_name'], $id);
		}else
			throw new CHttpException(400,'Invalid request.');
	}

	public function actionReloadRoles($id){
		if(isset($_GET['ajax'])) {
			$model=$this->loadModel($id);
			$update = true;
			$this->renderPartial('includes/role_select', array('user'=>$model, 'update'=>$update), false, true);
		}else
			throw new CHttpException(400,'Invalid request.');
	}
}
