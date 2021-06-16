<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

$anc_id=$_POST['anc_id'];
$anc_title=$_POST['anc_title'];
$anc_content=$_POST['anc_content'];
$anc_date=$_POST['anc_date'];
$anc_month=$_POST['anc_month'];
$anc_year=$_POST['anc_year'];



$sql="insert into announcement(anc_id,anc_title,anc_content,anc_date,anc_month,anc_year) values(:anc_id,:anc_title,:anc_content,:anc_date,:anc_month,:anc_year)";
$query = $dbh->prepare($sql);
$query->bindParam(':anc_id',$anc_id,PDO::PARAM_STR);
$query->bindParam(':anc_title',$anc_title,PDO::PARAM_STR);
$query->bindParam(':anc_content',$anc_content,PDO::PARAM_STR);
$query->bindParam(':anc_date',$anc_date,PDO::PARAM_STR);
$query->bindParam(':anc_month',$anc_month,PDO::PARAM_STR);
$query->bindParam(':anc_year',$anc_year,PDO::PARAM_STR);

$query->execute();


		header( "refresh:0;url=admin_anc.php" );



}


	?>