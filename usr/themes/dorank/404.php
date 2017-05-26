<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="uk-grid uk-flex uk-flex-center">
    <main  id="main" class="uk-width-medium-1-2 uk-panel uk-panel-space" role="main">
            <div class="uk-panel uk-panel-hover uk-panel-space uk-panel-divider">
                <div class="error-page">
                    <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
                    <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
                </div>
            </div>
        <hr class="uk-grid-divider">
    </main>
<?php $this->need('footer.php'); ?>
