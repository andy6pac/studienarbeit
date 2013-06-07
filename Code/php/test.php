<!DOCTYPE html> 
<html> 

<head> 

	<title>My simple GeoApp</title> 

	<meta name = "viewport" content = "width=device-width, initial-scale=1"> 
	<meta charset = "utf-8">
	<link rel = "stylesheet" href = "http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src = "http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src = "http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src = "../js/script.js"></script>
	<script src = "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

	<style type = "text/css"></style>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />

</head> 

<body>

<div data-role = "page" id = "contact">

	<div data-role = "header">

		<h1>About</h1>

	</div><!-- /header -->

	<div data-role="content">	

  <?php

$mysqlhost="localhost"; // MySQL-Host angeben

$mysqluser="root"; // MySQL-User angeben

$mysqlpwd="root"; // Passwort angeben

$mysqldb="locatebillard"; // Gewuenschte Datenbank angeben

$locid = $_POST['jqid']; 

$connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die

("Verbindungsversuch fehlgeschlagen");

 

mysql_select_db($mysqldb, $connection) or die("Konnte die Datenbank nicht

waehlen.");

 

$sql = "SELECT * FROM Locations WHERE id = $locid ";



$locations = mysql_query($sql) or die("Anfrage nicht erfolgreich");

 

// $anzahl = mysql_num_rows($locations);

// echo "Anzahl der Datensätze: $anzahl";

?>


<table cellpadding="1" cellspacing="3" border="1">

<tr>

<td>ID</td>
<td>Lokal</td>
<td>Lokalart</td>
<td>Bewertung</td>
<td>Straße</td>
<td>Hausnummer</td>
<td>PLZ</td>
<td>Ort</td>
<td>Telefon</td>
<td>Email</td>
<td>Internet</td>
<td>Öffnungszeiten</td>
<td>Snooker</td>
<td>Pool</td>
<td>Carambol</td>
<td>Pool 7 Fuß</td>
<td>Pool 8 Fuß</td>
<td>Pool 9 Fuß</td>
<td>Snooker Preis</td>
<td>Pool Preis</td>
<td>Carambol Preis</td>
<td>Essen</td>

</tr>

 

<?php

while ($loc = mysql_fetch_array($locations)){

?>

<tr>

<td><?php echo $loc['id']?></td>

<td><?=$loc['name']?></td>

<td><?=$loc['lokalitaet']?></td>

<td><?=$loc['bewertung']?></td>

<td><?=$loc['strasse']?></td>

<td><?=$loc['hausnummer']?></td>

<td><?=$loc['plz']?></td>

<td><?=$loc['ort']?></td>

<td><?=$loc['telefon']?></td>

<td><?=$loc['email']?></td>

<td><?=$loc['internet']?></td>

</tr>

<?php

}

?>

 

</table>

		<a href = "" data-role = "button" data-rel = "back">Schließen</a>
		

	</div><!-- /content -->

</div><!-- /page -->



</body>

</html>