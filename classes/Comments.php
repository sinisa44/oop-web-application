<?php
class Comments extends Connection {
	public $comment;
	public $hidden;
	public $btnAdd;
	public $btnDelete;

	public function show($cat){
		$query = $this->conn->query("SELECT * FROM komentari WHERE kategorija = '{$cat}'");

		$array = array();

		while($obj = $query->fetch(PDO::FETCH_OBJ)){
			$array[]= $obj;
		}
		return $array;
	}
	public function showAll(){
		$query =$this->conn->query("SELECT * FROM komentari");

		$array = array();

		while($obj = $query->fetch(PDO::FETCH_OBJ)){
			$array[]=$obj;
		}
		return $array;
	}
	public function addComment(){
		if(isset($this->btnAdd)){
			$ins = $this->conn->prepare("INSERT INTO komentari (komentar, kategorija) VALUES (:komentar,:kategorija)");

			$ins -> bindParam(':komentar',$this->comment);
			$ins -> bindParam('kategorija',$this->hidden);
			$ins ->execute();

			return;
		}
	}
	public function DeleteCom($comid, $cntnt=false){
		if(isset($comid)) {
			$query = $this->conn->query( "DELETE FROM komentari WHERE id={$comid}" );

			if($cntnt) {
				header( "location:" . ROOT_URL . "?file=content&cntnt=" . $cntnt );
			}else{
				header("Location:" . ROOT_URL . "?file=admin");
			}
		}


	}
}