<?php
// echo __DIR__;
// echo __DIR__.'/../db/db_sql.php';
// include
$path=dirname(dirname(__FILE__)); 
require_once($path.'/db/xue_db_sql.php');
class UserdetailDao extends BaseDao{
    public function _selectAll(){
        // $res=parent::table('tb_student_details')->select();
        $res=parent::table('tb_student_details')->select();
        return $res;
    }
    public function _del($id){
        $res=parent::table('tb_student_details')->where("student_id=$id")->delete();
        return $res;
    }
    public function _add($data){
        $res=parent::table('tb_student_details')->insert($data);
        return $res;
    }
    public function _update($id,$data){
        $res=parent::table('tb_student_details')->where("student_id=$id")->update($data);
        return $res;
    }
}
// $s=new UserDao;
