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

//*********************************SYSTEM****************************************

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


//**********************
		public function Readmember(){
		$query = $this->db->prepare("SELECT *
		FROM(member)
		INNER JOIN(class)
		ON member.classid=class.classid
		INNER JOIN(part)
		ON member.partid=part.partid
		INNER JOIN(work)
		ON member.workid=work.workid
		WHERE member.chk=0 ORDER BY memberupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
			return $data;
		}
		
//**************************
		public function Readmembermid($mid)
		{
		$query = $this->db->prepare("SELECT *
		FROM(member)
		INNER JOIN(class)
		ON member.classid=class.classid
		INNER JOIN(part)
		ON member.partid=part.partid
		INNER JOIN(work)
		ON member.workid=work.workid
		WHERE member.mid=:mid");
		$query->bindParam("randomid",$randomid, PDO::PARAM_STR);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}

//**********************
		public function Readclass()
		{
		$query = $this->db->prepare("SELECT * FROM(class) WHERE chk=0 ORDER BY classupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
	
//**********************
		public function Readpart()
		{
		$query = $this->db->prepare("SELECT * FROM(part) WHERE chk=0 ORDER BY partupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
	
//**********************
		public function Readwork()
		{
		$query = $this->db->prepare("SELECT * FROM(work) WHERE chk=0 ORDER BY workupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
	
//**********************
		public function Readworkid($partid)
		{
		$query = $this->db->prepare("SELECT * FROM(work) WHERE partid=:partid AND chk=0");
		$query->bindParam("partid", $partid, PDO::PARAM_INT);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//**********************
		public function Readworkidd($partidd)
		{
		$query = $this->db->prepare("SELECT * FROM(work) WHERE partid=:partidd AND chk=0");
		$query->bindParam("partidd", $partidd, PDO::PARAM_INT);
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
	
//**********************
		public function Readworkpart()
		{
		$query = $this->db->prepare("SELECT *
		FROM(work)
		INNER JOIN(part)
		ON work.partid=part.partid
		WHERE work.chk=0 ORDER BY workupdate DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*******************
		public function Readassistant()
		{
		$query = $this->db->prepare("SELECT * FROM assistant WHERE chk=0 ORDER BY assistantid DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*******************
		public function Readdate()
		{
		$query = $this->db->prepare("SELECT *FROM datein ORDER BY dateinid DESC");
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*******************
		public function Readcheckdate()
		{
		$query = $this->db->prepare("SELECT *
		FROM(checkin)
		INNER JOIN(member)
		ON checkin.mid=member.mid
		WHERE checkin.mid=member.mid
		ORDER BY checkin.checkinid DESC
		"
		)
		;
		$query->execute();
		$data = array();
		while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row;
		}
		return $data;
		}
		
//*******************************CREATE*********************************************

//*****************
	public function Registerassistant($cls,$apname,$afname,$alname,$user,$pass,$chk,$assistantrecord){
	$query = $this->db->prepare("INSERT INTO assistant(cls,apname,afname,alname,user,pass,chk,assistantrecord)VALUES(:cls,:apname,:afname,:alname,:user,:pass,:chk,:assistantrecord)");
	$query->bindParam("cls", $cls, PDO::PARAM_STR);
	$query->bindParam("apname", $apname, PDO::PARAM_STR);
	$query->bindParam("afname", $afname, PDO::PARAM_STR);
	$query->bindParam("alname", $alname, PDO::PARAM_STR);
	$query->bindParam("user", $user, PDO::PARAM_STR);
	$query->bindParam("pass", $pass, PDO::PARAM_STR);
	$query->bindParam("chk", $chk, PDO::PARAM_INT);
	$query->bindParam("assistantrecord", $assistantrecord, PDO::PARAM_STR);
	$query->execute();
	return $this->db->lastInsertId();
	}
	
//*****************
	public function Registermember($pname,$fname,$lname,$classid,$partid,$workid,$email,$tel,$chk,$password,$ip,$memberdate){
	$query = $this->db->prepare("INSERT INTO member(pname,fname,lname,classid,partid,workid,email,tel,chk,password,ip,memberdate)VALUES(:pname,:fname,:lname,:classid,:partid,:workid,:email,:tel,:chk,:password,:ip,:memberdate)");
	$query->bindParam("pname", $pname, PDO::PARAM_STR);
	$query->bindParam("fname", $fname, PDO::PARAM_STR);
	$query->bindParam("lname", $lname, PDO::PARAM_STR);
	$query->bindParam("classid", $classid, PDO::PARAM_INT);
	$query->bindParam("partid", $partid, PDO::PARAM_INT);
	$query->bindParam("workid", $workid, PDO::PARAM_INT);
	$query->bindParam("email", $email, PDO::PARAM_STR);
	$query->bindParam("tel", $tel, PDO::PARAM_STR);
	$query->bindParam("chk", $chk, PDO::PARAM_INT);
	$query->bindParam("password", $password, PDO::PARAM_STR);
	$query->bindParam("ip", $ip, PDO::PARAM_STR);
	$query->bindParam("memberdate", $memberdate, PDO::PARAM_STR);
	$query->execute();
	return $this->db->lastInsertId();
	}
	
//*****************
	public function Registerclass($classname,$chk)
	{
	$query = $this->db->prepare("INSERT INTO class (classname,chk)VALUES(:classname,:chk)");
	$query->bindParam("classname", $classname, PDO::PARAM_STR);
	$query->bindParam("chk", $chk, PDO::PARAM_INT);
	$query->execute();
	return $this->db->lastInsertId();
	}
	
//*****************
	public function Registerpart($partname,$chk)
	{
	$query = $this->db->prepare("INSERT INTO part (partname,chk)VALUES(:partname,:chk)");
	$query->bindParam("partname", $partname, PDO::PARAM_STR);
	$query->bindParam("chk", $chk, PDO::PARAM_INT);
	$query->execute();
	return $this->db->lastInsertId();
	}
	
//*****************
	public function Registerwork($partid,$workname,$chk)
	{
	$query = $this->db->prepare("INSERT INTO work (partid,workname,chk)VALUES(:partid,:workname,:chk)");
	$query->bindParam("partid", $partid, PDO::PARAM_INT);
	$query->bindParam("workname", $workname, PDO::PARAM_STR);
	$query->bindParam("chk", $chk, PDO::PARAM_INT);
	$query->execute();
	return $this->db->lastInsertId();
	}
	

//*******************************UPDATE*********************************************

//*************************************อัปโหลดโลโก้
	public function UPimg($sdid,$newname){
	$query = $this->db->prepare("UPDATE setupdata SET img=:img	WHERE sdid=:sdid");
	$query->bindParam("sdid", $sdid, PDO::PARAM_INT);
	$query->bindParam("img", $newname, PDO::PARAM_STR);
	$query->execute();
	}

//************************อัปเดทตั้งค่าข้อมูล
	public function Updatesetupdata($sdid,$office,$system,$admin,$rootmail,$rootpass,$hostmail,$footer1,$footer2,$h1,$m1,$s1,$h2,$m2,$s2,$h3,$m3,$s3,$h4,$m4,$s4,$lat,$lon,$distance){
	$query = $this->db->prepare("UPDATE setupdata SET office=:office,system=:system,admin=:admin,rootmail=:rootmail,rootpass=:rootpass,hostmail=:hostmail,footer1=:footer1,footer2=:footer2,h1=:h1,m1=:m1,s1=:s1,h2=:h2,m2=:m2,s2=:s2,h3=:h3,m3=:m3,s3=:s3,h4=:h4,m4=:m4,s4=:s4,lat=:lat,lon=:lon,distance=:distance WHERE sdid=:sdid");
	$query->bindParam("sdid", $sdid, PDO::PARAM_INT);
	$query->bindParam("office", $office, PDO::PARAM_STR);
	$query->bindParam("system", $system, PDO::PARAM_STR);
	$query->bindParam("admin", $admin, PDO::PARAM_STR);
	$query->bindParam("rootmail", $rootmail, PDO::PARAM_STR);
	$query->bindParam("rootpass", $rootpass, PDO::PARAM_STR);
	$query->bindParam("hostmail", $hostmail, PDO::PARAM_STR);
	$query->bindParam("footer1", $footer1, PDO::PARAM_STR);
	$query->bindParam("footer2", $footer2, PDO::PARAM_STR);
	$query->bindParam("h1", $h1, PDO::PARAM_STR);
	$query->bindParam("m1", $m1, PDO::PARAM_STR);
	$query->bindParam("s1", $s1, PDO::PARAM_STR);
	$query->bindParam("h2", $h2, PDO::PARAM_STR);
	$query->bindParam("m2", $m2, PDO::PARAM_STR);
	$query->bindParam("s2", $s2, PDO::PARAM_STR);
	$query->bindParam("h3", $h3, PDO::PARAM_STR);
	$query->bindParam("m3", $m3, PDO::PARAM_STR);
	$query->bindParam("s3", $s3, PDO::PARAM_STR);
	$query->bindParam("h4", $h4, PDO::PARAM_STR);
	$query->bindParam("m4", $m4, PDO::PARAM_STR);
	$query->bindParam("s4", $s4, PDO::PARAM_STR);
	$query->bindParam("lat", $lat, PDO::PARAM_STR);
	$query->bindParam("lon", $lon, PDO::PARAM_STR);
	$query->bindParam("distance", $distance, PDO::PARAM_STR);
	$query->execute();
	}
	
//************************
	public function Updateassistant($assistantid,$apname,$afname,$alname,$pass)
	{
	$query = $this->db->prepare("UPDATE assistant SET apname=:apname,afname=:afname,alname=:alname,pass=:pass WHERE assistantid=:assistantid");
	$query->bindParam("assistantid", $assistantid, PDO::PARAM_INT);
	$query->bindParam("apname", $apname, PDO::PARAM_STR);
	$query->bindParam("afname", $afname, PDO::PARAM_STR);
	$query->bindParam("alname", $alname, PDO::PARAM_STR);
	$query->bindParam("pass", $pass, PDO::PARAM_STR);
	$query->execute();
	}
	
//************************
	public function Resetmember($mid,$password)
	{
	$query = $this->db->prepare("UPDATE member SET password=:password WHERE mid=:mid");
	$query->bindParam("mid", $mid, PDO::PARAM_INT);
	$query->bindParam("password", $password, PDO::PARAM_STR);
	$query->execute();
	}
	
//************************
	public function Updatemember($mid,$pname,$fname,$lname,$classid,$partid,$workid,$password)
	{
	$query = $this->db->prepare("UPDATE member SET pname=:pname,fname=:fname,lname=:lname,classid=:classid,partid=:partid,workid=:workid,password=:password WHERE mid=:mid");
	$query->bindParam("mid", $mid, PDO::PARAM_INT);
	$query->bindParam("pname", $pname, PDO::PARAM_STR);
	$query->bindParam("fname", $fname, PDO::PARAM_STR);
	$query->bindParam("lname", $lname, PDO::PARAM_STR);
	$query->bindParam("classid", $classid, PDO::PARAM_INT);
	$query->bindParam("partid", $partid, PDO::PARAM_INT);
	$query->bindParam("workid", $workid, PDO::PARAM_INT);
	$query->bindParam("password", $password, PDO::PARAM_STR);
	$query->execute();
	}
	
//************************
	public function Updateclass($classid,$classname)
	{
	$query = $this->db->prepare("UPDATE class SET classname=:classname WHERE classid=:classid");
	$query->bindParam("classid", $classid, PDO::PARAM_INT);
	$query->bindParam("classname", $classname, PDO::PARAM_STR);
	$query->execute();
	}
	
//************************
	public function Updatepart($partid,$partname)
	{
	$query = $this->db->prepare("UPDATE part SET partname=:partname WHERE partid=:partid");
	$query->bindParam("partid", $partid, PDO::PARAM_INT);
	$query->bindParam("partname", $partname, PDO::PARAM_STR);
	$query->execute();
	}
	
//************************
	public function Updatework($workid,$partid,$workname)
	{
	$query = $this->db->prepare("UPDATE work SET partid=:partid,workname=:workname WHERE workid=:workid");
	$query->bindParam("workid", $workid, PDO::PARAM_INT);
	$query->bindParam("partid", $partid, PDO::PARAM_INT);
	$query->bindParam("workname", $workname, PDO::PARAM_STR);
	$query->execute();
	}


//*******************************DELETE*********************************************

//************************
	public function Deleteassistant($assistantid){
	$query = $this->db->prepare("UPDATE assistant SET chk=1 WHERE assistantid=:assistantid");
	$query->bindParam("assistantid", $assistantid, PDO::PARAM_INT);
	$query->execute();
	}
	
//************************
	public function Deletemember($mid){
	$query = $this->db->prepare("UPDATE member SET chk=1 WHERE mid=:mid");
	$query->bindParam("mid", $mid, PDO::PARAM_INT);
	$query->execute();
	}
	
//************************
	public function Deleteclass($classid){
	$query = $this->db->prepare("UPDATE class SET chk=1 WHERE classid=:classid");
	$query->bindParam("classid", $classid, PDO::PARAM_INT);
	$query->execute();
	}
	
//************************
	public function Deletepart($partid){
	$query = $this->db->prepare("UPDATE part SET chk=1 WHERE partid=:partid");
	$query->bindParam("partid", $partid, PDO::PARAM_INT);
	$query->execute();
	}
	
//************************
	public function Deletework($workid){
	$query = $this->db->prepare("UPDATE work SET chk=1 WHERE workid=:workid");
	$query->bindParam("workid", $workid, PDO::PARAM_INT);
	$query->execute();
	}

//*******************************CHECK*********************************************
//*****************************
	public function Checkuser($user)
	{
	$query = $this->db->prepare(" SELECT * FROM assistant WHERE user=:user AND chk=0");
	$query->bindParam("user", $user, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}
	
//*****************************
	public function Checkemail($email)
	{
	$query = $this->db->prepare(" SELECT * FROM member WHERE email=:email AND chk=0");
	$query->bindParam("email", $email, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}
	
//*****************************
	public function Checktel($tel)
	{
	$query = $this->db->prepare(" SELECT * FROM member WHERE tel=:tel AND chk=0");
	$query->bindParam("tel", $tel, PDO::PARAM_STR);
	$query->execute();
	$data = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$data[] = $row;
	}
	return $data;
	}


}
?>