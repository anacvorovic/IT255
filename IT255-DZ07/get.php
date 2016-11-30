<?php


		header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'Ana',
		'Prezime' => 'Cvorovic',
		'Index' => '2291',
		'Andresa' => 'Adresa'
		);

		echo json_encode($json_array);
	

?>