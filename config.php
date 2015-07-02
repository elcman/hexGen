<?php

	// Prototype for terrainData:
	// Terrain #,
	// terrainType,
	// Weighted rolls for:
	// Mountains, Hills, Plains, Forest, Jungle, Swamp, Desert, Badlands

$hexMapSize = 6; // Counting from 0, prime hex. Default 6.
$subHexMapSize = 18; // Counting from 0, or prime hex. Default 18.
$hexDiameter = 25; // Total Hex Diameter (top to bottom, in this case). Default 25.
$hexMap = array();

$terrainData = array(
	array("Mountains", 40, 20, 10, 20, 0, 5, 5, 0),
	array("Hills", 10, 40, 20, 20, 5, 5, 0, 0),
	array("Plains", 5, 5, 20, 20, 20, 10, 5, 5),
	array("Forest", 5, 5, 5, 5, 50, 20, 5, 5),
	array("Jungle", 5, 10, 20, 40, 10, 5, 5, 5),
	array("Swamp", 5, 5, 15, 5, 20, 50, 0, 0),
	array("Desert", 5, 20, 10, 0, 10, 0 ,30, 20),
	array("Badlands", 10, 10, 10, 5, 0, 5, 20, 40)
	);

?>
