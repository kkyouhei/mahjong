<?php

require_once "Tile.php";

class Alpinist extends Tile{
	private $playerOne = array();
	private $playerTwo = array();

	function __construct(){
		parent::__construct();
		$this->makeHand();
	}

	public function makeHand(){
		$tile = parent::getTile(); 

		for($i=0 ; $i<34 ; $i++){
			$idx = rand(0, count($tile)-1);
			$aTile = array_splice($tile, $idx, 1); 
			array_push($this->playerOne, $aTile[0]);
		}

		for($i=0 ; $i<34 ; $i++){
			$idx = rand(0, count($tile)-1);
			$aTile = array_splice($tile, $idx, 1); 
			array_push($this->playerTwo, $aTile[0]);
		}
		// thank you for http://mastermathematics.blog28.fc2.com/blog-entry-79.html
	}

	public function getPlayerTile($player=1){
		if($player=1){
			return $this->playerOne;
		}elseif($player=2){
			return $this->playerTwo;
		}else{
			return array();
		}
	}

}

$tile = new Alpinist();
$playerOne = $tile->getPlayerTile(1);
$playerTwo = $tile->getPlayerTile(2);
// thank you for http://c-brains.jp/blog/wsg/08/05/29-015536.php
header("Content-type: application/json");
json_encode($playerOne);
