<?php

class dh {
    function products($page){
        if($page === "pr"){
            $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.label ; ";
        }elseif($page === "home"){
            $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.price LIMIT 3;";
        }
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function shop($sort){
        switch($sort){
            case 1 :
                $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.label DESC ;";
                break;
            case 2 :
                $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.price ;";
                break; 
            case 3 :
                $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.price DESC;";
                break;
            case 4 :
                $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.dateOfAddition ;";
                break;
            case 5 :
                $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.dateOfAddition DESC;";
                break;    
            default :
                $sql="SELECT p.`id`, p.label, p.price , p.image, p.quantity , c.category FROM category c , products p where c.id=p.category and p.quantity > 0 ORDER BY p.label ;";
                break;              
        }
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function cart(){
        $user=$_SESSION['user-id'];
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT c.`id`, p.label, p.price , p.image  FROM users u , cart c , products p where c.user = u.id and c.user = $user and c.product = p.id;";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function cartCount(){
        $user=0;
        if(isset($_SESSION['user-id'])){
            $user=$_SESSION['user-id'];
        }
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT COUNT(*) FROM `cart` where user = $user;";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function discount($dis){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `cupons` WHERE `code` = '$dis';";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `products`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc1(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `users`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function search($name){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT p.`id`, p.label, p.image, p.quantity, p.price, c.category FROM products p , category c where p.`category`=c.id and p.label LIKE '%".$name."%'";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
}