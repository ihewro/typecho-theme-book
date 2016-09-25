<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
	<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/zoom.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/solarized_dark.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/jquery.mCustomScrollbar.css'); ?>">
	<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
	<link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">


    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
</head>
<body>
    
