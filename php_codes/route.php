<html>
<style>
.route {
  position: relative;
}
</style>
<div class="route">
<body bgcolor=pink>


<img src="route.PNG" alt="...">
</div>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($con,'metro'))
{echo 'DATABASE NOT SELECTED';
}
if(isset($_POST["from"],$_POST["to"]))
{
$from=$_POST['from'];
$to=$_POST['to'];
}
if(!empty($from) && !empty($to))
{
$result=mysqli_query($con,"select * from train where route_id in(select route_id from station where station_name='$from' intersect select route_id from station where station_name='$to')");
while($row=mysqli_fetch_assoc($result))
{echo"<font color='black'>TRAIN NAME:";
echo $row['train_name'];
}

}
?>