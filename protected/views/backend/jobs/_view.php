<?php
/* @var $this JobsController */
/* @var $data Jobs */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
    <?php echo CHtml::encode($data->title); ?>
    <br/>

    <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
    <?php echo CHtml::encode($data->image); ?>
    <br/>

</div>