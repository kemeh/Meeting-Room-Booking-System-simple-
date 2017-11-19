<?php

abstract class BaseController{
    /** @var  UserModel */
    private $userModel;
    protected $controllerName;
    protected $action;
    protected $isPost = false;
    public $isUserAdmin;

    public function __construct($controllerName, $action)
    {
        $this->controllerName = $controllerName;
        $this->action = $action;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->isPost = true;
        }

        $this->onInit();
    }

    public function index(){

    }

    private function onInit(){
        $roleModel = new RoleModel();
        if($roleModel->getAll() == null || count($roleModel->getAll()) == 0){
            $roleModel->create('User');
            $roleModel->create('Admin');
        }
        $this->userModel = new UserModel();
        if($this->userModel->getAll() == null || count($this->userModel->getAll()) == 0){
            $role_id = $roleModel->getByName('Admin')['role_id'];
            $this->userModel->createUser('admin', 'admin@admin.com', 'pass', 'Admin', 'Admin', $role_id, 'Africa/Abidjan', null );
        }
        if(isset($_SESSION['user_id'])){
            $this->isUserAdmin = $this->isUserAdmin($_SESSION['user_id']);
        }

    }

    public function renderView($viewName = null){
        if($viewName == null){
            $viewName = $this->action;
        }
		include_once('views/layout/header.php');
        include_once('views/' . $this->controllerName . '/' . $viewName . '.php');
		include_once('views/layout/footer.php');
    }

    public function redirect($controllerName, $actionName = null, $args = null){
        $url = '/' . $controllerName;
        if($actionName != null){
            $url .= '/' . $actionName;
        }
		
		if($args != null){
			$url .= '/' . $args;
		}

        header("Location: " . $url);
		exit();
    }

    protected function isUserAuthor($user_id, $reservation_id){
        $reservation_model = new ReservationModel();
        $reservation = $reservation_model->getById($reservation_id);

        if($user_id == $reservation['user_id']){
            return true;
        }

        return false;
    }

    protected function isUserAdmin($user_id){
        $user = $this->userModel->getById($user_id);

        if($user['role_name'] == 'Admin' || $user['username'] == 'admin'){
            return true;
        }
        return false;
    }

    function addMessage($msg, $type){
        if(!isset($_SESSION['messages'])){
            $_SESSION['messages'] = array();
        }

        array_push($_SESSION['messages'],
            array('text' => $msg, 'type' => $type));
    }

    function addInfoMessage($msg){
        $this->addMessage($msg, 'success');
    }

    function addErrorMessage($msg){
        $this->addMessage($msg, 'danger');
    }
}