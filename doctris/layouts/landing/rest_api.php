<?php 
// header("Content-type:application/json"); 
include("database.php");

class Application{

	function registerUser($firstName,$lastName,$email,$password,$resgisterType){
	$msg = "";
	$db = DB();
	$secured_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $db->prepare("INSERT INTO users(firstName,lastName,email,password,registerType) VALUES(?,?,?,?,?)");
$stmt->execute([$firstName,$lastName,$email,$secured_password,$resgisterType]);
$inserted = $stmt->rowCount();
if ($inserted>0) {
	return true;
	
}else {
	

	return false;
}

	
}

function loginUser($email,$password){

	$db = DB();
	$stmt = $db->prepare("SELECT * FROM users WHERE email=?");
	$stmt->execute([$email]);
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

		if (password_verify($password, $row['password']) == "true") {
			return $row;
			
		}else {
			return false;
		}
	}
	

	
	// if (password_verify($password, $data['password'])) {
	// 	if (count($data)>0) {
	// 		return $data;
	// 	}else {
	// 		return false;
	// 	}
	// }else {
	// 	return false;
	// }

}
	

function insertLandData($firstName,$lastName,$email,$phone,$buying_date,$size,$alloc_number){
	$db=DB();
	$stmt=$db->prepare("INSERT INTO land(firstName,lastName,email,phone,buyer_date,plot_size,allocation_number) VALUES(?,?,?,?,?,?,?)");
	$stmt->execute([$firstName,$lastName,$email,$phone,$buying_date,$size,$alloc_number]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}
}

function sitePlanUpload($file_name,$id){
	$dbs = DB();

	 

		$dir = "siteplans/";
		$file_name = $_FILES['photo']['name'];
		$file_size = $_FILES['photo']['size'];
		$file_type = $_FILES['photo']['type'];
		$file_tmp = $_FILES['photo']['tmp_name'];

		$test_file = $dir.basename($_FILES["photo"]["name"]);
		$file_ext = pathinfo($test_file, PATHINFO_EXTENSION);

		$extensions= array("jpeg","jpg","png","gif","pdf");

		if(in_array($file_ext,$extensions) === false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size > 4097152) {
		$errors[]='File size must be exactly 2MB';
		}

		if (empty($errors)==true) {

			move_uploaded_file($file_tmp, "siteplans/".$file_name);
			
		}

		try{

		
			

$stmt = $dbs->prepare("UPDATE land SET site_plan=? WHERE id=?");
			$stmt->execute(array($dir.$file_name,$id));
			$inserted = $stmt->rowCount();
			if($inserted>0){
				return true;
			}else {
				return false;
			}
		}catch(PDOException $ex){
			return $ex->getMessage();
		}
}

function getLands(){
	$db = DB();
	$stmt =$db->prepare("SELECT * FROM land");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

function uploadSignature($file_name,$id){
	$dbs = DB();

		$dir = "signatures/";
		$file_name = $_FILES['photo']['name'];
		$file_size = $_FILES['photo']['size'];
		$file_type = $_FILES['photo']['type'];
		$file_tmp = $_FILES['photo']['tmp_name'];

		$test_file = $dir.basename($_FILES["photo"]["name"]);
		$file_ext = pathinfo($test_file, PATHINFO_EXTENSION);

		$extensions= array("jpeg","jpg","png","gif","pdf");

		if(in_array($file_ext,$extensions) === false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		if($file_size > 4097152) {
		$errors[]='File size must be exactly 2MB';
		}

		if (empty($errors)==true) {

			move_uploaded_file($file_tmp, "signatures/".$file_name);
			
		}

		try{

		
			

$stmt = $dbs->prepare("UPDATE land SET signature=? WHERE id=?");
			$stmt->execute(array($dir.$file_name,$id));
			$inserted = $stmt->rowCount();
			if($inserted>0){
				return true;
			}else {
				return false;
			}
		}catch(PDOException $ex){
			return $ex->getMessage();
		}
}

function landBought(){
	$db = DB();
	$stmt = $db->prepare("SELECT * FROM trash");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;

}

}







?>