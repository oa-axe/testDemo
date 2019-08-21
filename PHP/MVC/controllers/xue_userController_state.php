<?php

$path = dirname(dirname(__FILE__));
include_once($path . '/services/xue_act_state.php');
class UserController
{
    public function anotherSelect()
    {
        $userService = new userService;
        $res = $userService->anotherSelect();
        echo json_encode($res);
    }
}
$userCon = new UserController;
