<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
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
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
 $(document).ready(function () {
    toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#day_leave").change(function () {
        toggleFields();
    });

});
// this toggles the visibility of other server
function toggleFields() {
    if ($("#day_leave").val() === "1")
		{ $("#1_day").show();
		$("#2_day").hide();
		$("#3_day").hide();
		$("#4_day").hide();
		$("#5_day").hide(); }
	else if ($("#day_leave").val() === "2")
		{ $("#1_day").show();
		$("#2_day").show();
		$("#3_day").hide();
		$("#4_day").hide();
		$("#5_day").hide(); }
	else if ($("#day_leave").val() === "3")
		{ $("#1_day").show();
		$("#2_day").show();
		$("#3_day").show();
		$("#4_day").hide();
		$("#5_day").hide(); }
	else if ($("#day_leave").val() === "4")
		{ $("#1_day").show();
		$("#2_day").show();
		$("#3_day").show();
		$("#4_day").show();
		$("#5_day").hide(); }
	else if ($("#day_leave").val() === "5")
		{ $("#1_day").show();
		$("#2_day").show();
		$("#3_day").show();
		$("#4_day").show();
		$("#5_day").show(); }
    else {
		$("#1_day").hide();
		$("#2_day").hide();
		$("#3_day").hide();
		$("#4_day").hide();
		$("#5_day").hide();}
}

</script>

<script type="text/javascript">
function sendform() {
  document.getElementById("form1").submit();
}
</script>
</head>

   

<body link=ffffff alink=ffffff vlink=ffffff>
 <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.slim.min.js" ></script>
  <script src="js/popper.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>

  
<?php 
SESSION_START();

	$staff_id=$_SESSION['staff_id'];

	if(!$_SESSION['staff_id'])
	{ header('Location: index.php');
}
	?>
<div class="header">
	<?php include('includes/lowheader.php');?>
	<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
		<div class="form-inline my-2 my-lg-0">
			<a href=staff_leave_dashboard.php><button class="btn btn-sm btn-warning " type="submit"><span style="font-size:13px;">&#8672; </span>Back</button></a>
		</div>&nbsp;
		<div class="navbar-brand" style="font-size:13px;" >Leave Application</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
	</nav>
</div>
<div id="body">
	<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


<?php

$sql = "SELECT * from staff_login WHERE staff_id=:staff_id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{			
									
											$staff_name = htmlentities($result->staff_name);
																					
											 $cnt=$cnt+1; }} ?>
<?php

$sql = "SELECT * from staff_leave WHERE staff_id=:staff_id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
									
											
											
									<div class=col-12>Number of leaves entitled : <?php echo htmlentities($result->staff_full_leave);?> |</div>
									<div class=col-12>Number of leave(s) taken : <?php echo htmlentities($result->staff_leave_taken);?> |</div>
									<div class=col-12><?php 
											$approval_1_id = htmlentities($result->approval_1_id);
											$approval_2_id = htmlentities($result->approval_2_id);
											$staff_full_leave = htmlentities($result->staff_full_leave);
											$staff_leave_taken = htmlentities($result->staff_leave_taken);
											$balance = $staff_full_leave-$staff_leave_taken;
											echo "Leave(s) remain : ",$balance;
											
											
											?>
										<?php $cnt=$cnt+1; }} ?></div>
		
			<br><br>							
	<div class="justify-content-center"><div class="form-group row-12 col-12" >
		<form class="form-horizontal col-sm-10 " id="form1" action="staff_leave_add_process.php" method="post">
			
			Number of leave(s) :  <select name="day_leave" id="day_leave" class="form-control" required="required">
  				<option value='1'>1</option>
  				<option value='2'>2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
				<option value="5">5</option>
			</select>

<!-- working area -->
			<div id="1_day" >
        		Date (Leave 1):<input type="date" name="leave_1" required="required" />        
			</div>
			<div id="2_day" >
       			 Date (Leave 2):<input type="date" name="leave_2" required="required" />
        	</div>
			<div id="3_day" >
       			 Date (Leave 3):<input type="date" name="leave_3" required="required" />        
			</div>
			<div id="4_day" >
    			Date (Leave 4):<input type="date" name="leave_4" required="required" />        
			</div>
			<div id="5_day" >
    			Date (Leave 5):<input type="date" name="leave_5" required="required" />        
			</div>

			<?php
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
				$approval_1_id = htmlentities($result->approval_1_id);
				$approval_2_id = htmlentities($result->approval_2_id);
											
											 $cnt=$cnt+1; }} ?>


			Reason for leave(s) : <input type="text" id="leave_reason" name="leave_reason" class="form-control " placeholder="Type your reason">
			<input type="hidden" name="approval_1_id" value="<?php echo $approval_1_id; ?>">
		<input type="hidden" name="approval_2_id" value="<?php echo $approval_2_id;?>">
		<input type="hidden" name="date_applicant" value="<?php echo $current_date=date("Y-m-d H:i:s"); ?>">
		<input type="hidden" name="staff_id" value="<?php echo $staff_id; ?>">
		<input type="hidden" name="staff_name" value="<?php echo $staff_name; ?>">
		<!--button type="submit" class="btn btn-primary my-2 my-sm-0">Save</button--><br>
        <input onclick="sendform();"  name="login_btn" id="login_btn" type="button"  value="Submit">
		</div>
		</div></form>
</div>
<br><br><br><br><br><br><br>

</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

