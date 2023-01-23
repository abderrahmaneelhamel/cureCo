<?php

class signupcontrol {
    function signupcontrol(){
        if(isset($_POST['submit'])){
            $fullname = $_POST['full-name'];
            $name = $_POST['first-name'];
            $email = $_POST['user-email'];
            $password = md5($_POST['password']);
            $signup = new signup;
            $signup->signup($fullname,$name,$email,$password);
        }
    }
}
