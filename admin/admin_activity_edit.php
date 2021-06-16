<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
$a_id=$_GET['a_id'];





	?>



<!DOCTYPE html>
<html lang="en">


<head><title>Content Management - Activity</title>
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
				<a href=admin_activity.php><button class="btn btn-sm btn-warning " type="submit"><span style="font-size:13px;">&#8672; </span>Back</button></a>
				</div>&nbsp;
				<div class="navbar-brand" style="font-size:13px;" >Activity</div>
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
		<label class="col-sm-6">Edit Activity</label>
		<table border=1 align=center class=table >
		
		<tbody>

<?php 

$sql = "SELECT * from activity where a_id=:a_id";
$query = $dbh -> prepare($sql);
$query->bindParam(':a_id',$a_id,PDO::PARAM_STR);
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
		<form class="form-horizontal col-sm-10 " action="admin_activity_edit_process.php?a_id=<?php echo htmlentities($result->a_id);?>" method="post"><div class="form-group" >
		<div class=row>
		<div class=col-3>ID : <input type="text" id="a_id" name="a_id" class="form-control " placeholder="ID" value="<?php echo htmlentities($result->a_id);?>" disabled></div>
		<div class=col-3>Carousel : <input type="text" id="a_carousel" name="a_carousel" class="form-control " placeholder="Carousel image name" value="<?php echo htmlentities($result->a_carousel);?>"></div>
		<div class=col-12>Activity Name : <input type="text" id="a_title" name="a_title" class="form-control" placeholder="Activity Name" value="<?php echo htmlentities($result->a_title);?>"></div></div>
		<div class="form-group">
		<label for="exampleFormControlTextarea1">Activity Content :</label>
		<textarea class="form-control" wrap name="a_content" id="a_content" rows="20" placeholder="Activity Content and images(in html tags)"><?php echo htmlentities($result->a_content);?></textarea>
		</div>
		
	
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

