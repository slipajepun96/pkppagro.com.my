<html>
<head><title>Content Management</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">


</head>
<div id="container">
   <div id="header">
   

<body link=ffffff alink=ffffff vlink=ffffff> <div class="header">
<br>
   <br>
   <br>
<div class="home">
	<font color=white>
		<center><font size=40><b>Content Management</b></font>
		</center>
		</div>
		   
    </nav><div id="body">
   <br><center>
   <?php
   SESSION_START();
   session_unset();
   if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

   session_destroy();
   ?>
   
    <article class="v-box"><div class="element">


	    <div class="box">
		Logged out...<br>
		<form class="form-horizontal" method=post action=login.php>

	    <!--<div class="box">-->
      <h3>Login Back</h3>
		<div class="form-group">
		<label class="col-sm-5 control-label">Username</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="username" placeholder="Username" required="required"><br>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-5 control-label">Password</label>
		<div class="col-sm-3">		
		<input type="password" class="form-control" name="password"placeholder="Password" required="required">
		</div>
		</div>
		<br><button type="submit" class="btn btn-success">Login</button>
     </form>
	
    
    </div>    </div>
<br><br><br><br><br><br><br>
</center>
</body>
          <!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
    
</html>

