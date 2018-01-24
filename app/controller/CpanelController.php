<?php

class CpanelController extends Controller {

    public function __construct(){
        //echo "controlador pagina cargando";
    }

    public function index(){
        $this->validate();
        $this->view("cpanel/cpanel");
    }

    public function products($data = ''){
        $this->validate();
        $this->view("cpanel/lazos/products");
    }

    public function product_edit($parameter = ''){
        $this->validate();
        $this->view("cpanel/lazos/product_edit", $parameter);
    }

    public function product_del($id = ''){
        $this->validate();
        require_once __DIR__ . '/../model/Products_lazos.php';
        $p = new Products_lazos();
        //$p->deleteProduct($data);
        header('location:/cpanel/products');
    }

    public function product_update($id = ''){
        $this->validate();
        if(!isset($_POST['update'])) header('location:/cpanel');

        header('Content-type: application/json');
        require_once __DIR__ . '/../model/Products_lazos.php';

        $code = filter_var(trim($_POST['code']));
        $state = ($_POST['state'] == "Visible") ? '1' : '0';
        $name_es = filter_var(trim($_POST['name_es']));
        $name_en = filter_var(trim($_POST['name_en']));


        if($_FILES['image']['name']){
            $img = strtolower($_FILES['image']['name']);
            if($_FILES['image']['size'] > 512000){
                return false;
            }

            move_uploaded_file($_FILES['image']['tmp_name'], '/public/lazosPublic/img/products/'. $img);

        }
        else{
            $img = $_POST['img-default'];
        }
        //echo $_POST['img-default'] . 'hola';
        $path = $_FILES['image']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        echo $ext;
    }

    public function projects(){
        $this->validate();
        $this->view("cpanel/lazos/projects");
    }

    public function projects_operations(){
        $this->validate();
        $this->view("cpanel/lazos/projects_operations");
    }

    public function project_edit($parameter = ''){
        $this->validate();
        $this->view("cpanel/lazos/project_edit", $parameter);
    }

    public function validate(){
        session_start();
        if(!isset($_SESSION['user'])){
            header('location:/login');
        }
        if(isset($_SESSION['user']) && $_SESSION['user'] != 'true'){
            header('location:/login');
        }
    }

    public function close(){
        session_start();
        if(isset($_SESSION['user'])){
            if($_SESSION['user'] == 'true'){
                $_SESSION = array();
                session_destroy();
            }
        }
        header('location:/cpanel');
    }

}