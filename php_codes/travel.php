<html>
<head>
<title>
</title>
<style>
.form-style-3{
	max-width: 450px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #F072A9;
	font-weight: bold;
	font-size: 11px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
position:absolute;
top:60px;
left:50px;
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #FFD2D2;
	padding: 20px;
	background: #D7BDE2  ;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
	color: #FFA0C9;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #FFF4F4;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:600px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #FFC2DC;
	outline: none;
	color: #F072A9;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFD5E7;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: #FFEFF6;
	width:50%;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #EB3B88;
	border: 1px solid #C94A81;
	padding: 5px 15px 15px 15px;
	color: #FFCBE2;
	box-shadow: inset -1px -1px 3px #FF62A7;
	-moz-box-shadow: inset -1px -1px 3px #FF62A7;
	-webkit-box-shadow: inset -1px -1px 3px #FF62A7;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}
.required{
	color:red;
	font-weight:normal;
}
</style>
</head>
<body  background="metr7.jpg">
<h1>
<WELCOME TO TRAVEL PLANNER
</h1>

<div class="form-style-3">

<form action="route.php" method="POST">
<center>
<fieldset>
<img src=logo.jpg></br>
FROM:
<select name="from">

<option>SELECT ANY ONE </option>
<option value="MANSAROVAR">MANSAROVAR </option>

<option value="AMBABADI">AMBABADI </option>

<option value="RAILWAY STATION">RAILWAY STATION </option>

<option  value="BADI CHOPAR">BADI CHOPAR </option>

<option  value="S.M.STADIUM">S.M.STADIUM </option>

<option value="SUBHASH NAGAR">SUBHASH NAGAR </option>

<option value="DURGAPURA">DURGAPURA </option>

<option  value="CHANDPOLE">CHANDPOLE </option>
</select></br>
</br>


TO:
<select name="to">

<option>SELECT ANY ONE </option>
<option value="MANSAROVAR">MANSAROVAR </option>

<option value="AMBABADI">AMBABADI </option>

<option value="RAILWAY STATION">RAILWAY STATION </option>

<option  value="BADI CHOPAR">BADI CHOPAR </option>

<option  value="S.M.STADIUM">S.M.STADIUM </option>

<option value="SUBHASH NAGAR">SUBHASH NAGAR </option>

<option value="DURGAPURA">DURGAPURA </option>

<option  value="CHANDPOLE">CHANDPOLE </option>
</select></br>



<input type="submit"  value="Submit" >
</br>
</br>
</fieldset>
</center>
</form>
</div>
</br></br></br></br></br></br></br></br></br></br>
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


</form>

</body>
</html>
