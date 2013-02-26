<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs=array(
	'Виды работ'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список работ', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>