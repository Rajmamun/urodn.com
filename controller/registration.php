<?php
require_once('../model/credentials.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($password!=$confirm_password)
	header('location:../registration.php?pass_match=Password Did not Match');
else
{
	$credentials_obj = new credentials;
	$credentials_obj->setUserName($username);
	$credentials_obj->setEmail($email);
	$credentials_obj->setPassWord($password);
	if($credentials_obj->check())
		header('location:../registration.php?email_exists=1');
	else
	{
		if($credentials_obj->signUp())
			header('location:../registration.php?signUp_state=1 & username='.$username);
		else
			header('location:../registration.php?signUp_state=0');
	}
}
?>