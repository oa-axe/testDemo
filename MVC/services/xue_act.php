<?php


$path = dirname(dirname(__FILE__));
include_once($path . '/dao/xueDao.php');
include_once($path . '/dao/xuedetailDao.php');
class UserService
{
  public function select($parm)
  {
    $user = new UserDao();
    $result = $user->select($parm);
    return $result;
  }
}
$s = new UserService;
// var_dump($s->select('tb_student_details'));
