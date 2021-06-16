 <!-- Navigation 
    <nav id="mainnNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display 
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Others<i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                       <a class="page-scroll" href="logout.php"> User : <?php echo $username?>&nbsp;&nbsp;&nbsp;<b class="w3-text-red">Logout</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse 
        </div>
         /.container-fluid 
		 
		 <nav class="navbar fixed-top navbar-expand-md navbar-new-bottom">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">

                <ul class="navbar-nav w-100 justify-content-center px-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> Edit Program / Notification</a></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> Edit Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> Edit Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"> Query</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
		<nav class="navbar navbar-expand-lg navbar-dark indigo">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
   
  </div>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_dashboard.php">Staff Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="staff_leave_dashboard.php">eLeave Management System<span class="sr-only">(current)</span></a>
      </li>
	  
	  <li class="nav-item ">
        <a class="nav-link" href="admin_activity.php">Staff Webmail<span class="sr-only">(current)</span></a>
      </li>
	  
     
    </ul>
    <div class="form-inline my-2 my-lg-0">
     
      <a href=index.php><button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button></a>
    </div>
  </div>
</nav>
