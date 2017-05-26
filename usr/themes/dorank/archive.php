<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="uk-grid uk-flex uk-flex-center">
    <main  id="main" class="uk-width-medium-1-2 uk-panel uk-panel-space" role="main">
        <h3 class="uk-article-title"><?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
            <div class="uk-panel uk-panel-hover uk-panel-space uk-panel-divider">
                <article class="uk-article" itemscope itemtype="http://schema.org/BlogPosting">
                    <div class="uk-article">
                        <h2 class="uk-article-title"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                        <p class="uk-article-meta">
                            <?php _e('Author: '); ?>
                            <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
                            <?php _e('Time: '); ?>
                            <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
                            <?php _e('Category: '); ?><?php $this->category(','); ?>
                            <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                        </p>
                        <p class="uk-article-lead">
                            <?php $this->content('- 阅读剩余部分 -'); ?>
                        </p>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </main>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
