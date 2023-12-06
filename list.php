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
$data=file("file.txt");
foreach($data as $key=>$value){
    $row=explode(",",$value);
    if(count($row)>1){
        echo "<tr>";
        foreach($row as $user){
            echo "<td>$user</td>";
        }
        echo "<td><a href='view.php?id=$key'>view</a></td>";
        echo "<td><a href='delete.php?id=$key'>delete</a></td>"; 
        echo "</tr>";
    }
}
?>
</table>




