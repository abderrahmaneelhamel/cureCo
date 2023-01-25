<?php
class test {
    function data(){
        $q = $_GET['q'];
        include("connection.php");
        $test = new connection;
        $conn = $test->connection();
        $ret = mysqli_query($conn, "SELECT * FROM `products` WHERE label LIKE '%".$q."%' ");
        header("Content-Type: application/json");
        echo json_encode($ret->fetch_all(MYSQLI_ASSOC));
    }
}
$tset = new test;
$tset->data();
?>