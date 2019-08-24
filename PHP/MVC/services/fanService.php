
<?php

class FanService{
    public function selectall(){
        $user=new FanDao;
        $res=json_encode($user->allselct());
        return $res;
    }
     public function selectall1(){
        $user=new FanDao;
        $res=json_encode($user->allselect1());
        return $res;
    }
    public function del($f_id){
        $user=new FanDao;
         $res=$user->f_del($f_id);
        return $res;
    }
    public function del1($f_id){
        $user=new FanDao;
         $res=$user->f_del1($f_id);
        return $res;
    }
     public function tb_class_detailsa1(){
        $user=new FanDao;
        $requ=[];
        $res1=$user->f_selectcla();
        array_push($requ,$res1);
        $res2=$user->f_selectsta();
        array_push($requ,$res2);
        $res3=$user->f_selectcor_sta();
        array_push($requ,$res3);
        $res=json_encode($requ);
        return $res;
    }
     public function tb_class_detailsa2($data){
        $user=new FanDao;
         $res=$user->f_add($data);
        return $res;
    }
         public function tb_coursea1(){
        $user=new FanDao;
        $requ=[];
        $res1=$user->f_selectcor1();
        array_push($requ,$res1);
        $res=json_encode($requ);
        return $res;
    }
         public function tb_coursea2($data){
        $user=new FanDao;
         $res=$user->f_add1($data);
        return $res;
    }
           public function f_updata($f_id){
        $user=new FanDao;
         $requ=[];
        $res1=$user->f_selectcla();
        array_push($requ,$res1);
        $res2=$user->f_selectsta();
        array_push($requ,$res2);
        $res3=$user->f_selectcor_sta();
        array_push($requ,$res3);
        $res4=$user->f_selectOne($f_id);
        array_push($requ,$res4);
        $res=json_encode($requ);
        return $res;
    }
        public function tb_class_detailss2($f_id,$data){
        $user=new FanDao;
         $res=$user->f_update($f_id,$data);
        return $res;
    }
               public function f_updata1($f_id){
        $user=new FanDao;
         $requ=[];
        $res1=$user->f_selectcor1();
        array_push($requ,$res1);
        $res4=$user->f_selectOne1($f_id);
        array_push($requ,$res4);
        $res=json_encode($requ);
        return $res;
    }
            public function tb_courses2($f_id,$data){
        $user=new FanDao;
         $res=$user->f_update1($f_id,$data);
        return $res;
    }

}