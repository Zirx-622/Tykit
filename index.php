<?php 
/**
 * 欢迎使用Tykit框架！
 * 本框架使用TTDF框架二次开发，原作者：<a href="https://github.com/ShuShuicu/Typecho-Theme-Development-Framework/">鼠子(Tomoriゞ)、Sualiu</a>
 * 使用说明 / 开发文档请查看README.md；
 * @package Tykit开发框架
 * @author 刺猬不会跑
 * @version 1.2.1
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
require_once('Config/Get.php');
?>

<?php 
// 引入header
Get::Need('Common/header.php');
?>

<!-- 调用默认内容 开发前请删除 Get::HelloWorld(); -->
<?php Get::HelloWorld(); ?>

<?php 
// 引入footer
Get::Need('Common/footer.php'); 
?>