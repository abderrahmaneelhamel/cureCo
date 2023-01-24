<?php

class delete {
    function delete($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="DELETE FROM `products` WHERE `id`= ?";
        $resultat = $conn->prepare($sql);
        $resultat->bind_param("d",$ID);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        if ($resultat) {
            header("Location:products");
        }
    }
    function deleteCart($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT product FROM `cart` WHERE `id`=$ID";
        $resultat = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($resultat);
        $id = $row['product'];
        $sql="DELETE FROM `cart` WHERE `id`= ?";
        $resultat = $conn->prepare($sql);
        $resultat->bind_param("d",$ID);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        $sql = "UPDATE products SET quantity = quantity+1 WHERE id = ?";
        $resultat = $conn->prepare($sql);
        $resultat->bind_param("d",$id);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        if ($resultat) {
            header("Location:cart");
        }
    }
}
