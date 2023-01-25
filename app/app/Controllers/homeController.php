<?php

class HomeController{
     function __construct ()
    {
        session_start();
        require "autoloader.php";
    }
    public function index0(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        header("location:home");
    }
    public function index($page){
        if($_SESSION['user']==null){
            if(isset($_SESSION['admin'])){
                header("location: dachBoard");
            }else{
                header("location: login");
            }
        }
        $test = new dh;
        $resultat1 = $test->cartCount();
        include('app/Views/'.$page.'.php');
    }
    public function home(){
        require("app/Models/dh.php");
        $test = new dh;
        $resultat1 = $test->cartCount();
        $resultat = $test->products("home");
        $resultat2 = $test->products("pr");
        include('app/Views/home.php');
    }
    public function shop($sort){
        if($_SESSION['user']==null){
            header("location: login");
        }
        require("app/Models/dh.php");
        $test = new dh;
        $resultat1 = $test->cartCount();
        $resultat = $test->shop($sort);
        include('app/Views/shop.php');
    }
    public function cart(){
        if($_SESSION['user']==null){
            header("location: login");
        }
        if(isset($_SESSION['user-id'])){
        require("app/Models/dh.php");
        $test = new dh;
        $resultat1 = $test->cartCount();
        $resultat = $test->cart();
        $discount=1;
        if(isset($_POST['dis'])){
            $dis = $_POST['dis'];
            if($dis===""){
                header("location: cart");
            }else{
                $resultat2 = $test->discount($dis);
                $row2 = mysqli_fetch_assoc($resultat2);
                if($row2["discount"] == ""){
                    $discount = 1;
                }else{
                    $discount = $row2["discount"];
                }
            }
        }
        }
        include('app/Views/cart.php');
    }
    public function displayProducts(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("app/Models/dh.php");
        $test = new dh;
        $resultat = $test->products("pr");
        if(isset($_POST['search'])){
            $name = $_POST['search'];
            if($name===""){
                header("location: products");
            }else{
                $resultat = $test->search($name);
            }
        }
        $list = new edit;
        $ret=$list->category();
        require("addNewController.php");
        include('app/Views/products.php');
        $test = new addNewController;
        $test->addNewController();
    }
    function dachboard(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("app/Models/dh.php");
        $test = new dh;
        $resultat1 = $test->stc();
        $resultat2 = $test->stc1();
        $resultat3 = $test->stc2();
        $resultat4 = $test->stc3();
        $resultat5 = $test->stc4();
        include('app/Views/dachBoard.php');
    }
    public function edit($ID){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("editController.php");
        $list = new edit;
        $resultat=$list->list($ID);
        $ret=$list->category();
        require("app/Views/editpage.php");
        $test = new editController;
        $test->editController($ID);
    }
    public function shopSingle($ID){
        if($_SESSION['user']==null){
            header("location: login");
        }
        require("editController.php");
        $list = new edit;
        $resultat=$list->listShop($ID);
        $row = mysqli_fetch_assoc($resultat);
        $test = new dh;
        $resultat1 = $test->cartCount();
        require("app/Views/shop-single.php");
    }
    public function Item($ID){
        if($_SESSION['user']==null){
            header("location: login");
        }
        $user = $_SESSION['user-id'];
        require("app/Models/addNew.php");
        $add = new addNew;
        $add->addItem($ID,$user);
        header("location: cart");
    }
    function signup(){
        require("signupController.php");
        require("app/Views/signuppage.php");
        $sign = new signupcontrol;
        $sign->signupcontrol();
    }
    function login(){
        require("loginController.php");
        if((isset($_SESSION['admin'])) OR (isset($_SESSION['user']))){
            require("disconnect.php");
            $dis = new disconnect;
            $dis->disconnect();
        }
        require("app/Views/login.php");
        $login = new loginController;
        $login->loginController();
    }
    function checkout(){
        if($_SESSION['user']==null){
            header("location: login");
        }
        $user = $_SESSION['user-id'];
        require("app/Models/addNew.php");
        $add = new addNew;
        $add->checkout($user);
        header("location: thankyou");
    }
    function disconnect(){
        require("disconnect.php");
        $dis = new disconnect;
        $dis->disconnect();
    }
}
?>