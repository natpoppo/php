<?php require '../header.php'; ?>

<?php
// 変数の利用
$price = $_REQUEST['price'];
$count = $_REQUEST['count'];

//練習 100円×5個=500円　となるようにやってみよう
echo $price.'円×'.$count.'個='.($price * $count).'円';
$total = $price * $count
?>

<h1><?= $price ?>円×<?= $count ?>個=<?= $total ?>円</h1> 

<?php require '../header.php'; ?>