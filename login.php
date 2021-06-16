<?php
session_start();
include('includes/config.php');
echo "5";
if(isset($_POST['login']))
{
	echo "4";
$username=$_POST['username'];
$password=$_POST['password'];

$sql ="SELECT admin_username,admin_password FROM cms_account WHERE admin_username=:username and admin_password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
echo "1";

} else{

  echo "<script>alert('Invalid Details');</script>";
echo "2";
}
echo "3";
}
echo"6";
?>