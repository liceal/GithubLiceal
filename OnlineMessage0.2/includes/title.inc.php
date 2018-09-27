<?php
header('Content-Type:text/html;charset=utf-8');
// 防止恶意调用
if (! defined("IN_TG")) {
    exit("禁止访问！");
}

?>
<title>玉米网</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="Style/1/basic.css" type="text/css"></link>
<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.css" type="text/css"></link>
<link rel="stylesheet" href="Style/1/<?php echo SCRIPT;?>.css" type="text/css"></link>