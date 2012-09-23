<?php

require_once 'PHPUnit/Autoload.php';
require_once 'PinzuTile.php';
require_once 'MahjongTable.php';

class PinzuTileTest extends PHPUnit_Framework_TestCase
{

	public function testSetHtmlId_Tile配列の個数が36個？()
	{
		$mahjongTableObject = new MahjongTable();
		new PinzuTile($mahjongTableObject);
		$this->assertEquals(36, count($mahjongTableObject->tile));
	}

	public function testSetHtmlId_配列にid値がセットされてる？()
	{
		$mahjongTableObject = new MahjongTable();
		new PinzuTile($mahjongTableObject);
		$id = 1;
		for($i=0 ; $i<count($mahjongTableObject->tile) ; $i++){
			$this->assertEquals('pi' . $id, $mahjongTableObject->tile[$i]['id']);
			$id++;
		}	
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		$mahjongTableObject = new MahjongTable();
		new PinzuTile($mahjongTableObject);
		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<10 ; $j++){
				$this->assertEquals('pi' . $i . $j, $mahjongTableObject->tile[$index]['src']);
				$index++;
			}
		}
	}

}
