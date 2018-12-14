<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>first php</title>


</head>

<body>

<?php

$aData = [];

$aData[0] = "jeff";
$aData[1] = "ken";

$aData[] = "小明";

foreach( $aData as $key => $val ){
	echo "<br/> [".$key."] Name:<font color=red>".$val . "</font>";
}



?>



</body>

</html>