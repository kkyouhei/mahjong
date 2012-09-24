<?php

require_once 'PHPUnit/Autoload.php';
require_once 'ManzuTile.php';

class ManzuTileTest extends PHPUnit_Framework_TestCase
{
	var $tile = array();

	public function testSetHtmlId_Tile配列の個数が36個？()
	{
		new ManzuTile($this);
		$this->assertEquals(36, count($this->tile));
	}

	public function testSetHtmlId_配列にid値がセットされてる？()
	{
		new ManzuTile($this);
		$index = 0;
		for($i=1 ; $i<count($this->tile) ; $i++){
			$this->assertEquals('ma' . $i, $this->tile[$index]['id']);
			$index++;
		}	
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		new ManzuTile($this);
		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<10 ; $j++){
				$this->assertEquals('ma' . $j, $this->tile[$index]['src']);
				$index++;
			}
		}
	}

}
