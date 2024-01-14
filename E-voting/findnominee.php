<!DOCTYPE html>
<html>
<head>
  <meta name="veiwport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icons/vote.ico" type="image/x-icon">
</head>
<body>
  <a href="adminpage.php" style="text-decoration:none;color:white"><div class='logout'>KEMBALI</div></a><br/>
<?php
error_reporting(0);
include('slider.php');
echo "<center><h2 style='color:white'>Permintaan dari calon untuk mengikuti pemilihan </h2></center>";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"admin");
$query="SELECT * FROM `nominee`";
$res=mysqli_query($con,$query);
if($res->num_rows==0)
echo "<h2 style='color:dark'>Saat ini tidak ada permintaan dari kandidat...</h2>";
else {
echo "<table align='center' class='electiontable' border='2'>
<tr>
<th>Name</th>
<th>Study_Program</th>
<th>photo</th>
<th>logo</th>
<th>Election_ID</th>
<th></th>
</tr>
";
while($row=mysqli_fetch_assoc($res))
{
  $curcid=$row['cid'];
  $curname=$row['name'];
  $curimg=$row['photo'];
  $curparty=$row['party'];
  $curlogo=$row['logo'];
  $curename=$row['ename'];
  echo "<tr>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['party']."</td>";
  echo "<td><img src='images/$curimg' height=100 width=100></td>";
  echo "<td><img src='images/$curlogo' height=100 width=100></td>";
  echo "<td>".$row['ename']."</td>";
  echo '<td><a href="addnominee.php?cid='.$curcid.'&name='.$curname.'&party='.$curparty.'&ename='.$curename.'&photo='.$curimg.'&logo='.$curlogo.'  ">';?><button>add as a nominee</button></a></td></tr>
<?php
}
echo "</table>";
}
if($_REQUEST['error']==2)
{
  echo "<script>alert('Sukses menambahkan nominasi');</script>";
}
else if($_REQUEST['error']==1){
  echo "<script>alert('Nominee is already added');</script>";
}
  include('footer.php');
?>
