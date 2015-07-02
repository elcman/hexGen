<?php

class Hex {
	private $terrainType;
	private $terrainData = array();
	private $subTerrain = array();
	
	function __construct($terrainObj) {
		$this->importTerrainData($terrainObj);
		$this->setTerrain();
	}

	// Imports terrain data from config.php.
	public function importTerrainData($terrainObj) {
		$this->terrainData = $terrainObj;
	}

	// Sets Object to random Terrain using data from config.php.
	private function setRandTerrain() {
		$this->terrainType = $this->terrainData[$this->rollDice(count($this->terrainData[0])-1)-1][0];
	}
	
	// Return terrain of Object
	public function displayTerrain() {
		return $this->terrainType;
	}
	
	// Roll Dice using sides as argument. No argument rolls d6.
	static public function rollDice($sides = 6) {
		// Roll # of sides, or roll d6 if no arguments given
		$result = rand(1, $sides);
		return($result);
	}

	// Set Terrain using Argument. No argument calls setRandomTerrain.
	public function setTerrain($terrain = null) {
		 if($terrain == null) {
			 $this->setRandTerrain();
		 }
		 else {
			 // Script to insert any terrain type
		 }
	}
}

class subHex extends Hex {
	
}

?>
