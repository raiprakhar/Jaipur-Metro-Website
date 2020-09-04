<!DOCTYPE>
<html>
<head>
<style>
.train {
  position: relative;
}

/* top left text */
.text_block {
  position: absolute;
  top: 20px;
  left: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<img src="logo.JPG" alt="...">
<div class="train">
<img src="metr1.JPG" alt="...">
<div class ="text_block">
<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($conn,'metro'))
{echo 'DATABASE NOT SELECTED';
}

$result=mysqli_query($conn,"select distinct(train_name) from train");
$i=1;
while($row=mysqli_fetch_assoc($result))
{
echo"$i";
echo"&nbsp&nbsp&nbsp";
echo $row['train_name'];
echo "<br>";
$i++;
}
?>

</html>