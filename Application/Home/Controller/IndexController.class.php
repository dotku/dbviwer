<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $model = D();
        // var_dump($model->db()->getTables());
        // var_dump($_SESSION);
        if (!$_SESSION['if_login']) {
            $this->redirect('login');
        } else {
            $this->display();
        }
    }
    public function login() {
        if ($_POST['pin'] == C('pin')) {
            $_SESSION['if_login'] = true;
            $this->redirect('index');
        } else {
            $this->display();
        }
        
    }
    public function logout() {
        session_destroy();
        $this->redirect('index');
    }
}