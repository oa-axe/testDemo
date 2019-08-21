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
        $res = parent::query('SELECT * FROM `tb_discipline` AS a LEFT JOIN `tb_dis_type` AS b ON a.dis_type_id=b.dis_type_id LEFT JOIN `tb_student_details` AS c ON  a.student_id=c.student_id LEFT JOIN `tb_staff` AS d ON a.staff_id=d.staff_id LEFT JOIN `tb_class` AS e ON c.class_id=e.class_id LEFT JOIN `tb_staff_details` AS f ON d.staff_id=f.staff_id');
        return $res;
    }
}
$s = new UserDao;
echo json_encode($s->_anotherSelect());

// print_r($s->select());
