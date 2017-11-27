<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div style="float: left">
                <h3 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
            </div>
            <div style="float: right">
				<p>
                <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                <?php _e('分类: '); ?><?php $this->category(','); ?>
				</p>
				<p>
				<?php $this->tags(',', true, '没有标签'); ?>
				</p>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="panel-body">
            <?php $this->content(); ?>
        </div>
        <li class="list-group-item">
            <div style="float: left">
                上一篇: <?php $this->thePrev('%s','没有了'); ?>
            </div>
            <div style="float: right">
                下一篇: <?php $this->theNext('%s','没有了'); ?>
            </div>
            <div style="clear: both"></div>
        </li>
    </div>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->
<div class="col-md-4">
    <?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>