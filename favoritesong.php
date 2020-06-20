<?php 
    require_once("./conn.php");
    if(isset($_POST['songid'])){
        // check if exists
        $sql = "SELECT * FROM songinplaylist where songId=$_POST[songid]";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exists && return
            echo "exists";
        }else{
            $sql = "INSERT INTO songinplaylist VALUES(1, $_POST[songid])";
        }
    }

    $conn->query($sql);
?>