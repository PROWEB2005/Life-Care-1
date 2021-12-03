<?
include_once('./function.php');
var_dump($path);
if ($pages[$path]) {
    include_once("./page/$path.php");
}
else {
    include_once("./page/404.php");
}
?>