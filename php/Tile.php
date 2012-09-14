<?php

class Tile{
	
	private $tile;
	
	function __construct(){
//		$this->makeMountain();
	}

	private function tileImgAndIdPush($tile, $img, $id){
		$tile[$i]['img'] = $img;
		$tile[$i]['id'] = $id ;
		return $tile;
	}

	private function manzuPair($tile, $pair){
		// $tile push manzu 
		for($i=1 ; $i<10 ; $i++){
			$this->tile = tileImgAndIdPush($tile, 'ma' . $pair . $i, 'ma' . $id);
		}
	}

	private function setThePair(){
		
	}

/*
	private function pinzuSet($tile){
		// $tile push pinzu 
		for($i=1 ; $i<10 ; $i++){
			$this->tile = tileImgAndIdPush($tile, 'pi' . $i, 'pi' . $id);
		}
	}
	
	private function sozuSet($tile){
		// $tile push sozu 
		for($i=1 ; $i<10 ; $i++){
			$this->tile = tileImgAndIdPush($tile, 'so' . $i, 'so' . $id);
		}
	}
	
	private function zihaiSet($tile){
		// $tile push zihai 
		for($i=1 ; $i<8 ; $i++){
			$this->tile = tileImgAndIdPush($tile, 'zi' . $i, 'zi' . $id);
		}	}

	private function makeMountain(){

		$i = 0;
		// 要素内でidを一意にするために付番
		$tileSet = 1;
		while($i<135){
			$tileSet++;
		}
		$this->setTile($tile);

	}

	public function setTile($tile){
		$this->tile = $tile;
	}

	public function getTile(){
		return $this->tile;
	}
*/
}
