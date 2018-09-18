<?php
    function login_action($login,$destUri,$logoutUri,$error)
    {
        require 'view/login.php';
    }
    
    function all_alarms_action($login,$destUri,$logoutUri,$error)
    {
        $allAlarms = get_all_alarms();
        require 'view/address.php';
    }
    
    function alarms_action($id,$login,$destUri,$logoutUri,$error)
    {
        $alarms = get_Alarms($id);
        require 'view/alarms.php';
    }
?>
