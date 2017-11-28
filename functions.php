<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    $picUrl = new Typecho_Widget_Helper_Form_Element_Text('picUrl', NULL, NULL, _t('Banner图片地址'), _t('在这里填入一个图片 URL 地址, 以在网站Banner显示'));
    $form->addInput($picUrl);
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowSearch' => _t('显示站内搜索'),
    'ShowRecentPosts' => _t('显示最近文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档')),
    array('ShowSearch','ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

