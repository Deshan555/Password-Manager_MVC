<?php

require './models/model_post.php';

class postsController{
    private $posts;
    
    public function __construct()
    {
        $this->posts = new PostsModel(); 
    }

    public function get_All_Posts(){
        $posts = $this->posts->fetch_all_posts();
        require 'view/view_post.php';
        exit;
    }
}