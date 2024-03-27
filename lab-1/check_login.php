<?php
session_start();
	if(isset($_POST['username'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		include('../db/config.php');
		$db = new mysqli($host,$username,$password,$database);
		$msg = array();
		if($db->connect_errno){
			die($db->connect_errno);
		}
		$sql = "SELECT username FROM users WHERE username = '".$user."' AND password = '".$pass."'";
		
		if($users = $db->query($sql)){
			$user = $users->fetch_array();
			if($user){
				$userName = $user['username'];
				$_SESSION['user'] = $userName;
				$msg += array(
						"msg" => "Logged In",
						"username" => $userName
						 );
			}else{
				$msg += array("error" => "Invalid Username or Password");
			}
			$msg_json = json_encode($msg);
			echo $msg_json;
			
		}
		}else{

			$msg = array("error" => "Direct Script not allowed");
			echo json_encode($msg);
		}
	
