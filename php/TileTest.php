<?php

require_once 'PHPUnit/Autoload.php';
require_once 'Tile.php';

class TileTest extends PHPUnit_Framework_TestCase
{
	/**
	 *  
	 */
	public function test配列？()
	{
		$tile = new Tile();
		$this->assertTrue(is_array($tile->getTile()));
	}

	public function test牌の総数は136()
	{
		$tile = new Tile();	
		$this->assertEquals(
			136,
			count($tile->getTile())
		);
	}

	/**
	 * tileImgIdSet
	 */
	public function test牌のurlとidはセットされてる？(){
		$tileClass = new Tile();
		$tile = $tileClass->tileImgAndIdSet(array(), 'test/test.png', 'test');
		$this->assertEquals('test/test.png', array_pop($tile['url']));
		$this->assertEquals('test', array_pop($tile['id']));
		$this->assertEquals(1, count($tile));
	}


	/**
	 * manzuOnePiece
	 */
	/*
	public function test配列？(){
		$tile = new Tile();
	}
	 */
}
