<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
$m_id=$_GET['m_id'];

$m_name=$_POST['m_name'];
$m_img=$_POST['m_img'];
$m_years_of_service=$_POST['m_years_of_service'];
$m_position=$_POST['m_position'];




$sql="update management set m_name=:m_name,m_img=:m_img,m_years_of_service=:m_years_of_service,m_position=:m_position where m_id=:m_id";
$query = $dbh->prepare($sql);
$query->bindParam(':m_name',$m_name,PDO::PARAM_STR);
$query->bindParam(':m_img',$m_img,PDO::PARAM_STR);
$query->bindParam(':m_years_of_service',$m_years_of_service,PDO::PARAM_STR);
$query->bindParam(':m_position',$m_position,PDO::PARAM_STR);
$query->bindParam(':m_id',$m_id,PDO::PARAM_STR);

$query->execute();


		header( "refresh:0;url=admin_mgmt.php" );



}


	?>