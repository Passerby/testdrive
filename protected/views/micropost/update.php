<?php
/* @var $this MicropostController */
/* @var $model Micropost */

$this->breadcrumbs=array(
	'Microposts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Micropost', 'url'=>array('index')),
	array('label'=>'Create Micropost', 'url'=>array('create')),
	array('label'=>'View Micropost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Micropost', 'url'=>array('admin')),
);
?>

<h1>Update Micropost <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
