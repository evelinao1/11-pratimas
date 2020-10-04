<?php
session_start();
// $_SESSION['count1']=[];
// $_SESSION['count2']=[];


if(isset($_POST["generate"])){
    $metimas= rand(1,6);
    array_push($_SESSION['count1'], $metimas);
    header("Location:http://localhost/paskaitos/11/web11b.php"); 
}
if (array_sum($_SESSION['count1'])>=30){
    echo '<h1>Laimėjo '.$_SESSION['zaidejas1'].'</h1><br>
    <form action="" method="post">
    <input name="pradeti" type="submit" value="Žaisti išnaujo">
    </form>';
}
if (array_sum($_SESSION['count2'])>=30){
    echo '<h1>Laimėjo '.$_SESSION['zaidejas2'].'</h1><br>
    <form action="" method="post">
    <input name="pradeti" type="submit" value="Žaisti išnaujo">
    </form>';
}
if (isset($_POST["pradeti"])){
    header("Location:http://localhost/paskaitos/11/web11.php");
    session_unset();  
}

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <p><?=$_SESSION['zaidejas1']?></p>
    <!-- <h1><?=$metimas?></h1> -->
    </div>
    <div style= "display: inline-block; width: 200px">
        <p><?=$_SESSION['zaidejas1']?> rezultatas: <?=array_sum($_SESSION['count1'])?></p>
        <br><br><br><br>
        <p><?=$_SESSION['zaidejas2']?> rezultatas:<?=array_sum($_SESSION['count2'])?></p>
    </div>
    <form style= "display: inline-block; width: 200px; float: left; margin-top: 50px;" action="" method="post">
    <input name="generate" type="submit" value="Mesti kauliuką">
    </form>    
</body>
</html>