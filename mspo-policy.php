<?php
session_start();
error_reporting(0);
include('includes/config.php');

$p_id=$_GET['p_id'];	

	
	


 ?>
<!DOCTYPE html>
<html lang="en">


<head><title>PKPP Agro - MSPO</title>
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
    <?php if($p_id=="1")
             {
                $name="Polisi Minyak Sawit Mampan Malaysia";
                $pic="mspo-1.png";
             }
             else if($p_id=="2")
             {
                $name="Polisi Kelestarian";
                $pic="mspo-2.png";
             }
             else if($p_id=="3")
             {
                $name="Polisi Sosial Dan Hak Asasi Manusia";
                $pic="mspo-3.png";
             }
             else if($p_id=="4")
             {
                $name="Polisi Keselamatan Dan Kesihatan";
                $pic="mspo-4.png";
             }
             else if($p_id=="5")
             {
                $name="Dasar Alam Sekitar";
                $pic="mspo-5.png";
             }
             else if($p_id=="6")
             {
                $name="Dasar Tiada Pembakaran Terbuka";
                $pic="mspo-6.png";
             }
             else if($p_id=="7")
             {
                $name="Dasar Pengurusan Tanah Curam, Pengurusan Tanah Gambut <br> Dan Zon Penampan (Riparian Buffer Zone)";
                $pic="mspo-7.png";
             }
             else if($p_id=="8")
             {
                $name="Polisi Gangguan Seksual, Keganasan Dan Hak-Hak Pekerja";
                $pic="mspo-8.png";
             }			?>
<div id="carouselExampleControls" class="carousel" data-ride="carousel">
  <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active">
      <img src="/image/carousel/office.jpg" class="d-block w-100 item" alt=" Carousel">
	  <div class="carousel-caption ">
	  
          <h4>Kenyataan Polisi MSPO<br></h4>
        </div>
    </div></div></div><br></center>
</div><div class="container">
<!--<div class=row>
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2 d-flex flex-wrap" role="group" aria-label="First group">
            <a href="mspo-policy.php?p_id=1" class="btn btn-secondary  active" role="button" aria-pressed="true">Polisi Minyak Sawit<br> Mampan Malaysia</a>
            <a href="mspo-policy.php?p_id=2" class="btn btn-secondary active" role="button" aria-pressed="true">Polisi Kelestarian</a>
            <a href="mspo-policy.php?p_id=3" class="btn btn-secondary active" role="button" aria-pressed="true">Polisi Sosial Dan <br>Hak Asasi Manuasia</a>
            <a href="mspo-policy.php?p_id=4" class="btn btn-secondary active" role="button" aria-pressed="true">Polisi Keselamatan <br>Dan Kesihatan</a>
            <a href="mspo-policy.php?p_id=5" class="btn btn-secondary active" role="button" aria-pressed="true">Dasar Alam Sekitar</a>
            <a href="mspo-policy.php?p_id=6" class="btn btn-secondary active" role="button" aria-pressed="true">Dasar Tiada <br>Pembakaran<br>Terbuka</a>
            <a href="mspo-policy.php?p_id=7" class="btn btn-secondary active" role="button" aria-pressed="true">Dasar Pengurusan Tanah Curam,Pengurusan Tanah Gambut Dan <br>Zon Penampan (Riparian Buffer Zone)</a>
            <a href="mspo-policy.php?p_id=8" class="btn btn-secondary active" role="button" aria-pressed="true">Polisi Gangguan Seksual,<br> Keganasan Dan Hak-Hak <br>Pekerja</a>
        </div>
    </div></div>-->
    
    <div class="col-12">
    <a href="mspo.php" class="btn btn-warning active" role="button"aria-pressed="true" > <span class="glyphicon glyphicon-align-left"></span>Kembali</a><h5 align="center"><?php echo $name;?><h5><br>		
		<img src="/image/<?php echo $pic?>" style="border:5px solid black">
	
		
		
		
		</div></div>
	
  </div>
</div><br>
	</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

