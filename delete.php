
<?php
$index=$_GET["id"];
$data=file("file.txt");
if (isset($data[$index])) {
    unset($data[$index]);
}
 $data = implode($data);
 file_put_contents("file.txt",$data);
 header("Location:list.php");
?>
