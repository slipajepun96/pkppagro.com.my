<?php
session_start();
error_reporting(0);
include('includes/config.php');

$a_id=$_GET['a_id'];	

	
	


 ?>
<!DOCTYPE html>
<html lang="en">


<head><title>PKPP Agro - Aktiviti</title>
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
	<?php $sql = "SELECT * from activity where a_id=$a_id";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
<div id="carouselExampleControls" class="carousel" data-ride="carousel">
  <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active">
      <img src="/image/carousel/<?php echo htmlentities($result->a_carousel);?>" class="d-block w-100 item" alt=" Carousel">
	  <div class="carousel-caption ">
	  
          <h4><?php echo htmlentities($result->a_title);?><br></h4>
        </div>
    </div></div></div>
	
	<div class="col-sm-12"><br>
		</div><div class="col-sm-12">
		
		<?php echo html_entity_decode($result->a_content);?>
		<?php $cnt=$cnt+1; }} ?>
		
		
		
		</div></div>
	
  </div>
</div><br>
	</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

