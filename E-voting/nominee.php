<!DOCTYPE html>
<html>
<head>
  <meta name="veiwport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icons/vote.ico" type="image/x-icon">
</head>
<body>
  <a href="index.php" style="text-decoration:none;color:white"><div class='logout'>KEMBALI</div></a><br/>
<center>
  <?php
  include('slider.php');?>
  <h1 style="color:white">DAFTAR JADI NOMINASI CALON KETUA</h1>
  <form style="margin-top:0px" class='popup-content' method='post' action="beanominee.php" enctype="multipart/form-data">
    <select name='eid' placeholder='Select election' required>
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
    <input type="text" name='name' placeholder="masukan nama" required>
    <input type="password" name='password' placeholder="Masukan password">
    <input type='text' name='phone' placeholder="Masukan no telepon">
    <input type='email' name='email' placeholder="masukan alamat gmail">
    <br/>Select nominee's image:<input type="file" name='photo' pl>
    <input type="text" name='party' placeholder="masukan program studi" required>
    <br/>Select logo of study program:<input type="file" name='logo' pl>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset all">
  </form>
</center>
<?php include('footer.php');?>
