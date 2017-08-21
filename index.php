<?php
session_start();
require "config.php";


?>
<div id="content" style="margin-top: 20px;margin-bottom: 20px">
<?

$page = new Routes($_GET['file']);
$user = new User();



	$user->btnReg        = $_POST['register'];
	$user->korisnickoIme = $_POST['username'];
	$user->email         = $_POST['email'];
	$user->sifra         = $_POST['password'];
	$user->register();


    $user->btnLog        =$_POST['login'];
    $user->korisnickoIme =$_POST['username'];
    $user->sifra         =$_POST['password'];
    $user->login();



?>
</div>

<?php
include "html/footer.php";