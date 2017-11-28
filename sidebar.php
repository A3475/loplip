<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowSearch', $this->options->sidebarBlock)): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="widget-title"><?php _e('站内搜索'); ?></h3>
	</div>
    <div class="panel-body">
		<form method="post" action="">
			<div><input type="text" name="s" class="text" size="32" /> <input type="submit" class="submit" value="搜索" /></div>
		</form>
	</div>
</div>
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
	</div>
	<ul class="list-group">
        <?php $this->widget('Widget_Contents_Post_Recent')
        ->parse('<li class="list-group-item"><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
    </section>
</div>
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
	</div>
	<ul class="list-group">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li class="list-group-item"><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
    </ul>
</div>
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
	</div>
    <div class="panel-body">
		<?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</div>
</div>
<?php endif; ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="widget-title"><?php _e('归档'); ?></h3>
	</div>
        <ul class="list-group">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li class="list-group-item"><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>
</div>
<?php endif; ?>