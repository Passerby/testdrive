<?php
/* @var $this SiteController */
/* @var $model SignupForm */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
    'Sign up',
);
?>
<h1>Sign up</h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'signup-form',
    'htmlOptions'=>array(
        'class'=>'form-signup'
    ),
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array(
            'class'=>'form-control',
            'placeholder'=>'Email',
            'required'=>'',
            'autofocus'=>'',
        )); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username',array(
            'class'=>'form-control',
            'placeholder'=>'Username',
            'required'=>'',
        )); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array(
            'class'=>'form-control',
            'placeholder'=>'Password',
            'required'=>'',
        )); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'confirmation'); ?>
        <?php echo $form->passwordField($model,'confirmation',array(
            'class'=>'form-control',
            'placeholder'=>'Confirmation',
            'required'=>'',
        )); ?>
        <?php echo $form->error($model,'confirmation'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit',array(
            'class'=>'btn btn-lg btn-primary btn-block',
        )); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
