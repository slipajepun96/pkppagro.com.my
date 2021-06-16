<?php
echo "a";
session_start();
echo "a";
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');echo "b";
}
else{ 
echo "c";
if(isset($_FILES['j_filename'])){
      $errors= array();
      $file_name = $_FILES['j_filename']['name'];
      $file_size = $_FILES['j_filename']['size'];
      $file_tmp = $_FILES['j_filename']['tmp_name'];
      $file_type = $_FILES['j_filename']['type'];
     echo "d";
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../file_upload/".$file_name);
         echo "Success";echo "e";
      }else{
         print_r($errors);
      }
   }echo "a";
 echo $_FILES['j_filename']['name']; 
 $j_filename=$_FILES['j_filename']['name'];  echo "a";
 echo $j_filename;
echo "a";
$j_id=$_POST['j_id'];
$position=$_POST['position'];
$j_description=$_POST['j_description'];
//$a_content=$_POST['a_content'];
echo "3";
$sql="insert into jobs(j_id,position,j_description,j_filename) values(:j_id,:position,:j_description,:j_filename)";
$query = $dbh->prepare($sql);
$query->bindParam(':j_id',$j_id,PDO::PARAM_STR);
$query->bindParam(':position',$position,PDO::PARAM_STR);
$query->bindParam(':j_description',$j_description,PDO::PARAM_STR);
$query->bindParam(':j_filename',$j_filename,PDO::PARAM_STR);
echo "2";
$query->execute();
echo "12";

		header( "refresh:10;url=admin_jobs.php" );



}


	?>