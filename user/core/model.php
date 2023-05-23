<?php

	// require_once 'config.php';

	class Model {

		public $db;
		public $table;

		public function __construct(){
			require_once 'config.php';
			date_default_timezone_set("Asia/Tashkent");
			$this->db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		}

		public function filtr($str){
			$txt = str_replace("’","`",$str);
			return  mysqli_real_escape_string($this->db,$txt);
		}

		public function query($sql){
			return mysqli_query($this->db,$sql);
		}

		public function select($key=null,$value=null){
			
			if($key==null or $value==null){
				$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC";
			}else{
				$sql = "SELECT * FROM ".$this->table." WHERE ".$key."='$value' ORDER BY id DESC";
			}

			$back = $this->query($sql);

			return mysqli_fetch_all($back,MYSQLI_ASSOC);
		}

		public function selectOne($key=null,$value=null,$txt=null){
			if($txt!=null){
				$sql = "SELECT * FROM ".$this->table.$txt;
			}else
				if($key==null or $value==null){
					$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 1";
				}else{
					$sql = "SELECT * FROM ".$this->table." WHERE ".$key."='$value'";
				}

			$back = $this->query($sql);

			return mysqli_fetch_assoc($back);
		}

		public function selectTableOne($tab,$key=null,$value=null){
			if($key==null or $value==null){
				$sql = "SELECT * FROM ".$tab." ORDER BY id DESC LIMIT 1";
			}else{
				$sql = "SELECT * FROM ".$tab." WHERE ".$key."='$value'";
			}
			$back = $this->query($sql);

			return mysqli_fetch_all($back,MYSQLI_ASSOC);
		}
		public function selectTable($tab){
			
			$sql = "SELECT * FROM ".$tab." ORDER BY id DESC";
			
			$back = $this->query($sql);

			return mysqli_fetch_all($back,MYSQLI_ASSOC);
		}

		public function delete($id,$key=null){
			if($key==null){
				$sql = "DELETE FROM ".$this->table." WHERE id=".$id;
			}else{
				$sql = "DELETE FROM ".$this->table." WHERE ".$key."=".$id;
			}
			if($this->query($sql)){
				return 200;
			}else{
				return 409;
			}
		}

		public function selectBitta($id){
			$sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
			
			$back = $this->query($sql);

			return mysqli_fetch_assoc($back);
		}
	}
?>