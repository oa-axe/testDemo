<?php
// echo __DIR__;
// echo __DIR__.'/../db/xue_db_sql.php';
// include
$path = dirname(dirname(__FILE__));
require_once($path . '/db/xue_db_sql.php');
class UserDao extends BaseDao
{
    public function _selectAll()
    {
        $res = parent::table('tb_student_details')->select();
        // $res=parent::table('tb_student_details')->select('user_name,pass_word');
        return $res;
    }
    public function _del($id)
    {
        $res = parent::table('tb_student_details')->where("student_id=$id")->delete();
        return $res;
    }
    public function _add($data)
    {
        $res = parent::table('tb_student_details')->insert($data);
        return $res;
    }
    public function _update($id, $data)
    {
        $res = parent::table('tb_student_details')->where("student_id=$id")->update($data);
        return $res;
    }
    public function _anotherSelect()
    {
        $res = parent::query('select * from `tb_student_details` a
        left JOIN `tb_state` b
        on a.student_state_id=b.student_state_id');
        return $res;
    }
}
$s = new UserDao;
echo json_encode($s->_anotherSelect());

// print_r($s->select());
