<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <?php Yii::app()->clientScript->registerCoreScript('jquery');?>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet">
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>

</head>

<body>

<div class="container" id="page">
    <?php $this->beginContent('/layouts/header'); ?>
    <?php $this->endContent();?>

    <?php if(isset($this->breadcrumbs)):?>
    <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>$this->breadcrumbs,));
    ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

</div><!-- page -->
<?php $this->beginContent('/layouts/footer'); ?>
<?php $this->endContent();?>
</body>
</html>
