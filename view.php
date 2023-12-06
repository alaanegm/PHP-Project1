<table border=1>
  <tr>
    <th>First Name</th>
    <th>last Name</th>
    <th>Gender</th>
    <th>User Name</th>
    <th>password</th>
    <th>Department</th>
    
  </tr>
<?php
$index=$_GET["id"];
$data=file("file.txt");
foreach($data as $key=>$value){
    echo "<tr>";
    if($key==$index){
        $row=explode(",",$value);
        foreach($row as $user){
            echo "<td>$user</td>";
        }
    }
    echo "</tr>";
}

?>
</table>