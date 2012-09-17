<?php

class TileUtil
{
	/**
	 * tile配列のid要素に追加を開始する添字を返す
	 */
	public static function getIndexTileIdTail($tile)
	{
		for($i=0 ; !(empty($tile[$i]['id'])) && isset($tile[$i]['id']) ; $i++){}
		return $i; 
	}

	/**
	 * tile配列のsrc要素に追加を開始する添字を返す
	 */
	public static function getIndexTileSrcTail($tile)
	{
		for($i=0 ; !(empty($tile[$i]['src'])) && isset($tile[$i]['src']) ; $i++){}
		return $i; 
	}


}
