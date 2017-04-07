<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/e049ebef6ebebf6e/astronomy/amalnac/geolookup/conditions/q/ID/Mugassari.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$feelslike_c= $parsed_json->{'current_observation'}->{'feelslike_c'};
$dewpoint_c= $parsed_json->{'current_observation'}->{'dewpoint_c'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
$UV= $parsed_json->{'current_observation'}->{'UV'};
echo "Saat ini Anda sedang berada di	: ${location}\n";
echo "<br>";
echo "Cuaca					: ${weather}\n";
echo "<br>";
echo "Suhu						: ${feelslike_c} celcius \n";
echo "<br>";
echo "Titik embun				: ${dewpoint_c}celcius\n";
echo "<br>";
echo "Jarak Pandang			: ${visibility_km}kilometers\n";
echo "<br>";
echo "Sinar Ultra Violet				: ${UV}\n";
?>