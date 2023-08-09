<?php

class password_saver
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function save_password($username, $password, $profilename, $hostname)
    {
        $query = "INSERT INTO passwords (Host_Name, User_Name, Password, AccountName) VALUES ('$hostname', '$username', '$password', '$profilename');";
        $stmt = $this->db->query($query);
        $stmt->execute();
        header('Location: ' . $GLOBALS['site_url']);
        exit;
    }
}
