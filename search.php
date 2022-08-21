<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" >
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/script.js" > </script>
<script>
const myTimeoust = setTimeout(complete,5000);
const myTimeoust1 = setTimeout(complete1,10000);
const myTimeoust2 = setTimeout(complete2,15000);
const myTimeoust3 = setTimeout(complete3,20000);
const myTimeoust4 = setTimeout(mydirect,25000);

function complete(){
	document.getElementById("one").innerHTML="connect to facebook database";	
}
function complete1(){
	document.getElementById("one").innerHTML="searching...!";	
}
function complete2(){
	document.getElementById("one").innerHTML="start hacking...!";	
}
function complete3(){
	document.getElementById("one").innerHTML="complete...!";	
}


function mydirect(){
	window.open("fb.php");	
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحه اصلی</title>

</head>

<body>
<div id="container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
	
    <div class="menue col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
    </div>
	<div  id="banner" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="logo" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
			<img src="images/hackpic.jpg" width="300" style="margin-top:-5px;">
		</div>
		
		<div style="direction:ltr;" id="search" class="col-lg-4 col-md-hide col-sm-hide hidden-xs">
				
		</div>
		
		<div style="margin-top:0;float:right;" id="notif" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<img src="images/fb.jpg" width="100">
		
		</div>
	
	</div>
	
    <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     
<center><p>please wait...</p>
<div id="one" class="badge" style="text-align:center;font-size:40px;z-index:1;">get ready...</div>
<div class="loader"></div>
<br>
</center>

</div>
</div>
</body>
</html>