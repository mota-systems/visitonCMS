<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Страницы'=>array('admin'),
	'Список',
);

$this->menu=array(
	array('label'=>"Добавить элемент", 'url'=>array('create')),
);

?>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
    'itemsCssClass'=>'default',
	'filter'=>$model,
    'template'=>'{items} {pager}',
	'columns'=>array(
		'link',
		'title',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
