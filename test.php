<?php

$api_key = "D738E349D52B98C71497031B08ED70A2";
$data    = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=D738E349D52B98C71497031B08ED70A2&steamids=76561197960435530');
$decode  = json_decode($data, true);

echo $decode['response']['players'][0]['personaname'];

?>