<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
	//


	
	
}

 ?>
<!DOCTYPE html>
<html lang="en">


<head><title>Content Management - Contact Information</title>
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="dist/js/bootstrap.js">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-grid.css">




</head>
<div id="container">
   <div id="header">
   

<body link=ffffff alink=ffffff vlink=ffffff>
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.slim.min.js" ></script>
  <script src="js/popper.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>
<?php 
SESSION_START();

	$username=$_SESSION['username'];

	if(!$_SESSION['username'])
	{ header('Location: index.php');
}
	?><div class="header">


		 
            <!-- /.navbar-collapse -->
			<?php include('includes/lowheader.php');?>
			<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
				<div class="form-inline my-2 my-lg-0">
				<a href=admin_dashboard.php><button class="btn btn-sm btn-warning " type="submit"><span style="font-size:13px;">&#8672; </span>Back</button></a>
				</div>&nbsp;
				<div class="navbar-brand" style="font-size:13px;" >Contact Information</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
			</nav>
        </div>
        <!-- /.container-fluid -->
    </nav>
		</div><div id="body">
		<br><br><br><br>
		<div id="file-address"><center>Contact Information</div>
		<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="alert alert-warning" role="alert"><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div></div><?php }?>
		&nbsp;&nbsp;&nbsp;<br><br>
		<div class="col-sm-12">
		<table border=1 align=center class=table >
		<thead class=thead-dark><tr><th>Phone Number</th><th>Email</th><th>Address</th><th>Facebook Address</th><th>Website</th><th> </th></tr><thead>
		<tbody>

<?php $sql = "SELECT * from contact";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											
											<td><?php echo htmlentities($result->phone_num);?></td>
											<td><?php echo htmlentities($result->email);?></td>
											<td><?php echo htmlentities($result->address);?></td>
											<td><?php echo htmlentities($result->facebook);?></td>
											<td><?php echo htmlentities($result->website);?></td>
											<td><a href="admin_contact_edit.php?id=<?php echo $result->id;?>">Edit</i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
		
		</table></div>	
		
     
    </div>    </div></div>
	
	    
	<br><br><br><br><br><br><br>
</center>
</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

