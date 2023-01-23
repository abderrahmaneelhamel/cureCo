<?php

class addNew {

    function addNew($nom,$qanti,$image,$price,$category){
        $date = date('Y-m-d');
        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `products` (`label`, `price`, `category`, `image`, `quantity`, `dateOfAddition`) VALUES (?,?,?,?,?,?);";
        $resultat = $conn->prepare($sql);
        $resultat->bind_param("sddsds",$nom,$price,$category,$image,$qanti,$date);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        if($resultat){
        }
    }
    function addItem($id,$user){
        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `cart` (`user`, `product`) VALUES (?,?) ";
        $resultat = $conn->prepare($sql);
        $resultat->bind_param("dd",$user,$id);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        $sql = "UPDATE products SET quantity = quantity-1 WHERE id = ?";
        $resultat1 = $conn->prepare($sql);
        $resultat1->bind_param("d",$id);
        $resultat1->execute() or die("Erreur lors de l'execution de la requete: ");
    }
    function checkout($user){
        $test = new connection;
        $conn = $test->connection();
        $sql = "DELETE FROM `cart`";
        $resultat = mysqli_query($conn,$sql);
    }
    function contact($name,$phone,$email,$subject,$message){
        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `subject`, `massage`) VALUES (?,?,?,?,?)";
        $resultat = $conn->prepare($sql);
        $resultat->bind_param("sdsss",$name, $phone, $email, $subject, $message);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        if($resultat){
            header("Location:home#contact");
        }
    }
}