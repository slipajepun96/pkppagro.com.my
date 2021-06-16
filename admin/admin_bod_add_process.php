<?php
echo "1";
session_start();
echo "2";
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	echo "3";
header('location:index.php');
}
else{ 

$name=$_POST['name'];
$bod_img=$_POST['bod_img'];
$oth1=$_POST['oth1'];
$oth2=$_POST['oth2'];
$bod_id=$_POST['bod_id'];
echo $name;
echo "1";



$sql="insert into board_of_director(name,bod_img,oth1,oth2,bod_id) values(:name,:bod_img,:oth1,:oth2,:bod_id)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':bod_img',$bod_img,PDO::PARAM_STR);
$query->bindParam(':oth1',$oth1,PDO::PARAM_STR);
$query->bindParam(':oth2',$oth2,PDO::PARAM_STR);
$query->bindParam(':bod_id',$bod_id,PDO::PARAM_STR);

$query->execute();

$msg="Data updated successfully";

print "Update Succesfull";
		header( "refresh:0;url=admin_bod.php" );



}


	?>