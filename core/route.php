<?php

require 'controllers/controller_post.php';

//require 'config.php';

//var_dump($_SERVER['REQUEST_URI']);


$link = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

//$link = $base_url+$link;

var_dump($link);

switch ($link){
    case '/PHP-Mvc/':
        echo 'Home';
        $controller_call = new postsController();
        $controller_call->get_All_Posts();
        echo 'Home';
        break;
    
    case '/PHP-Mvc/index.php/post':
        echo 'Post';
        break;
}

