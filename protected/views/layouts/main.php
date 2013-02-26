<?php /* @var $this SiteController */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->
    <? if ($this->metaKeywords) { ?>
    <meta name='keywords' content="<?=$this->metaKeywrods?>"/>
    <? }?>

    <? if ($this->metaDescription) { ?>
    <meta name='keywords' content="<?=$this->metaDescription?>"/>
    <? }?>

    <!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>

    <link type='text/css' rel='stylesheet' media='all' href='/css/reset-min.css'/>
    <link rel='stylesheet/less' type='text/css' href='/css/main.less'/>

    <script src='/js/less-1.3.0.min.js' type='text/javascript'></script>
    <script src='/js/jquery-1.8.0.min.js' type='text/javascript'></script>

</head>

<body>

<div class='container' id="page">
    <header>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="938" height="330" id="flash-object">
            <param name="movie" value="/swf/container.swf">
            <param name="quality" value="medium">
            <param name="scale" value="default">
            <param name="wmode" value="transparent">
            <param name="flashvars"
                   value="color1=0xFFFFFF&amp;alpha1=.40&amp;framerate1=31&amp;loop=true&amp;wmode=transparent&amp;clip=/swf/flash.swf&amp;radius=10&amp;clipx=-190&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=1320&amp;cliph=330&amp;width=938&amp;height=330&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true">
            <param name="swfliveconnect" value="true">
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="/swf/container.swf" width="938" height="330">
                <param name="quality" value="medium">
                <param name="scale" value="default">
                <param name="wmode" value="transparent">
                <param name="flashvars"
                       value="color1=0xFFFFFF&amp;alpha1=.40&amp;framerate1=31&amp;loop=true&amp;wmode=transparent&amp;clip=/swf/flash.swf&amp;radius=10&amp;clipx=-190&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=1320&amp;cliph=330&amp;width=938&amp;height=330&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true">
                <param name="swfliveconnect" value="true">
                <!--<![endif]-->
                <div class="flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img
                        src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"
                        alt="Get Adobe Flash player"></a></div>
                <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object>
        <img class='header-bg' src='/images/bg/header.jpg' alt=''/>
    </header>
    <!-- header -->
    <nav class='nav'>
        <?php
        $this->widget('application.components.Menu', array(
            'items' => $this->getMenuItems()
        ));
        ?>
        <div class='clear'></div>
    </nav>
    <!-- mainmenu -->
    <?php if (isset($this->breadcrumbs)): ?>
        <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        ));
        ?><!-- breadcrumbs -->
    <?php endif ?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>
