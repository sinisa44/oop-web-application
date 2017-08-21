<?php
class Connection{
	protected $conn;


	public function __construct () {

		try{
			$conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


		}catch (PDOException $e){
			echo "connection failed :" . $e->getMessage();
		}
		return $this->conn= $conn;
	}
	public static function connection(){
		return new Connection();
	}
}