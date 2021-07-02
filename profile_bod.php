<?php
session_start();
error_reporting(0);
include('includes/config.php');

	

	
	


 ?>
<!DOCTYPE html>
<html lang="en">


<head><title>PKPP Agro - Ahli Lembaga Pengarah</title>
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
  <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="js/jquery-3.2.1.slim.min.js" ></script>
  <script src="js/popper.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>-->
  <div class="header">


		 
            <!-- /.navbar-collapse -->
			<?php include('includes/lowheader.php');?>
        </div>
        <!-- /.container-fluid -->
    </nav></div>
	<center>
<div id="carouselExampleControls" class="carousel" data-ride="carousel">
  <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active">
      <img src="/image/carousel/office_above.jpg" class="d-block w-100 item" alt="Padi">
	  <div class="carousel-caption ">
	  
          <h1>Ahli Lembaga Pengarah</h1>
        </div>
    </div></div></div>

	<div class="col-sm-12"><br>
		<!--table for bod chairman--> 
		<table align=center class="table table-borderless" >
		<tbody>

										<tr><td colspan="4" align=center><?php $sql = "SELECT * from board_of_director where bod_id=1";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
										<img src="/image/bod_image/<?php echo htmlentities($result->bod_img);?>" height="200px"></td></tr>
										<tr><td colspan="4" align=center><h3><?php echo htmlentities($result->name);?></h3><h4><?php echo htmlentities($result->oth2);?></h4><?php $cnt=$cnt+1; }}
									
										?></td></tr>
									</tbody>
		
		</table></div><br>
		<!--table for bod member-->
		<!--  working area-->
		<div class="container">
          <div class="row row-30">
										<?php $sql = "SELECT * from board_of_director where bod_id !=1";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
										
		
		  
		 
		  <div class="col-md-4">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/bod_image/<?php echo htmlentities($result->bod_img);?>" width="150"></div><br>
				<h6><?php echo htmlentities($result->name);?></h6>
				<?php echo htmlentities($result->oth2);?>
				
          </div>
		 
		  <br><br>
           <?php $cnt=$cnt+1; }} ?> </div>
            
            

		<!-- end of working area-->
		
		
		
		
		</div></div>
	
  </div>
</div><br>
	</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

