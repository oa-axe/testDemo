<?php
class FanDao extends BaseDao{

       public function f_selectAll(){
        $res=parent::table('tb_class_details')->select();
        return $res;
    }
    public function f_selectOne($f_id){
         $res=parent::table('tb_class_details')->where("class_details_id=$f_id")->select();
        return $res;
    }
     public function f_selectcla(){
        $res=parent::table('tb_class')->select();
        return $res;
    }
     public function f_selectsta(){
        $res=parent::table('tb_staff_details')->select('staff_id,staff_name');
        return $res;
    }
     public function f_selectcor_sta(){
        $res=parent::table('tb_course_state')->select();
        return $res;
    }

    
    
        public function f_del($f_id){
        $res=parent::table('tb_class_details')->where("class_details_id=$f_id")->delete();
        return $res;
    }
    public function f_add($data){
        $res=parent::table('tb_class_details')->insert($data);
        return $res;
    }
    public function f_update($f_id,$data){
        $res=parent::table('tb_class_details')->where("class_details_id=$f_id")->update($data);
        return $res;
    }

        
       public function allselct(){
$res=parent::query("SELECT a.class_details_id,a.`start_end_time`,a.employment_data,b.class_name,a.campu_courses,a.classroom,c.staff_name,a.progress,d.course_state_name FROM `tb_class_details` AS a LEFT JOIN `tb_class` as b ON a.class_id=b.class_id LEFT JOIN `tb_staff_details` as c ON a.staff_id=c.staff_id LEFT JOIN `tb_course_state` AS d ON a.course_state_id=d.course_state_id ");
        return $res;
    }
    ////sssssssssssssssss
          public function f_selectAll1(){
        $res=parent::table('tb_course')->select();
        return $res;
    }
      public function f_selectOne1($f_id){
         $res=parent::table('tb_course')->where("course_id=$f_id")->select();
        return $res;
    }
      public function f_selectcor1(){
        $res=parent::table('tb_class_course_state')->select();
        return $res;
    }
        public function f_del1($f_id){
        $res=parent::table('tb_course')->where("course_id=$f_id")->delete();
        return $res;
    }
    public function f_add1($data){
        $res=parent::table('tb_course')->insert($data);
        return $res;
    }
    public function f_update1($id,$data){
        $res=parent::table('tb_course')->where("course_id=$id")->update($data);
        return $res;
    }
       
      public function allselect1(){
        $res=parent::query('SELECT a.course_id,a.course_name,a.course_coding,a.course_category,a.course_campus,a.course_plan,a.course_duration,a.course_price,b.class_course_name FROM `tb_course` AS a LEFT JOIN `tb_class_course_state` AS b ON a.class_course_id=b.class_course_id');
        return $res;
    }

	
}
// $s=new user_class_details;
//  var_dump $s->allselect();
