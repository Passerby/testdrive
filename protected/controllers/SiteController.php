<?php
/**
 * .
 *
 * PHP version 5
 *
 * @category Default
 * @package  Default
 * @author   Luke Du <lukedu@augmentum.con.cn>
 * @license  http://None None
 * @version  GIT:master
 * @link     https://github.com/Passerby/testdrive
 */

/**
 * SiteController class
 *
 * Defalut Site Controller
 *
 * @category Default
 * @package  Default
 * @author   Luke Du <lukedu@augmentum.con.cn>
 * @license  http://None None
 * @link     https://github.com/Passerby/testdrive
 */
class SiteController extends Controller
{

    /**
     * config actions function
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored
            // under 'protected/views/site/pages'.
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }

    /**
     * actionIndex function
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * actoinError function
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    public function actionError()
    {
        if ($error=Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }

    /**
     * actionContact function
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    public function actionContact()
    {
        $model=new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes=$_POST['ContactForm'];
            if ($model->validate()) {
                $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
                $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
                $headers="From: $name <{$model->email}>\r\n".
                    "Reply-To: {$model->email}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-Type: text/plain; charset=UTF-8";

                mail(
                    Yii::app()->params['adminEmail'],
                    $subject,
                    $model->body,
                    $headers
                );
                Yii::app()->user->setFlash(
                    'contact',
                    'Thank you for contacting us.'.
                    'We will respond to you as soon as possible.'
                );
                $this->refresh();
            }
        }
        $this->render('contact', array('model'=>$model));
    }

    /**
     * actionLogin function
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/

    public function actionLogin()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax']==='login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array('model'=>$model));
    }


    /**
     * actionSignup
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    public function actionSignup()
    {
        $model=new SignupForm;
        $this->performAjaxValidation($model);

        if (isset($_POST['SignupForm'])) {
            $model->attributes=$_POST['SignupForm'];
            $user=new User;
            $user->username=$model->username;
            $user->email=$model->email;
            $user->password=md5($model->password);
            if ($user->validate('email') && $user->save()) {
                Yii::app()->authManager->assign("CommonUser", $user->id, '', '');
                Yii::app()->user->setFlash('success', "Sign up success.");
                $this->redirect('login');
            } else {
                Yii::app()->user->setFlash('danger', "Email is already exists");
            }

        }

        $this->render('signup', array('model'=>$model));
    }

    /**
     * signout
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    public function actionSignout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * performAjaxValidation $model is .
     *
     * @param Form $model it's a get signup-form
     *
     * @return void
     * @author Luke Du <lukedu@augmentum.con.cn>
     **/
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax']==='signup-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}

