
<?php
//   var_dump($_POST);
  $data = implode(",",$_POST);
  file_put_contents("file.txt",$data."\n" ,FILE_APPEND);
  header("Location:list.php");
?> 

