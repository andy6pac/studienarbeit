<!DOCTYPE html> 
<html> 

<head> 

  <title>Locate Billard // Galle & Chiu</title> 

  <meta name = "viewport" content = "width=device-width, initial-scale=1"> 
  <meta charset = "utf-8">
  <link rel = "stylesheet" href = "http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  <script src = "http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src = "http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
  <script src = "js/script.js"></script>
  <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

  <style type = "text/css"></style>
  <link rel="stylesheet" type="text/css" href="css/style.css" />

</head> 

<body>

<div data-role = "page" id = "index">

  <div data-role="content"> 

    <h2> Willkommen bei Locate Billard </h2>

    <a href = "#" data-role = "button" data-theme = "b">Facebook Anmeldung</a>

    <a href = "#uebersicht" data-role = "button" data-theme = "b">Ohne Facebook fortfahren</a>

    <p>Abhängig von ihrem Mobilfunkvertrag können Kosten entstehen.</p>

  </div><!-- /content -->
</div><!-- /index -->

<div data-role = "page" id = "uebersicht">

  <div data-role = "header">

    
    <a href="#filter" data-role="button" data-icon="gear" data-iconpos="left">Filter</a>
    
    <h1>Locate Billard</h1>

    <a href="#index" data-role="button" data-icon="gear" data-iconpos="left">fb Login</a>

  </div><!-- /header -->

  <div data-role="content"> 

    <div data-role="fieldcontain">

      <input type = "search" name = "search" id = "search-basic" />
      <p>Ihr Standort ist: <span id = "geocodedAdress">Adresse wird ermittelt ...</span></p>
    
    </div>

    <div data-role = "locations">

      <ul data-role="listview" id = "list">

        <li><a href="#locations" id = "1">Parapluie Amberg</a></li>
        <li><a href="#locations" id = "2">Hallenbad Sulzbach-Rosenberg</a></li>
        <li><a href="#locations" id = "3">Sportland Erlangen</a></li>

      </ul> 

<div id="map_canvas" style="width:70%; height:54%"></div>

<div style="width:100%; height:10%" id="distance_road"></div>


    </div>

  </div><!-- /content -->
</div><!-- /uebersicht -->

<div data-role="page" id="filter">

  <form action = "php/filter.php" method = "post" id = "filterForm">

  <div data-role="header">
    <h1>Filter</h1>
        <a href="#uebersicht" data-role="button" data-icon="arrow-l" data-iconpos="left">Abbrechen</a>
        <input type = "submit" value="Fertig"/>
  </div>
    
  <div data-role="content"> 
    <ul data-role="listview">
      <li>Entfernung bis
        <div data-role="fieldcontain">
          <label for="slider">Kilometer:</label>
          <input type="range" name="entfernung" id="slider" value="10" min="0" max="50" />
          </div>
      </li>
            <li>Preis bis
            <div data-role="fieldcontain">
          <label for="slider">€/Stunde</label>
          <input type="range" name="preis" id="slider" value="6" min="0" max="15" />
          </div></li>
            <li><div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                  <legend>Spielart</legend>
                  <input type="checkbox" name="pool" id="spielart_pool" class="custom" value="" checked="true"/>
                  <label for="spielart_pool">Pool</label>
                  <input type="checkbox" name="snooker" id="spielart_snooker" class="custom" value="" checked="true"/>
                  <label for="spielart_snooker">Snooker</label>
                  <input type="checkbox" name="carambol" id="spielart_carambol" class="custom" value="" checked="true"/>
                  <label for="spielart_carambol">Carambol</label>
                </fieldset>
              </div>
            </li>
            <li>
              <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                  <legend>Pooltischgröße</legend>
                  <input type="checkbox" name="sieben" id="pooltischgroesse_0" class="custom" value="" checked="true"/>
                  <label for="pooltischgroesse_0">7 ft</label>
                  <input type="checkbox" name="acht" id="pooltischgroesse_1" class="custom" value="" checked="true"/>
                  <label for="pooltischgroesse_1">8 ft</label>
                  <input type="checkbox" name="neun" id="pooltischgroesse_2" class="custom" value="" checked="true"/>
                  <label for="pooltischgroesse_2">9 ft</label>
                </fieldset>
              </div>
            </li>
            <li>
              <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                  <legend>Lokalität</legend>
                  <input type="checkbox" name="kneipe" id="Lokalitaet_0" class="custom" value="" checked="true"/>
                  <label for="Lokalitaet_0">Kneipe</label>
                  <input type="checkbox" name="spielothek" id="Lokalitaet_1" class="custom" value="" checked="true"/>
                  <label for="Lokalitaet_1">Spielothek</label>
                  <input type="checkbox" name="verein" id="Lokalitaet_2" class="custom" value="" checked="true"/>
                  <label for="Lokalitaet_2">Vereinsheim</label>
                  <input type="checkbox" name="bistro" id="Lokalitaet_3" class="custom" value="" checked="true"/>
                  <label for="Lokalitaet_3">Billiardbistro</label>
                  <input type="checkbox" name="sonstige" id="Lokalitaet_4" class="custom" value="" checked="true"/>
                  <label for="Lokalitaet_4">Sonstige</label>
                </fieldset>
              </div>
            </li>
            <li>
              <div data-role="fieldcontain">
                <label for="flipswitch">Speisen</label>
                <select name="speisen" id="flipswitch" data-role="slider">
                  <option value="off">Nein</option>
                  <option value="on">Ja</option>
                </select>
              </div>
            </li>
            <li>
              <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                  <legend>Bewertung</legend>
                  <input type="checkbox" name="fuenf" id="bewertung_0" class="custom" value="" checked="true"/>
                  <label for="bewertung_0">5 Sterne</label>
                  <input type="checkbox" name="vier" id="bewertung_1" class="custom" value="" checked="true"/>
                  <label for="bewertung_1">4 Sterne</label>
                  <input type="checkbox" name="drei" id="bewertung_2" class="custom" value="" checked="true"/>
                  <label for="bewertung_2">3 Sterne</label>
                  <input type="checkbox" name="zwei" id="bewertung_3" class="custom" value="" checked="true"/>
                  <label for="bewertung_3">2 Sterne</label>
                  <input type="checkbox" name="eins" id="bewertung_4" class="custom" value="" checked="true"/>
                  <label for="bewertung_4">1 Stern</label>
                </fieldset>
              </div>
            </li>
    </ul> 
  </div>

  </form>

  <div data-role="footer">
    <h4>&copy; Andy Chiu & René Galle</h4>
  </div>

</div><!-- /filter -->

<div data-role="page" id="locations">

<div data-role = "header">

    
    <a href="#uebersicht" data-role="button" data-icon="arrow" data-iconpos="left">Zurück</a>
    
    <h1>Parapluie Amberg</h1>

  
  </div><!-- /header -->
  <div data-role = "content" id = "kackpups">
  <?php


$mysqlhost="localhost"; // MySQL-Host angeben

$mysqluser="root"; // MySQL-User angeben

$mysqlpwd="root"; // Passwort angeben

$mysqldb="locatebillard"; // Gewuenschte Datenbank angeben

 

$connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die

("Verbindungsversuch fehlgeschlagen");

 

mysql_select_db($mysqldb, $connection) or die("Konnte die Datenbank nicht

waehlen.");

 

$sql = "SELECT * FROM Locations WHERE id = 1";

 

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
</div>
  <div data-role="footer">
    <h4>&copy; Andy Chiu & René Galle</h4>
  </div>

</div><!-- /locations -->


<script>
$('a').on('click', function (){
  var jqid = $(this).attr('id');
  console.log(jqid);

  $('hello from the javascript').appendTo('.kackpups');

});
</script>

</body>

</html>   