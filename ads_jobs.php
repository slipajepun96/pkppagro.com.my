<?php
session_start();
error_reporting(0);
include('includes/config.php');

	

	
	


 ?>
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>PKPP Agro - Peluang Kerjaya</title>
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
	  
          <h1>Peluang Kerjaya</h1>
        </div>
    </div></div></div>
	
	<div class="col-sm-12"><br>
		<!--table for bod chairman -->
		<div class="col-sm-12">
		<!--table for bod member-->
		<table align=center class="table col-sm-10 table-borderless" >
		<tbody>
		<?php $sql = "SELECT * from jobs";
																$query = $dbh -> prepare($sql);
																$query->execute();
																$results=$query->fetchAll(PDO::FETCH_OBJ);
																$cnt=1;
																if($query->rowCount() > 0)
																{
																	foreach($results as $result)
																	{				?>
										
										
										<tr bgcolor=#d5d5d5><td align=left style="vertical-align:middle;"><h5>Jawatan : <?php echo htmlentities($result->position);?></h5></td></tr>
										<tr bgcolor=#d5d5d5><td align=left style="vertical-align:middle;"><?php echo htmlentities($result->j_description);?></td></tr>
										<tr bgcolor=#d5d5d5><td align=left style="vertical-align:middle;"><span class="oi oi-data-transfer-download"></span><a href="/file_upload/<?php echo htmlentities($result->j_filename);?>">Muat Turun</a></td></tr>
										<tr><td><br></td></tr>
										</tr><?php $cnt=$cnt+1; }
										 }
else
echo "Harap Maaf, Tiada Jawatan Kosong Ditawarkan Buat Masa Ini.";	?></tr>
									</tbody>
		
		</table>
		
		
		
		</div></div>
	
  </div>
</div><br>
	</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

