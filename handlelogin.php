<?php 
    require_once('./conn.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
        echo $_POST['username'];

        $sql = "SELECT * FROM account WHERE username='$_POST[username]' and password='$_POST[password]'";
        $result = $conn->query($sql);
        

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); 
            session_start();
            $_SESSION['user'] = $row['userid'];
            header('Location: http://localhost/bui/music-player');
          } else {
            echo "Error creating table: " . $conn->error;
            header('Location: http://localhost/bui/music-player/login.php');
          }    
       
    }else{
       header('Location: http://localhost/bui/music-player/login.php');
    }




?>