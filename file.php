<?php
if($_POST['send']){
  $data="<?php";
$data.="\n";
$data.="define('Host','".$_POST['host']."');";
$data.="\n";
$data.="define('USERNAME','".$_POST['username']."');";
$data.="\n";
$data.="define('PWD','".$_POST['pwd']."');";
$data.="\n";
$data.="define('DBNAME','".$_POST['dbname']."');";
$data.="\n";
$data.="?>";
file_put_contents("config.php", $data);  
}
var_dump($_POST);
// echo "bo".file_get_contents("New.html");

?>
<form action="" method="post">
<input type="text" name="host"><br>
<input type="text" name="username"><br>
<input type="text" name="pwd"><br>
<input type="text" name="dbname"><br>
<input type="submit" name="send" value="提交"><br>
</form>