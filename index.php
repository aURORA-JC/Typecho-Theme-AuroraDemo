<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho Replica Theme 
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
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
				<li><i class="fa fa-archive" aria-hidden="true"></i> <?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><i class="fa fa-comments" aria-hidden="true"></i> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<p><?php $this->fields->postAbout() ?></p>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
