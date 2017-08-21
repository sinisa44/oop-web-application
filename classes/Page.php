<?php

class Page extends Connection{
	public $title;
	public $text;
	public $category;
	public $picture;
	public $addBtn;
	public $delBtn;

	public function getContent($category){

		$query = $this->conn->query("SELECT * FROM vesti WHERE kategorija ='{$category}'");

		$content = array();

		while ($obj = $query->fetch(PDO::FETCH_OBJ)){
			$content[]= $obj;
		}
		return $content;
	}
	public function getAll(){
		$query = $this->conn->query("SELECT * FROM vesti WHERE kategorija != 'main' ");

		$content = array();

		while($obj = $query->fetch(PDO::FETCH_OBJ)){
			$content[]=$obj;
		}
		return $content;
	}
	public function addNew(){

		if(isset($this->addBtn)){
			$query = $this->conn->prepare("INSERT INTO vesti (naslov,text,slika,kategorija) VALUES (:naslov,:text,:slika,:kategorija)");
			$query->bindParam(":naslov",$this->title);
			$query->bindParam(":text",$this->text);
			$query->bindParam(":slika",$this->picture);
			$query->bindParam(":kategorija",$this->category);
			$query->execute();
		}
	}
	public function deletePost($id){

		if(isset($id)){
			$query = $this->conn->query("DELETE FROM vesti WHERE id={$id}");

			header("Location:".ROOT_URL."?file=admin");
		}
	}
}