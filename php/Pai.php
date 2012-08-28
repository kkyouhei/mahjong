<?php

class Pai{
	
	private $pai;
	
	function __construct(){
		$this->makeMountain();
	}

	private function makeMountain(){
		$pai = array();
	
		$i = 0;
		while($i<136){
			// $pai push manzu 
			for($j=1 ; $j<10 ; $j++){
				$i++;
				array_push($pai, "ma" . $j);
			}
			// $pai push pinzu 
			for($j=1 ; $j<10 ; $j++){
				$i++;
				array_push($pai, "pi" . $j);
			}
			// $pai push sozu 
			for($j=1 ; $j<10 ; $j++){
				$i++;
				array_push($pai, "so" . $j);
			}
			// $pai push zihai 
			for($j=1 ; $j<8 ; $j++){
				$i++;
				array_push($pai, "zi" . $j);
			}
		}
		$this->setPai($pai);
	}

	public function setPai($pai){
		$this->pai = $pai;
	}

	public function getPai(){
		return $this->pai;
	}
}
