<!DOCTYPE>
<html>
<style>
.station {
  position: relative;
}

/* top left text */
.text_block {
  position: absolute;
  top: 30px;
  left: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>

<img src="logo.JPG" alt="...">
<div class="station">
<div class="text_block">

<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($conn,'metro'))
{echo 'DATABASE NOT SELECTED';
}

$result=mysqli_query($conn,"select * from complaint");
while($row=mysqli_fetch_assoc($result))
{
echo  $row['id'];
echo"&nbsp&nbsp";
echo $row['complain']  ;

//echo "<tr><td>". $row['id']. &nbsp&nbsp. "</td><td>". $row['complain']."</td></tr>"  ;
echo "<br>";
}
?>

</html>