<?php

    require_once 'model.php';

    class Contact extends Model{

        public $table = "contact";
 
        public function insert($arr){

            foreach ($arr as $key => $value) {
                $$key = $this->filtr($value);
            }

            if(count($this->select())>0){

                $sql = "DELETE FROM ".$this->table." WHERE id>0";

                if($this->query($sql)){
                    
                    $sql = "INSERT INTO ".$this->table." (`manzil`,`telraqam`,`telraqam2`,`email`) VALUES ('$manzil','$telraqam','$telraqam2','$email')";
                    if($this->query($sql)){
                        return 200;
                    }else{
                        return 409;
                    }

                }else{
                    return 409;
                }
            }

            $sql = "INSERT INTO ".$this->table." (`manzil`,`telraqam`,`telraqam2`,`email`) VALUES ('$manzil','$telraqam','$telraqam2','$email')";

			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}
}