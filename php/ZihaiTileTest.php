<?php

require_once 'PHPUnit/Autoload.php';
require_once 'ZihaiTile.php';
require_once 'MahjongTable.php';

class ZihaiTileTest extends PHPUnit_Framework_TestCase
{

	public function testSetHtmlId_Tile配列の個数が28個？()
	{
		$mahjongTableObject = new MahjongTable();
		new ZihaiTile($mahjongTableObject);
		$this->assertEquals(28, count($mahjongTableObject->tile));
	}

	public function testSetHtmlId_配列にid値がセットされてる？()
	{
		$mahjongTableObject = new MahjongTable();
		new ZihaiTile($mahjongTableObject);
		$id = 1;
		for($i=0 ; $i<count($mahjongTableObject->tile) ; $i++){
			$this->assertEquals('zi' . $id, $mahjongTableObject->tile[$i]['id']);
			$id++;
		}	
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		$mahjongTableObject = new MahjongTable();
		new ZihaiTile($mahjongTableObject);
		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<8 ; $j++){
				$this->assertEquals('zi' . $i . $j, $mahjongTableObject->tile[$index]['src']);
				$index++;
			}
		}
	}

}
