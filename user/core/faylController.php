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
	
					$sql = "INSERT INTO ".$this->table." (`user_id`,`nomi`,`mavzu`,section_id) values ('$user_id','$newFileName','$mavzu','$section_id')";
			
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

		public function update($post,$files){
            
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
			if($tip == 'doc' or $tip == 'docx'){
				$str = "../../admin/fayl/";
			}
			$manzil = $str.$newFileName;

			if($fileSize/(1024*1024) <= 10){
				
                if(move_uploaded_file($fileTmpPath,$manzil)){
	
					$sql = "UPDATE ".$this->table." SET nomi='$newFileName',mavzu='$mavzu',section_id='$section_id' WHERE id='$id'";
			
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
    }