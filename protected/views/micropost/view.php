<?php
/* @var $this MicropostController */
/* @var $model Micropost */

$this->breadcrumbs=array(
	'Microposts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Micropost', 'url'=>array('index')),
	array('label'=>'Create Micropost', 'url'=>array('create')),
	array('label'=>'Update Micropost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Micropost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Micropost', 'url'=>array('admin')),
);
?>

<h1>View Micropost #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'content',
	),
)); ?>
