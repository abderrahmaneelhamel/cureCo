<?php

class App {
    protected $controller = "app/Controllers/HomeController.php";
    protected $pages = ['home','about','thankyou','contact'];

    public function __construct() {
        require_once $this->controller;
        $home = new HomeController();
        if(isset($_GET['page'])){
            if($_GET['page']==="dachBoard"){
                $home->dachboard();
            }elseif($_GET['page']==="products"){
                $home->displayProducts();
            }elseif($_GET['page']==="home"){
                $home->home();
            }elseif($_GET['page']==="shop"){
                $sort = null;
                $home->shop($sort);
            }elseif($_GET['page']==="cart"){
                $home->cart();
            }elseif($_GET['page']==="disconnect"){
                $home->disconnect();
            }elseif($_GET['page']==="checkout"){
                $home->checkout();
            }elseif($_GET['page']==="signuppage"){
                $home->signup();
            }elseif($_GET['page']==="login"){
                $home->login();
            }elseif(strpos($_SERVER['REQUEST_URI'], "sorting?sort=") == true){
                $sort = str_replace("/sorting?sort=","",$_SERVER['REQUEST_URI']);
                $home->shop($sort);
            }elseif(strpos($_SERVER['REQUEST_URI'], "shop-single?id=") == true){
                $ID = str_replace("/shop-single?id=","",$_SERVER['REQUEST_URI']);
                $home->shopSingle($ID);
            }elseif(strpos($_SERVER['REQUEST_URI'], "item?item-id=") == true){
                $ID = str_replace("/item?item-id=","",$_SERVER['REQUEST_URI']);
                $home->item($ID);
            }elseif(strpos($_SERVER['REQUEST_URI'], "editpage?id=") == true){
                $ID = str_replace("/editpage?id=","",$_SERVER['REQUEST_URI']);
                $home->edit($ID);
            }elseif(strpos($_SERVER['REQUEST_URI'], "delete?id=") == true){
                $ID = str_replace("/delete?id=","",$_SERVER['REQUEST_URI']);
                $del= new delete;
                $del->delete($ID);
            }elseif(strpos($_SERVER['REQUEST_URI'], "deleteCart?id=") == true){
                $ID = str_replace("/deleteCart?id=","",$_SERVER['REQUEST_URI']);
                $del= new delete;
                $del->deleteCart($ID);
            }elseif(in_array($_GET['page'],$this->pages)){
                $page = $_GET['page'];
                $home->index($page);
            }else{
                $home->index0();
            }
        }else{
            header('location:home');
        }
    }
}
