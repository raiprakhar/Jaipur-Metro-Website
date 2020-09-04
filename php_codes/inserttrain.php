<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($con,'metro'))
{echo 'DATABASE NOT SELECTED';
}
if(isset($_POST["name"],$_POST["id"],$_POST["rid"]))
{
$name=$_POST['name'];
$id=$_POST['id'];
$rid=$_POST['rid'];
$cap=$_POST['cap'];
}
if(!empty($name) && !empty($id) && !empty($rid))
{
if(!mysqli_query($con,"INSERT INTO train(train_id,route_id,train_name,capacity) values('$id','$rid','$name','$cap')"))
{echo 'NOT INSERTED';
}
else
{echo 'INSERTED';
}
}
?>