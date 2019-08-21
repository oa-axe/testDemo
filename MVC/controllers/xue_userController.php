<?php

$path = dirname(dirname(__FILE__));
include_once($path . '/services/xue_act.php');
class UserController
{
    public function select($data)
    {
        $userService = new userService;
        $res = $userService->select($data);
        echo json_encode($res);
    }
}
$userCon = new UserController;
