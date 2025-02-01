<?php
/**
 * 欢迎使用Tykit框架！
 * 使用说明 / 开发文档请查看README.md；
 * @package Tykit开发框架
 * @author Zirx_
 * @version 1.0.0
 */
    require_once 'Get.php';
    require_once 'Config.php';
?>
<script src="https://cdn.tailwindcss.com"></script>
<style>
    @font-face {
        font-family: "阿里巴巴普惠体Medium";
        font-weight: 500;
        src: url("//at.alicdn.com/wf/webfont/4kGMUim8pGL1/6AyNDAgwHfcJ.woff2") format("woff2"),
        url("//at.alicdn.com/wf/webfont/4kGMUim8pGL1/bLzKEYAAYexf.woff") format("woff");
        font-display: swap;
    }
    *,body,a,h1,h3,span{
        font-family: "阿里巴巴普惠体Medium";
    }
</style>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white rounded-lg shadow-lg p-10 w-[800px] mx-auto flex items-center space-x-10">
    <div class="w-1/2">
      <img class="rounded-xl w-full" src="<?php echo GetTheme::Url(true, 'Assets') . "/images/icon.png"; ?>" alt="LOGO" />
    </div>
    <div class="w-1/2 text-left">
      <h1 class="text-6xl font-bold text-blue-600 mb-4"><?php Get::Tykit(); ?></h1>
      <p class="text-2xl text-blue-600 mb-2">Typecho主题开发助手</p>
      <p class="text-2xl text-blue-600">当前版本号：V<?php Get::FrameworkVer(); ?></p>
    </div>
  </div>
</body>