<?php
echo "1";
session_start();
echo "2";
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
$bod_id=$_GET['bod_id'];

$name=$_POST['name'];
$bod_img=$_POST['bod_img'];
$oth1=$_POST['oth1'];
$oth2=$_POST['oth2'];
//$bod_id=$_POST['bod_id'];
echo " bod_id: ";
echo $bod_id;
echo " name: ";
echo $name;
echo " rank: ";
echo $oth1;
echo " position: ";
echo $oth2;
echo " bodimg: ";
echo $bod_img;
echo " huhuhu";


$sql="update board_of_director set name=:name,bod_img=:bod_img,oth1=:oth1,oth2=:oth2 where bod_id=:bod_id";
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