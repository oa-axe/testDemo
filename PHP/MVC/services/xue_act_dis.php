<?php


$path = dirname(dirname(__FILE__));
include_once($path . '/dao/xueDao_dis.php');
class UserService
{
  public function anotherSelect()
  {
    $user = new UserDao();
    $result = $user->anotherSelect();
    return $result;
  }
}
$s = new UserService;
// var_dump($s->select('tb_student_details'));
