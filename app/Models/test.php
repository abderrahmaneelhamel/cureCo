<?php
class test {
    function data(){
        include("connection.php");
        $test = new connection;
        $conn = $test->connection();
        $ret = mysqli_query($conn, "SELECT * FROM `category`");
        header("Content-Type: application/json");
        echo json_encode($ret->fetch_all(MYSQLI_ASSOC));
    }
}
$tset = new test;
$tset->data();
?>