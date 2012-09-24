<?php

require_once "Tile.php";

class MahjongTable
{
	private $playerOne = array();
	private $playerTwo = array();

	// マンピンソー字の順にIDとSRC属性の中身を保持する配列
	var $tile = array();

	function __construct(){
		new Tile($this);
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

new MahjongTable();
