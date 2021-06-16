<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
$id=$_GET['id'];





	?>



<!DOCTYPE html>
<html lang="en">


<head><title>Content Management - Content</title>
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
				<a href=admin_mgmt.php><button class="btn btn-sm btn-warning " type="submit"><span style="font-size:13px;">&#8672; </span>Back</button></a>
				</div>&nbsp;
				<div class="navbar-brand" style="font-size:13px;" >Contact Us</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
			</nav>
        </div>
        <!-- /.container-fluid -->
    </nav>
		</div><div id="body">
		
		
		<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
		
		<div class="col-sm-12">
		<label class="col-sm-6">Edit Contact</label>
		<table border=1 align=center class=table >
		
		<tbody>

<?php 

$sql = "SELECT * from contact where id=:id";
$query = $dbh -> prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<div class="col-sm-12">
		<div class="justify-content-center">
		<form class="form-horizontal col-sm-10 " action="admin_contact_edit_process.php?id=<?php echo htmlentities($result->id);?>" method="post"><div class="form-group" >
		<div class=row>
		<div class=col-3>Phone : <input type="text" id="phone_num" name="phone_num" class="form-control " placeholder="Phone Number" value="<?php echo htmlentities($result->phone_num);?>"></div>
		<div class=col-9>Email Address : <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo htmlentities($result->email);?>"></div></div>
		Address : <input type="text" class="form-control col-12" name="address" placeholder="Address" value="<?php echo htmlentities($result->address);?>">
		Facebook Address : <input type="text" class="form-control col-12" name="facebook" placeholder="Facebook Address" value="<?php echo htmlentities($result->facebook);?>">
		Website Address : <input type="text" class="form-control col-12" name="website" placeholder="Website Address" value="<?php echo htmlentities($result->website);?>"><br>
		<button type=submit class="btn btn-primary my-2 my-sm-0">Save</button>
		</div>
		</div></div></div></form>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
		
		</table></div>
		
		
     
    </div>    </div></div>
	
	    
	<br><br><br><br><br><br><br>

</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

