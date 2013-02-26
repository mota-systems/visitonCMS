<?php
/* @var $this JobsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobs',
);

?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
//    'itemsCssClass'=>'Класс_которым_будет_помечен каждый элемент'
    'template'=>"{items}",
)); ?>
