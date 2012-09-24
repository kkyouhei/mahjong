<?php

require_once 'PHPUnit/Autoload.php';
require_once 'PinzuTile.php';

class PinzuTileTest extends PHPUnit_Framework_TestCase
{
	var $tile = array();

	public function testSetHtmlId_Tile配列の個数が36個？()
	{
		$pinzuTileObject = new PinzuTile($this);
		$this->assertEquals(36, count($this->tile));
	}

	public function testSetHtmlId_配列にid値がセットされてる？()
	{
		new PinzuTile($this);
		$id = 1;
		for($i=0 ; $i<count($this->tile) ; $i++){
			$this->assertEquals('pi' . $id, $this->tile[$i]['id']);
			$id++;
		}	
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		new PinzuTile($this);
		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<10 ; $j++){
				$this->assertEquals('pi' . $j, $this->tile[$index]['src']);
				$index++;
			}
		}
	}

}
