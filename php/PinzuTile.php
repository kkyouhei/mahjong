<?php

require_once 'Tile.php';

class PinzuTile extends Tile
{
	// 山の中に存在する筒子の枚数
	const PINZU_TILES_COUNT = 36;

	// 山の中に存在する筒子の1セットの枚数
	const PINZU_ONE_SET_COUNT = 9;

	// 牌の配列を保持する変数
	var $tile;

	/**
	 * tile配列に筒子をセット
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
		for($i=1 ; $i<=self::PINZU_TILES_COUNT ; $i++){
			$this->tile[$this->getIndexTileIdTail($this->tile)]['id'] =  'pi' . $i; 
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
		for($i=1 ; $i<=self::PINZU_ONE_SET_COUNT ; $i++){
			$this->tile[$this->getIndexTileSrcTail($this->tile)]['src'] =  'pi' . $i; 
		}
	}
}
