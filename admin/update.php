<?php
$DBNAME = "resume";
$DBUSER = "root";
$DBPASSWD = "root";
$DBHOST = "localhost";
 
$conn = mysqli_connect( $DBHOST, $DBUSER, $DBPASSWD ,$DBNAME );
if ( $conn == false ){
  print mysqli_error($conn);
  die ("無法連結資料庫");
  exit;
}

mysqli_query( $conn, "SET NAMES 'utf8'");

$sTitle = $_POST['title'];
$sContent = $_POST['content'];
$sCcreate_time = date("Y-m-d H:i:s");


$sql = "UPDATE blog SET title='".$sTitle."' , content='".$sContent."' WHERE id = ".$_GET['id'] . " ";


$result=mysqli_query($conn,$sql);


if(!$result){
		echo ("Error: ".mysqli_error($conn));
		exit();
}


header('Location: ./admin_blog.php');