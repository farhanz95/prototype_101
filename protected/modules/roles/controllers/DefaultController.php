<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$authitem = new AuthItem('roles_search');

		$authitem->unsetAttributes();  // clear any default values
		if(isset($_GET['AuthItem']))
			$authitem->attributes=$_GET['AuthItem'];

		$this->render('index', array('authitem'=>$authitem));
	}

	public function actionCreateroles()
	{
		$authitem=new AuthItem;
		$itemchildren=new ItemChildren;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AuthItem']))
		{
			$authitem->attributes = $_POST['AuthItem'];
			if($authitem->save()){
				$itemchildren->child = 'Dashboard';
				$itemchildren->parent = $authitem->name;
				if($itemchildren->save()){
					$this->redirect(array('updateroles','id'=>$authitem->name));
				}
			}
		}

		$this->render('createroles',array(
			'authitem'=>$authitem
		));
	}

	public function actionUpdateroles($id){
		$authitem = AuthItem::model()->findByAttributes(array('name'=>$id));

		$itemchildren = new ItemChildren;
		$itemchildren->unsetAttributes();
		if(isset($_GET['ItemChildren']))
			$itemchildren->attributes=$_GET['ItemChildren'];

		$this->render('updateroles', array('authitem'=>$authitem, 'itemchildren'=>$itemchildren));
	}

	public function actionDeleteroles($id){
		$authitem = AuthItem::model()->findByAttributes(array('name'=>$id));
		$authitem->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	public function actionDeletetask($id){
		$itemchildren = ItemChildren::model()->findByAttributes(array('parent'=>$_GET['role'], 'child'=>$id));
		$itemchildren->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	public function actionAssignTask($id){
        // request must be made via ajax
        if(isset($_GET['ajax']) && isset($_GET['role'])) {
			$childArray = $_GET['role'];

			foreach($childArray as $child){
				$itemchildren = new ItemChildren;
				$itemchildren->parent = $id;
				$itemchildren->child = $child;
				$itemchildren->save();
			}
		}else
			throw new CHttpException(400,'Invalid request.');
	}

	public function actionReloadTask($id){
		if(isset($_GET['ajax'])) {
			$authitem = AuthItem::model()->findByAttributes(array('name'=>$id));

			$itemchildren = new ItemChildren;
			$itemchildren->unsetAttributes();

			$this->renderPartial('includes/task_select', array('authitem'=>$authitem, 'itemchildren'=>$itemchildren), false, true);
		}else
			throw new CHttpException(400,'Invalid request.');
	}
}