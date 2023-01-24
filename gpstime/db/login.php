<?php
require __DIR__ . '/connection.php';
class CRUD
{
//เชื่อมต่อฐานข้อมูล
protected $db;
function __construct()
{
$this->db = DB();
}
//ยกเลิกการเชื่อมต่อฐานข้อมูล
function __destruct()
{
$this->db = null;
}
//*********************************MEMBER****************************************

//*********************
		public function Loginadmin($user,$pass){
		$query = $this->db->prepare("SELECT * FROM admin WHERE user=:user AND pass=:pass");
		$query->bindParam("user", $user, PDO::PARAM_STR);
		$query->bindParam("pass", $pass, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}

//***********************
		public function Loginmember($tel,$password){
		$query = $this->db->prepare(" SELECT * FROM member WHERE tel=:tel AND password=:password");
		$query->bindParam("tel", $tel, PDO::PARAM_STR);
		$query->bindParam("password", $password, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}

}
?>