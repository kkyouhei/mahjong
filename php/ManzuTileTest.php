<?php

require_once 'PHPUnit/Autoload.php';
require_once 'ManzuTile.php';
require_once 'TileUtil.php';

class ManzuTileTest extends PHPUnit_Framework_TestCase
{

	public function testSetHtmlID_Tile配列は配列？()
	{
		$tile = new ManzuTile();
		$this->assertTrue(is_array($tile->tile));
	}

	public function testSetHtmlId_Tile配列の個数が36個？()
	{
		// やんちゃ 
		$reflec = new ReflectionMethod('ManzuTile', 'setHtmlId');
		$reflec->setAccessible(true);
		$tile = new ManzuTile();
		$reflec->invoke($tile);
		
		$this->assertEquals(ManzuTile::MANZU_TILES_COUNT, TileUtil::getIndexTileIdTail($tile->tile));
	}

	public function testSetHtmlId_Tile配列に正しいIDがセットされてる？()
	{
		// やんちゃ 
		$reflec = new ReflectionMethod('ManzuTile', 'setHtmlId');
		$reflec->setAccessible(true);
		$tile = new ManzuTile();
		$reflec->invoke($tile);

		$index = TileUtil::getIndexTileIdTail(array()); 
		for($i=1 ; $i<=ManzuTile::MANZU_TILES_COUNT ; $i++){
			$this->assertEquals('ma' . $i, $tile->tile[$index]['id']);
			$index++;
		}
	}

	public function testSetHtmlSrc_Tile配列のsrcの値が正しいか？()
	{
		// やんちゃ 
		$reflec = new ReflectionMethod('ManzuTile', 'setHtmlSrc');
		$reflec->setAccessible(true);
		$tile = new ManzuTile();
		$reflec->invoke($tile);

		$index = 0;
		for($i=1 ; $i<5 ; $i++){
			for($j=1 ; $j<10 ; $j++){
				$this->assertEquals('ma' . $i . $j, $tile->tile[$index]['src']);
				$index++;
			}
		}
	}

}
