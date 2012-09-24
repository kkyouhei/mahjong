<?php

require_once 'Tile.php';

class ManzuTile extends Tile
{
	// 山の中に存在する萬子の枚数
	const MANZU_TILES_COUNT = 36;

	// 山の中に存在する萬子の1セットの枚数
	const MANZU_ONE_SET_COUNT = 9;

	// 牌の配列を保持する変数
	var $tile;

	/**
	 * tile配列に萬子をセット
	 *
	 * @param $mahjongTableObject 牌を保持する配列 
	 */
	function __construct($mahjongTableObject)
	{
		$this->tile = $mahjongTableObject->tile;
		$this->setHtmlIdAndSrc();
		$mahjongTableObject->tile = $this->tile; 
	}

	/**
	 *	麻雀牌を表示するaタグのID属性とSRC属性の値を配列にセット
	 */
	private function setHtmlIdAndSrc()
	{
		$this->setHtmlId();
		$this->setHtmlSrc();
	}

	/**
	 *	麻雀牌を表示するaタグのID属性の値を配列にセット
	 */
	private function setHtmlId()
	{
		for($i=1 ; $i<=self::MANZU_TILES_COUNT ; $i++){
			$this->tile[$this->getIndexTileIdTail($this->tile)]['id'] =  'ma' . $i; 
		}
	}

	/**
	 *	麻雀牌を表示するaタグのSRC属性の値を配列にセット
	 */
	private function setHtmlSrc()
	{
		for($i=1 ; $i<5 ; $i++){
			$this->oneSetHtmlSrc(); 
		}
	}

	/**
	 *	麻雀牌を表示するaタグのSRC属性の値を1セット9枚配列にセット
	 */
	private function oneSetHtmlSrc()
	{
		for($i=1 ; $i<=self::MANZU_ONE_SET_COUNT ; $i++){
			$this->tile[$this->getIndexTileSrcTail($this->tile)]['src'] =  'ma' . $i; 
		}
	}
}
