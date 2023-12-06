<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <?php
//    var_dump($_POST);
if($_POST["gender"]=="male"){
    echo "<h1>Thanks Mr: " . $_POST["fname"] ." ". $_POST["lname"]. "</h1>";
}
if($_POST["gender"]=="female"){
    echo "<h1>thanks Miss: " . $_POST["fname"] ." ". $_POST["lname"]. "</h1>";
}

echo "<h1>Name:"  .$_POST["fname"]." ".$_POST["lname"] . "</h1>";
echo "<h1>Department: " . $_POST["Departments"] . "</h1>";
echo ("<h1> Address:".$_POST["Address"]."</h1>");

if (isset($_POST["skill"])) {
    $selectedSkills = $_POST["skill"];
    echo "<h1>My Skills:"."<h1>";
    foreach ($selectedSkills as $skill) {
        echo "<li>".$skill."</li>";
    }
} else {
    echo "No skills selected.";
}

?>
</body>
</html>