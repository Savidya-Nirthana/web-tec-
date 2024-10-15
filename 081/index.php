<?php
    $age = 12;
    ?> 
    
    <a href="info.php&amp;age=<?php echo $age ?>">click me</a>

    <?php

    $name = "Jhon";
    $homePage = "http://www.examle.com/";
    $favoriteSport = "Ice Hockey";
    $querString = "firstname=" . urlencode($name) . "&amp;homePage=" . urldecode($homePage) . "&amp;favoriteSport=" . urlencode($favoriteSport);
    echo '<p> <a href="info.php?' . $querString . '"> find out more info on this person </a>';

    $fields = array('name'=>'John', 'homepage'=> 'http://www.examle.com/', 'favoriteSport' => 'Ice Hockey');
    echo '<p> <a href="info.php?'.htmlspecialchars(http_build_query($fields)).'"> find out more info on this person </a><p>'
?>

<?php
    if(!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits', $visits, time() + 3600*24*365);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        div{
            font-size: 20pt;
            color: navy;
            font-family: arial black;
            width: 50%;
            background-color: white;
        }
        p{
            font-size: 18pt;
            color: lime;
        }
    </style>
<body>
    <?php 
        echo '<br><br><center><div class="groove">HIT COUNTER USING COOKIES</div><br>';
        echo '<div class="dotted">';
        if($visits>1) {
            echo "<p> This is visit number $visits </p>";
            
        }else {
            echo "<p> Welcome to my website! Click here for a tour!</p>";
        }
        echo "<br></center></div>";
    ?>
</body>
</html>

<?php
    session_start();

    $_SESSION["firstname"] = "peter";
    $_SESSION["lastname"] = "parker";

    echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

    if(isset($_SESSION["lastname"])) {
        unset($_SESSION["lastname"]);
    }

    echo $_SESSION["lastname"];
    session_destroy();
?>