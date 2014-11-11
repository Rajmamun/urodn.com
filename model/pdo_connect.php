<?php
class Connection
{
	private $db;
	public function dbConnect()
	{
		try {
				$this->db = new PDO("mysql:host=localhost;dbname=urodn","root","");//local 
				//$this->db = new PDO("mysql:host=localhost;dbname=urodncom_urodn","urodncom_chandan","chandan07cse@");//online
				$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		    }
			catch(PDOException $e)
			{
				echo $e->getMessage();
				die();
			}
		return $this->db;
	}

}
//for checking db connection 
/*$obj = new Connection;
$obj->dbConnect();
$checking = mysql_select_db('urodncom_urodn',mysql_connect('localhost','urodncom_chandan','chandan07cse@'));
if ($checking) 	echo 'ok';
	else
		echo "not ok";
*/
?>