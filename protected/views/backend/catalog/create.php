<?php
/* @var $this CatalogController */
/* @var $model Catalog */

$this->breadcrumbs=array(
	'Каталог'=>array('admin'),
	'Добавить элемент',
);

$this->menu=array(
	array('label'=>'Список элементов', 'url'=>array('admin')),
);
?>

<h1>Добавить элемент</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>