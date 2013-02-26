<?php /* @var $this BackendController */ ?>
<?php $this->beginContent('//layouts/backend_template'); ?>
<aside class='left'>
    <?php if (!Yii::app()->user->isGuest) { ?>
    <h1>Разделы сайта:</h1>
    <div class="separator"></div>
    <nav>
        <?php
        $this->widget('application.components.Menu', array(
            'items' => array(
                array('label' => 'Страницы', 'url' => array('/backend/page')),
                array('label' => 'Виды работ', 'url' => array('/backend/jobs')),
                array('label' => 'Каталог', 'url' => array('/backend/catalog')),
            ),
        ));
        ?>
    </nav>
    <nav>
        <?php
        if ($this->menu) {
            $this->beginWidget('zii.widgets.CPortlet', array());?>
            <h1>Операции</h1>
            <? $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu
            ));
            $this->endWidget();
        }
        ?>
    </nav>
    <? }?>
</aside>
<div id='suschnost' class='right'>
    <div id='alert'>
        <?php if (Yii::app()->user->isGuest) { ?>
        <div class='message help'>Авторизуйтесь, чтобы войти в систему.</div>
        <? } ?>
    </div>
    <div id='content'>
        <?php if (isset($this->breadcrumbs)): ?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
            'homeLink' => FALSE,
        )); ?><!-- breadcrumbs -->
        <?php endif?>
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>