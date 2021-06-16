<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$staff_id=$_POST['staff_id'];
$staff_password=$_POST['staff_password'];

$sql ="SELECT staff_id,staff_password FROM staff_login WHERE staff_id=:staff_id and staff_password=:staff_password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
$query-> bindParam(':staff_password', $staff_password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

print $query->errorCode();
print_r($query->errorInfo()) ;
echo "$staff_id, $staff_password";
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['staff_id'];
$_SESSION['staff_id'] = $staff_id;
$_SESSION['staff_id']=$staff_id;
//echo "<script type='text/javascript'> document.location = 'admin_dashboard.php'; </script>";

header( "refresh:0;url=staff_dashboard.php" );

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
	
		<center><b><h1>Staff Dashboard</b><h1>
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
		
		<select name="staff_id" class="form-control" required="required">
  			<option value="MD1">Suhaimi Bin Mohd. Yunus</option>
  			<option value="HQ1">Zameri Bin Uyob</option>
  			<option value="HQ2">Awallyza Binti Abdullah</option>
  			<option value="HQ3">Mohd. Mukhairi Bin Osman</option>
			<option value="HQ4">Noor Hayati Binti Hussain</option>
  			<option value="HQ5">Norul Shahira Binti Zakaria</option>
  			<option value="HQ6">Hafizzudin Bin Salleh</option>
  			<option value="HQ7">Rohfiqzal Bin Habib Mohamed</option>
			<option value="HQ8">Mohd. Zariss Bin Ishak</option>
  			<option value="HQ9">Mohd. Nuraswad Bin Idris</option>
  			<option value="HQ36">Umar Qayyum Bin Zainal</option>
</select>
		</div>
		</div>
		<div class="form-group">
		
		<div class="col-sm-12">		
		<input type="password" class="form-control" name="staff_password" placeholder="Password" required="required">
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

