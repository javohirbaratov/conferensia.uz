<?php
    require_once 'model.php';

    class Fayl extends Model{

        public $table = "fayl";

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
			if($tip == 'pdf'){
				$str = "../../admin/fayl/";
			}
			$manzil = $str.$newFileName;

			if($fileSize/(1024*1024) <= 10){
				
                if(move_uploaded_file($fileTmpPath,$manzil)){
	
					$sql = "INSERT INTO ".$this->table." (`user_id`,`nomi`) values ('$user_id','$newFileName')";
			
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

		public function accept($id){
			$id = $this->filtr($id);

			$sql = "UPDATE ".$this->table." SET status=1 WHERE id=".$id;

			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}

		public function rejection($id){
			$id = $this->filtr($id);

			$sql = "UPDATE ".$this->table." SET status=-1 WHERE id=".$id;

			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}
    }