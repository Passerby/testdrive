<?php
/* @var $this MicropostController */
/* @var $model Micropost */

$this->breadcrumbs=array(
	'Microposts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Micropost', 'url'=>array('index')),
	array('label'=>'Manage Micropost', 'url'=>array('admin')),
);
?>

<h1>Create Micropost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
