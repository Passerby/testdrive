<?php
/* @var $this MicropostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Microposts',
);

$this->menu=array(
    array('label'=>'Create Micropost', 'url'=>array('create')),
    array('label'=>'Manage Micropost', 'url'=>array('admin')),
);
?>
<h1>Microposts</h1>
<?php $this->renderPartial('_form', array('model'=>$createModel)); ?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>

