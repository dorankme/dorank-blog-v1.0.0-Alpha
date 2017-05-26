<!DOCTYPE html>
<html class="no-js" lang="zh">
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        <?php
        $this->archiveTitle(
            array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ),'','-');
        ?>
        <?php $this->options->title(); ?>
    </title>

    <link rel="stylesheet" href="https://cdn.staticfile.org/normalize/6.0.0/normalize.min.css">
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/uikit.almost-flat.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/components/autocomplete.almost-flat.min.css'); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/components/search.almost-flat.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/dorank.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/share.min.css'); ?>">

    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body class="dorank-background">
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<header role="banner">
    <div class="uk-flex uk-flex-center uk-margin-top">
        <div class="uk-width-small-8-10">
            <a class="uk-navbar-brand uk-hidden-medium" href="<?php $this->options->siteUrl(); ?>">
                <?php $this->options->title() ?>
            </a>
            <nav class="uk-hidden-small" role="navigation">
                <ul class="uk-navbar-nav">
                    <li>
                        <a class="" href="<?php $this->options->siteUrl(); ?>" title="<?php _e('HOME'); ?>"><?php _e('HOME'); ?></a>
                    </li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                        <li class="uk-hover"><a name="navpage"<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>
            <a href="#sider-nav" class="uk-navbar-toggle uk-visible-small uk-float-right" data-uk-offcanvas></a>
        </div>
        <div class="uk-width-small-3-10 uk-hidden-medium uk-hidden-small">
            <div class="uk-navbar-content">
                <form class="uk-search" method="post" action="./" role="search">
                    <input name="s" class="uk-search-field" type="search" placeholder="<?php _e('输入搜索关键字'); ?>" />
                </form>
            </div>
        </div>
    </div>
    <div id="sider-nav" class="uk-offcanvas">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
            <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
                <li class="uk-hover">
                    <a class="" href="<?php $this->options->siteUrl(); ?>" title="<?php _e('HOME'); ?>"><?php _e('HOME'); ?></a>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                    <li class="uk-hover"><a name="navpage"<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    </li>
                <?php endwhile; ?>

                <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
                    <?php if($this->user->hasLogin()): ?>
                        <li>
                            <a class="uk-hover" href="<?php $this->options->adminUrl(); ?>">
                                <?php $this->user->screenName(); ?>-<?php _e('Admin'); ?>
                            </a>
                        </li>
                        <li>
                            <a class="uk-hover" href="<?php $this->options->logoutUrl(); ?>"><?php _e('Logout'); ?></a>
                        </li>
                    <?php else: ?>
                        <li><a class="uk-hover" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('Login'); ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>




    
    
