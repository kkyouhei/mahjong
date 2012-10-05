<?php
require_once 'Player.php';
require_once 'MahjongTable.php';

$playerObject = new Player();
new MahjongTable($playerObject);
// thank you for http://c-brains.jp/blog/wsg/08/05/29-015536.php
header("Content-type: application/json");
echo json_encode($playerObject->tile);

