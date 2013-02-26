<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>

    <title>Mota-systems: electronic part of your business.</title>
    <link type='text/css' rel='stylesheet' media='all' href='/template/css/reset-min.css'/>

    <link rel="stylesheet" href="/js/wysiwyg/jquery.wysiwyg.css" type="text/css"/>
    <link rel='stylesheet/less' type='text/css' href='/template/css/admin.template.less'/>

    <script src='/js/less-1.3.0.min.js' type='text/javascript'></script>
<!--    <script src='/template/js/core.admin.template.js' type='text/javascript'></script>-->
<!--    <script type="text/javascript" src="/js/history-2.0.3.min.js?redirect=false"></script>-->
    <link rel='stylesheet' type='text/css' href='/js/fancybox/jquery.fancybox-1.3.4.css' media='screen'/>
<!--    <script type="text/javascript" src="/template/js/wysiwyg/jquery.wysiwyg.js"></script>-->
<!--    <script type="text/javascript" src="/template/js/wysiwyg/controls/wysiwyg.image.js"></script>-->
<!--    <script type="text/javascript" src="/template/js/wysiwyg/controls/wysiwyg.link.js"></script>-->
<!--    <script type="text/javascript" src="/template/js/wysiwyg/controls/wysiwyg.table.js"></script>-->

    <!--[if IE]>
    <script type='text/javascript' src='media/js/supersleight.js'></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link type='text/css' rel='stylesheet' media='all' href='/css/i_hate_ie.css'/>
    <![endif]-->
    <link rel='shortcut icon' href='/images/favicon.png'/>
</head>
<body>
<header>
    <a href='/'>
        <hgroup class='left'>
            <h1>Mota</h1>

            <h2>CMS</h2>
        </hgroup>
    </a>
    <?php if (!Yii::app()->user->isGuest) { ?>
    <nav class="left">
        <a href="/backend/logout">Выйти</a>
        <a href="<?=Yii::app()->homeUrl?>" target='_blank' title='Откроется в новом окне'>Открыть сайт</a>
        <a href="/backend/profile">Редактировать профиль</a>
    </nav>
    <? } ?>
    <div class='clear'></div>
</header>
<div id='wrap'>
   <?=$content?>
    <div class='clear'></div>
</div>
<div id='preload'>
    <img src='/images/preload.gif' alt='Loading, please, wait.'/>
</div>
</body>
</html>