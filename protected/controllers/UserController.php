<?php

class UserController extends Controller
{
    public function actions()
    {
        return array(
            'signup'=>'application.controllers.user.SignupAction',
        );
    }

	/**
	 * Displays the login page
	 */
	public function actionSignin()
	{
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
     * Displays the Sign up page
     */
    public function actionSignup()
    {
        $this->render('signup');
    }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionSignout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
