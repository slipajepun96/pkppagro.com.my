<?php
session_start();
error_reporting(0);
include('includes/config.php');

	

	
	


 ?>
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>PKPP Agro - Pengurusan</title>
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="dist/js/bootstrap.js">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

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
      <img src="/image/carousel/meeting_room.jpg" class="d-block w-100 item" alt="Padi">
	  <div class="carousel-caption ">
	  
          <h1>Pengurusan</h1>
        </div>
    </div></div></div>
	
	<div class="col-sm-12"><br>
		<!--table for management -->
		<h5><b>Ibu Pejabat</b></h5><br>
		<?php $sql = "SELECT * from management where m_id =1";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
										<!--  working area-->
		<div class="container">
          <div class="row row-30">
		  
		 
		  <div class="col-md-3"></div>
		  <div class="col-md-6">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				
          </div>
		  
          
		  <div class="col-md-3">
          </div>
		   </div>
		  <br>
            </div><?php $cnt=$cnt+1; }} ?>
            
            

		<!-- end of working area--><br><br>
			<!--table for mgmt member-->
		<div class="container">
				<?php $sql = "SELECT * from management where m_level=1 && m_id!=1";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-12">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		   </div>
		  <br><br>
            </div><!--?php $cnt=$cnt+1; }} ?-->
            

			<!--table for executive member-->
		<div class="container">
				<?php $sql = "SELECT * from management where m_level=2";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-6">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		   </div>

		   <!--ladang-->
		   <div class="container">
		   <br>
		   <hr><br>
		   <h5><b>Ladang Sungai Kerpai</b></h5><br>
				<?php $sql = "SELECT * from management where m_level=3 && m_area_of_service='Ladang Sungai Kerpai'";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-12">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		<br>
		  <?php $sql = "SELECT * from management where m_level=4 && m_area_of_service='Ladang Sungai Kerpai'";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-12">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		   </div>
		   <!-- end of ladang-->

		   <!--ladang-->
		   <div class="container"><br>
		   <hr><br>
		   <h5><b>Ladang PKPP Paloh Hinai</b></h5><br>
				<?php $sql = "SELECT * from management where m_level=3 && m_area_of_service='Ladang PKPP Paloh Hinai'";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-12">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		<br>
		  <?php $sql = "SELECT * from management where m_level=4 && m_area_of_service='Ladang PKPP Paloh Hinai'";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		   </div>
		   <!-- end of ladang-->

		   <!--ladang-->
		   <div class="container"><br>
		   <hr><br>
		   <h5><b>Ladang PKPP Sri Jelutong</b></h5><br>
				<?php $sql = "SELECT * from management where m_level=3 && m_area_of_service='Ladang PKPP Sri Jelutong'";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-12">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
			<br>
		  <?php $sql = "SELECT * from management where m_level=4 && m_area_of_service='Ladang PKPP Sri Jelutong'";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
			?>
		
			<div class="row row-30"><?php
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
				
		 		<div class="col-md-12">
				<div class="potrait"><img style="max-width:100%;max-height:100%;" src="/image/management_image/<?php echo htmlentities($result->m_img);?>" height="200px"></div><br>
				<h6><?php echo htmlentities($result->m_name);?></h6>
				<?php echo htmlentities($result->m_position);?>
				</div>
				<?php $cnt=$cnt+1; }} ?>						
          </div>
		   </div>
		   <!-- end of ladang-->
		  <br><br>
            </div>
            

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

