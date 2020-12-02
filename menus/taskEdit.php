<?php
    include '../connection.php';
    if(isset($_GET["id"])){
        echo $_GET["id"];
    } else {
        echo "lerolero";
    }		
?>