<?php
$type = $_POST['type'];

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$indeks = $_POST['indeks'];
$adresa = $_POST['adresa'];

	if($type == "json"){
		header("Content-type: application/json");

		$json_array = array (
		'Ime' => $ime,
		'Prezime' => $prezime,
		'Index' => $indeks,
		'Broj Telefona' => $adresa
		);

		echo json_encode($json_array);
	}else {	
		header("Content-type: text/xml");

		$xml_array = array (
		$ime => 'Ime',
		$prezime => 'Prezime',
		$indeks => 'Index',
		$adresa => 'Adresa'
		);

		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($xml_array, array ($xml, 'addChild'));
		print $xml->asXML();
}
?>