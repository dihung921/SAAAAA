<?php
session_start();

$seat_id = $_SESSION['seat_id'];
$link=mysqli_connect("localhost","root","12345678","sa");
$sql="select * from `seat_condition` where seat_id = '$seat_id'";
$rs=mysqli_query($link,$sql);
   if($record=mysqli_fetch_row($rs))
      {
        $seat_id = $record['0'];
        $cond = $record['1'];
        $order_id = $record['2'];
      }
?>
<center>
<form method ="post" action="dblink.php">
    <input type="hidden" name="method" value="<?php echo $method ?>">
    <table class="List" align="center" width="20%">
    <caption align="center" class="ListCap">修改座位狀況</caption>
        <tr>
        <td align="center">座位</td>
            <td><input type="text" name="seat_id" value="<?php echo $seat_id?>" readonly></td>
        </tr>
        <tr>
        <td align="center">狀況</td>
            <td><input type="text" name="cond" value="<?php echo $cond?>"></td>
        </tr>
        <tr>
        <td align="center">訂單編號</td>
            <td><input type="text" name="order_id" value="<?php echo $order_id?>"></td>
        </tr>
        <tr align="center">
        <td colspan="2"><input type="submit"></td>
        </tr>
    </table>
    </form>
</center>
