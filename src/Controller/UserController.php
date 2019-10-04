<?php

namespace src\Controller;

class UserController extends \Core\Controller
{
    public function addAction()
    {
        $this->render("register");
    }

    public function indexAction()
    {

    }

    public function registerAction()
    {
        $model = new \Core\ORM();
        $model->verify_save();
    }

    public function loginAction()
    {
        $model = new \src\Model\UserModel();
        $model->login();
        $this->render("login");
    }
}