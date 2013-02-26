<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'jobs-form',
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

    <p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'parent'); ?>
        <?php echo $form->dropDownList($model, 'parent', Jobs::getItemsArray($model->isNewRecord ? NULL : $model->id)); ?>
        <?php echo $form->error($model, 'parent'); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'title'); ?>
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 150)); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>

        <div class="row">
            <?php if ($model->image): ?>
            <p><?php echo CHtml::image($model->uploadPath . '/' . $model->image); ?></p>
            <?php endif; ?>
            <?php echo $form->labelEx($model, 'image'); ?>
            <?php echo $form->fileField($model, 'image'); ?>
            <?php echo $form->error($model, 'image'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'text'); ?>
            <? $this->widget('ImperaviRedactorWidget', array(
            // можно использовать пару имя модели - имя свойства
            'model' => $model,
            'attribute' => 'text',
            // немного опций, см. http://imperavi.com/redactor/docs/
            'options' => array(
                'lang' => 'ru',
//                'toolbar' => FALSE,
//                'iframe' => TRUE,
//                'imageUpload' => '/modules/upload.php',
            ),
        )); ?>
            <!--            --><?php //echo $form->textArea($model, 'text', array('rows' => 6, 'cols' => 50)); ?>
            <?php echo $form->error($model, 'text'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'keywords'); ?>
            <?php echo $form->textArea($model, 'keywords', array('rows' => 6, 'cols' => 50)); ?>
            <?php echo $form->error($model, 'keywords'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'description'); ?>
            <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
    <!-- form -->