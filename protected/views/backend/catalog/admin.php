<?php
/* @var $this CatalogController */
/* @var $model Catalog */

$this->breadcrumbs=array(
	'Каталог'=>array('index'),
	'Список элементов',
);

$this->menu=array(
	array('label'=>'Добавить элемент', 'url'=>array('create')),
); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'catalog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'itemsCssClass'=>'default',
    'enablePagination' => TRUE,
    'template'=>'{items} {pager}',
    'columns'=>array(
		'title',
		'text',
		'keywords',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
