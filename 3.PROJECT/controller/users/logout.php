<?php
if(session_id() =='') session_start();
if(isset($_SESSION)){
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    session_destroy();
}
header('Location:http://localhost/web/3.PROJECT/');
?>