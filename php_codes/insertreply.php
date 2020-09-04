<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($con,'metro'))
{echo 'DATABASE NOT SELECTED';
}
if(isset($_POST["cid"],$_POST["reply"]))
{
$id=$_POST['cid'];
$reply=$_POST['reply'];
}
if(!empty($id) && !empty($reply))
{
if(!mysqli_query($con,"INSERT INTO reply(id,reply) values('$id','$reply')"))
{echo 'NOT INSERTED';
}
else
{echo 'INSERTED';
}
}
?>