<?php

    if(isset($_REQUEST['login'])){
        if($username == "nilanjan" && $password == "password"){
            $_SESSION['username'] = $username;
        }else{
            echo "<script>alert('Wrong username or password !')</script>";
        }
    }

    if(isset($_REQUEST['logout'])){
        session_destroy();
        header("Location: /");
        exit();
    }

?>