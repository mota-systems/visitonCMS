<?php
/* @var $this CatalogController */
/* @var $data Catalog */
?>

<p><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id' => $data->id)); ?></p>
