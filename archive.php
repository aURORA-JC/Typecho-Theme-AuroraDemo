<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-8" id="main" role="main">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('%s 主题的文章'),
            'search'    =>  _t('搜索 %s 的结果'),
            'tag'       =>  _t('%s 标签的文章'),
            'author'    =>  _t('%s 署名的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
				<a itemprop="url" href="<?php $this->permalink() ?>">
					<?php if($this->fields->postImg && $this->fields->postImg=!''):
							echo ("<img class='post-img' src='".$this->fields->postImg."'>"); endif; ?>
					<h2 class="post-title" itemprop="name headline"><?php $this->title() ?></h2>
				</a>
    			<ul class="post-meta">
    				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user" aria-hidden="true"></i> <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
    				<li><i class="fa fa-calendar" aria-hidden="true"></i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
    				<li><i class="fa fa-archive" aria-hidden="true"></i> <?php _e('分类: '); ?><?php $this->category(','); ?></li>
                    <li itemprop="interactionCount"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
    			</ul>
                <div class="post-content" itemprop="articleBody">
        			<p><?php $this->fields->postAbout() ?></p>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
