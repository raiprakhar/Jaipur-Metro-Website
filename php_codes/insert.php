<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($con,'metro'))
{echo 'DATABASE NOT SELECTED';
}
if(isset($_POST["username"],$_POST["email"],$_POST["contact"],$_POST["comp"]))
{
$name=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$complaint=$_POST['comp'];
}
if(!empty($name) && !empty($email) && !empty($contact) && !empty($complaint))
{
if(!mysqli_query($con,"INSERT INTO complaint values(id,'$name','$email','$contact','$complaint')"))
{echo 'NOT INSERTED';
}
else
{echo 'INSERTED';

}
}
?>