<?php
require_once('../model/credentials.php');
$email = $_POST['email'];
$password = $_POST['password'];
$remember_me = $_POST['remember_me'];
//echo $email.' - '.$password;
if(empty($email) || empty($password))
	header('location:../registration.php?empty_msg=Please input all the fields correctly');
else
{
	$credentials_obj = new credentials;
	$credentials_obj->setEmail($email);
	$credentials_obj->setPassWord($password);
	$credentials_obj->setRememberMe($remember_me);
	if($credentials_obj->signIn())
			header('location:../admin_index.php');
		
	else
			header('location:../registration.php?sign_in_state=0');
}
?>