<?php 
    require_once('./conn.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        
        $sql = "SELECT * FROM account WHERE username='$_POST[username]'";
        
         
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            header("Location: http://localhost/bui/music-player/signup.php?error='User already taken'");
        } else {
             $sql = "INSERT INTO account(username, password) values('$_POST[username]', '$_POST[password]')";
             $conn->query($sql);
             header("Location: http://localhost/bui/music-player/login.php");
        }    
       
    }else{
       header('Location: http://localhost/bui/music-player/login.php');
    }




?>