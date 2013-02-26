<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs = array(
    'Виды работ' => array('admin'),
    $model->title,
);

$this->menu = array(
    array('label' => 'Создать элемент', 'url' => array('create')),
    array('label' => 'Редактировать '.$model->title, 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Удалить '.$model->title, 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Список', 'url' => array('admin')),
);
?>

<h1>View Jobs #<?php echo $model->id; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'parent',
        'title',
        $model->image ? array('name' => 'image',
            'type' => 'image',
            'value' => $model->uploadPath . '/' . $model->image,)
            :
            'image',

        'text',
        'keywords',
        'description',
    ),
)); ?>
