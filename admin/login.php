<?php
session_start();
	if (isset($_POST['submit'])) {
		if (isset($_POST['username']) && isset($_POST['password'])) {
			if ($_POST['username'] == "Ignas" && $_POST['password'] == "slaptas") {
				# vartotojo vardas ir slaptazodis tinka

				$_SESSION['user'] = $_POST['username'];
				header('Location:index.php');
				/*if ($_POST['remember_me']) {
					#remembering user
					$cookie_data=$_POST['username'] . "#" . date("Y-m-d H:i:s");
					setcookie("SimpleCMS", $cookie_data, time() + (60 * 60 * 24 * 7), "/");

					//ignas 2017-02-15
					//explode("#", "ignas#2017-02-15")
				}*/
			
			} else {
				# vartotojo vardas ir slaptazodis netinkamas
				$error = "Wrong username or password";
			}
		}
	} else {
		include "login_form.php";
	}
	
	if(isset($_COOKIE["SimpleCMS"])) {
    	$value = $_COOKIE["SimpleCMS"];
    	$cookie_values = explode("#", $value); //["ignas", "2017-02-15 24:12:10"]
	}


?>