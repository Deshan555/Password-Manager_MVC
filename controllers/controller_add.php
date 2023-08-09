<?php

require './models/model_add.php';

class addController
{

    private $passwords;

    public function __construct()
    {
        $this->passwords = new password_saver();
    }

    public function add_Passwords()
    {
        require 'view/view_add.php';
        exit;
    }

    public function save_Passwords()
    {
        $account_name = $_POST['account_name'];
        $host_address = $_POST['host_address'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $this->passwords->save_password($email, $password, $account_name, $host_address);
        exit;
    }
}
