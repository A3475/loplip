<?php
/**
 * z3475所制
 * 
 * @package loplip 
 * @author z3475
 * @version 0.1
 * @link http://47.104.0.124/develop
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="col-md-8">
<?php while($this->next()): ?>
	<div class="panel panel-default" itemscope itemtype="http://schema.org/BlogPosting">
		<!-- Default panel contents -->
		<div class="panel-heading"><h4><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h4></div>
		<div class="panel-body">
		<p><?php $this->excerpt(200); ?></p>
		</div>
		<!-- List group -->
		<ul class="list-group">
		<li class="list-group-item">
			<div style="float: left">
				<?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
				<?php _e('分类: '); ?><?php $this->category(','); ?>
			</div>
			<div style="float: right">
				<a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
				<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
				<?php $this->commentsNum('评论', '1', '%d'); ?>
				</a>
			</div>
			<div style="clear: both;"></div>
		</li>
		</ul>
	</div>
<?php endwhile; ?>
	<nav aria-label="Page navigation">
	<div class="text-center">
	<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;',2,'...',
	array('wrapTag' => 'ul', 
	'wrapClass' => 'pagination',
	'itemTag' => 'li', 
	'prevClass' => '',
	'nextClass' => '',
	'currentClass' => 'disabled',
	)); ?>
	</div>
	</nav>
</div>
<div class="col-md-4">
		<?php $this->need('sidebar.php'); ?>
	</div>
</div>
<?php $this->need('footer.php'); ?>