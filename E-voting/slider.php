<html>
<head>
    <meta name="veiwport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="icons/vote.ico" type="image/x-icon">
</head>
<body><center>
  <hr color="white" size="2"/>
      <div id="slider">
				<div class="navigator">
				<h4>E-VOTING PEMILIHAN KETUA BADAN EKSEKUTIF MAHASISWA</h4>
        </div>
			<img id="sliderimg" class="sliderimg" src="slider/saha.jpeg">
			<div style="float:left"><span id="slidbut" class="prew" onclick="prewImage()">&laquo</span></div>
      <div style="float:right;margin-right:5%"><span id="slidbut" class="next" onclick="nextImage()">&raquo</span></div>
			</div>
      <hr color="white" size="2"/>
     </center>
  <script type="text/javascript">
  	var slider_content = document.getElementById('sliderimg');
    var image = ['ba','b','f'];
    var i = image.length;
    function nextImage(){
    	if (i<image.length) {
    		i= i+1;
    	}else{
    		i = 1;
    	}
			slider_content.src="slider/"+image[i-1]+".jpeg";
    }
    function prewImage(){
    	if (i<=image.length+1 && i>1) {
    		i= i-1;
    	}else{
    		i = image.length;
    	}
    	  slider_content.src="slider/"+image[i-1]+".jpeg";
    }
    setInterval(nextImage , 5000);
  </script>
</body>
</html>
