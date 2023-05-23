<?php
    require_once 'model.php';

    class Section extends Model{

        public $table = "section";

        public function insert($post){
            foreach ($post as $key => $value){
				$$key = $value;
			}

            $sql = "INSERT INTO ".$this->table." (`nomi`) VALUES ('$nomi')";

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

			$sql = "UPDATE ".$this->table." SET nomi='$nomi' WHERE id=".$id;

			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}
    }