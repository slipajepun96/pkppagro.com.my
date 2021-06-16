<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
$a_id=$_GET['a_id'];
$a_title=$_POST['a_title'];
$a_content=$_POST['a_content'];
$a_carousel=$_POST['a_carousel'];




$sql="update activity set a_title=:a_title,a_carousel=:a_carousel,a_content=:a_content where a_id=:a_id";
$query = $dbh->prepare($sql);
$query->bindParam(':a_id',$a_id,PDO::PARAM_STR);
$query->bindParam(':a_carousel',$a_carousel,PDO::PARAM_STR);
$query->bindParam(':a_title',$a_title,PDO::PARAM_STR);
$query->bindParam(':a_content',$a_content,PDO::PARAM_STR);

$query->execute();


		header( "refresh:0;url=admin_activity.php" );



}


	?>