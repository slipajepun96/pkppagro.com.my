<script src="js/jquery-3.2.1.slim.min.js" ></script>
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
});</script>
<header>
<nav class="navbar navbar-expand-lg fixed-top py-1">
  <a class="navbar-brand" href="index.php"><img class="navbar-brand" src="/image/logo.png" width=30>PKPP Agro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- profile dropdown menu-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
    
	      <li class="nav-item dropdown">
	  
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
          Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!--a class="nav-link dropdown-item" href="profile_history.php"> <img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Latar Belakang</a-->
          <a class="nav-link dropdown-item" href="profile_mission.php"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Misi / Visi</a>
		      <a class="nav-link dropdown-item" href="profile_bod.php"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Lembaga Pengarah</a>
          <a class="nav-link dropdown-item" href="profile_management.php"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> Pengurusan</a>
          
        </div>
      </li>

  <!-- activity dropdown menu-->
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
          Aktiviti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		
		<?php  $sql = "SELECT * from activity";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query->rowCount() > 0)
		{
		foreach($results as $result)
		{				?>		
		
          <a class="nav-link dropdown-item" href="activity.php?a_id=<?php echo htmlentities($result->a_id);?>"><img src="/image/svg/caret-right-fill.svg" alt="" width="10" height="10" title="Bootstrap"> <?php echo htmlentities($result->a_title);?></a>
		  
    <?php $cnt=$cnt+1; }} ?>
        </div>
      </li>

  <!-- iklan/notis dropdown menu-->
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
       <a class="nav-link" href="mspo.php">Kelestarian dan Integriti</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="contact.php">Hubungi Kami</a>
  </li>
     



<!-- staff portal button-->
    </ul>
    <form class="form-inline my-2 my-lg-0" action="https://pkppagro.com.my:2096/">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Webmail</button>
    </form>
	


    </div>
  </div>
</nav>
</header>
    
