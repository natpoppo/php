<?php require '../header.php';

$pdo = new PDO(
    'mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password'
);

$query = 'SELECT * FROM product';
$data = $pdo->query($query);

// print_r($data ->

foreach($data as $row) {
    echo '<p>';
    echo $row['id'];
    echo $row['name'];
    echo $row['price'];
    echo '</p>';
}
// test


require '../footer.php';