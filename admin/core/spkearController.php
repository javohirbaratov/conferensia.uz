<?php

    require_once 'model.php';

    class Speaker extends Model{

        public $table = "speaker";

        public function insert($post,$files){

			foreach ($post as $key => $value){
				$$key = $this->filtr($value);
			}

			$fileTmpPath = $files['file']['tmp_name'];
			$fileName = $files['file']['name'];
			$fileSize = $files['file']['size'];
			$fileType = $files['file']['type'];
			$fileNameCmps = explode(".", $fileName);
			$tip = strtolower(end($fileNameCmps));

			$newFileName = md5(time().$fileName).".".$tip;
			if($tip == 'gif' or $tip == 'jpg' or $tip == 'jpeg' or $tip == 'png'){
				$str = "../userimg/";
			}
			$manzil = $str.$newFileName;

			if($fileSize/(1024*1024) <= 7){
				if(move_uploaded_file($fileTmpPath,$manzil)){
	
					$sql = "INSERT INTO ".$this->table." (`fio`,`email`,`otm`,`mavzu`,`rasm`,`davlat`,`batafsil`) values ('$fio','$email','$otm','$mavzu','$newFileName','$davlat','$txt')";
			
					if($this->query($sql)){
						return 200;
					}else{
                        return 409;
                    }

				}else{
					return 'error1';
				}
			}else{
				return 'error2';
			}
		}

		public function update($arr){

			foreach ($arr as $key => $value){
				$$key = $this->filtr($value);
			}

			$sql = "UPDATE ".$this->table." SET fio='$fio', email='$email', davlat='$davlat', otm='$otm', mavzu='$mavzu', batafsil='$txt' WHERE id=".$id;

			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}
}