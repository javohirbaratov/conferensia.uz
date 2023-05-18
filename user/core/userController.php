<?php
    require_once 'model.php';

    class User extends Model{

        public $table = "user";

        public function insert($post){
            foreach ($post as $key => $value){
				$$key = $value;
			}
			$parol = md5($parol);
            $sql = "INSERT INTO ".$this->table." (`fio`,`davlat`,`otm`,`email`,`parol`) values ('$fio','$davlat','$otm','$email','$parol')";

            if($this->query($sql)){
                return 200;
            }else{
                return 409;
            }

		}

		public function check($arr){

			foreach($arr as $key => $value){
				$$key = $this->filtr($value);
			} 
			
			$login = $arr['login'];
			$parol = $arr['parol'];
			$parol = md5($parol);
			
			$txt = " WHERE email='$login' AND parol='$parol'";
			$sql = "SELECT * FROM ".$this->table.$txt;
			$back = $this->query($sql);
			
			if($back)			
				$user = mysqli_fetch_assoc($back);
			
			$back = [];
			
			if(isset($user['email']) AND isset($user['parol']) AND  $user['email']==$login AND $user['parol']==$parol){
				$_SESSION['login'] = $user['email'];
				$_SESSION['parol'] = $user['parol'];
				$_SESSION['id'] = $user['id'];
				$_SESSION['rol'] = 'user';
			
				$back+=['code' => 200];
			}else{
				$back+=['code' => $sql];
				$_SESSION['_crf'] = md5(time());
				$back+=['_crf' => $_SESSION['_crf']];
			}
			
			return $back;
			   
		}
    }