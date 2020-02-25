<table>
  <thead>
    <th>ID</th>
    <th>Lottery Name</th>
    <th>View</th>
  </thead>
  <tbody>

<?php
include_once 'lottery_connection.php';

$sql = "SELECT `lottery_name`, `lottery_link`
        FROM `lottery_details`";

$query = $conn->query($sql); 
$i = 1;

while ($row = $query->fetch_assoc()) 
{ 
  echo "
    <tr>
      <td>" . $i . "</td>
      <td>" . $row['lottery_name'] . "</td>
      <td><a href='" . $row['lottery_link'] . "' target='_blank'> link </a></td>
    </tr>
    "; 
    $i++;
} 
?>
  </tbody>
</table>
