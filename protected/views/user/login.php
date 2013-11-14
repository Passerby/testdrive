<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Sign in';
$this->breadcrumbs=array(
    'Sign in',
);
foreach(Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="alert alert-' . $key . '">' . $message . "</div>";
}
?>
<h1>Sign in</h1>

<div class="form">
<?php

    $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'htmlOptions'=>array(
            'class'=>'form-signin'
        ),
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php
            echo $form->textField($model,'username',array(
                'class'=>'form-control',
                'placeholder'=>'Username',
                'required'=>'',
                'autofocus'=>''
        )); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array(
                'class'=>'form-control',
                'placeholder'=>'Password',
                'required'=>''
        )); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->error($model,'rememberMe'); ?>
    </div>
    <div class="row buttons">
    <?php
        echo CHtml::submitButton('Sign in',array(
            'class'=>'btn btn-lg btn-primary btn-block',
        )); ?>
    </div>
    <p>New User? <a href="/testdrive/index.php/user/signup">Sign up now!</a></p>
<?php $this->endWidget(); ?>

</div><!-- form -->
