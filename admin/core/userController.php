<?php
    require_once 'model.php';

    class User extends Model{

        public $table = "user";

        public function insert($post){
            foreach ($post as $key => $value){
				$$key = $value;
			}

            $sql = "INSERT INTO ".$this->table." (`fio`,`davlat`,`otm`,`email`) values ('$fio','$davlat','$otm','$email')";

            if($this->query($sql)){
                return 200;
            }else{
                return 409;
            }

		}

		public function update($arr){

			foreach ($arr as $key => $value){
				$$key = $value;
			}

			$sql = "UPDATE ".$this->table." SET fio='$fio', email='$email', davlat='$davlat', otm='$otm', mavzu='$mavzu' WHERE id=".$id;

			if($this->query($sql)){
				return 200;
			}else{
				return $sql;
			}
		}
    }