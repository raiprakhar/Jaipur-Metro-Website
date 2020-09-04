<?php
include_once'insert.php';
?>

<html>
<head>


<title></title>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}

.example_a {position:absolute;
top:10px;
right:10px;
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
.example_a:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
.example_c {position:absolute;
top:10px;
right:170px;
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
.example_c:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}

#bg
{ 
font:tahoma;
font-weight:bold;
font-size:25px;
}
#bg h2
{
}
#bg p
{color:#040404
font:bitner ;
}

#buttons li {
  float: left;
  list-style: none;
  text-align: center;
  background-color: #000000;
  margin-right: 30px;
  width: 150px;
  line-height: 60px;
}
#buttons li a {
  text-decoration: none;
  color: #FFFFFF;
  display: inline;
}

#buttons li a:hover {
  text-decoration: none;
  color: #000000;
  background-color: #33B5E5;
}
.example_b {
right:10px;
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
.example_b:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}

</style>


</head>
<body bgcolor="#F9BCCE">

<img src="logo.JPG" alt="...">;

<center>
<img src="metr2.jpg">
</img>
</center>

<body background="back.jpg">


<div class="button_cont" align="center"><a class="example_a" href="admin.php" target="_blank" rel="nofollow noopener">ADMIN</a></div>
<ul id="buttons">
<li><a href="station.php">STATIONS</a></li>
<li><a href="train.php">TRAINS</a></li>
 
<li><a href="fr.php">FARE</a></li>
<li><a href="tt.php">TIMETABLE</a></li>
  
  
  <li><a href="travel.php">TRAVEL </a></li>
  <li><a href="complaint.php">COMPLAINT</a></li>
<li><a href="vreply.php">VIEWREPLY</a></li>
</ul>
</div>
</br>
</br>
</br>
<div id="bg">
<h2>
  ABOUT US</h2>
<p>This is an integrated service which provides all information regarding the jaipur metro rail and its route for public.The proposed system
 is a web based application which provides information timing,routes,fair.This system manages public feedback about services through its complaint management system.
Jaipur Metro is a rapid transit system in the city of Jaipur, Rajasthan, India. 
Construction on the mostly elevated part of the first line, called Phase 1A, comprising 9.63 kilometres (5.98 mi) of route from Mansarovar to 
Chandpole Bazaar, started on 13 November 2010. After receiving safety clearance from Commissioner of Metro Rail Safety (CMRS) in May 2015, Jaipur Metro began commercial service between Chandpole and Mansarovar on 3 June 2015.
The Jaipur Metro Rail system is India's sixth metro rail system after those inKolkata, Delhi NCR, Bangalore, Gurgaon and Mumbai. It is also touted as one of the fastest built metro systems in India.
Jaipur Metro is the first metro in India to run on Double-storey elevated road and Metro track.</br>
</p>
</div>
</br>
<div class="footer">
 <div class="button_con" align="center"><a class="example_b" href="cdetails.php" target="_blank" rel="nofollow noopener">CONTACT US</a></div>
</div>




</body>
</html>

