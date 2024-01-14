<!DOCTYPE html>
<html>
<head>
  <meta name="veiwport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icons/vote.ico" type="image/x-icon">
</head>
<body>
  <a href="index.php" style="text-decoration:none;color:white"><div class='logout'>KELUAR</div></a><br/>
  <?php
  include('slider.php');?>
    <div style="background-color:grey;width:100%;height:50px;">
<a id="menu" href='addelection.php'>Tambah Pemilihan</a>
<a id="menu" href='findnominee.php'>Temukan Calon</a>
<a id='menu' href='addnewnominee.php'>Tambah Calon</a>
</div>
<center>
  <div class="popup-content" style="margin-top:20px;background-color:darkgreen;color:white;font-size:20px;">
<u><p>BEM FST E-voting system</p></u>
suatu implementasi sistem e-voting yang dikembangkan oleh Badan Eksekutif Mahasiswa (BEM) Fakultas Sains dan Teknologi(FST) di universitas peradaban 
dan memiliki hak untuk menambahkan pemilihan baru, menentukan tanggalnya, serta menambahkan nominasi untuk pemilihan tertentu.
</div>
</center>
<script type="text/javascript">
    var obj=document.querySelectorAll('#menu');
    console.log(obj);
    for (var i=0;i<obj.length;i++)
    {
        obj[i].style.display="inline-block";
      //  obj[i].style.backgroundColor="green";
        obj[i].style.width="220px";
        obj[i].style.height="40px";
        obj[i].style.position="relative";
        obj[i].style.borderRadius="20px";
      //  obj[i].style.border="5px solid black";
        obj[i].style.textAlign="center";
        obj[i].style.marginLeft = "3%";
        obj[i].style.textDecoration="none";
        obj[i].style.paddingTop="10px";
        obj[i].style.cursor="pointer";
        obj[i].style.fontSize='20px';
        obj[i].style.fontWeight='bold';
        obj[i].style.textDecoration='none';
        obj[i].style.color='white';
        obj[i].style.float='right';
        obj[i].onmouseover=function(){this.style.color='black';this.style.fontSize="30px";};
        obj[i].onmouseout=function(){this.style.color='white';this.style.fontSize="25px";};
    }
  </script>
  <?php include('footer.php');?>
