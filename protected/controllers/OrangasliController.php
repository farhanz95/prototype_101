<?php

class OrangasliController extends Controller
{
	
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionSuccess($id)
	{
		$this->render('success',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionSemakan($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{

			$model->attributes=$_POST['Orangasli'];
			$model->status_orangasli_id = 2;
			if($model->save())	
				$this->redirect(array('view','id'=>$model->orangasli_id));
		}

		$this->render('semakan',array(
			'model'=>$model,
		));
	}

	public function actionStep1()
	{
		$model=new Orangasli;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{
			$keluarga = $_POST['Orangasli']['kampung'];
			$model->attributes=$_POST['Orangasli'];
			$model->kampung = $keluarga;

			if($model->save())
				$this->redirect(array('create','id'=>$model->orangasli_id));
		}

		$this->render('step1',array(
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

	public function actionPendaftaranindividu()
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

		$this->render('pendaftaranindividu',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionPilihdaftar()
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

		$this->render('pilihdaftar',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionCreate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{
			$model->attributes=$_POST['Orangasli'];
			$model->status_orangasli_id = 1;

			$datebirth = date_create($_POST['Orangasli']['dob']);
			
			$yearbirth = date_format($datebirth,"Y");
			$yearbirth = substr($yearbirth, -2);

			$monthbirth = date_format($datebirth,"m");

			$daybirth = date_format($datebirth,"d");

		 	if($_POST['Orangasli']['jantina'] == "Lelaki")
		 	{
		 		$sex = 7;
		 	}
		 	else
		 	{
		 		$sex = 4;
		 	}

		 	$ic = $yearbirth . $monthbirth . $daybirth . "04419" . $sex; 

			$model->ic = $ic;
			if($model->save())
				$this->redirect(array('success','id'=>$model->orangasli_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{
			$model->attributes=$_POST['Orangasli'];
			$model->status_orangasli_id = 1;
			$model->ic = 971103044197;
			$model->attributes=$_POST['Orangasli'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionTambahdata($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{
			$model->attributes=$_POST['Orangasli'];
            $images=CUploadedFile::getInstance($model,'nama_gambar');

            $model->email = $_POST['Orangasli']['email'];
            $model->telefon = $_POST['Orangasli']['telefon'];
            $model->alamat = $_POST['Orangasli']['alamat'];
            $model->pendapatan = $_POST['Orangasli']['pendapatan'];
            $model->pekerjaan = $_POST['Orangasli']['pekerjaan'];

            if($images == "")
            {
            	if($model->save())
				{
					$this->redirect(array('semakan','id'=>$model->orangasli_id));
				}
            }

            else
            {
	            $model->saiz_gambar=$images->size;
	            $model->nama_gambar=$images->name;
				if($model->save())
				{
					$images->saveAs('images/upload/'.$images->name);
					$this->redirect(array('semakan','id'=>$model->orangasli_id));
				}
			}
		}

		$this->render('tambahdata',array(
			'model'=>$model,
		));
	}

	public function actionKemaskinidatatambahan($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orangasli']))
		{
			$model->attributes=$_POST['Orangasli'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('kemaskinidatatambahan',array(
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
		$model=new Orangasli('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Orangasli']))
			$model->attributes=$_GET['Orangasli'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Orangasli('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Orangasli']))
			$model->attributes=$_GET['Orangasli'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Orangasli the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Orangasli::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Orangasli $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='orangasli-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionPrint()
	{
		$this->layout='//layouts/template_cert';
		$this->render('print');
	}

	public function actionGetdistrict(){
		$negeri_id = $_POST['Orangasli']['negeri'];
		$district = ListDaerah::model()->findAllByAttributes(array('list_state_id'=>$negeri_id));
		$data = CHtml::listData($district, 'list_district_id', 'list_district_name');
		if(!empty($data)){
			foreach($data as $value=>$name){
				echo CHtml::tag('option', array('value'=>$value), CHtml::encode($name), true);
			}
		}else{
			echo CHtml::tag('option', array('value'=>''), CHtml::encode('--Pilih Daerah--'), true);
		}
	}

 
}
