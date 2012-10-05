<?php

require_once 'PHPUnit/Autoload.php';
require_once 'MahjongTable.php';
require_once 'Tile.php';

class TileTest extends PHPUnit_Framework_TestCase
{

	var $tile;

	public function testGetIndexTileIdTail_追加を開始する添字がreturnされてる？()
	{
		$tile = array();
		$tileObject = new Tile(new MahjongTable());
		$this->assertEquals(0, $tileObject->getIndexTileIdTail($tile));
		$tile[0] = array('id'=>'ma1');
		$tile[1] = array('id'=>'ma2');
		$tile[2] = array('id'=>'');
		$this->assertEquals(2, $tileObject->getIndexTileIdTail($tile));

		$tile[3] = array('id'=>null);
		$this->assertEquals(2, $tileObject->getIndexTileIdTail($tile));
		$tile[4] = array('id'=>'ma3');
		$this->assertEquals(2, $tileObject->getIndexTileIdTail($tile));

	}
	
	public function testGetIndexTileSrcTail_追加を開始する添字がreturnされてる？()
	{
		$tile = array();
		$tileObject = new Tile(new MahjongTable());
		$this->assertEquals(0, $tileObject->getIndexTileSrcTail($tile));
		$tile[0] = array('src'=>'ma1');
		$tile[1] = array('src'=>'ma2');
		$tile[2] = array('src'=>'');
		$this->assertEquals(2, $tileObject->getIndexTileSrcTail($tile));

		$tile[3] = array('src'=>null);
		$this->assertEquals(2, $tileObject->getIndexTileSrcTail($tile));
		$tile[4] = array('src'=>'ma3');
		$this->assertEquals(2, $tileObject->getIndexTileSrcTail($tile));

	}

	/*
	public function testGetRandomIndexTile配列の要素数引く1の値返って？()
	{
		new Tile($this);
		$index = $tileObject->getRandomIndexTile($this->tile);
		$this->assertSelectCount('', array('>=' => 0, '<=' => count($this->tile-1)), $index);	
				
	}
	 */

}
