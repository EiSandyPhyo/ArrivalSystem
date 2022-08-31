<?php 
include 'header.php';
$user_id=$_SESSION['user_id'];
echo $user_id;
?>
<?php 
if(isset($_POST['checkout']))
{
    $username=$_POST['username'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $address=$_POST['address'];
    $orderdate=$_POST['orderdate'];
    @$radio=$_POST['radio'];
    echo $username;
    echo $date;
    echo $time;
    echo $address;
    $total=0;
    for($i=0;$i<count($_SESSION['cart']);$i++)
    {
        $total+=$_SESSION['cart'][$i][3];
    }
    echo $total;
    $insertquery="insert into tbl_order(order_date,user_id,user_name,order_deliverydate,order_deliverytime,order_deliveryaddress,order_totalamount,order_status,payment_type) values('$orderdate','$user_id','$username','$date','$time','$address','$total','0','$radio')";
    $db->exec($insertquery);
    $lastid=$db->lastInsertId();
    $db->beginTransaction();
    for($i=0;$i<count($_SESSION['cart']);$i++)
    {
        $submenuid=$_SESSION['cart'][$i][0];
        $submenuqty=$_SESSION['cart'][$i][2];
        if($submenuid!="")
        {
        $v="insert into order_detail (order_id,submenu_id,order_qty) values('$lastid','$submenuid','$submenuqty')";
        $db->exec($v);
        
        }
    }
    
    $db->commit();
    echo ("<script>location.href='print.php';</script>");
    $_SESSION['order_date']=$orderdate;
}

?>

<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="" method="post">
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="username">
</div>

<div class="form-group">
  <label for="usr">Order Date:</label>
  <input type="text" class="form-control" placeholder="yy-mm-dd" id="" name="orderdate">
</div>

<div class="form-group">
  <label for="pwd">Delivery Date:</label>
  <input type="text" class="form-control" id="" name="date">
</div>

<div class="form-group">
  <label for="pwd">Delivery Time:</label>
  <input type="text" class="form-control" id="" name="time">
</div>

<div class="form-group">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
</div>

    <div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="radio" value="visa" checked>Visa
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="radio" value="mpu">MPU
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio3" name="radio" value="kbz">KBZ
      </label>
    </div>

<div class="form-group">
  <input type="submit" class="form-control" value="Checkout" name="checkout">
</div>

</form>
</div>
<div class="col-md-4"></div>
</div>
</div>

<?php 
include 'footer.php';
?>