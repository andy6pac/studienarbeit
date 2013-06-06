<?php/*

require 'db.php';

$entfernung = $_POST['entfernung'];

//echo $entfernung

$public = $_POST['public'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

if ($public != 0) {
	$public = 1;
}

$sql = 'INSERT INTO marker (name, public, lat, lng) VALUES (:name, :public, :lat, :lng)';

$query = $db->prepare($sql);
$query->execute(array('name' => $name, 'public' => $public, 'lat' => $lat, 'lng' => $lng));
*/
?>


<div data-role = "dialog" id = "success">

	<div data-role = "header">

		<h1>Filterkriterien</h1>

	</div><!-- /header -->

	<div data-role="content">	

		<?php
		require 'db.php';

		$entfernung = $_POST['entfernung'];
		$preis = $_POST['preis'];
		$pool = $_POST['pool'];
		$snooker = $_POST['snooker'];
		$carambol = $_POST['carambol'];
		$sieben = $_POST['sieben'];
		$acht = $_POST['acht'];
		$neun = $_POST['neun'];
		$kneipe = $_POST['kneipe'];
		$spielothek = $_POST['spielothek'];
		$verein = $_POST['verein'];
		$bistro = $_POST['bistro'];
		$sonstige = $_POST['sonstige'];
		$speisen = $_POST['speisen'];
		$fuenf = $_POST['fuenf'];
		$vier = $_POST['vier'];
		$drei = $_POST['drei'];
		$zwei = $_POST['zwei'];
		$eins = $_POST['eins'];

		if(isset($pool)) {$pool = 1;}	else {$pool = 0;};
		if(isset($snooker)) {$snooker = 1;}	else {$snooker = 0;} ;
		if(isset($carambol)) {$carambol = 1;}	else {$carambol = 0;} ;
		if(isset($sieben)) {$sieben = 1;}	else {$sieben = 0;} ;
		if(isset($acht)) {$acht = 1;}	else {$acht = 0;} ;
		if(isset($neun)) {$neun = 1;}	else {$neun = 0;} ;
		if(isset($kneipe)) {$kneipe = 1;}	else {$kneipe = 0;} ;
		if(isset($spielothek)) {$spielothek = 1;}	else {$spielothek = 0;} ;
		if(isset($verein)) {$verein = 1;}	else {$verein = 0;} ;
		if(isset($bistro)) {$bistro = 1;}	else {$bistro = 0;} ;
		if(isset($sonstige)) {$sonstige = 1;}	else {$sonstige = 0;} ;
		if(isset($fuenf)) {$fuenf = 1;}	else {$fuenf = 0;} ;
		if(isset($vier)) {$vier = 1;}	else {$vier = 0;} ;
		if(isset($drei)) {$drei = 1;}	else {$drei = 0;} ;
		if(isset($zwei)) {$zwei = 1;}	else {$zwei = 0;} ;
		if(isset($eins)) {$eins = 1;}	else {$eins = 0;} ;

		echo $entfernung ; 
		echo $preis ;
		echo $pool ;
		echo $snooker ;
		echo $carambol ;
		echo $sieben ;
		echo $acht ;
		echo $neun ;
		echo $kneipe ;
		echo $spielothek ;
		echo $verein ;
		echo $bistro ;
		echo $sonstige ;
		echo $speisen ;
		echo $fuenf ;
		echo $vier ;
		echo $drei ;
		echo $zwei ;
		echo $eins ;
		?>
		
		<a href = "#filter" data-role = "button">Zurück zum Filter</a>
		

	</div><!-- /content -->

</div><!-- /page -->