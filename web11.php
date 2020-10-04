<?php
session_start();

    if(isset($_GET['name1']) && isset($_GET['name2'])){
            $_SESSION['zaidejas1']= $_GET['name1'];
            $_SESSION['zaidejas2']= $_GET['name2'];
            header("Location:http://localhost/paskaitos/11/web11a.php");
        }
// session_unset();       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method= "get">
  <label for="name1"> Pirmas žaidėjas:</label><br>
  <input type="text" id="name1" name="name1" value=""><br><br>
  <label for="name2"> Antras žaidėjas:</label><br>
  <input type="text" id="name2" name="name2" value=""><br><br>
  <input type="submit" value="Pradėti">
</form> 
</body>
</html>