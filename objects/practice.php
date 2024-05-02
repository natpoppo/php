<?php
// 4/24 Vehicle.phpファイルを読み込む
require 'Vehicle.php';

// オブジェクトを作るためには何かしらの関数が必要になる
// インスタンス化：クラスを元にオブジェクト(インスタンス)を生成する
// オブジェクト＝インスタンス＝実体
$car = new Vehicle();
// メソッドの利用　new　で、その中にあるメソッドを実行できる
$car->setCount(1);
$car->showMessage('車');

// Q. $bikeという変数を使ってVehicleクラスをインスタンス化し、showMessageForBikeメソッドを実行してください。
// $bike = new Vehicle();
// $bike->showMessageForBike();
$bike = new Vehicle();
$vehicle = 'バイク';
$bike->setCount(1);
$bike->showMessage($vehicle);

$car->setCount(1);
$bike->showMessage($vehicle);