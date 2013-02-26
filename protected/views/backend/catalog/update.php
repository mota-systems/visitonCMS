<?php
/* @var $this CatalogController */
/* @var $model Catalog */

$this->breadcrumbs=array(
	'Каталог'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Редактирование',
);

$this->menu=array(
	array('label'=>'Список элементов', 'url'=>array('admin')),
	array('label'=>'Добавить элемент', 'url'=>array('create')),
	array('label'=>'Посмотреть '.$model->title, 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Редактирование <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>