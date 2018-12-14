<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>first php</title>


</head>

<body>

<?php

$day = date("w");//用來取得今天星期幾
switch($day)
{
	case 0: 
		echo "今天星期日"; break;
	case 1: 
		echo "今天星期一"; break;
	case 2: 
		echo "今天星期二"; break;
	case 3: 
		echo "今天星期三"; break;
	case 4: 
		echo "今天星期四"; break;
	case 5: 
		echo "今天星期五"; break;
	case 6: 
		echo "今天星期六"; break;
	default:
		echo "沒有這一天";
}



?>



</body>

</html>