<?php
require_once('pdo_connect.php');//dbms connection
class credentials{
	
	public $username,$email,$password,$db,$remember_me;// Global variables -- lifetime whole class
	
	public function __construct()
	{
	  $this->db = new Connection; // creating the object of Connection class
	  $this->db = $this->db->dbConnect();// creating the instance of dbConnect method
	}
		
	public function setUserName($username)// here $userName is a local variable
	{
		$this->username = $username;
	}
	public function getUserName()
	{
		return $this->username;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setPassWord($password) // here $password is a local variable
	{
		$this->password = md5($password);// encrypting using md5 algorithm
	}
	public function getPassWord()
	{
		return $this->password;
	}
	public function setRememberMe($remember_me)
	{
		$this->remember_me = $remember_me;
	}
	public function getRememberMe()
	{
		return $this->remember_me;
	}
	public function check()
	{
		$check = $this->db->prepare("select email from credentials where email=:email");
		$check->execute(array(
			'email'=>$this->getEmail()
			));
		if($check->rowCount()!=0)
			return true;
		else
			return false;
	}

	public function signUp()
	{
		$sign_up = $this->db->prepare("insert into credentials values(
			:username,
			:email,
			:password
			)");
		$sign_up = $sign_up->execute(array(
			'username'=>$this->getUserName(),
			'email'=>$this->getEmail(),
			'password'=>$this->getPassWord()
			));
		
			return ($sign_up) ? true : false;


	}
	public function confirmUser()
	 {
	 	$check = $this->db->prepare("select * from credentials where email=:email and password=:password");
	    $check->execute(array(
	 		'email'=>$this->getEmail(),
	 		'password'=>$this->getPassWord()
	 		));
	 	
		
		return ($check->rowCount()!=0) ? true : false;
	}

	public function setSessionCookie()
	{
		//session_start();
		$_SESSION['email'] = $this->getEmail();
			if ($this->getRememberMe()) 
				setcookie("email",$_SESSION['email'],time()+60*60*24);
			
	}
	public function clearSessionCookie()
	{
		//session_start();
		unset($_SESSION['email']);
		session_destroy();
		setcookie("email","",time()-60*60*24);
	}
	public function signIn()
	{
		if ($this->confirmUser()) {
			$this->setSessionCookie();
			return true;
		}
		else
			return false;
	}
}
?>