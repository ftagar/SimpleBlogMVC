<?php
    function login_action($login,$destUri,$logoutUri,$error)
    {
        require 'view/login.php';
    }
    
    function blog_action($login,$destUri,$logoutUri,$error)
    {
        $posts = get_all_alarms();
        require 'view/address.php';
    }
    
    function post_action($id,$login,$destUri,$logoutUri,$error)
    {
        $post = get_post($id);
        require 'view/alarms.php';
    }
?>
