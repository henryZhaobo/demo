<?php
/* Smarty version 3.1.30, created on 2017-07-25 03:52:31
  from "C:\xampp\htdocs\demo\mms2\templates\hello.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5976a45fabb953_86312419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4901951a64a2b6719fb819e12f52e70146bf8126' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\mms2\\templates\\hello.html',
      1 => 1500947536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5976a45fabb953_86312419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="public/styles/hello.css" rel="stylesheet">
</head>
<body>
<h1>我是静态页面的内容</h1>
<h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</h1>
<!-- 在静态页面中以php文件为参考路径 -->
</body>
</html><?php }
}
