<?php

    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }

    
    $no_of_records_per_page = 5;
    $offset = ($pageno-1) * $no_of_records_per_page;

    $conn = mysqli_connect("localhost","root","programmer2211","demo");
    $conn -> set_charset("utf8");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }

    if(isset($_GET['playlist'])){
        $total_pages_sql = "SELECT count(*) FROM songinplaylist where playlistid=$_GET[playlist]";
    }else{
        $total_pages_sql = "SELECT count(*) FROM song";
    }
    
    $result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);
    
    echo "<p class='totalSongs' data-total=$total_rows>Total Songs: $total_rows </p>";

    if(isset($_GET['playlist'])){
        $sql = "CALL getSongsFromPlayListWithLimit($offset,$no_of_records_per_page,$_GET[playlist])";  
    }else{
        $sql = "CALL getSongsWithLimit($offset,$no_of_records_per_page)";  
    }
            
    $result = $conn->query($sql);
    
     
    
    while($row = $result->fetch_assoc()){ 
          echo "<div class='song' data-id='$row[songid]'><p data-id='$row[songid]'>$row[songname]</p><div class='songs__utils'>";
          if(!isset($_GET['playlist'])){
            echo "<i class='fas fa-heart favorite' data-id='$row[songid]'></i>";
          }
          echo "<i class='fas fa-trash delete' data-id='$row[songid]'></i></div></div>";
    }
    mysqli_close($conn);
?>



