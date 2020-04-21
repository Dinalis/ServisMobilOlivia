<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if(!isset($_SESSION['login_id']))
{
	header("location:login.php");
}else
{
	include "../include/koneksi.php";
	include "../include/function.php";
	include "head.php";
	include "sidebar.php";
	if(isset($_GET['pages']))
	{
		$modul = "data.php";
		if(isset($_GET["modul"]))
		{
			$modul = $_GET["modul"].".php";
		}
		include "pages/".$_GET['pages']."/".$modul;
	}else
	{
		 if($_SESSION['login_level'] == "administrator")
		 {
			include "pages/user/data.php";
		}else{
			include "pages/dashboard.php";
		}
	}	
}
include_once 'footer.php';
?>


