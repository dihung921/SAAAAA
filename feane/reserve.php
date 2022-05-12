<?php
$method="update";
$email=$_SESSION["member_email"];
$link=mysqli_connect("localhost","root","12345678","sa");
$sql="select * from `cart` where email = '$email'" ;
$rs=mysqli_query($link,$sql);
if($record=mysqli_fetch_assoc($rs))
{
    $meal_id= $record['0'];
    $sm_id=$record['1'];
    $s_id=$record['2'];
    $amount=$record['3'];
}

?>
<center>
    <form method="post" action="dblink.php?method=update">
        <input type=hidden name ="method" value="<? echo $method?>">
        <table class="List" align =center width=40%>
            <caption align=center class="ListCap">修改 訂餐紀錄</caption>
            <tr>
                <td>商品名稱</td>
                <td><input type=text name="meal_id" value="<? echo $meal_id?>"></td>
            </tr>
            <tr>
                <td>副餐</td>
                <td><input type=text name="sm_id" value="<? echo $sm_id?>"></td>
            </tr>

            <tr>
                <td>醬料</td>
                <td><input type=text name="s_id" value="<? echo $s_id?>"></td>
            </tr>
            <tr>
                <td>數量</td>
                <td><input type=text name="amount" value="<? echo $amount?>"></td>
            </tr>
            <tr align=center>
                <td colspan=2><input type="submit"></td>
            </tr>
        </table>
        </input>
    </form>
</center>