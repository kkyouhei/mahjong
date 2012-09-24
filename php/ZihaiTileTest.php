<?php

require_once 'PHPUnit/Autoload.php';
require_once 'ZihaiTile.php';

class ZihaiTileTest extends PHPUnit_Framework_TestCase
{
	var $tile = array();

	public function testSetHtmlId_Tile配列の個数が28個？()
	{
		new ZihaiTile($this);
		$this->assertEquals(28, count($this->tile));
	}

	public function testSetHtmlId_配列にid値がセットされてる？()
	{
		new ZihaiTile($this);
		$id = 1;
		for($i=0 ; $i<count($this->tile) ; $i++){
			$this->assertEquals('zi' . $id, $this->tile[$i]['id']);
			$id++;
		}	
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		new ZihaiTile($this);
		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<8 ; $j++){
				$this->assertEquals('zi' . $j, $this->tile[$index]['src']);
				$index++;
			}
		}
	}

}
