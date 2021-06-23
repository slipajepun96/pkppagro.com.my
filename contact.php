<?php

include('includes/config.php');


$id=1;





	?>
<!DOCTYPE html>
<html lang="en">


<head><title>PKPP Agro - Hubungi Kami</title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#00a300">
<meta name="theme-color" content="#ffffff">
<!--<link rel="stylesheet" href="css/style.css">--><!--
<link rel="stylesheet" href="css/bootstrap.min.css">-->
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
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/ms_MY/sdk.js#xfbml=1&version=v3.2"></script>
 <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS 
  <script src="js/jquery-3.2.1.slim.min.js" ></script>
  <script src="js/popper.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>-->
  <?php include('includes/lowheader.php');?>

		</div><div id="body">
		
		
	
		<center><div id="carouselExampleControls" class="carousel" data-ride="carousel">
  <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active">
      <img src="/image/carousel/office_above.jpg" class="d-block w-100 item" alt="Padi">
	  <div class="carousel-caption ">
	  
          <h1>Hubungi Kami</h1>
        </div>
    </div></div></div>
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


<!-- <div class="row row-30">
	<div class="col-md-6">
		<h4><br><a href="tel:+601126637117"><img src="/image/call-inverse.png" width=100><br><?php echo htmlentities($result->phone_num);?></a></h4><br>Isnin - Jumaat, 8.00 pagi - 5.00 petang
    </div>
	<div class="col-md-6">
		<h4><br><a href="mailto:pkppagro@gmail.com"><img src="/image/mail-inverse.png" width=100><br><?php echo htmlentities($result->email);?></a></h4><br>
    </div>
</div> -->

	   <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4><br><b>Ibu Pejabat</b></h4>
       			<address> <h6>PKPP Agro Sdn. Bhd.<br>KM 4, Jalan Selendang,<br>26800 Kuala Rompin,<br>Pahang Darul Makmur<br></h6></address>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4><br><a href="tel:+601126637117"><img src="/image/call-inverse.png" width=100><br> 011-2663 7117</a></h4><br>Isnin - Jumaat, 8.00 pagi - 5.00 petang
			</div>
			<div class="col-md-6">
				<h4><br><a href="mailto:pkppagro@gmail.com"><img src="/image/mail-inverse.png" width=100><br><?php echo htmlentities($result->email);?></a></h4>
			</div>
		</div>
		<hr style=" height: 2px; background: #f0f0f0;">
		<div class="row row-30">
			<div class="col-md-4">
				<h4><br><b>Ladang Sungai Kerpai</b></h4>
       			<address> <h6>Ladang Sungai Kerpai <br>D/A. PKPP Agro Sdn. Bhd.<br>KM 4, Jalan Selendang,<br>26800 Kuala Rompin,<br>Pahang Darul Makmur<br><br> Telefon : <a href="tel:+601126637117">011-2663 7117</a><br>Emel : <a href="mainto:sg.kerpai@pkppagro.com.my">sg.kerpai@pkppagro.com.my</a>	</h6>	</address>
	   			<br><a href="https://goo.gl/maps/VUwvvyK5sebm1n4h7">Lokasi di Google Maps &rarr;</a>
			   </div>
			<div class="col-md-4">
				<h4><br><b>Ladang PKPP Paloh Hinai</b></h4>
				<address> <h6>Ladang PKPP Paloh Hinai <br>26650 Pekan,<br>Pahang Darul Makmur<br><br> Telefon : <a href="tel:+60146105117">014-610 5117</a><br> Emel : <a href="mainto:paloh.hinai@pkppagro.com.my">paloh.hinai@pkppagro.com.my</a> 	</h6>	</address>
				<br><a href="https://goo.gl/maps/E2UvpDaeoYqDsJRf6">Lokasi di Google Maps &rarr;</a>
				
	   		</div>
			<div class="col-md-4">
				<h4><br><b>Ladang PKPP Sri Jelutong</b></h4>
				<address> <h6>Ladang PKPP Sri Jelutong,<br>D/A. Ladang PKPP Paloh Hinai <br>26650 Pekan,<br>Pahang Darul Makmur<br><br> Telefon : <a href="tel:+60199180218">019-918 0218</a><br> Emel : <a href="mainto:sri.jelutong@pkppagro.com.my">sri.jelutong@pkppagro.com.my</a><br>	</h6>	</address>
				<br><a href="https://goo.gl/maps/YfZPn53yQNiYzgQAA">Lokasi di Google Maps &rarr;</a>
			   </div>
		</div><br>
          <div class="row row-30">
		  
		 
		  
		  <div class="col-md-4">
					 <div class="fb-page" data-href="<?php echo htmlentities($result->facebook);?>" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pkppagro" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pkppagro">PKPP AGRO SDN BHD</a></blockquote></div>

		</div>
		<div class="col-md-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.669168920347!2d103.46592511475631!3d2.7280104980126323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cf8b7501c88e0d%3A0xc11f430bed9384ba!2sPKPP+Agro+Sdn.+Bhd.!5e1!3m2!1sen!2smy!4v1560236335767!5m2!1sen!2smy" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		  </div>
            
            
</div>
	   
	 
										<?php $cnt=$cnt+1; }} ?>
								
    </div>    </div></div>
	
</center>
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

