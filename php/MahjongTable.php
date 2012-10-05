<?php

require_once "Tile.php";

class MahjongTable
{
	// 一山の枚数
	const ONE_MOUNTAIN_COUNT = 34;

	// マンピンソー字の順にIDとSRC属性の中身を保持する配列
	var $tile = array();

	// Tileクラスのオブジェクトを保持する変数 
	var $tileObject;

	function __construct($playerObject)
	{
		$this->tileObject = new Tile($this);
		$this->makeMountain($playerObject);
	}

	/**
	 *	引数の$tileフィールドに34個の要素を持つ配列をセット
	 *
	 *	@param Playerクラス
	 */
	private function makeMountain($playerObject)
	{
		for($i=0 ; $i<self::ONE_MOUNTAIN_COUNT ; $i++){
			array_push($playerObject->tile, $this->spliceTile());
		}
	}

	/**
	 *	136個の配列の中からランダムに一牌を返す
	 *
	 *	@return $tile配列の1要素を返す
	 */
	private function spliceTile()
	{
		$tileIndex = $this->tileObject->getRandomIndexTile($this->tile);
		$aTile = array_splice($this->tile, $tileIndex, 1); 
		return $aTile[0]; 
	}
}
