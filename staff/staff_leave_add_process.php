<?php

session_start();

error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

$staff_id=$_POST['staff_id'];
$date_applicant=$_POST['date_applicant'];
$day_leave=$_POST['day_leave'];
$approval_1_id=$_POST['approval_1_id'];
$approval_2_id=$_POST['approval_2_id'];
$leave_reason=$_POST['leave_reason'];
$approval_1_status="0";
$approval_2_status="0";
$leave_reason=$_POST['leave_reason'];
echo $approval_1_status;
echo "test";
echo $day_leave;
 echo $approval_1_id;
 echo $approval_2_id;
/*if($day_leave=="1")
{
	$leave_1=$_POST['leave_1'];
}
else if($day_leave=="2")
{
	$leave_1=$_POST['leave_1'];
	$leave_2=$_POST['leave_2'];
}
else if($day_leave=="3")
{
	$leave_1=$_POST['leave_1'];
	$leave_2=$_POST['leave_2'];
	$leave_3=$_POST['leave_3'];
}
else if($day_leave=="4")
{
	$leave_1=$_POST['leave_1'];
	$leave_2=$_POST['leave_2'];
	$leave_3=$_POST['leave_3'];
	$leave_4=$_POST['leave_4'];
}
else if($day_leave=="5")
{
	$leave_1=$_POST['leave_1'];
	$leave_2=$_POST['leave_2'];
	$leave_3=$_POST['leave_3'];
	$leave_4=$_POST['leave_4'];
	$leave_5=$_POST['leave_5'];
}
*/

$leave_1=$_POST['leave_1'];
$leave_2=$_POST['leave_2'];
$leave_3=$_POST['leave_3'];
$leave_4=$_POST['leave_4'];
$leave_5=$_POST['leave_5'];
$staff_name=$_POST['staff_name'];

$sql="insert into staff_leave_application(staff_id,staff_name,date_applicant,leave_reason,day_leave,leave_1,leave_2,leave_3,leave_4,leave_5,approval_1_id,approval_1_status,approval_2_id,approval_2_status) values(:staff_id,:staff_name,:date_applicant,:leave_reason,:day_leave,:leave_1,:leave_2,:leave_3,:leave_4,:leave_5,:approval_1_id,:approval_1_status,:approval_2_id,:approval_2_status)";
$query = $dbh->prepare($sql);
$query->bindParam(':staff_id',$staff_id,PDO::PARAM_STR);
$query->bindParam(':staff_name',$staff_name,PDO::PARAM_STR);
$query->bindParam(':date_applicant',$date_applicant,PDO::PARAM_STR);
$query->bindParam(':leave_reason',$leave_reason,PDO::PARAM_STR);
$query->bindParam(':day_leave',$day_leave,PDO::PARAM_STR);
$query->bindParam(':leave_1',$leave_1,PDO::PARAM_STR);
$query->bindParam(':leave_2',$leave_2,PDO::PARAM_STR);
$query->bindParam(':leave_3',$leave_3,PDO::PARAM_STR);
$query->bindParam(':leave_4',$leave_4,PDO::PARAM_STR);
$query->bindParam(':leave_5',$leave_5,PDO::PARAM_STR);
$query->bindParam(':approval_1_id',$approval_1_id,PDO::PARAM_STR);
$query->bindParam(':approval_1_status',$approval_1_status,PDO::PARAM_STR);
$query->bindParam(':approval_2_id',$approval_2_id,PDO::PARAM_STR);
$query->bindParam(':approval_2_status',$approval_2_status,PDO::PARAM_STR);

$query->execute();
echo "\nPDOStatement::errorCode(): ";
print $query->errorCode();
print_r($query->errorInfo()) ;

		header( "refresh:0;url=staff_leave_dashboard.php" );



}


	?>