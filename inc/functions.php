<?php

function GrabSteamID()
{
	if(isset($_GET['steamid']) && strlen($_GET['steamid']) == 17)
	{
		global $api_key;

		$data   = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . @$api_key . '&steamids=' . $_GET['steamid']);
		$decode = json_decode($data, true);

		echo $_GET['steamid'];
	}
	else
	{
		echo "<span class='red'>Not Found</span>";
	}
}



function GrabSteamAvatar()
{
	if(isset($_GET['steamid']) && strlen($_GET['steamid']) == 17)
	{
		global $api_key;

		$data   = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . @$api_key . '&steamids=' . $_GET['steamid']);
		$decode = json_decode($data, true);

		echo $decode['response']['players'][0]['avatarfull'];
	}
	else
	{
		echo "img/avatar.png";
	}
}



function GrabSteamName()
{
	if(isset($_GET['steamid']) && strlen($_GET['steamid']) == 17)
	{
		global $api_key;

		$data   = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . @$api_key . '&steamids=' . $_GET['steamid']);
		$decode = json_decode($data, true);

		echo $decode['response']['players'][0]['personaname'];
	}
	else
	{
		echo "<span class='red'>Not Found</span>";
	}
}



function GrabMoney()
{
	if(isset($_GET['steamid']) && strlen($_GET['steamid']) == 17)
	{
		global $con;

		$steamid = $_GET['steamid'];

		$data = $con->prepare("SELECT * FROM `players` WHERE steamid = ?");
		$data->execute(array(
			$steamid
		));
		
		while($row = $data->fetch(PDO::FETCH_ASSOC))
		{
			return $row['money'];
		}
	}
}









?>