<?php
$url='';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}
// var_dump($url);
if($url == ""){
require 'home.php';
}elseif( ($url[0] == 'article') AND (!empty($url[1]))){
    $idArticle=$url[1];
    require 'article.php';
}else{
    require '404.php';
}
/*if(isset($_GET['page'])){
    switch($_GET['page']){
    case "home":
    require "";
    break;

    case "contact":
    require "";
    break;

    default:
    require "";
    break;
    }
}*/
/*$URI=$_SERVER['REQUEST_URI'];
$san=filter_var($URI, FILTER_SANITIZE_URL);
$parse=parse_url($san);
$filename=$parse.'php';
if(file_exists(*filename))
{
    require $filename
}
else{
    require '404.php'
}
var_dump($parse);*/