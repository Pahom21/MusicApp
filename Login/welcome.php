<?php
     
    session_start();
    if(!isset($_SESSION['SESSION_NAME'])){
        header("Location: login.php");
        die();
    }
    require_once "../databasethings/config.php";
    $query = mysqli_query($conn, "SELECT * FROM Users WHERE Name = '{$_SESSION['SESSION_NAME']}'");
    
    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['Name'];
    }
    echo "<br> Hello";
    echo'<br> <a href="logout.php">Logout</a>';

?>