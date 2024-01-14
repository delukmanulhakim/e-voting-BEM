<html>
<head>
  <title>E-VOTING BEM FST</title>
  <meta name="veiwport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icons/vote.ico" type="image/x-icon">
</head>
<body>
<marquee behavior="" direction=""><h3 style="color:white">SELAMAT DATANG DI SISTEM E-VOTING UNTUK PEMILIHAN KETUA BADAN EKSEKUTIF MAHASISWA</h3></marquee>
    <?php include('slider.php');?>
    <fieldset>
    <legend><h1 style="color:white">BEM E-Voting System</h1></legend>
        <a id="menu" onclick="document.getElementById('logpopup1').style.display='block'"><img src="icons/admin.jpeg" height="200" width="200"></a>
        <div id="logpopup1" class="popup">
          <center>
          <form class="popup-content" action="adminlogvar.php" method="post"><br>
              <img src="icons/admin.jpeg" width="200" height="200" class="avatar">
              <span onclick="document.getElementById('logpopup1').style.display='none';window.location='index.php'" class="close" title="Close PopUp">&times;</span>
              <h1 style="text-align: center">ADMINISTRATOR</h1>
              <input type="text" placeholder="masukan username" name="name" required>
              <input type="password" placeholder="masukan password" name="pword" required>
              <input type="submit" value="Login">
                <input type="reset" value="Reset">
                <?php
                error_reporting(0);
                $error=$_GET['error'];
                if($error==1)
                echo "<script>var showerror=document.getElementById('logpopup1');
                showerror.style.display='block';</script><h3 style='color: red'>Unable to login<br/> check your password and try again...</h3>";
                ?>
          </form>
        </center>
        </div>
        <a id="menu" onclick="document.getElementById('logpopup2').style.display='block'"><img src="icons/vote.jpeg" height="200" width="200"></a>
        <div id="logpopup2" class="popup">
          <center>
          <form class="popup-content" action="voterreg.php" method="post"><br>
              <img src="icons/voteri.jpeg" width="200" height="200" class="avatar">
              <span onclick="document.getElementById('logpopup2').style.display='none';window.location='index.php'" class="close" title="Close PopUp">&times;</span>
              <h2 style="text-align:center">DAFTAR PEMILIH</h2>
              <input type="text" placeholder="Masukan username" name="uname" required>
              <input type="password" placeholder="Masukan Password" name="psw" required>
              <input type="password" placeholder="Masukan ulang Password" name="re_psw" required>
              <input type="text" placeholder="Masukan no.telepon" name="ph_no" required>
              <input type="email" placeholder="Masukan alamat gmail" name="mail" required>
              <input type="submit" value="DAFTAR">
              <input type="reset" value="ULANG">
              <hr size="-1" width="70%" color="black"/>
              <u style="color: darkviolet">Sudah punya akun? login disini</u>
              <input style="background-color: blue" type="submit" value="Login" onclick="voterlogin()">
              <?php
              error_reporting(0);
              $error=$_GET['error'];
              if($error==2)
              echo "<script>var showerror=document.getElementById('logpopup2');
              showerror.style.display='block';</script><h3 style='color: red'>Unable to login<br/> check your Phone number, E-mail and try again...</h3>";
              ?>
              <?php
              error_reporting(0);
              $error=$_GET['error'];
              if($error==4)
              echo "<script>var showerror=document.getElementById('logpopup2');
              showerror.style.display='block';</script><h3 style='color: green'>You are Unregistered from E-voting system</h3>";
              ?>
            </form>
        </center>
        </div>
        <div id="logpopup3" class="popup">
          <center>
          <form class="popup-content" action="voterloginvar.php" method="post"><br>
              <img src="icons/voter.jpeg" width="200" height="200" class="avatar">
              <span onclick="document.getElementById('logpopup3').style.display='none';window.location='index.php'" class="close" title="Close PopUp">&times;</span>
              <h1 style="text-align:center">LOGIN PEMILIH</h1>
              <input type="text" placeholder="Masukan Nama" name="name" required>
              <input type="password" placeholder="Masukan Password" name="psw" required>
              <input type="password" placeholder="Masukan VoteID" name="key" required>
              <input type="submit" value="Login">
              <input type="reset" value="Reset">
              <?php
              error_reporting(0);
              $error=$_GET['error'];
              if($error==3)
              echo "<script>var showerror=document.getElementById('logpopup3');
              showerror.style.display='block';</script><h3 style='color: red'>Unable to login<br/> check your Password, Secret key and try again...</h3>";
              ?>
            </form>
        </center>
        </div>
        <a id="menu" onclick="document.getElementById('logpopup4').style.display='block'"><img src="icons/k1.jpeg" height="200" width="200"></a>
        <div id="logpopup4" class="popup">
          <center>
          <form class="popup-content" action="candidatelogver.php" method="post"><br>
              <img src="icons/K1.jpeg" width="200" height="200" class="avatar">
              <span onclick="document.getElementById('logpopup4').style.display='none';window.location='index.php'" class="close" title="Close PopUp">&times;</span>
              <h3 style="text-align:center">LOGIN NOMINASI CALON</h3S>
              <input type="text" placeholder="Masukan username" name="uname" required>
              <input type="password" placeholder="Masukan password" name="psw" required>
              <input type="password" placeholder="Enter the NomineeID" name="key" required>
              <input type="submit" value="Login">
              <input type="reset" value="Reset">
              <hr size="-1" width="70%" color="black"/>
              <input style="background-color: purple" type="submit" value="Daftar Menjadi Calon Ketua" onclick="candidatereg()">
              <?php
              error_reporting(0);
              $error=$_GET['error'];
              if($error==5)
              echo "<script>var showerror=document.getElementById('logpopup4');
              showerror.style.display='block';</script><h3 style='color: red'>You doesn't seem to be a candidate<br/> check your Password, NomineeID and try again...</h3>";
              ?>
          </form>
        </center>
        </div>
    </fieldset>
    <script type="text/javascript">
        var obj=document.querySelectorAll('#menu');
        console.log(obj);
        for (var i=0;i<obj.length;i++)
        {
            obj[i].style.display="inline-block";
            obj[i].style.backgroundColor="white";
            obj[i].style.width="220px";
            obj[i].style.height="230px";
            obj[i].style.position="relative";
            obj[i].style.borderRadius="20px";
            obj[i].style.border="5px solid black";
            obj[i].style.textAlign="center";
            obj[i].style.marginLeft = "10%";
            obj[i].style.marginTop = "1%";
            obj[i].style.textDecoration="none";
            obj[i].style.paddingTop="10px";
            obj[i].style.cursor="pointer";

        }
        function voterlogin()
        {
          document.getElementById('logpopup2').style.display='none';
          document.getElementById('logpopup3').style.display='block';
        }
        function candidatereg()
        {
          window.location="nominee.php"
        }
    </script>
    <?php   include('footer.php');?>
</body>
</html>
