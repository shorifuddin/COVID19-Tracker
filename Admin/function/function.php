<?php
    session_start();
    require_once('config.php');
    function get_header(){
        require_once('includes/header.php');
    }
    
    function get_footer(){
        require_once('includes/footer.php');
    }
    function getlogin(){
        return !empty($_SESSION['id']) ? true:false;
    }
    
    function logg(){
        $login=getlogin();
        
        if (!$login) {
            header('Location:login.php');
        }
    }

?>