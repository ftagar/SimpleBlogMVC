<?php
   
    function open_database_connection()
    {
        $link = mysqli_connect('localhost', 'root', '', 'projetAlarm');
        return $link;
    }
    
    function close_database_connection($link)
    {
        mysqli_close($link);
    }
    
    function is_user( $login, $password )
    {
        $isuser = False ;
        
        $link = open_database_connection();
        
        $query= 'SELECT login FROM Users WHERE login="'.$login.'" and password="'.$password.'"';
        $result = mysqli_query($link, $query );
        
        if( mysqli_num_rows( $result) )
            $isuser = True;
        
        mysqli_free_result( $result );
        close_database_connection($link);
        
        return $isuser;
    }
    
    function get_all_alarms()
    {
        $link = open_database_connection();
        
        $resultall = mysqli_query($link,'SELECT id, height, address,location FROM Alarms');
        $posts = array();
        while ($row = mysqli_fetch_assoc($resultall)) {
            $posts[] = $row;
        }
        
        mysqli_free_result( $resultall);
        close_database_connection($link);
        
        return $posts;
    }
    
    function get_post( $id )
    {
        $link = open_database_connection();
        
        $id = intval($id);
        $result = mysqli_query($link, 'SELECT * FROM Alarms WHERE id='.$id );
        $post = mysqli_fetch_assoc($result);
        
        mysqli_free_result( $result);
        close_database_connection($link);
        
        return $post;
    }

?>