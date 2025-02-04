<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

// 配置默认Cravatar
$avatarCdn = 'https://cravatar.cn/avatar/';
// 定义常量
define('__TYPECHO_GRAVATAR_PREFIX__', $avatarCdn);

// 设置框架版本
define('__FRAMEWORK_VER__', '1.2.2');
// 设置框架名称
define('__Tykit__', 'Tykit');

require_once 'Get.php';
require_once 'Functions.php';
require_once 'Json.php';
require_once 'Tools.php';