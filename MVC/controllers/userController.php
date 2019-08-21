<?php

$path=dirname(dirname(__FILE__)); 
include_once($path.'/services/userService.php');
class UserController{
    public function register(){
        // 数据验证
        $data=["user_name"=>$_REQUEST['username'],
        "pass_word"=>$_REQUEST['password'],
        "phone_num"=>$_REQUEST['phonenum'],
        "qq"=>$_REQUEST['qq']
        ];
    //  echo json_encode($data);
        $userService=new userService;
        $res=$userService->add($data);
       echo json_encode($res);
    }
}

$action=$_REQUEST['action'];
$userCon=new UserController;
if($action=='add'){
    $userCon->register();
}elseif($action=="del"){
    
}