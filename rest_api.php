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
	// $stmt =$db->prepare("SELECT * FROM users");
	// $stmt->execute();
	// $data = $stmt->fetch(PDO::FETCH_ASSOC);
	// if ($data>0) {
	// 	echo '<div class="alert alert-danger" role="alert">User already exist</div>';
	// }

	// else{

		

		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
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
	// }
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
public function loginUser($email,$password)
{
	$db = DB();
	// if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	// 	return false;
	// }else {

		$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
	$stmt->execute([$email]);
	$data = $stmt->fetchAll();

		foreach($data as $row){
			$db_password = $row['password'];
			if (password_verify($password, $db_password)) {
			return $data;
			
		}else {
			return false;
		}

		}
		
		
// }

	
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


// Insert land data into the database
public function insertLandData(array $propertyData){

	// Access individual parameters using array keys
	$seller = $propertyData['seller'];
	$status = $propertyData['status'];
	$propertyType = $propertyData['prop_type'];
	$cost = $propertyData['cost'];
	$location = $propertyData['location'];
	$witness = $propertyData['witness'];
	$size = $propertyData['size'];
	$note = $propertyData['note'];

	$db=DB();

	$stmt=$db->prepare("INSERT INTO land(seller,status,propertyType,cost,location,witness,size,note) VALUES(?,?,?,?,?,?,?,?)");
	$stmt->execute([$seller,$status,$propertyType,$cost,$location,$witness,$size,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}
}

// Add customer info
public function addCustomerData(array $customerData){

	// Access individual parameters using array keys
	$name = $customerData['name'];
	$source = $customerData['source'];
	$email = $customerData['email'];
	$mobile = $customerData['mobile'];
	$whatsapp = $customerData['whatsapp'];
	$location = $customerData['location'];
	$level = $customerData['level'];
	$note = $customerData['note'];

	$db=DB();

	$stmt=$db->prepare("INSERT INTO customers(cust_name,source,email,mobile,whatsapp,location,level,note) VALUES(?,?,?,?,?,?,?,?)");
	$stmt->execute([$name,$source,$email,$mobile,$whatsapp,$location,$level,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}
}

// Project Management
public function addProjectData(array $projectData){

	// Access individual parameters using array keys
	$name = $projectData['name'];
	$priority = $projectData['priority'];
	$assigned = $projectData['assigned'];
	$start_date = $projectData['start_date'];
	$end_date = $projectData['end_date'];
	$location = $projectData['location'];
	$cost = $projectData['cost'];
	$note = $projectData['note'];

	$db=DB();

	$stmt=$db->prepare("INSERT INTO projects(proj_name,priority,assigned,start_date,
		end_date,location,cost,note) VALUES(?,?,?,?,?,?,?,?)");
	$stmt->execute([$name,$priority,$assigned,$start_date,$end_date,$location,$cost,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}
}

// Purchases
public function addPurchaseData(array $purchaseData){

	// Access individual parameters using array keys
	$buyer = $purchaseData['buyer'];
	$property = $purchaseData['property'];
	$location = $purchaseData['location'];
	$mobile = $purchaseData['mobile'];
	$whatsapp = $purchaseData['whatsapp'];
	$proposed_date = $purchaseData['proposed_date'];
	$delivery_date = $purchaseData['delivery_date'];
	$value = $purchaseData['value'];
	$note = $purchaseData['note'];

	$db=DB();

	$stmt=$db->prepare("INSERT INTO purchase(buyer,property,location,mobile,whatsapp,proposed_date,
		delivery_date,value,note) VALUES(?,?,?,?,?,?,?,?,?)");
	$stmt->execute([$buyer,$property,$location,$mobile,$whatsapp,$proposed_date,
		$delivery_date,$value,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}
}

// booking
public function bookings(array $bookingData){

	// Access individual parameters using array keys
	$buyer = $bookingData['client'];
	$property = $bookingData['property_type'];
	$mobile = $bookingData['mobile'];
	$email = $bookingData['email'];
	$visit_date = $bookingData['visit_date'];
	$budget = $bookingData['budget'];
	$note = $bookingData['note'];

	try{

		$db=DB();

	$stmt=$db->prepare("INSERT INTO booking(client,property,mobile,email,visit_date,
		budget,note) VALUES(?,?,?,?,?,?,?)");
	$stmt->execute([$buyer,$property,$mobile,$email,$visit_date,$budget,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}

	}catch(PDOException $ex){
		return $ex->getMessage();
	}

	

}

// agencies
public function agencies(array $agencyData){

$fields = array('agent_company','mobile','email','note');
foreach ($fields as $keys) {
	if (!array_key_exists($keys, $agencyData)) {
		return false;
	}
}

	// Access individual parameters using array keys
	$agent = $agencyData['agent_company'];
	$mobile = $agencyData['mobile'];
	$email = $agencyData['email'];
	$note = $agencyData['note'];

	try{

		$db=DB();

	$stmt=$db->prepare("INSERT INTO agent(agent,mobile,email,note) VALUES(?,?,?,?)");
	$stmt->execute([$agent,$mobile,$email,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}

	}catch(PDOException $ex){
		return $ex->getMessage();
	}

}

// payment
public function payment(array $paymentData){

$fields = array("customer","paid","balance","note");
	foreach ($fields as $keys) {
		if (!array_key_exists($keys, $paymentData)) {
			return false;
		}
	}

	// Access individual parameters using array keys
	$customer = $paymentData['customer'];
	$amount_paid = $paymentData['paid'];
	$balance = $paymentData['balance'];
	$note = $paymentData['note'];

	try{

		$db=DB();

	$stmt=$db->prepare("INSERT INTO payment(customer,paid,balance,note) VALUES(?,?,?,?)");
	$stmt->execute([$customer,$amount_paid,$balance,$note]);
	$inserted = $stmt->rowCount();
	if ($inserted) {
		return true;
	}else {
		return false;
	}

	}catch(PDOException $ex){
		return $ex->getMessage();
	}

}


// display all agent
public function getAgent(){
	try{
		$db = DB();
	$stmt =$db->prepare("SELECT * FROM agent");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}catch(PDOException $ex){
	return $ex->getMessage();
}
}

	





// display all booking
public function getBooking(){
	$db = DB();
	$stmt =$db->prepare("SELECT * FROM booking");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
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

// display all lands info
public function getLands(){
	$db = DB();
	$stmt =$db->prepare("SELECT * FROM land");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

// display all customer info.
public function getCustomers(){
	$db = DB();
	$stmt =$db->prepare("SELECT * FROM customers");
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

//get all projects
public function getProjects(){
	$db = DB();
	$stmt =$db->prepare("SELECT * FROM projects");
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