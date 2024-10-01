<?php
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="login.php" method="post">
        <div>
        <label for="">Username: </label>
        <input type="text" name="username" id="">
        </div>
        <div>
        <label for="">Password: </label>
        <input type="password" name="password" id="">
        </div>
        <input type="submit" value="Login">
    </form>
    <?php 
        if(isset($_GET['message'])){
            ?>
                <h1><?php echo $_GET['message'] ?></h1>
            <?php
        }
    
    ?>
</body>
</html>