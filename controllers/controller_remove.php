<?php

require './models/model_remove.php';

class removeController{
    private $remove;
    
    public function __construct()
    {
        $this->remove = new password_remover(); 
    }

    public function dropPassword(){
        $passwordID = $_POST['id'];
        $this->remove->remove_password($passwordID);
        exit;
    }
}