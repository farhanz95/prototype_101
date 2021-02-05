<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->renderPartial('error', $error);
		}
	}

	public function actionRegistersuccess()
	{
		$this->layout='//layouts/template_login';
	
		$this->render('registersuccess');
	}

	public function actionCannotpass()
	{
		$this->layout='//layouts/template_login';
	
		$this->render('cannotpass');
	}


	public function actionResetpassword()
	{
		$this->layout='//layouts/template_login';
	
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

		$this->render('resetpassword',array(
			'user'=>$user,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
			'update'=>$update,
		));
	}

	public function actionRegister()
	{
		$this->layout='//layouts/template_login';

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

		$this->render('register',array(
			'user'=>$user,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
			'update'=>$update,
		));
	}

	public function actionForgotpassword()
	{
		$this->layout='//layouts/template_login';

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

		$this->render('forgotpassword',array(
			'user'=>$user,
			'user_assignments'=>Yii::app()->user->checkAccess('User Assignments'),
			'update'=>$update,
		));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout='//layouts/template_login';

		if (!Yii::app()->user->isGuest)
			$this->redirect(Yii::app()->createUrl('dashboard/default/index'));

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect('login');
		//$this->redirect(Yii::app()->homeUrl);
	}
}