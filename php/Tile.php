<?php

require_once "ManzuTile.php";
require_once "PinzuTile.php";
require_once "SozuTile.php";
require_once "ZihaiTile.php";

class Tile
{
	// 牌の総数
	const TILES_COUNT = 136;

	function __construct($mahjongTableObject){
		new ManzuTile($mahjongTableObject);
		new PinzuTile($mahjongTableObject);
		new SozuTile($mahjongTableObject);
		new ZihaiTile($mahjongTableObject);
	}

	/**
	 * 配列に追加を開始する添字を返す
	 *
	 * @param $tile 牌を保持する配列
	 * @return $tile配列のid要素に追加を開始する添字を返す
  
	 */
	public function getIndexTileIdTail($tile)
	{
		for($i=0 ; !(empty($tile[$i]['id'])) && isset($tile[$i]['id']) ; $i++){}
		return $i; 
	}

	/**
	 * 配列に追加を開始する添字を返す
	 *
	 * @param $tile 牌を保持する配列
	 * @return $tile配列のsrc要素に追加を開始する添字を返す
	 */
	public function getIndexTileSrcTail($tile)
	{
		for($i=0 ; !(empty($tile[$i]['src'])) && isset($tile[$i]['src']) ; $i++){}
		return $i; 
	}

}
