<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color: #cccccc3b;
            width:50%;
            border-radius: 4px;
            padding:15px;
        }
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
/* #vehicle3{
    margin-right:10px
} */
input[type=submit] ,input[type=reset]{
  width: 50%;
  background-color: #423d3d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
</head>
<body>

<form action="/PhpProject/add.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br>
  <!-- <label for="lname">Address:</label><br>
  <textarea name="Address" rows="5" cols="40"></textarea> -->
  <br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">female</label><br><br>
 
  <!-- <input type="checkbox" id="vehicle1" name="skill[]" value="PHP" checked>
  <label for="vehicle1"> PHP</label>
  <input type="checkbox" id="vehicle3" name="skill[]" value="javascript" checked>
  <label for="vehicle3"> JS</label><br><br>
  
  <input type="checkbox" id="vehicle2" name="skill[]" value="MYSql">
  <label for="vehicle2"> MYSql</label>
  <input type="checkbox" id="vehicle4" name="skill[]" value="PostgreeSql">
  <label for="vehicle3">PostgreeSql</label><br><br> -->
  
  <label for="fname">User Name:</label><br>
  <input type="text" id="username" name="username" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="text" id="Password" name="Password" value=""><br>
  <label for="fname">Department:</label><br>
  <input type="text" id="Department" name="Departments" value="IT" readonly><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form> 
   
   
</body>
</html>