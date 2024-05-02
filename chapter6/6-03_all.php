<?php require '../header.php';

// PDOによるデータベース接続 
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
            'staff', 'password');

// SELECT文実行→処理したデータを１行ずつ処理する
foreach ($pdo->query('SELECT * FROM PRODUCT') as $row) {
    echo <<< ALL
    <p>$row[id]:$row[name]:$row[price]</p>
    ALL;
}

// ↑はヒアドキュメント構文で記述。(p.55)
// 中に「変数」「文字」〇　　　
// '' が不要になる。

require '../footer.php';