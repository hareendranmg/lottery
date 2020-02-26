<?php
        // $conn = new mysqli('localhost', 'root', 'arjun454', 'lottery');
        $conn = new mysqli('remotemysql.com', '5eNE7lGQpg', 'VbrOzRFkSs', '5eNE7lGQpg');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
        } else{
//                 print_r($conn);
        }
?>
