<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs = array(
    'Виды работ',
    'Список'=>array('admin'),
);

$this->menu = array(
    array('label' => 'Добавить элемент', 'url' => array('create')),
);?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'jobs-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'itemsCssClass'=>'default',
    'template'=>'{items} {pager}',
    'enablePagination' => TRUE,
    'columns' => array(
        array(
            'name' => 'parent',
            'filter' => Jobs::getItemsArray(),
            'type' => 'raw',
            'value' => 'Jobs::encodeParent($data->parent)',
        ),
        'title',
        'text',
        'keywords',
        /*
        'description',
        */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
)); ?>
