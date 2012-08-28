<?php

require_once "Pai.php";

class Alpinist extends Pai{

	private $playerOne = array();
	private $playerTwo = array();

	function __construct(){
		parent::__construct();
		$this->makeHand();
	}

	public function makeHand(){
		$pai = parent::getPai(); 
		
		for($i=0 ; $i<34 ; $i++){
			$idx = rand(0, count($pai)-1);
			$aPai = array_splice($pai, $idx, 1); 
			array_push($this->playerOne, $aPai[0]);
		}
		
		for($i=0 ; $i<34 ; $i++){
			$idx = rand(0, count($pai)-1);
			$aPai = array_splice($pai, $idx, 1); 
			array_push($this->playerTwo, $aPai[0]);
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
