<?php 
    include('db_connection.php');
    
    $user = $_POST["username"];
    $pass = $_POST['password'];

    if(empty($user)){
        header("Location: index.php?message=username is required");
    }
    else if(empty($pass)){
        header("Location: index.php?message=password is required");
    }
    else {
        $sql = "SELECT * FROM `user` WHERE `username`='$user' AND `password`='$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $user && $row['password'] === $pass) {
                echo 'login success';
            }
        }
    }


?>