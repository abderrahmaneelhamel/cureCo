<?php 

class edit {
    function edit($nom,$image,$price,$category,$qanti,$ID){
        if($image === ""){
            $sql ="UPDATE  `products` SET `label`='$nom',`quantity`=$qanti,`price`=$price ,`category`=$category  WHERE `id`=$ID" ;
        }else{
            $sql ="UPDATE  `products` SET `label`='$nom',`quantity`=$qanti,`image`='$image',`price`=$price ,`category`=$category  WHERE `id`=$ID" ;
        }
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function listShop($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `products` WHERE `id` =$ID LIMIT 1";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function list($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `products` WHERE `id` =$ID LIMIT 1";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    
    function category(){
        $test = new connection;
        $conn = $test->connection();
        $ret = mysqli_query($conn, "SELECT * FROM `category`");
        return $ret;
    }
}