<?php

require_once 'PHPUnit/Autoload.php';
require_once 'Tile.php';

class TileTest extends PHPUnit_Framework_TestCase
{
	public function testCreateTile_Tile配列にTILES_COUNT分要素あるか？()
	{
		$tile = new Tile();
		$this->assertEquals(Tile::TILES_COUNT, count($tile->tile));
	}
}
