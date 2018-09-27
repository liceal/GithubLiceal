<?php
//设置页面内容是html, 编码格式是utf-8
header('Content-Type:text/html;charset=utf-8');
// 防止恶意调用
if (! defined("IN_TG")) {
    exit("禁止访问！");
}
// echo __FILE__.'<br/>';
// echo dirname(__FILE__).'<br/>';
// echo substr(dirname(__FILE__), 0, - 8).'<br/>';
// 转换成硬路径常量
define('ROOT_PATH', substr(dirname(__FILE__), 0, - 8));
// 拒绝PHP低版本
if (PHP_VERSION < '4.1.0') {
    exit('PHP version too lower!');
}
?>