<?php
$controlName=$_REQUEST["c"];
$actionName=$_REQUEST["a"];
/**加载配置文件等* */
function require_file(){
global $controlName;
require_once('./config/db_config.php');
require_once('./db/db_pdo.php');
require_once('./db/db_sql.php'); 
include('./controllers/'.strtolower($controlName)."Controller.php");
include('./services/'.strtolower($controlName)."Service.php");
include('./dao/'.strtolower($controlName)."Dao.php");
};
require_file();
$controllerName=ucfirst(strtolower($controlName))."Controller";
$controller=new $controllerName();

if($actionName=='f_seleall'||$actionName=='f_seleall1'){
echo $controller->$actionName();
}
if($actionName=='f_del'||$actionName=='f_del1'){
    $f_id=$_REQUEST["d"];
    echo $controller->$actionName($f_id);
}
if($actionName=='tb_class_detailsa1'){
     echo $controller->$actionName();
}
if($actionName=='tb_class_detailsa2'){
    $data=$_REQUEST["d"];
  echo $controller->$actionName($data);
}
if($actionName=='tb_coursea1'){
    // echo 1;
     echo $controller->$actionName();
}
if($actionName=='tb_coursea2'){
    $data=$_REQUEST["d"];
  echo $controller->$actionName($data);
}
if($actionName=='f_updata'){
     $f_id=$_REQUEST["d"];
     echo $controller->$actionName($f_id);
}
if($actionName=='tb_class_detailss2'){
    $data=$_REQUEST["d"];
    $f_id=$_REQUEST["fid"];
    echo $controller->$actionName($f_id,$data);
}
if($actionName=='f_updata1'){
     $f_id=$_REQUEST["d"];
     echo $controller->$actionName($f_id);
}
if($actionName=='tb_courses2'){
    $data=$_REQUEST["d"];
    $f_id=$_REQUEST["fid"];
  echo $controller->$actionName($f_id,$data);
}


