<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'page-form',
        'enableAjaxValidation' => FALSE,
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <table class='edit'>
        <tr>
            <td><?php echo $form->labelEx($model, 'link'); ?></td>
            <td>
                <?php echo $form->textField($model, 'link', array('size' => 60, 'maxlength' => 150)); ?>
                <div class='clear'></div>
                <?php echo $form->error($model, 'link'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model, 'title'); ?></td>
            <td>
                <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 150)); ?>
                <div class='clear'></div>
                <?php echo $form->error($model, 'title'); ?>
            </td>
        </tr>
        <tr>
            <td colspan='2'><?php echo $form->labelEx($model, 'text'); ?></td>
        </tr>
        <tr>
            <td colspan='2'>
                <?
                $this->widget('ImperaviRedactorWidget', array(
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
                ));
                ?>
                <div class='clear'></div>
                <?php echo $form->error($model, 'text'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model, 'keywords'); ?></td>
            <td>
                <?php echo $form->textField($model, 'keywords', array('size' => 60, 'maxlength' => 150)); ?>
                <div class='clear'></div>
                <?php echo $form->error($model, 'keywords'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model, 'description'); ?></td>
            <td>
                <?php echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 150)); ?>
                <div class='clear'></div>
                <?php echo $form->error($model, 'description'); ?>
            </td>
        </tr>
    </table>
    <nav class='button_set'>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'button')); ?>
    </nav>

    <?php $this->endWidget(); ?>

</div><!-- form -->