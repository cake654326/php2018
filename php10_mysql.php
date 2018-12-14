<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>get or post demo</title>


</head>

<body>

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

$sql="SELECT * FROM blog where id > 0 ORDER BY create_time DESC";
$result=mysqli_query($conn,$sql);


if(!$result){
		echo ("Error: ".mysqli_error($conn));
		exit();
}

$aRows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach( $aRows as $key => $aRow ){
	echo "<pre>";
	print_r($aRow);
	echo "</pre>";
}



?>



</body>

</html>