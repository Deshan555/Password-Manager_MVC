<?php

class password_remover
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function remove_password($passwordID)
    {
        $query = "DELETE FROM passwords WHERE Pass_ID = $passwordID ;";
        $stmt = $this->db->query($query);
        $stmt->execute();
        header('Location: ' . $GLOBALS['site_url']);
        exit;
    }
}
