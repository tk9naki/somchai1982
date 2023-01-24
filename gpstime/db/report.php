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

//*********************************ADMIN****************************************

//****************************
	public function Readsetup()
	{
	$query = $this->db->prepare("SELECT * FROM setupdata WHERE sdid=1");
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}

//**********************
	public function Readcheckin()
	{
	$query = $this->db->prepare("SELECT * FROM(checkin)");
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}
	
//***********************
		public function Readcheckinmid()
		{
		$query = $this->db->prepare("SELECT * FROM(checkin) ORDER BY checkinupdate DESC LIMIT 10");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
	
//*************************
		public function Readdateon()
		{
		$query = $this->db->prepare("SELECT * FROM(datein) ");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
	
//***********************
	public function Listcheckin($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef)  ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Numcheckin($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Listlate($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) AND chk=2 ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Numlate($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) AND chk=2 ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Listnotcheckin($dates){
		$query = $this->db->prepare("SELECT * FROM(member) WHERE NOT mid IN (SELECT mid FROM (checkin) WHERE (dateinname=:dates))");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Numnotcheckin($dates){
		$query = $this->db->prepare("SELECT * FROM(member) WHERE NOT mid IN (SELECT mid FROM (checkin) WHERE (dateinname=:dates))");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Listleave($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) AND chk=3 ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Numleave($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) AND chk=3 ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Listcheckout($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) AND timeout!='' ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Numcheckout($dates,$datef){
		$query = $this->db->prepare("SELECT * FROM checkin WHERE (dateinname BETWEEN :dates AND :datef) AND timeout!='' ORDER BY checkinid ASC");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->bindParam("datef", $datef, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Listnotcheckout($dates){
		$query = $this->db->prepare("SELECT * FROM(member) WHERE NOT mid IN (SELECT mid FROM (checkin) WHERE (dateinname=:dates) AND chk=4)");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	
//***********************
	public function Numnotcheckout($dates){
		$query = $this->db->prepare("SELECT * FROM(member) WHERE NOT mid IN (SELECT mid FROM (checkin) WHERE (dateinname=:dates) AND chk=4)");
		$query->bindParam("dates", $dates, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
}
?>