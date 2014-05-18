<?php

$api_url = 'https://api.typeform.com/v0/form/ToheBD?key=06e283cf9a2f96c5674821ef2335742b8f4a362b&completed=true';
$api_response=@file_get_contents($api_url);

header("Content-type: application/json");
echo $api_response;	

?>