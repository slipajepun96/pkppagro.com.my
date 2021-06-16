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

if(isset($_REQUEST['del']))
	{
$date_applicant=strval($_GET['del']);
$sql = "delete from staff_leave_application  WHERE  date_applicant=:date_applicant";
$query = $dbh->prepare($sql);
$query -> bindParam(':date_applicant',$date_applicant, PDO::PARAM_STR);
$query -> execute();
$msg="Leave application deleted successfully echo $date_applicant;";

	}
	
	
}

 ?>

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

if(isset($_REQUEST['update']))
	{
$date_applicant=strval($_GET['update']);
$sql = "update staff_leave_application set approval_1_status='1' where date_applicant=:date_applicant";
$query = $dbh->prepare($sql);
$query -> bindParam(':date_applicant',$date_applicant, PDO::PARAM_STR);
$query -> execute();
$msg="Data updated successfully";

print "Update Succesfull";



	}
	
	
}

 ?>

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

if(isset($_REQUEST['reject']))
	{
$date_applicant=strval($_GET['reject']);
$sql = "update staff_leave_application set approval_1_status='2' where date_applicant=:date_applicant";
$query = $dbh->prepare($sql);
$query -> bindParam(':date_applicant',$date_applicant, PDO::PARAM_STR);
$query -> execute();
$msg="Data updated successfully";

print "Rejected successfully";



	}
	
	
}

 ?>

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

if(isset($_REQUEST['reject2']))
	{
$date_applicant=strval($_GET['reject2']);
$sql = "update staff_leave_application set approval_2_status='2' where date_applicant=:date_applicant";
$query = $dbh->prepare($sql);
$query -> bindParam(':date_applicant',$date_applicant, PDO::PARAM_STR);
$query -> execute();
$msg="Data updated successfully";

print "Rejected successfully";



	}
	
	
}

 ?>

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

if(isset($_REQUEST['update2']))
	{
$date_applicant=strval($_GET['update2']);
$staff_id=strval($_GET['staff_id']);
$day_leave=strval($_GET['day_leave']);
$sql = "update staff_leave_application set approval_2_status='1' where date_applicant=:date_applicant";
$query = $dbh->prepare($sql);
$query -> bindParam(':date_applicant',$date_applicant, PDO::PARAM_STR);
$query -> execute();


$sql = "SELECT * from staff_leave WHERE staff_id=:staff_id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				
	$staff_leave_taken= htmlentities($result->staff_leave_taken);					
$new_staff_leave_taken=$staff_leave_taken+$day_leave;

	 $cnt=$cnt+1; }}
	 $sql = "update staff_leave set staff_leave_taken=:new_staff_leave_taken where staff_id=:staff_id";
	 $query = $dbh->prepare($sql);
	 $query -> bindParam(':new_staff_leave_taken',$new_staff_leave_taken, PDO::PARAM_STR);
	 $query -> bindParam(':staff_id',$staff_id, PDO::PARAM_STR);
	 $query -> execute();
$msg="Data updated successfully";





	}
	
	
}

 ?>
<!DOCTYPE html>
<html lang="en">


<head><title>eLeave Management System</title>
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

	$staff_id=$_SESSION['staff_id'];

	if(!$_SESSION['staff_id'])
	{ header('Location: index.php');
}
	?><div class="header">


		 
            <!-- /.navbar-collapse -->
			<?php include('includes/lowheader.php');?>
			<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
				<div class="form-inline my-2 my-lg-0">
				<a href=staff_dashboard.php><button class="btn btn-sm btn-warning " type="submit"><span style="font-size:13px;">&#8672; </span>Back</button></a>
				</div>&nbsp;
				<div class="navbar-brand" style="font-size:13px;" >Activity</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
			</nav>
        </div>
        <!-- /.container-fluid -->
    </nav>
		</div><div id="body">
		<br><br><br><br>
		<div id="file-address"><center>List of Leave</div>
		&nbsp;&nbsp;&nbsp;<a href="staff_leave_add.php"><button type=button class="btn btn-primary col-1.5" > + Apply Leave</button></a>
		<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="alert alert-warning" role="alert"><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div></div><?php }?>
		&nbsp;&nbsp;&nbsp;<br><br>
		<div class="col-sm-12">
		<table border=1 align=center class=table >
		<thead class=thead-dark><tr><th>Number of leaves</th><th>From(YYYY-MM-DD)</th><th>To</th><th>Reason</th><th>Status</th><th>Action</th></tr><thead>
		<tbody>
		
<?php
 
	$sql = "SELECT * from staff_leave_application WHERE staff_id=:staff_id";
	$query = $dbh -> prepare($sql);
	$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=1;
	if($query->rowCount() > 0)
	{
	foreach($results as $result)
	{				?>	
											<tr>
												
												<td><?php
												$day_leave = htmlentities($result->day_leave);
												$date_applicant= htmlentities($result->date_applicant);
												echo $day_leave ?></td>
												<td><?php echo htmlentities($result->leave_1);?></td>
												<td><?php if($day_leave=="1"){
													echo "No Data";
												}
												else if($day_leave=="2")
												{
													echo htmlentities($result->leave_2);
												}
												else if($day_leave=="3")
												{
													echo htmlentities($result->leave_3);
												}
												else if($day_leave=="4")
												{
													echo htmlentities($result->leave_4);
												}
											else if($day_leave=="5")
											{
												echo htmlentities($result->leave_5);
											}
											
											?></td>
											<td><?php echo htmlentities($result->leave_reason);?></td>
											<td><?php 
											$approval_1_status = htmlentities($result->approval_1_status);
											$approval_2_status = htmlentities($result->approval_2_status);
											
											if ($approval_1_status=='1' && $approval_2_status=='1')
											{ echo "Approved" ;}
											else if ($approval_1_status=='2' || $approval_2_status=='2')
											{ echo "Rejected"; }
											else
											{ echo "Waiting For Approvals" ;}
											
											?></td>
											<td><a href="staff_leave_dashboard.php?del=<?php echo $date_applicant;?>" onclick="return confirm('Do you want to delete');">Delete<i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
		
		</table></div>	
		
     











    </div>    </div></div><br><br><br>
<?php if($staff_id=="MD1"||$staff_id=="HQ1"||$staff_id=="HQ2"||$staff_id=="HQ3"){ ?>

	<div id="file-address"><center>List of Leave(s) for review</div>
		
		<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="alert alert-warning" role="alert"><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div></div><?php }?>
		&nbsp;&nbsp;&nbsp;<br><br>
		<div class="col-sm-12">
		<table border=1 align=center class=table >
		<thead class=thead-dark><tr><th>Name</th><th>Day(s) of leave</th><th>From</th><th>To</th><th>Reason</th><th>Status</th><th>Action</th></tr><thead>
		<tbody>
		
<?php
 
$sql = "SELECT * from staff_leave_application where approval_1_id=:staff_id and approval_1_status = '0' ";
$query = $dbh -> prepare($sql);
$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><!-- name-->
											<?php echo htmlentities($result->staff_name);?>
											</td>
											<td><?php
											$day_leave = htmlentities($result->day_leave);
											$date_applicant= htmlentities($result->date_applicant);
											echo $day_leave ?></td>
											<td><?php echo htmlentities($result->leave_1);?></td>
											<td><?php  if($day_leave=="1"){ 
												echo "No Data";
											}
											else if($day_leave=="2")
											{
												echo htmlentities($result->leave_2);
											}
											else if($day_leave=="3")
											{
												echo htmlentities($result->leave_3);
											}
											else if($day_leave=="4")
											{
												echo htmlentities($result->leave_4);
											}
											else if($day_leave=="5")
											{
												echo htmlentities($result->leave_5);
											}
											
											?></td>
											<td><?php echo htmlentities($result->leave_reason);?></td>
											<td></td>
											<td><a href="staff_leave_dashboard.php?update=<?php echo $date_applicant;?>" onclick="return confirm('Do you want to approve ?');">Approve<i class="fa fa-close"></i></a> <a href="staff_leave_dashboard.php?reject=<?php echo $date_applicant;?>" onclick="return confirm('Do you want to reject ?');">Reject<i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>


									<tbody>
		
		<?php
		 
		$sql = "SELECT * from staff_leave_application where approval_2_id=:staff_id and approval_1_status = '1' and approval_2_status = '0' ";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query->rowCount() > 0)
		{
		foreach($results as $result)
		{				?>	
												<tr>
													<td><!-- name-->
													<?php echo htmlentities($result->staff_name);?>
													</td>
													<td><?php
													$day_leave = htmlentities($result->day_leave);
													$date_applicant= htmlentities($result->date_applicant);
													echo $day_leave ?></td>
													<td><?php echo htmlentities($result->leave_1);?></td>
													<td><?php  if($day_leave=="1"){ 
														echo "No Data";
													}
													else if($day_leave=="2")
													{
														echo htmlentities($result->leave_2);
													}
													else if($day_leave=="3")
													{
														echo htmlentities($result->leave_3);
													}
													else if($day_leave=="4")
													{
														echo htmlentities($result->leave_4);
													}
													else if($day_leave=="5")
													{
														echo htmlentities($result->leave_5);
													}
													
													?></td>
													<td><?php echo htmlentities($result->leave_reason);?></td>
													<td></td>
													<td><a href="staff_leave_dashboard.php?update2=<?php echo $date_applicant;?>&staff_id=<?php echo htmlentities($result->staff_id); ?>&day_leave=<?php echo $day_leave ?>" onclick="return confirm('Do you want to approvel this leave ? ');">Approve<i class="fa fa-close"></i></a><a href="staff_leave_dashboard.php?reject2=<?php echo $date_applicant;?>" onclick="return confirm('Do you want to reject ?');">Reject<i class="fa fa-close"></i></a></td>
												</tr>
												<?php $cnt=$cnt+1; }} ?>
												
											</tbody>
		
		</table></div>	
		
     
    </div>    </div></div>   
										<?php } ?>
	    
	<br><br><br><br><br><br><br>
</center>
</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

