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

    public function product_new($parameter = ''){
        $this->validate();
        $this->view("cpanel/lazos/product_new");
    }

    public function product_create($parameter = ''){
        $this->validate();
        if(isset($_POST['name_es'])){
            require_once __DIR__ . '/../model/Products_lazos.php';
            require_once __DIR__ . '/../method/lazos/product_create.php';
        }
    }

    public function product_del($id = ''){
        $this->validate();
        require_once __DIR__ . '/../model/Products_lazos.php';
        $p = new Products_lazos();
        $p->deleteProduct($id);
        header('location:/cpanel/products');
    }

    public function product_update($id = ''){
        $this->validate();
        if(isset($_POST['name_es'])){
            require_once __DIR__ . '/../model/Products_lazos.php';
            require_once __DIR__ . '/../method/lazos/product_update.php';
        }
    }

    public function projects(){
        $this->validate();
        $this->view("cpanel/lazos/projects");
    }

    public function project_edit($id){
        $this->validate();
        $this->view("cpanel/lazos/project_edit", $id);
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