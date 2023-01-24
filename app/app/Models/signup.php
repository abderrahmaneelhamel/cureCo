<?php

class signup {
    function signup($fullname,$name,$email,$password){
        $role = "client";
        $test = new connection;
        $conn = $test->connection();
        
           if($conn->connect_error){
           die('conection failed :'.$conn->connect_error);
           echo "error";
           }else{
            $resultat = $conn->prepare("INSERT INTO `users` (`name`,`fullName`,`email`, `password`,`role`) VALUES (?,?,?,?,?)");
            $resultat->bind_param("sssss",$name,$fullname,$email,$password,$role);
            $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
           header("Location: login");
           }
    }
    
}