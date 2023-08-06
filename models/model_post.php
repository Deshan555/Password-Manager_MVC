<?php

require 'core/database.php';

class PostsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function fetch_all_posts()
    {
        $sql = 'SELECT * FROM passwords';
        $query = $this->db->query($sql);
        $query->execute();
        $post = $query->fetchAll(PDO::FETCH_ASSOC);
        return $post;
    }
}
