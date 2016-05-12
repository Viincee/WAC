<?php
$array = array(
	'Prenom' => 'Louis', 
	'Nom' => 'Kendo',
	'Ville' => 'Paris');

foreach ($array as $key => $value) {
	echo $key."=>".$value."\n";
}