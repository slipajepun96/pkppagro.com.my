<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	echo "3";
header('location:index.php');
}
else{ 

$m_name=$_POST['m_name'];
$m_img=$_POST['m_img'];
$m_id=$_POST['m_id'];
$m_position=$_POST['m_position'];
$m_years_of_service=$_POST['m_years_of_service'];





$sql="insert into management(m_id,m_name,m_position,m_years_of_service,m_img) values(:m_id,:m_name,:m_position,:m_years_of_service,:m_img)";
$query = $dbh->prepare($sql);
$query->bindParam(':m_id',$m_id,PDO::PARAM_STR);
$query->bindParam(':m_name',$m_name,PDO::PARAM_STR);
$query->bindParam(':m_position',$m_position,PDO::PARAM_STR);
$query->bindParam(':m_years_of_service',$m_years_of_service,PDO::PARAM_STR);
$query->bindParam(':m_img',$m_img,PDO::PARAM_STR);

$query->execute();

$msg="Data updated successfully";


		header( "refresh:0;url=admin_mgmt.php" );



}


	?>