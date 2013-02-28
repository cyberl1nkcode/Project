<?php
	//untuk ngecek apakah user uda login apa belum
	session_start();
	if(empty($_SESSION['username']) AND empty($_SESSION['id_user']) AND empty($_SESSION['status'])){
		echo "";	
	}
?>