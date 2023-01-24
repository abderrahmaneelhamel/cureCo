<?php

class loginController {
    function loginController(){
        
        if(isset($_POST['submit'])){
            $email = $_POST['user-email'];
            $password = $_POST['password'];
            $login = new login;
            $login->loginUser($email,$password);
            
        }     
    }
}