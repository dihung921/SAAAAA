<?php
require_once("conn.php");
$result = $conn->query("SELECT * FROM member");
$result2 = $conn->query("SELECT * FROM order1");  
  // 也可以寫 $result = mysqli_query($conn,"SELECT * FROM users");

  while ($row = $result->fetch_assoc()) {
    echo "id:" . $row['name'] . '<br>'; // 就像是把物件的 key 拿出來，印出 key 的 value
    echo "password:" . $row['password'] . '<br>';
  }
  while($row1 =mysqli_fetch_assoc($result2)){
    echo "order_id:".$row1["order_id"]."<br>";
    echo "time :".$row1["time"]."<br>";
    
  }
?>