<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>'{pager}<div class="sorter">{sorter}</div><div class="list">{items}</div>{pager}<span class="summary">{summary}</span>',
    'pagerCssClass'=>'pager_container',
    'pager'=>array(
        'class'=>'CLinkPager',
        'cssFile'=>false,
        'header'=>'',
        'footer'=>'',
        'hiddenPageCssClass'=>'disabled',
        'firstPageLabel'=>'<<',
        'lastPageLabel'=>'>>',
        'nextPageLabel'=>'>',
        'prevPageLabel'=>'<',
        'selectedPageCssClass'=>'active',
        'htmlOptions'=>array(
            'class'=>'pagination',
        ),
    ),
)); ?>

