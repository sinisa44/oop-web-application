<?php
class User extends Connection {
	public $korisnickoIme;
	public $sifra;
	public $email;
	public $btnReg;
	public $btnLog;
/*
	public function __construct () {

		$query= $this->conn->query("SELECT * FROM korisnici");

		$x =array();
		while($obj = $query->fetch(PDO::FETCH_OBJ)){
			$x[] = $obj;
		}
		return $x;
	}
*/

	public function register(){

		if(isset($this->btnReg)){
			$check_user= $this->conn->prepare("SELECT * FROM korisnici WHERE korisnickoIme= :korisnickoIme AND email = :email");
			$check_user->bindParam(':korisnickoIme',$this->korisnickoIme);
			$check_user->bindParam(':email',$this->email);
			$check_user->execute();

			$res = $check_user->fetch(PDO::FETCH_OBJ);

			if(!$res && isset($this->btnReg)){
				$stmt = $this->conn->prepare("INSERT INTO korisnici (korisnickoIme,sifra,email) VALUES (:korisnickoIme,:sifra,:email)");
				$stmt->bindParam(':korisnickoIme',$this->korisnickoIme);
				$stmt->bindParam(':sifra',$this->sifra);
				$stmt->bindParam(':email',$this->email);
				$stmt->execute();

				header("Location:".ROOT_URL."?file=login");
			}else{
				echo "korisnik postoji u bazi";
			}
		}

	}

	public function login(){

		if(isset($this->btnLog)){
			$check_user = $this->conn->prepare("SELECT * FROM korisnici WHERE korisnickoIme = :korisnickoIme  AND sifra = :sifra LIMIT 1");

			$check_user->bindParam(':korisnickoIme',$this->korisnickoIme);
			//$check_user->bindParam(':email',$this->email);
			$check_user->bindParam(':sifra',$this->sifra);
			$check_user->execute();

			$row = $check_user->fetch(PDO::FETCH_ASSOC);

			if($row){

				$_SESSION['user_logged_in'] = true;
				$_SESSION['user_data'] = array(
					'id'   => $row['id'],
					'name' => $row['korisnickoIme'],
					'email'=> $row['email']
				);
				header("location:index.php?file=content");
			}else{
				echo "niste uneli dobro korisnicko ime ili sifru";
			}
		}
	}

	public static function logout(){
		unset ($_SESSION['user_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		header("Location:".ROOT_URL."?file=login");
	}
}