<?php

    require_once 'model.php';

    class Txt extends Model{

        public $table = "txt";
 
        public function insert($arr){

            foreach ($arr as $key => $value) {
                $$key = $this->filtr($value);
            }

            if(count($this->select())>0){

                if($category=="qumita"){
                    $sql = "DELETE FROM ".$this->table." WHERE category='qumita'";
                }else{
                    $sql = "DELETE FROM ".$this->table." WHERE category='mualif'";
                }
                if($this->query($sql)){
                    
                    $sql = "INSERT INTO ".$this->table." (`txt`,`category`) VALUES ('$txt','$category')";
                    if($this->query($sql)){
                        return 200;
                    }else{
                        return 409;
                    }

                }else{
                    return 409;
                }
            }

			$sql = "INSERT INTO ".$this->table." (`txt`,`category`) VALUES ('$txt','$category')";
			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}
}