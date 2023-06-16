<?php

    require_once 'model.php';

    class Sayt extends Model{

        public $table = "sayt";
 
        public function insert($arr){

            foreach ($arr as $key => $value) {
                $$key = $this->filtr($value);
            }

            if(count($this->select())>0){

                $sql = "DELETE FROM ".$this->table." WHERE id>0";

                if($this->query($sql)){
                    
                    $sql = "INSERT INTO ".$this->table." (`nomi`,`qisqacha`,`batafsil`) VALUES ('$nomi','$qisqacha','$txt')";
                    if($this->query($sql)){
                        return 200;
                    }else{
                        return 409;
                    }

                }else{
                    return 409;
                }
            }

            $sql = "INSERT INTO ".$this->table." (`nomi`,`qisqacha`,`batafsil`) VALUES ('$nomi','$qisqacha','$txt')";

			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}
}