<?php

class FanController{

    public function f_seleall(){
        $user_seivice=new FanService;
        $res=$user_seivice->selectall();
        echo $res;
    }
      public function f_seleall1(){
        $user_seivice=new FanService;
        $res=$user_seivice->selectall1();
        echo $res;
    }
    public function f_del($f_id){
          $user_seivice=new FanService;
          $res=$user_seivice->del($f_id);
          echo $res;
    }
      public function f_del1($f_id){
          $user_seivice=new FanService;
          $res=$user_seivice->del1($f_id);
          echo $res;
    }
    public function tb_class_detailsa1(){
        $user_seivice=new FanService;
          $res=$user_seivice->tb_class_detailsa1();
          echo $res;
    }
     public function tb_class_detailsa2($data){
        $user_seivice=new FanService;
          $res=$user_seivice->tb_class_detailsa2($data);
          echo $res;
    }
       public function tb_coursea1(){
        $user_seivice=new FanService;
          $res=$user_seivice->tb_coursea1();
          echo $res;
    }
           public function tb_coursea2($data){
        $user_seivice=new FanService;
          $res=$user_seivice->tb_coursea2($data);
          echo $res;
    }
              public function f_updata($f_id){
        $user_seivice=new FanService;
          $res=$user_seivice->f_updata($f_id);
          echo $res;
    }
         public function tb_class_detailss2($f_id,$data){
        $user_seivice=new FanService;
          $res=$user_seivice->tb_class_detailss2($f_id,$data);
          echo $res;
    }
         public function f_updata1($f_id){
        $user_seivice=new FanService;
          $res=$user_seivice->f_updata1($f_id);
          echo $res;
    }
             public function tb_courses2($f_id,$data){
        $user_seivice=new FanService;
          $res=$user_seivice->tb_courses2($f_id,$data);
          echo $res;
    }
    

}
// $data=$_REQUEST["d"];
// var_dump($data);
//  $controllerName=ucfirst(strtolower($controlName))."Controller";
// $user=new $controllerName;


// $req=$_REQUEST['obj'];
// $ref=$_REQUEST['actin'];
// echo $req;
// $user=new f_Controller;
// if($req=='f_cla'){
//     $user->f_seleall();
//     // echo 1;
// }elseif($req=='f_cor'){
//     $user->f_seleall1();
// }