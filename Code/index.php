<!DOCTYPE html> 
<html> 

<head> 

  <title>Locate Billard // Galle & Chiu</title> 

  <meta name = "viewport" content = "width=device-width, initial-scale=1"> 
  <meta charset = "utf-8">
  <link rel = "stylesheet" href = "http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
  <script src = "http://code.jquery.com/jquery-1.8.2.min.js"></script>
  <script src = "http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
  <script src = "js/script.js"></script>
  <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

  <style type = "text/css"></style>
  <link rel="stylesheet" type="text/css" href="css/style.css" />

</head> 

<body>

<div data-role = "page" id = "index">

  <div data-role="content"> 

    <center>

    <h2> Willkommen bei Locate Billard </h2>

    <a href = "#fbwarnung" data-role = "button" data-theme = "b">Facebook Anmeldung</a>

    <a href = "#uebersicht" data-role = "button" data-theme = "b">Ohne Facebook fortfahren</a>

    <p style = "font-size: 12px;">Abhängig von ihrem Mobilfunkvertrag können Kosten entstehen.</p>

    </center>

  </div><!-- /content -->

</div><!-- /index -->

<div data-role ="dialog" id="fbwarnung">

  <div data-role ="header">
    <h1>Hinweis</h1>

  </div>

  <div data-role ="content">

    <center><p>Die Facebookfunktion ist zur Zeit nicht verfügbar!</p></center>  

    <a href="#uebersicht" data-role = "button" data-theme = "c">ohne Facebook fortfahren</a>
  
  </div>

</div>

<div data-role = "page" id = "uebersicht">

  <div data-role="panel" id="Filter" data-position="left" data-display="reveal  " class="ui-response" data-theme="a">
        <h3>Filterkriterien </h3>
        <p></p>
        <center>
        <legend>Maximale Entfernung in km:</legend></center>
        <input type="range" name="slider-fill-mini" id="slider-fill-mini" value="10" min="0" max="100" data-mini="true" data-highlight="true" data-theme="a" data-track-theme="a">
        <p></p>
        <center>
        <legend>Maximal Preis pro Std. in €:</legend></center>
        <input type="range" name="slider-fill-mini" id="slider-fill-mini" value="6" min="0" max="15" data-mini="true" data-highlight="true" data-theme="a" data-track-theme="a">
        <center>
<p></p>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend>Spielart:</legend>
    <input type="checkbox" name="snooker" id="snooker" data-theme="a">
    <label for="snooker">Snooker</label>
    <input type="checkbox" name="pool" id="pool" data-theme="a" checked="">
    <label for="pool">Pool</label>
    <input type="checkbox" name="carambol" id="carambol" data-theme="a">
    <label for="carambol">Carambol</label>
</fieldset>
<p></p>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend>Tischgr&ouml;&szlig;e:</legend>
    <input type="checkbox" name="sieben" id="sieben" data-theme="a">
    <label for="sieben">7 Fu&szlig;</label>
    <input type="checkbox" name="acht" id="acht" data-theme="a">
    <label for="acht">8 Fu&szlig;</label>
    <input type="checkbox" name="neun" id="neun" data-theme="a" checked="">
    <label for="neun">9 Fu&szlig;</label>
</fieldset>
<p></p>
<fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Lokalit&auml;t:</legend>
    <input type="checkbox" name="kneipe" id="kneipe" data-theme="a" checked="">
    <label for="kneipe">Kneipe</label>
    <input type="checkbox" name="spielothek" id="spielothek" data-theme="a" checked="">
    <label for="spielothek">Spielothek</label>
    <input type="checkbox" name="verein" id="verein" data-theme="a" checked="">
    <label for="verein">Vereinsheim</label>
    <input type="checkbox" name="bistro" id="bistro" data-theme="a" checked="">
    <label for="bistro">Billardbistro</label>
    <input type="checkbox" name="sonstiges" id="sonstiges" data-theme="a" checked="">
    <label for="sonstiges">Sonstiges</label>
</fieldset>
<p></p>
<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
    <legend>Speisem&ouml;glichkeit:</legend>
        <input type="radio" name="radio-choice-b" id="radio-choice-c" value="list" data-theme="a" checked="checked">
        <label for="radio-choice-c">Ja</label>
        <input type="radio" name="radio-choice-b" id="radio-choice-d" value="grid" data-theme="a" >
        <label for="radio-choice-d">Nein</label>
 
</fieldset>
<p></p>

    <a href="#my-header" type="button" data-rel="close" data-icon="delete" data-mini="true" data-theme="d">Abbrechen</a>
    <a href="#my-header" type="button" data-rel="close" data-icon="check" data-mini="true" data-theme="d">Übernehmen</a>
</center>

    </div><!-- /panel -->

  <div data-role = "header" id = "my-header" data-theme = "a">
  <a href="#Filter" data-role="button" data-icon="gear">Filter</a>
 <h1>Locate Billard</h1>
    <a href="#index" data-role="button" data-icon = "facebook" data-theme = "a">Login</a>

     
    
  <!--     <a href="#filter" data-role="button" data-icon="gear" data-iconpos="left" data-theme = "a">Filter</a> -->
    
  
  </div><!-- /header -->
 
  
    



  <div data-role="content"> 
     <input type="search" name="search" id="suchfeld" placeholder="Standort eingeben" />  
     
<ul data-role="listview" data-inset="true" data-theme="a">
    <li><a href="#location1"><h2>Parapluie Amberg</h2><p>Entfernung 2,2 km </p></a></li>
    <li><a href="#location2"><h2>Hallenbad Sulzbach-Rosenberg</h2><p>Entfernung 10,4 km </p></a></li>
    <li><a href="#location3"><h2>Sportland Erlangen</h2><p>Entfernung 79,2 km </p></a></li>
    
</ul>
  </div><!-- /content -->

    <div data-role="footer">
    <h4>&copy; Andy Chiu & René Galle</h4>
  </div>

</div><!-- /uebersicht -->


<div data-role="page" id="filter">

  <form action = "php/filter.php" method = "post" id = "filterForm">

  <div data-role="header">
    <h1>Filter</h1>
        <a href="#uebersicht" data-role="button" data-icon="delete" data-iconpos="left">Abbrechen</a>
        <a href="#uebersicht" data-role="button" data-icon="check" data-iconpos="left">Fertig</a>
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
                  <label for="Lokalitaet_3">Billardbistro</label>
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


<div data-role="page" id="location1">

      <?php

          $mysqlhost="localhost"; // MySQL-Host angeben

          $mysqluser="root"; // MySQL-User angeben

          $mysqlpwd="root"; // Passwort angeben

          $mysqldb="locatebillard"; // Gewuenschte Datenbank angeben

          $connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die ("Verbindungsversuch fehlgeschlagen");

          mysql_select_db($mysqldb, $connection) or die("Konnte die Datenbank nicht waehlen.");

          $sql = "SELECT * FROM Locations WHERE id = 1 ";

          $locations = mysql_query($sql) or die("Anfrage nicht erfolgreich");

      ?>

      <?php

        while ($loc = mysql_fetch_array($locations)){

      ?>

      <div data-role = "header">

          <a href="#uebersicht" data-role="button" data-icon="arrow-l" data-iconpos="left">Zurück</a>
          
          <h1><?=$loc['name']?></h1>

      </div><!-- /header -->

      <div data-role = "content">

      <ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-top"><p class="ui-li-aside ui-li-desc"><strong>2,2 km</strong></p>
              <h2 class="ui-li-heading"><?=$loc['name']?> <?=$loc['ort']?></h2>
              <p class="ui-li-desc"><?=$loc['strasse']?> <?=$loc['hausnummer']?></p>
              <p class="ui-li-desc"><?=$loc['plz']?> <?=$loc['ort']?></p>
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <h3 class="ui-li-heading">Kontaktdaten:</h3>
              <div float="left">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <p class="ui-li-desc"><strong>Telefon:</strong></p>
              <p class="ui-li-desc"><strong>Email:</strong></p>
              <p class="ui-li-desc"><strong>Internet:</strong></p>
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['telefon']?></p>
              <p class="ui-li-desc"> <?=$loc['email']?></p>
              <p class="ui-li-desc"> <?=$loc['internet']?></p>
              </div>
            
            </div> 
         
              
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              
              
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Öffnungszeiten:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['zeiten']?></p>
              </div>
            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Tische:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['snooker']?> x Snookertische</p>
              <p class="ui-li-desc"><?=$loc['pool']?> x Pooltische</p>
              <p class="ui-li-desc"><?=$loc['carambol']?> x Caramboltische</p>
              </div>

            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <h3 class="ui-li-heading">Preise:</h3>
               <div class="ui-grid-a">
              
              <div class="ui-block-a">
                   <p class="ui-li-desc"><strong>Snooker:</strong> </p>
              <p class="ui-li-desc"><strong>Pool:</strong></p>
              <p class="ui-li-desc"><strong>Carambol:</strong></p>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"> <?=$loc['snooker_preis']?> €/Std.</p>
              <p class="ui-li-desc"> <?=$loc['pool_preis']?> €/Std.</p>
              <p class="ui-li-desc"> <?=$loc['carambol_preis']?> €/Std.</p>
              </div>
              
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
            <div class="ui-grid-d">
              <div class="ui-block-a"><a href="images/kugel.jpg"><img src="images/kugel_tb.png"></img></a></div>
              <div class="ui-block-b"><a href="#"><img src="images/kugel_tb.png"></img></a></div>
              <div class="ui-block-c"><a href="#"><img src="images/kugel_tb.png"></img></a></div>
              <div class="ui-block-d"><a href="#"><img src="images/kugel_tb.png"></img></a></div>
              <div class="ui-block-e"><a href="#"><img src="images/kugel_tb.png"></img></a></div>
            </div><!-- /grid-d -->
            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Speisemöglichkeit:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['speisen']?></p>
              </div>
              
            </li>
          </ul>

          <div data-role="controlgroup">
      <a href="#karte" data-role="button">Lokal in Karte anzeigen</a>
      <a href="#bewertungen" data-role="button">Bewertungen anzeigen</a>

      
      </div> <!-- /content -->


      <?php

      }

      ?>



      </div>
        <div data-role="footer">
          <h4>&copy; Andy Chiu & René Galle</h4>
        </div>

</div><!-- /location1 -->


<div data-role="page" id="location2">

      <?php

          $mysqlhost="localhost"; // MySQL-Host angeben

          $mysqluser="root"; // MySQL-User angeben

          $mysqlpwd="root"; // Passwort angeben

          $mysqldb="locatebillard"; // Gewuenschte Datenbank angeben

          $connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die ("Verbindungsversuch fehlgeschlagen");

          mysql_select_db($mysqldb, $connection) or die("Konnte die Datenbank nicht waehlen.");

          $sql = "SELECT * FROM Locations WHERE id = 2 ";

          $locations = mysql_query($sql) or die("Anfrage nicht erfolgreich");

      ?>

      <?php

        while ($loc = mysql_fetch_array($locations)){

      ?>

      <div data-role = "header">

          <a href="#uebersicht" data-role="button" data-icon="arrow-l" data-iconpos="left">Zurück</a>
          
          <h1><?=$loc['name']?></h1>

      </div><!-- /header -->

            <div data-role = "content">

      <ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-top"><p class="ui-li-aside ui-li-desc"><strong>10,4 km</strong></p>
              <h2 class="ui-li-heading"><?=$loc['name']?> <?=$loc['ort']?></h2>
              <p class="ui-li-desc"><?=$loc['strasse']?> <?=$loc['hausnummer']?></p>
              <p class="ui-li-desc"><?=$loc['plz']?> <?=$loc['ort']?></p>
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <h3 class="ui-li-heading">Kontaktdaten:</h3>
              <div float="left">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <p class="ui-li-desc"><strong>Telefon:</strong></p>
              <p class="ui-li-desc"><strong>Email:</strong></p>
              <p class="ui-li-desc"><strong>Internet:</strong></p>
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['telefon']?></p>
              <p class="ui-li-desc"> <?=$loc['email']?></p>
              <p class="ui-li-desc"> <?=$loc['internet']?></p>
              </div>
            
            </div> 
         
              
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              
              
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Öffnungszeiten:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['zeiten']?></p>
              </div>
            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Tische:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['snooker']?> x Snookertische</p>
              <p class="ui-li-desc"><?=$loc['pool']?> x Pooltische</p>
              <p class="ui-li-desc"><?=$loc['carambol']?> x Caramboltische</p>
              </div>

            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <h3 class="ui-li-heading">Preise:</h3>
               <div class="ui-grid-a">
              
              <div class="ui-block-a">
                   <p class="ui-li-desc"><strong>Snooker:</strong> </p>
              <p class="ui-li-desc"><strong>Pool:</strong></p>
              <p class="ui-li-desc"><strong>Carambol:</strong></p>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"> <?=$loc['snooker_preis']?> €/Std.</p>
              <p class="ui-li-desc"> <?=$loc['pool_preis']?> €/Std.</p>
              <p class="ui-li-desc"> <?=$loc['carambol_preis']?> €/Std.</p>
              </div>
              
              
            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Speisemöglichkeit:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['speisen']?></p>
              </div>
              
            </li>
          </ul>

          <div data-role="controlgroup">
      <a href="#karte" data-role="button">Lokal in Karte anzeigen</a>
      <a href="#bewertungen" data-role="button">Bewertungen anzeigen</a>
      </div> <!-- /content -->


      <?php

      }

      ?>



      </div>
        <div data-role="footer">
          <h4>&copy; Andy Chiu & René Galle</h4>
        </div>

</div><!-- /location2 -->


<div data-role="page" id="location3">

      <?php

          $mysqlhost="localhost"; // MySQL-Host angeben

          $mysqluser="root"; // MySQL-User angeben

          $mysqlpwd="root"; // Passwort angeben

          $mysqldb="locatebillard"; // Gewuenschte Datenbank angeben

          $connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die ("Verbindungsversuch fehlgeschlagen");

          mysql_select_db($mysqldb, $connection) or die("Konnte die Datenbank nicht waehlen.");

          $sql = "SELECT * FROM Locations WHERE id = 3 ";

          $locations = mysql_query($sql) or die("Anfrage nicht erfolgreich");

      ?>

      <?php

        while ($loc = mysql_fetch_array($locations)){

      ?>

      <div data-role = "header">

          <a href="#uebersicht" data-role="button" data-icon="arrow-l" data-iconpos="left">Zurück</a>
          
          <h1><?=$loc['name']?></h1>

      </div><!-- /header -->

            <div data-role = "content">

      <ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-top"><p class="ui-li-aside ui-li-desc"><strong>79,2 km</strong></p>
              <h2 class="ui-li-heading"><?=$loc['name']?> <?=$loc['ort']?></h2>
              <p class="ui-li-desc"><?=$loc['strasse']?> <?=$loc['hausnummer']?></p>
              <p class="ui-li-desc"><?=$loc['plz']?> <?=$loc['ort']?></p>
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <h3 class="ui-li-heading">Kontaktdaten:</h3>
              <div float="left">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <p class="ui-li-desc"><strong>Telefon:</strong></p>
              <p class="ui-li-desc"><strong>Email:</strong></p>
              <p class="ui-li-desc"><strong>Internet:</strong></p>
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['telefon']?></p>
              <p class="ui-li-desc"> <?=$loc['email']?></p>
              <p class="ui-li-desc"> <?=$loc['internet']?></p>
              </div>
            
            </div> 
         
              
            </li>
            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              
              
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Öffnungszeiten:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['zeiten']?></p>
              </div>
            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Tische:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['snooker']?> x Snookertische</p>
              <p class="ui-li-desc"><?=$loc['pool']?> x Pooltische</p>
              <p class="ui-li-desc"><?=$loc['carambol']?> x Caramboltische</p>
              </div>

            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <h3 class="ui-li-heading">Preise:</h3>
               <div class="ui-grid-a">
              
              <div class="ui-block-a">
                   <p class="ui-li-desc"><strong>Snooker:</strong> </p>
              <p class="ui-li-desc"><strong>Pool:</strong></p>
              <p class="ui-li-desc"><strong>Carambol:</strong></p>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"> <?=$loc['snooker_preis']?> €/Std.</p>
              <p class="ui-li-desc"> <?=$loc['pool_preis']?> €/Std.</p>
              <p class="ui-li-desc"> <?=$loc['carambol_preis']?> €/Std.</p>
              </div>
              
              
            </li>

            <li class="ui-li ui-li-static ui-btn-up-c ui-corner-bottom ui-li-last">
              <div class="ui-grid-a">
              
              <div class="ui-block-a">
                <h3 class="ui-li-desc">Speisemöglichkeit:</h3>
           
              </div>
              
              <div class="ui-block-b">
              <p class="ui-li-desc"><?=$loc['speisen']?></p>
              </div>
              
            </li>
          </ul>

          <div data-role="controlgroup">
      <a href="#karte" data-role="button">Lokal in Karte anzeigen</a>
      <a href="#bewertungen" data-role="button">Bewertungen anzeigen</a>
      </div> <!-- /content -->


      <?php

      }

      ?>



      </div>
        <div data-role="footer">
          <h4>&copy; Andy Chiu & René Galle</h4>
        </div>

</div><!-- /location3 -->


<div data-role = "page" id = "karte">

  <div data-role = "header">

    <a href = "#location1" data-icon = "arrow-l">Zur&uuml;ck</a>

    <h1>Parapluie Amberg</h1>

    

  </div><!-- /header -->

  <div data-role="content"> 

    <div id = "map"></div>

  </div><!-- /content -->

</div><!-- /karte -->


<script>
$( document ).on( "pageinit", function() {
    $( "#popupMap iframe" )
        .attr( "width", 0 )
        .attr( "height", 0 );

    $( "#popupMap iframe" ).contents().find( "#map_canvas" )
        .css( { "width" : 0, "height" : 0 } );

    $( "#popupMap" ).on({
        popupbeforeposition: function() {
            var size = scale( 480, 320, 0, 1 ),
                w = size.width,
                h = size.height;

            $( "#popupMap iframe" )
                .attr( "width", w )
                .attr( "height", h );

            $( "#popupMap iframe" ).contents().find( "#map_canvas" )
                .css( { "width": w, "height" : h } );
        },
        popupafterclose: function() {
            $( "#popupMap iframe" )
                .attr( "width", 0 )
                .attr( "height", 0 );

            $( "#popupMap iframe" ).contents().find( "#map_canvas" )
                .css( { "width": 0, "height" : 0 } );
        }
    });
});
</script>

</body>

</html>   