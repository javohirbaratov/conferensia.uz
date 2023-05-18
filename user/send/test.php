<?php
    class UserCheck extends Model{

        public $table = 'admin';
      
        public function tek($arr){
         
         foreach($arr as $key => $value){
          $$key = $this->filtr($value);
         } 
         
         $login = $arr['login'];
         $parol = $arr['parol'];
         $parol = md5($parol);
      
         $txt = " WHERE login='$login' AND parol='$parol'";
         $sql = "SELECT * FROM ".$this->table.$txt;
         $back = $this->query($sql);
                  
         $user = mysqli_fetch_assoc($back);
         $back = [];
      
         if(isset($user['login']) AND isset($user['parol']) AND  $user['login']==$login AND $user['parol']==$parol){
          $_SESSION['login'] = $user['login'];
          $_SESSION['parol'] = $user['parol'];
      
          $back+=['code' => 200];
         }else{
          $back+=['code' => 409];
          $_SESSION['_crf'] = md5(time());
          $back+=['_crf' => $_SESSION['_crf']];
         }
      
         return $back;
        }
       }
       
       if($_POST['_crf'] == $_SESSION['_crf']){
        $respons = [];
        if( isset($_POST['login']) && isset($_POST['parol'])){
         
         $obj = new UserCheck();
      
         $respons = $obj->tek($_POST);
        }
       }else{
        $respons+=['code' => 409];
        $_SESSION['_crf'] = md5(time());
        $respons+=['_crf' => $_SESSION['_crf']];
        $respons+=['_crf' => $_SESSION['_crf']];
       }