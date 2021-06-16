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


<head><title>Content Management - Announcement</title>
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
				<div class="navbar-brand" style="font-size:13px;" >Announcement</div>
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
		<label class="col-sm-6">Add New Announcement</label>
		<table border=1 align=center class=table >
		
		<tbody>


										<tr>
											<div class="col-sm-12">
		<div class="justify-content-center">
		<form class="form-horizontal col-sm-10 " action="admin_anc_add_process.php" method="post"><div class="form-group" >
		<div class=row>
		<div class=col-6>ID: <input type="text" id="anc_id" name="anc_id" class="form-control " placeholder="ID"></div>
		<div class=col-6> Announcement Date : <br>
<select class="custom-select col-2" name="anc_date">
  <option selected>Date</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>
<select class="custom-select col-6" name="anc_month">
  <option selected>Month</option>
  <option value="Januari">Januari</option>
  <option value="Februari">Februari</option>
  <option value="Mac">Mac</option>
  <option value="April">April</option>
  <option value="Mei">Mei</option>
  <option value="Jun">Jun</option>
  <option value="Julai">Julai</option>
  <option value="Ogos">Ogos</option>
  <option value="September">September</option>
  <option value="Oktober">Oktober</option>
  <option value="November">November</option>
  <option value="Disember">Disember</option>
</select>
<select class="custom-select col-3" name="anc_year">
  <option selected>Year</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
</select></div></div><br>
		Announcement Title: <input type="text" id="anc_title" name="anc_title" class="form-control" placeholder="Title" ></div>
		
		<div class="form-group">
		<label for="exampleFormControlTextarea1">Announcement Content :</label>
		<textarea class="form-control" wrap name="anc_content" id="anc_content" rows="5" placeholder="Announcement Content and images(in html tags)"></textarea>
		</div>
		
		
		<button type=submit class="btn btn-primary my-2 my-sm-0">Save</button>
		</div>
		</div></div></div></form>
										</tr>
										
									</tbody>
		
		</table></div>
		
		
     
    </div>    </div></div>
	
	    
	<br><br><br><br><br><br><br>

</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

