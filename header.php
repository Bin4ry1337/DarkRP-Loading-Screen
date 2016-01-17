<?php

include('inc/settings.php');
include('inc/functions.php');

if($mysql == 1)
{
	include('inc/config.php');
}

?>
<!DOCTYPE html>
<head>
	<title>Gmod Loading Project</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/foundation.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
	<script type="javascript" src="js/jquery.js"></script>
	<script type="javascript" src="js/foundation.js"></script>
	<script type="javascript" src="js/main.js"></script>
	<script type="text/javascript">

	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		document.getElementById("Server").innerHTML = servername;
		document.getElementById("Gamemode").innerHTML = gamemode;
		document.getElementById("Players").innerHTML = maxplayers;
		document.getElementById("Map").innerHTML = mapname;
	}

	function DownloadingFile( fileName ) {
		document.getElementById("FileLoad").innerHTML = fileName;
	}

	function SetStatusChanged( status ) {
		document.getElementById("FileStatus").innerHTML = status;
	}

	</script>
</head>
<body>