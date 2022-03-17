<?php 
// header("Content-type:application/json"); 
include("database.php");

class Application{


	function testInput($data)
	{

		$data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
	}


	function registerUser($firstName,$lastName,$email,$password,$cpwd,$resgisterType)
	{
	$msg = "";
	$db = DB();

	// check if user is already registered
	$stmt =$db->prepare("SELECT * FROM users");
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($data>0) {
		echo '<div class="alert alert-danger" role="alert">User already exist</div>';
	}else{

		if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $firstName)) {
			echo '<div class="alert alert-danger" role="alert">Only characters allowed</div>';
		}else if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $lastName)) {
			echo '<div class="alert alert-danger" role="alert">Only characters allowed</div>';
			
		}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo '<div class="alert alert-danger" role="alert">Invalid email</div>';

		}elseif(strlen($password)<6){
			echo '<div class="alert alert-danger" role="alert">Password too short</div>';

		}elseif($password != $cpwd){
			echo '<div class="alert alert-danger" role="alert">Password does not match</div>';

		}

		else {

			// after all validations are meet
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
	}
}

	

	


public function sendLink($email){
			$dbh = DB();

			// validate email
			
				try{

					// checking if user email already exist in the  system
					$stmt = $dbh->prepare("SELECT * FROM users  WHERE email = ?");
					$stmt->execute([$email]);
					while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
						$id = $data['id'];


						// Send email to user with the token in a link they can click on
							$to = $email;
							
							$subject = "Account Activation";
							
						// $msg = "Hi there, click on below link to reset your password<br> <a href=\"new_password.php?token=" . $token . "\">link</a>";

		$msg = "Click <a href='www.xsoftgh.com/booking/admin/activate.php?id=$id'>here</a> to activate your account";
									
							   

		  
		   	$headers[] = 'MIME-Version: 1.0';
		   	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		   
		   $email_sent = mail($to, $subject, $msg, implode("\r\n", $headers));
		   if ($email_sent) {
		   		return true;
		   		header('Location: activate.php?email=' . $email);
		   }else {
		   	return false;
		   }
	


			}
		}catch(ErrorException $ex){
			echo "Message: ".$ex->getMessage();
		}

}


public function verification($token){
		$dbh = DB();
		
		
		$stmt = $dbh->prepare("UPDATE users SET verified = 'yes' WHERE id = ?");
		$stmt->execute([$token]);
		$row = $stmt->rowCount();
		if ($row>0) {
			return true;
		}else {
			return false;
		}

	}
			

		
	

// login user
function loginUser($email,$password)
{
	$db = DB();
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		return false;
	}else {

		$stmt = $db->prepare("SELECT * FROM users WHERE email=?");
	$stmt->execute([$email]);
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

		if (password_verify($password, $row['password']) == "true") {
			return $row;
			
		}else {
			return false;
		}
	}
	
}

	
}



// Forget Password logic
public function forgetPassword($email){
			$dbh = DB();

			// validate email
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				return false;
			}else {

				try{

					// checking if user email already exist in the  system
					$stmt = $dbh->prepare("SELECT email,password FROM users  WHERE email = ?");
					$stmt->execute([$email]);
					while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
						$email = $data['email'];
						$id = $data['id'];


					


							
							// // Send email to user with the token in a link they can click on
							$to = $email;
							
							$subject = "Please reset your password";
							
						// $msg = "Hi there, click on below link to reset your password<br> <a href=\"new_password.php?token=" . $token . "\">link</a>";

		$msg = "Click <a href='www.xsoftgh.com/booking/admin/new_password.php?id=$id' >here</a> to reset your password";
									
							   

		  
		   	$headers[] = 'MIME-Version: 1.0';
		   	$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		   
		   $email_sent = mail($to, $subject, $msg, implode("\r\n", $headers));
		   if ($email_sent) {
		   		return true;
		   		// header('Location: new_password.php?email=' . $email);
		   }else {
		   	return false;
		   }
	


			}
		}catch(ErrorException $ex){
			echo "Message: ".$ex->getMessage();
		}

	}
	// end of else
}


public function newPassword($password,$id){
		$dbh = DB();
		

		

	$new_password = password_hash($password, PASSWORD_DEFAULT);
	$stmt = $dbh->prepare("UPDATE users SET password = ? WHERE id = ?");
	$stmt->execute([$new_password,$id]);
	$row = $stmt->rowCount();
	if ($row>0) {
		return true;
	}else {
		return false;
	}


}



function insertLandData($firstName,$lastName,$email,$phone,$buying_date,$size,$alloc_number){
	$db=DB();

	if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $firstName)) {
			echo '<div class="alert alert-danger" role="alert">Only characters allowed</div>';
		}else if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $lastName)) {
			echo '<div class="alert alert-danger" role="alert">Only characters allowed</div>';
			
		}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo '<div class="alert alert-danger" role="alert">Invalid email</div>';

		}elseif(strlen($phone)<10){
			echo '<div class="alert alert-danger" role="alert">Incorrect Number</div>';

		}else {

			$stmt=$db->prepare("INSERT INTO land(firstName,lastName,email,phone,buyer_date,plot_size,allocation_number) VALUES(?,?,?,?,?,?,?)");
	$stmt->execute([$firstName,$lastName,$email,$phone,$buying_date,$size,$alloc_number]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}

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