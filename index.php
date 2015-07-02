<?php

	error_reporting(E_ALL);
	include 'config.php';
	include 'Hex.php';

	// Generate Base Map
	for($count = 0; $count < $hexMapSize; $count++) {
		$hexMap[] = new Hex($terrainData);
	};


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<LINK href="hexGen.css" rel="stylesheet" type="text/css">
	<title>hexGen</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
</head>

<body>
<div id="mapArea">
<div id="hexMap">
<?php
	for($count = 0; $count < $hexMapSize; $count++) {
		echo "<div class='hex' id='hexTile".$count."'>".$hexMap[$count]->displayTerrain()."</div>";
	}
?>
</div>
</div>
<div id="hexDescription">
<?php 
	

?>
</div>
<br/>
<button id="hexSubmit" type="button" onClick="window.location.reload( true );">Generate!</button>
</body>

</html>

