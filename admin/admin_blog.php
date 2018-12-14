<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>admin</title>
  <meta name="description" content="Wireframe design of a checkout form by Pingendo">
  <meta name="keywords" content="Pingendo bootstrap example template wireframe checkout form">
  <meta name="author" content="Pingendo">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">

</head>

<body >



  <div class="py-5 ">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-7 mx-auto"> <i class="fa d-block fa-bullseye fa-5x mb-4 text-info"></i>
          <h2><b>後台管理系统</b></h2>
        </div>
      </div>
    </div>
  </div>



  <div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3"><b>新增文章</b></h4>

          <form  class="needs-validation" method="post" action="./insert.php">
            <div class="row">
              <div class="col-md-3 mb-1"> <label for="title">TITLE</label>
                <input type="text" class="form-control" id="title" name="title" >
                
              </div>
            
            <div class="col-md-9 mb-3">
              <label for="content">內容:</label>
              <textarea class="form-control" rows="5" id="content" name="content"></textarea>
            </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">新增</button>
          </form>
        </div>
      </div>
    </div>
  </div>

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
  echo '
  <br/><hr/><br/>
  <div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3"><b>EDIT'.$aRow['id'].'</b></h4>

          <form  class="needs-validation" method="post" action="./update.php?id='.$aRow['id'].'">
            <div class="row">
              <div class="col-md-3 mb-1"> <label for="title">TITLE</label>
                <input type="text" class="form-control" id="title" name="title" value="'.$aRow['title'].'" >
                
              </div>
            
            <div class="col-md-9 mb-3">
              <label for="content">內容:</label>
              <textarea class="form-control" rows="5" id="content" name="content">'.$aRow['content'].'</textarea>
            </div>

           

            <button class="btn btn-primary  " type="submit">SAVE</button>
          </form>
            <a class="btn btn-primary  " href="./delete.php?id='.$aRow['id'].'" >DELETE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  ';



}
?>


  <div class=" text-muted text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-4">
          <p class="mb-1">© 2018</p>
        </div>
      </div>
    </div>
  </div>


</body>

</html>