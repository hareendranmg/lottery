<?php
include_once 'lottery_connection.php';
include_once 'lottery_index.php';

$sql = "DELETE FROM `lottery_details` 
        ORDER BY `lottery_details_id` ASC 
        LIMIT 10 ";

$query = $conn->query($sql); 


$sql = "SELECT `lottery_name`, `lottery_link`
        FROM `lottery_details`
        LIMIT 10 ";

$query = $conn->query($sql); 
$i = 1;

$lottery_details = [];

while ($row = $query->fetch_assoc()) 
  {
    array_push($lottery_details, [
            'No'           => $i,
            'lottery_name' => $row['lottery_name'], 
            'lottery_link' => $row['lottery_link'], 
            ]);
    $i++;
  } 

echo(json_encode($lottery_details));