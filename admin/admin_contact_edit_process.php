<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
$id=$_GET['id'];
$email=$_POST['email'];
$phone_num=$_POST['phone_num'];
$address=$_POST['address'];
$facebook=$_POST['facebook'];
$website=$_POST['website'];


$sql="update contact set phone_num=:phone_num,email=:email,address=:address,facebook=:facebook,website=:website where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':phone_num',$phone_num,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':facebook',$facebook,PDO::PARAM_STR);
$query->bindParam(':website',$website,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);

$query->execute();

$msg="Data updated successfully";

print " ";
		header( "refresh:0;url=admin_contact.php" );



}


	?>