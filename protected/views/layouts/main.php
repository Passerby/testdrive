<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
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

<?php $this->beginContent('/layouts/header'); ?>
<?php $this->endContent();?><!-- header -->

<div class="container" id="page">

    <?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
    }
    ?>
    <?php if(isset($this->breadcrumbs)):?>
    <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>$this->breadcrumbs,));
    ?><!-- breadcrumbs -->
    <?php endif?>

    <?php echo $content; ?>

</div><!-- page -->

<?php $this->beginContent('/layouts/footer'); ?>
<?php $this->endContent();?><!-- footer -->
</body>
</html>
