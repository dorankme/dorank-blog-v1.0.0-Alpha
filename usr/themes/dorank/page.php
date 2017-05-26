<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="uk-grid uk-flex uk-flex-center">
    <main  id="main" class="uk-width-medium-1-2 uk-panel uk-panel-space" role="main">
            <div class="uk-panel uk-panel-hover uk-panel-space uk-panel-divider">
                <article class="uk-article" itemscope itemtype="http://schema.org/BlogPosting">
                    <div class="uk-article">
                        <h3 class="uk-article-title"><a itemtype="url" href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h3>
                        <p class="uk-article-meta">
                            Author:
                            <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
                            Time:
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
        <?php $this->need('comments.php'); ?>
        <hr class="uk-grid-divider">
    </main>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
