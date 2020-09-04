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
<img src="metr.JPG" alt="...">
<div class="text_block">

<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{echo 'NOT CONNECTED';
}
if(!mysqli_select_db($conn,'metro'))
{echo 'DATABASE NOT SELECTED';
}

$result=mysqli_query($conn,"select distinct(station_name) from station");
$i=1;
while($row=mysqli_fetch_assoc($result))
{echo"$i";
echo $row['station_name'];
echo "<br>";
$i++;
}
?>

</html>