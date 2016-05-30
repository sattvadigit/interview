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
				$this->render('error', $error);
		}
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionPlay()
	{
		$this->render('play');
	}

	public function actionAjaxSaveResult()
	{
		if (isset($_POST['name']) && isset($_POST['time']))
		{
			$result = new Results();
			$result->name = $_POST['name'];
			$result->time = $_POST['time'];
			$result->save();

			//Results::saveResult($_POST['name'],$_POST['time'] );
			$this->renderPartial('_resultsblock');
			$_SESSION['game'] = null;
		}
	}
}
