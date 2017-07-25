<?php
include 'libs/Smarty.class.php';
$smarty=new Smarty();
/* echo"<pre>";
var_dump($smarty);
echo "</pre>"; */
$smarty->assign("username","tom");
//显示指定的静态文件，默认路径是templates;
$smarty->display("hello.html");

?>