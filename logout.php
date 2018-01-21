<?php session_start(); ?>
       <?php
        $_SESSION['admin_username'] = null;
        $_SESSION['admin_password'] = null;
        $_SESSION['admin_firstname'] = null;
        $_SESSION['admin_lastname'] = null;
        $_SESSION['admin_email'] = null;
            
            header("Location: index.php");
        


?>