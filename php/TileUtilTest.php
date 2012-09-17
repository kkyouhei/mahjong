<?php

require_once 'PHPUnit/Autoload.php';
require_once 'TileUtil.php';

class TileUtilTest extends PHPUnit_Framework_TestCase
{
	public function testGetIndexTileIdTail(){
		$tile = array();
		$this->assertEquals(0, TileUtil::getIndexTileIdTail($tile));
		$tile[0] = array('id'=>'ma1');
		$tile[1] = array('id'=>'ma2');
		$tile[2] = array('id'=>'');
		$this->assertEquals(2, TileUtil::getIndexTileIdTail($tile));

		$tile[3] = array('id'=>null);
		$this->assertEquals(2, TileUtil::getIndexTileIdTail($tile));
		$tile[4] = array('id'=>'ma3');
		$this->assertEquals(2, TileUtil::getIndexTileIdTail($tile));

	}
}
