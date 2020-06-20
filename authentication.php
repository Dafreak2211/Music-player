<?php 
    session_start();

    if(!isset($_SESSION['user'])){
        header('Location: http://localhost/bui/music-player/');
    }
?>