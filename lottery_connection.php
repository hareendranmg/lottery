<?php
        // $conn = new mysqli('localhost', 'root', 'arjun454', 'lottery');
        $conn = new mysqli('sql100.epizy.com', 'epiz_24557168', '2oHcrXIOg3H', 'epiz_24557168_test_1');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
        } else{
                print_r($conn);
        }
?>
