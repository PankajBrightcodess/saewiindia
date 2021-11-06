<?php
session_start();
include_once  'database.php';
if(isset($_POST['save']))
{	 
	 $firstname = $_POST['firstname'];
	 $middlename = $_POST['middlename'];
	 $lastname = $_POST['lastname'];

     $fathername = $_POST['fathername'];
	 $mothername = $_POST['mothername'];
	 $dob = $_POST['dob'];
     $occupation = $_POST['occupation'];
	 $address1 = $_POST['address1'];
	 $address2 = $_POST['address2'];
     $address3 = $_POST['address3'];
	 $town = $_POST['town'];
	 $state1 = $_POST['state'];
     $pincode = $_POST['pincode'];
	 $contactno = $_POST['contactno'];
	 $email = $_POST['email'];
	 $amount = $_POST['amount'];
     $addesd_on = date('Y-m-d H:i:s');
	 $order_no=strtoupper(random_string(8)).random_number(8).random_string(4); 
    //  echo '<pre>';
    // print_r($amount);die;
    //  $photo = $_POST['photo'];
	 $sql = "INSERT INTO  sa_registration (firstname,middlename,lastname,order_no,fathername,mothername,dob,occupation,address1,address2,address3,town,state,pincode,contactno,email,amount,added_on)
	 VALUES ('$firstname','$middlename','$lastname','$order_no','$fathername','$mothername','$dob','$occupation','$address1','$address2','$address3','$town','$state1','$pincode','$contactno','$email','$amount','$addesd_on')";
	 if (mysqli_query($conn, $sql)) {
		$_SESSION['msg']="Records Added Successfully !!!";
		$_SESSION['last_inst_id']=$conn->insert_id; 
       header('location:payment.php');
	 } else {
		$_SESSION['msg']="Records Not Added !!!";
       header('header:registrationform.php');
	 }
}
function random_number($l){
	$num=range(0,9);
	   shuffle($num);
	   $res="";
	   for ($i=0; $i<$l; $i++) {      
		  $res.=$num[$i];    
	   }    
	   return ($res);
	}
	function random_string($length){
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randstring = '';
		for ($i = 0; $i < $length; $i++) {
			$randstring .= $characters[rand(0, strlen($characters)-1)];
		}
		return $randstring;
	}
?>

