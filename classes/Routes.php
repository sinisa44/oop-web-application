<?php

class Routes{

	public function __construct ($page) {

		if(isset($page)){
			include 'html/'.$page.'.php';
		}else{
			include 'html/login.php';
		}
	}

}