<?php



// select 
$sql = "SELECT * FROM blog ";

//新增
$sql = "INSERT INTO `blog` ( `title`, `content`, `create_time`) VALUES ( '標題1', '內容', '2018-12-14 00:00:00');";

//更新
$sql = "UPDATE blog SET title='修改標題' , content='修改的內容' WHERE id = 1 ";

//刪除
$sql = "DELETE FROM blog WHERE id = 1  ";


?>