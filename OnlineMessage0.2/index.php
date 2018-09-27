<?php
// 定义常量，用来授权调用includes里面的文件
define("IN_TG", true);
// 引入公共文件
// 转换成硬路径，速度快一些
require dirname(__FILE__) . '/includes/common.inc.php';
define("SCRIPT", "index");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php require ROOT_PATH.'includes/title.inc.php';?>
</head>
<body>
    <?php require_once(ROOT_PATH.'includes/header.inc.php'); ?>
    <div id="list"><h2>帖子列表</h2></div>
    <div id="user"><h2>新建会员</h2></div>
    <div id="pics"><h2>最新图片</h2></div>
    <?php require (ROOT_PATH.'includes/footer.inc.php'); ?>
</body>
</html>



