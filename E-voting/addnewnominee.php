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
  include('slider.php');?>
  <center>
    <h2 style="color:white"> TAMBAHKAN CALON SESUAI JENIS PEMILIHAN</h2>
  <form style="margin-top:0px" class='popup-content' action="addnomineedb.php" method='post' enctype="multipart/form-data">
    <select name='eid' placeholder='Pilih jenis pemilihan' required>
      <?php $con=mysqli_connect("localhost","root","");
      mysqli_select_db($con,"admin");
      $query="SELECT * FROM `election`";
      $res=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($res))
      {
        $curid=$row['elec_id'];
        echo "<option name='$curid'>".$row['name']."</option>";
      }
       ?>
    </select>
    <input type="text" name='name' placeholder="Masukan Nama Calon" required>
    <br/>Select nominee's image:<input type="file" name='photo' pl>
    <input type="text" name='party' placeholder="Masukan nama program studi" required>
    <br/>Select logo of study_program:<input type="file" name='logo' pl>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset all">
  </form>
</center>
<?php
if($_GET['error']==2)
{
  echo "<script>alert('Sukses menambahkan calon ke daftar pemilihan');</script>";
}
if($_GET['error']==1){
  echo "<script>alert('Error in adding the nominee');</script>";
}
include('footer.php');?>
