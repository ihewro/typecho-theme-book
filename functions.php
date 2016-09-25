<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    
    $IndexShow = new Typecho_Widget_Helper_Form_Element_Checkbox('IndexShow', 
    array('ShowArchive' => _t('显示分类归档'),),
    array('ShowArchive'), _t('首页显示'));
    
    $form->addInput($IndexShow->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

