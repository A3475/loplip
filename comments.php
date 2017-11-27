<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="panel panel-default">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="panel-heading">
	   <h4><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4>
    </div>
    <div class="panel-body">
    <?php $comments->listComments(); ?>
    </div>
    <li class="list-group-item">
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </li>
	<?php else: ?>
    <div class="panel-heading">
		<h4>暂无评论</h4>
	</div>
    <?php endif; ?>
</div>
<div class="panel panel-default">
<?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
        </div>
        <div class="panel-heading">
    	   <h3 id="response"><?php _e('添加新评论'); ?></h3>
        </div>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<li class="list-group-item">
                <?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
            </li>
            <?php else: ?>
            <li class="list-group-item">
                <label for="author" class="required"><?php _e('称呼'); ?></label>
    			<input type="text" class="form-control" name="author" id="author" value="<?php $this->remember('author'); ?>" required />
    		</li>
            <li class="list-group-item">
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" class="form-control" name="mail" id="mail"  value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            </li>
            <li class="list-group-item">
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" class="form-control" name="url" id="url" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            </li>
            <?php endif; ?>
            <li class="list-group-item">
                <label for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="8" class="form-control" cols="50" name="text" id="textarea" required ><?php $this->remember('text'); ?></textarea>
            </li>
            <div class="panel-body">
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </div>
    	</form>
    </div>
<?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
<?php endif; ?>
</div>
