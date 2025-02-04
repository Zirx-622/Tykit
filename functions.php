<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
require_once 'Config/Config.php';
function themeConfig($form)
{
    $form->addInput(new \Typecho\Widget\Helper\Form\Element\Text(
        'subTitle',
        null,
        null,
        _t('副标题'),
        _t('在这里填入一个文字, 以在网站标题后加上一个副标题')
    ));

    $form->addInput(new \Typecho\Widget\Helper\Form\Element\Text(
        'faviconUrl',
        null,
        '' . THEME_URL . '/Assets/images/Nijika.svg',
        _t('Favicon'),
        _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个图标')
    ));
}
