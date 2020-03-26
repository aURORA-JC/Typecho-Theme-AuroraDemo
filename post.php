<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user" aria-hidden="true"></i> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><i class="fa fa-archive" aria-hidden="true"></i> <?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
			<?php if($this->fields->postImg && $this->fields->postImg=!''):
					echo ("<img class='post-img' src='".$this->fields->postImg."'>"); endif; ?>
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><i class="fa fa-tags" aria-hidden="true"></i> <?php $this->tags(', ', true, '暂无标签'); ?></p>
    </article>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
