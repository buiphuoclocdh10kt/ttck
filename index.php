<?php 
require("ultils/main.php");
//require("includes/database.php");
require("model/baiviet_db.php");
require("model/nguoidung_db.php");

//$loaiphong_db = new LOAIPHONG();
$baiviet_db = new BAIVIET();
$nguoidung_db=new NGUOIDUNG();


if(isset($_REQUEST["action"])){
	$action = $_REQUEST["action"];
}
else{
	$action="macdinh"; 
}

switch($action){
	case "macdinh":		
		//$ds_phong = $phong_db->getAll();
		$ds_baiviet = $baiviet_db->getDataPaging($tongsodong);
		//$ds_baiviet = $baiviet_db->getAll();
		$ds_baiviet = $baiviet_db->getFullData();
		include("homekh.php");
		break;
	case "single":
		if(isset($_REQUEST["ma"]))
			$khoa = $_REQUEST["ma"];
		$baiviet = $baiviet_db->getRowById($khoa);
		$ds_baiviet = $baiviet_db->getAll();
		//$baiviet = $baiviet_db->getFullData2();
		include("single.php");
		break;
	case "timkiem":
		$ds_baiviet = $baiviet_db->getDataPaging($tongsodong);
		if(isset($_REQUEST["txttimkiem"]))
		{
			$noidung = $_REQUEST["txttimkiem"];
		}
		$ds_baiviet=$baiviet_db->timkiem($noidung);
		include("timkiem.php");
		break;
	
	default:
		break;
}
?>
