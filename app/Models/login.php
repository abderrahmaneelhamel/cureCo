<?php

class login {
    function loginUser($email,$password){
        $test = new connection;
        $conn = $test->connection();
        $password=md5($password);
        $sql = "SELECT * FROM `users` WHERE  `email`='$email' and  `password`='$password'";
        $result = mysqli_query($conn,$sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if($row['role']=="admin"){
                $_SESSION['admin'] = $row['name'];
                header("Location: dachBoard");
            }else{
                $_SESSION['user'] = $row['name'];
                $_SESSION['user-id'] = $row['id'];
                header("Location:home");
            }
        }else{
            header("Location:login");        
        }
        }
    }
