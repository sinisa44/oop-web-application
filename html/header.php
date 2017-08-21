<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/css/main.css">
</head>
<body>


<? if(!$_SESSION['user_logged_in']){
?>
		<nav class="navbar navbar-expand-md  navbar-dark bg-dark justify-content-center">
			<ul class="navbar-nav " >

			<li >
				<a class="nav-link" href="<? echo ROOT_URL; ?>?file=login">Login <span class="sr-only">(current)</span></a>
			</li>
			<li>
				<a class="nav-link" href="<? echo ROOT_URL; ?>?file=register">Register<span class="sr-only">(current)</span></a>
			</li>
		</ul>
	<?
		}else{

			?>
	<nav class="navbar navbar-expand-md  navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Welcome <? echo $_SESSION['user_data']['name'];?></a>
		<ul class="navbar-nav mr-auto linkovi">
			<li class="nav-item active">
				<a class="nav-link" href="<? echo ROOT_URL; ?>?file=content&cntnt=main">Home <span class="sr-only">(current)</span></a>
			</li>
            <li class="nav-item active">
                <a class="nav-link" href="<? echo ROOT_URL; ?>?file=content&cntnt=cars">Cars <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<? echo ROOT_URL; ?>?file=content&cntnt=bikes">Motorbikes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<? echo ROOT_URL; ?>?file=content&cntnt=ships">Cruise Ships <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-1">
            <li class="nav-item mr-1">
                <a href="<? echo ROOT_URL;?>?file=logout" class="nav-link">Logout</a>
            </li>
		</ul>
        <ul class="navbar-nav mr-1">
            <? if($_SESSION['user_data']['name']=="Sinisa"){ ?>
            <li class="nav-item">
                <a href="<? echo ROOT_URL;?>?file=admin" class="nav-link">Admin</a>
            </li>
        </ul>
        <? } ?>

<?php } ?>
</nav>