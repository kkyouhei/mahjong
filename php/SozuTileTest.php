<?php

require_once 'PHPUnit/Autoload.php';
require_once 'SozuTile.php';

class SozuTileTest extends PHPUnit_Framework_TestCase
{
	var $tile = array();

	public function testSetHtmlId_Tile配列の個数が36個？()
	{
		new SozuTile($this);
		$this->assertEquals(36, count($this->tile));
	}

	public function testSetHtmlId_配列にid値がセットされてる？()
	{
		new SozuTile($this);
		$id = 1;
		for($i=0 ; $i<count($this->tile) ; $i++){
			$this->assertEquals('so' . $id, $this->tile[$i]['id']);
			$id++;
		}	
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		new SozuTile($this);
		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<10 ; $j++){
				$this->assertEquals('so' . $j, $this->tile[$index]['src']);
				$index++;
			}
		}
	}

}
