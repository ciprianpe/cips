<html>
<body>
<head>
<title>Informatii Auto</title>
<link rel="shortcut icon" href="img/mini.png" />
<link rel="stylesheet" href="css/style.css"/>
<link href="css/stylesoferi.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/justified-nav.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<script src="js/bootstrap.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/buttons.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/buttons.js"></script>
</head>

<div class="container">
<div class="police"> 
<div class="officer"> <img src="img/officer.png" class="animated rubberBand"/> </div>
  <p>Ai informatii? Zi-ne si noua!</p>
</div>
  <div class="logo"><img src="img/mini.png" /></div>
      <div class="masthead">
        <h3 class="text-muted">Informatii Auto</h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="infoauto.php">Stiri Trafic</a></li>
          <li><a href="harta.html">Harta</a></li>
          <li><a href="vreme.html">Vreme</a></li>
          <li><a href="soferi.php">Noutati de la soferi</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
 </div>


<div id="formular">
	<form action="" method = "POST">
	
	<input type = "text" name = "name" class="form-control" placeholder="Nume:"><br/>
	<input type = "text" name = "ziua" class="form-control" placeholder="Data:"><br/>
	<input type = "text" name = "km" class="form-control" placeholder="Km/Drum:"><br/>
	<input type = "text" name = "regiune" class="form-control" placeholder="Regiune:"><br/>
	<input type = "text" name = "comentarii" class="form-control" placeholder="Alte Specificatii:"><br/>
	<input type = "submit" value = "Trimite Datele" class="btn btn-success btn-lg"><br/>

	</form>

</div>


<div id="comm">
<?php
if($_POST){
$name = $_POST['name'];
$ziua = $_POST['ziua'];
$km = $_POST['km'];
$regiune = $_POST['regiune'];
$content = $_POST['comentarii'];
$handle = fopen("comentarii.html","a");

fwrite($handle,"<b>De la: " . $name . "</b><br>");

fwrite($handle,"<b>Data: " . $ziua . "</b><br>");

fwrite($handle,"<b>Km/Drum: " . $km . "</b><br>");

fwrite($handle,"<b>In regiunea: " . $regiune . "</b>");

fwrite($handle,"<br>" . $content . "<br/><br/>");

fclose($handle);
}
?>

<?php include "comentarii.html"; ?>
</div>

<div id="footer"><p>Copyright (C) 2014 by Petre Ciprian<p></div>

</body>
</html>