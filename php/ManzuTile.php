<?php

require_once 'Tile.php';

class ManzuTile extends Tile
{
	// 山の中に存在する萬子の枚数
	const MANZU_TILES_COUNT = 36;
	
	// 山の中に存在する萬子の1セットの枚数
	const MANZU_ONE_SET_COUNT = 9;

	/**
	 *	麻雀牌を表示するaタグのID属性の値を配列にセット
	 *
	 *	@param $tileTail tile配列に追加を開始する添字 
	 */
	protected function setHtmlId()
	{
		for($i=1 ; $i<=self::MANZU_TILES_COUNT ; $i++){
			$this->tile[TileUtil::getIndexTileIdTail($this->tile)]['id'] =  'ma' . $i; 
		}
	}

	/**
	 *	麻雀牌を表示するaタグのSRC属性の値を配列にセット
	 *
	 *	@param tile配列に追加を開始する添字 
	 */
	protected function setHtmlSrc()
	{
		for($i=1 ; $i<5 ; $i++){
			$this->oneSetHtmlSrc(TileUtil::getIndexTileSrcTail($this->tile), $i); 
		}
	}
	
	/**
	 *	麻雀牌を表示するaタグのSRC属性の値を1セット9枚配列にセット
	 *
	 *	@param $tileTail tile配列に追加を開始する添字 
	 */
	private function oneSetHtmlSrc($tileTail, $setNumber)
	{
		for($i=1 ; $i<=self::MANZU_ONE_SET_COUNT ; $i++){
			$this->tile[$tileTail++]['src'] =  'ma' . $setNumber . $i; 
		}
	}
	
}
