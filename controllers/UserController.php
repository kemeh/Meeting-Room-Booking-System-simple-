<?php

class UserController extends BaseController
{
    public function index(){
        $model = new UserModel();
        $this->users = $model->getAll();
    }

    public function create(){
        $role_model = new RoleModel();
        $office_model = new OfficeModel();
        $user_model = new UserModel();

        $this->offices = $office_model->getAll();
        $this->roles = $role_model->getAll();

        if ($this->isPost){
                $user_name = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $role_id = $_POST['role_id'];
                $user_tz = $_POST['user_tz'];
                $office_id = $_POST['office_id'];

            $user_model->createUser($user_name, $email, $password, $first_name, $last_name, $role_id, $user_tz, $office_id);
            $this->addInfoMessage('User '.'\'' . $user_name . '\'' . ' successfully created');

            $this->redirect('user');
        }
    }

    public function login(){
        if($this->isPost){
            $user_model = new UserModel();
            $user = $user_model->getByUsername($_POST['username']);
            $hashed_password_to_check = hash('gost', $_POST['password']);

            if($hashed_password_to_check == $user['password']){
                $_SESSION['user_id'] = $user['user_id'];
                $this->addInfoMessage('Hello, ' . $user['username']);

                $this->redirect('home');
            }
            $this->addErrorMessage('Username or password incorrect! Please try again.');

        }
    }

    public function logout(){
        unset($_SESSION['user_id']);

        $this->redirect('home');
    }
}