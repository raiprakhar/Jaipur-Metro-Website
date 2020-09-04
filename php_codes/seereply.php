<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($con,'metro'))
{echo 'DATABASE NOT SELECTED';
}
if(isset($_POST['id']))
{
$id=$_POST['id'];
}
$result=mysqli_query($con,"select * from reply);
while($row=mysqli_fetch_assoc($result))
{if($row['id']==$id)
{
echo "$row['reply']";
}
}
?>
