<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	echo "3";
header('location:index.php');
}
else{ 

echo $m_img;

$test=basename($_FILES["m_img"]["name"]);
echo $test;

$m_name=$_POST['m_name'];
$m_img=basename($_FILES["m_img"]["name"]);
$m_id=$_POST['m_id'];
$m_position=$_POST['m_position'];




$sql="insert into management(m_id,m_name,m_position,m_img) values(:m_id,:m_name,:m_position,,:m_img)";
$query = $dbh->prepare($sql);
$query->bindParam(':m_id',$m_id,PDO::PARAM_STR);
$query->bindParam(':m_name',$m_name,PDO::PARAM_STR);
$query->bindParam(':m_position',$m_position,PDO::PARAM_STR);
$query->bindParam(':m_img',$m_img,PDO::PARAM_STR);

$query->execute();

$msg="Data updated successfully";



//img upload

//file upload

$target_dir = "/image/management_image/";
$target_file = $target_dir . basename($_FILES["m_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

?> 
<img src="<?php $target_file?>" alt="">
<?php

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["m_img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;

  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["m_img"]["size"] > 500000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["m_img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["m_img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


		header( "refresh:6;url=admin_mgmt.php" );



}


	?>