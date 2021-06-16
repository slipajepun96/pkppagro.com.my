<?php
session_start();
error_reporting(0);
include('includes/config.php');
 ?>
<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>PKPP Agro</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#00a300">
<meta name="theme-color" content="#ffffff">
<!--<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="dist/js/bootstrap.js">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-grid.css">

<style>
.zoom {
  padding: 0px;
  background-color: green;
  transition: transform .2s; /* Animation */
  margin: auto;
  position:top;
}

.zoom:hover {
  transform: scale(1.13); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


</head>
<div id="container">
   <div id="header">
   

<body link=ffffff alink=ffffff vlink=ffffff>
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--    <script src="js/jquery-3.2.1.slim.min.js" ></script>
  <script src="js/popper.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script>$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
            $('.dropdown-menu').addClass('active');
        } else {
            $('.navbar').removeClass('active');
            $('.dropdown-menu').removeClass('active');
        }
    });
});</script>-->
  <div class="header">

			<?php include('includes/lowheader.php');?>
        </div>
        <!-- /.container-fluid -->
    </nav></div>

<!-- 
<header>
<nav class="navbar navbar-expand-lg fixed-top py-1">
  <a class="navbar-brand" href="index.php"><img class="navbar-brand" src="/image/logo.png" width=30>PKPP Agro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
    
	      <li class="nav-item dropdown">
	  
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
          Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="nav-link dropdown-item" href="profile_history.php"> <img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Latar Belakang</a>
          <a class="nav-link dropdown-item" href="profile_mission.php"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Misi / Visi</a>
		      <a class="nav-link dropdown-item" href="profile_bod.php"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Lembaga Pengarah</a>
          <a class="nav-link dropdown-item" href="profile_management.php"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Pengurusan</a>
          
        </div>
      </li>


	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
          Aktiviti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		
	  $sql = "SELECT * from activity";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query->rowCount() > 0)
		{
		foreach($results as $result)
		{				?>		
		
          <a class="nav-link dropdown-item" href="activity.php?a_id= php echo htmlentities($result->a_id);?>"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> <?php echo htmlentities($result->a_title);?></a>
		  
 php $cnt=$cnt+1; }} ?>
        </div>
      </li>

	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
          Iklan / Program
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="nav-link dropdown-item" href="ads_announcement.php">Pengumuman</a>
          <a class="nav-link dropdown-item" href="ads_jobs.php">Peluang Kerjaya</a>
		  <a class="nav-link dropdown-item" href="ads_rent.php">Ruang Iklan Untuk Disewa</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="links.php">Pautan</a>
      </li>
  <li class="nav-item">
       <a class="nav-link" href="mspo.php">MSPO</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="contact.php">Aduan / Hubungi Kami</a>
  </li>
     



 staff portal button
    </ul>
    <form class="form-inline my-2 my-lg-0" action="http://www.pkppagro.com.my/staff">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Staff Portal</button>
    </form>
	


    </div>
  </div>
</nav>
</header>
-->


<!--  __________________________________________________________________________BODY________________________________________________________________________-->

<!--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   
  <div class="carousel-inner" role="listbox" >
   
    <div class="carousel-item active">
      <img src="/image/main1.jpg" width="100%" class="d-block w-100 item">
      <div class="carousel-caption d-none d-md-block">
   
      </div>
	 </div>
    
  </div>
  
</div>
    -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    
      
    <div class="carousel-item active">
      <img class="d-block w-100 item" src="/image/main1.jpg" height="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 item" src="/image/main1-2.jpg" width="100%">
    </div>
    
    <div class="carousel-item">
      <img class="d-block w-100 item" src="/image/peranan majikan.jpg" width="100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 item" src="/image/no_gift_policy.jpg" width="100%">
    </div>
  </div>
  
</div>
<!--working area--><br>
<div class="container">
<div class="row">
<div class="card bg-dark text-white">
  <img src="/image/ndpe_cover.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h4 class="card-title">Komitmen Kelestarian Kumpulan PKPP</h4>
    <div class="d-none d-lg-block">PKPP Agro sebagai ahli Kumpulan Perbadanan Kemajuan Pertanian Negeri Pahang (PKPP) komited untuk melaksanakan pembangunan lestari yang akan memberi impak positif kepada pemegang taruh, syarikat, masyarakat dan alam sekitar.</div>
    <br>
     <p class="card-text"><a href="https://ndpe.pkpp.gov.my"><font color="white">Lihat Dasar NDPE Kumpulan PKPP <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></font></a></p>
  </div></div>
</div></div><br><hr>
<div class="container">
<div class="special"><h4>Sejarah Kami</h4></div>
<p>PKPP Agro Sdn. Bhd. (PKPP Agro) merupakan syarikat ahli kumpulan agensi Kerajaan Negeri Pahang iaitu Perbadanan Kemajuan Pertanian Negeri Pahang (PKPP),
	ditubuhkan pada 8 Disember 1994 dengan pegangan ekuiti penuh (100%) oleh PKPP. </p>
	<p>Asas penubuhan PKPP Agro adalah untuk membangunkan sawah komersial di kawasan tanah terbiar terutamanya di daerah Rompin. Sawah komersial merupakan satu
	pendekatan untuk mewujudkan industri tanaman padi yang berdaya maju dan menguntungkan. Pada masa yang sama, projek ini pada dasarnya amat bererti kepada negara
	kerana ia merupakan langkah positif untuk memenuhi matlamat tanggungjawab sosial untuk menjamin kesejahteraan rakyat dan keselamatan negara memandangkan nasi 
	merupakan makanan asasi negara dan strategik dari segi politik.</p>
	<p>Dalam mempelbagaikan aktivitinya, PKPP Agro juga menjalankan ternakan ikan air tawar, perladangan kelapa sawit dan tanaman kelapa. Aktiviti baru yang turut
	diusahakan adalah Projek Agrotourism Paya Laka dan tanaman jagung.</p>
	
</div>
<div class="container">
<br>Tanaman-tanaman Kami</br>
<div class="card-group">

<div class="card bg-dark text-white"><div class="zoom">
  <img src="/image/main_page_icon/padi.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h4 class="card-title">Tanaman Padi</h4>
    </div>
</div></div>


<div class="card bg-dark text-white"><div class="zoom">
  <img src="/image/main_page_icon/sawit.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h4 class="card-title">Tanaman Kelapa Sawit</h4>
    </div>
</div></div>


<div class="card bg-dark text-white"><div class="zoom">
  <img src="/image/main_page_icon/kelapa.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h4 class="card-title">Tanaman Kelapa</h4>
    </div>
</div>
</div>


</div></div>
<!--
<div class="container">
				
          <div class="col-md-4 col-xl-5">
		   full counterbr>
				<table class="table" border=1>
				<tr><td>Statistik Pengunjung</td></tr>
				<tr><td>full counter<?php include( 'daily_counter.php' ); ?></td></tr>
				<tr><td><?php include( 'counter.php' ); ?></td></tr>
				</table>
             
		  </div>
            </div> -->
            
            
</div>
        </div>

		
</body>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
      
    
</html>

