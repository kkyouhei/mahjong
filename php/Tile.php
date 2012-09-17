<?php

class Tile
{
	// 牌の総数
	const TILES_COUNT = 136;
	
	// マンピンソー字の順にIDとSRC属性の中身を保持する配列
	var $tile = array();

	function __construct()
	{
		$this->createTile();
	}

	/**
	 * 	配列の初期化 
	 */
	private function createTile()
	{
		for($i=0 ; $i<self::TILES_COUNT ; $i++){
			$this->tile[$i] = array('src'=>'', 'id'=>'');
		}
	}
}
