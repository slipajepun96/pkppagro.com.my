<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
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
$_SESSION['s_nric'] = $s_nric;
		$_SESSION['username']=$username;
//echo "<script type='text/javascript'> document.location = 'admin_dashboard.php'; </script>";

header( "refresh:0;url=admin_dashboard.php" );

} else{

  echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
<head><title>Frontpage</title>
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">-->
<meta charset="utf-8">
</head>
<div id="container">
   <div id="header">
   

<body link=ffffff alink=ffffff vlink=ffffff > <div class="header">
 <br>
   <br>
   <br>
<div class="home">
	
		<center><b><h1>Content Management</b><h1>
		</center>
		</div>
		   
		
		
		<center>
    <article class="v-box"><div class="element">
<form class="form-horizontal" method=post >
	<table height=75%><tr><td align=center>
	<font color=white>
	    <!--<div class="box">-->
      <h3>Login</h3>
		<div class="form-group">
		
		<div class="col-sm-12">
		<input type="text" class="form-control" name="username" placeholder="Username" required="required"><br>
		</div>
		</div>
		<div class="form-group">
		
		<div class="col-sm-12">		
		<input type="password" class="form-control" name="password"placeholder="Password" required="required">
		</div><br><br>
		<button type="submit" name="login" class="btn btn-success">Login</button>
		</div>
		<br>
		
    </div>
        </div>
</td></tr></table></form>

</center>


</body>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
		  
     
    
</html>

