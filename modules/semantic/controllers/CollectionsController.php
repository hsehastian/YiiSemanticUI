<?php

class CollectionsController extends Controller
{
	public $layout = 'main';

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionBreadcrumb()
	{
		$this->render('breadcrumb');
	}

	public function actionForm()
	{
		$model =new Form;
		$settings =new Settings;
		
		if(isset($_POST['Form'])){
			$model->attributes=$_POST['Form'];
			$model->validate();
		}

		$this->render('form', array(
			'model'=>$model,
			'settings'=>$settings
		));
	}
}
