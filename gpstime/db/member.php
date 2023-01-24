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

//*********************************member****************************************

//*******************************READ*********************************************

//***********************
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

//*************************
		public function Readdateon($dateon)
		{
		$query = $this->db->prepare("SELECT * FROM(datein) WHERE dateinname=:dateon");
		$query->bindParam("dateon", $dateon, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//**************************
		public function Ckhkin($mid,$dateinname)
		{
		$query = $this->db->prepare("SELECT * FROM(checkin) WHERE mid=:mid AND dateinname=:dateinname");
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}

//**********************
		public function Readcheckindate($dateon,$mid)
		{
		$query = $this->db->prepare("SELECT * FROM(checkin)	WHERE dateinname=:dateon AND mid=:mid");
		$query->bindParam("dateon", $dateon, PDO::PARAM_STR);
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//***********************
		public function Readcheckinmid($mid)
		{
		$query = $this->db->prepare("SELECT * FROM(checkin) WHERE mid=:mid ORDER BY checkinupdate DESC LIMIT 10");
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*****************************************CREATE*********************************
//***********************
		public function Registimein($dateinid,$mid,$mname,$dateinname,$timein,$cause,$timeout,$chk,$latitude,$longitude,$latout,$lonout,$ip,$checkinrecord)
		{
		$query = $this->db->prepare(" INSERT INTO checkin (dateinid,mid,mname,dateinname,timein,cause,timeout,chk,latitude,longitude,latout,lonout,ip,checkinrecord)VALUES(:dateinid,:mid,:mname,:dateinname,	:timein,:cause,:timeout,:chk,:latitude,:longitude,:latout,:lonout,:ip,:checkinrecord)");
		$query->bindParam("dateinid", $dateinid, PDO::PARAM_INT);
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->bindParam("mname", $mname, PDO::PARAM_STR);
		$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
		$query->bindParam("timein", $timein, PDO::PARAM_STR);
		$query->bindParam("cause", $cause, PDO::PARAM_STR);
		$query->bindParam("timeout", $timeout, PDO::PARAM_STR);
		$query->bindParam("chk", $chk, PDO::PARAM_INT);
		$query->bindParam("latitude", $latitude, PDO::PARAM_STR);
		$query->bindParam("longitude", $longitude, PDO::PARAM_STR);
		$query->bindParam("latout", $latout, PDO::PARAM_STR);
		$query->bindParam("lonout", $lonout, PDO::PARAM_STR);
		$query->bindParam("ip", $ip, PDO::PARAM_STR);
		$query->bindParam("checkinrecord", $checkinrecord, PDO::PARAM_STR);
		$query->execute();
		return $this->db->lastInsertId();
		}
		
//*****************************************UPDATE*********************************
//***********************
//************************อัปเดทเวลาเลิกงาน
		public function Updatecheckout($mid,$dateinname,$timeout,$latout,$lonout)
		{
		$query = $this->db->prepare("UPDATE checkin SET	timeout=:timeout,latout=:latout,lonout=:lonout, WHERE mid=:mid AND dateinname=:dateinname");
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
		$query->bindParam("timeout", $timeout, PDO::PARAM_STR);
		$query->bindParam("latout", $latout, PDO::PARAM_STR);
		$query->bindParam("lonout", $lonout, PDO::PARAM_STR);
		$query->execute();
		}


//*****************************************CHECK*********************************
//***********************
//****************************
		public function Ckmid($mid,$dateinid)
		{
		$query = $this->db->prepare(
		"SELECT *
		FROM checkin
		WHERE mid=:mid AND dateinid=:dateinid
		"
		);
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->bindParam("dateinid", $dateinid, PDO::PARAM_INT);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*************************
		public function Checktimeout($mid,$dateinname)
		{
		$query = $this->db->prepare("SELECT * FROM(checkin) WHERE mid=:mid AND dateinname=:dateinname AND (timeout!='' OR cause!='')");
		$query->bindParam("mid", $mid, PDO::PARAM_INT);
		$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*************************
		public function Checkdateinname($dateinname)
		{
		$query = $this->db->prepare("SELECT * FROM(checkin) WHERE dateinname=:dateinname");
		$query->bindParam("dateinname", $dateinname, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
}
?>