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

//****************ตรวจสอบวันที่ปัจุบัน
	public function Readautodate($dateinname)
	{
	$query = $this->db->prepare("SELECT * FROM datein WHERE dateinname=:dateinname");
	$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//****************บันทึกข้อมูล autodate
	public function Adddate($dateinname)
	{
	$query = $this->db->prepare("INSERT INTO datein(dateinname)VALUES(:dateinname)");
	$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
	$query->execute();
	return $this->db->lastInsertId();
	}

}
?>