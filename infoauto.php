<!DOCTYPE html>
<html>
<head>
	<title>Informatii Auto</title>
  <link rel="shortcut icon" href="img/mini.png" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style.css"/>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/justified-nav.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
 	<script src="http://www.google.com/jsapi?key=AIzaSyC5NwsbVJJQQ4QLrAkwb0BOlTwpZHCoLhs"></script>
 	<script src="js/rssdisplayer.js"></script>
  
</script>
</head>
<body>


<div class="container">
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
 
<div class="infoauto">
    <?php
  error_reporting(E_ERROR);
  require_once('simple_html_dom.php');
  $html = file_get_html("http://www.livetraffic.ro/informatii_actualizate_trafic.php");
  $data_table = $html->find('table[id="blue_table"]', 1);
  $count = 0;
  $data = array();  
  foreach($data_table->find('tr') as $row) {
    $data[$count]['Data'] = $row->find('td',0)->plaintext;
    $data[$count]['DN'] = $row->find('td',1)->plaintext;
    $data[$count]['Detalii'] = $row->find('td',2)->plaintext;
    $count++;
  }

  
  for($i=1;$i<$count-1;$i++){
    echo "<b>-----------------------------</b> <br /> <b>Data</b> ". $data[$i]['Data'] . "<br /><b>DN</b>". $data[$i]['DN'] . "<br /><b>Detalii</b> " . $data[$i]['Detalii']. "<br /> <br />";
  }
?>
</div>

<div id="footer"><p>Copyright (C) 2014 by Petre Ciprian<p></div>

</body>
</html>