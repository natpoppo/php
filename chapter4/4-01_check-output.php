<?php require '../header.php' ?>

<?php
if (isset($_REQUEST['mail'])) {
    echo 'お買い得情報のメールをお送りさせて頂きます。';
} else {
    echo 'お買い得情報のメールはお送りさせて頂きません。';
}
?>

<!-- 練習１.チェックボックスにチェックが入っているかを確認する -->

<?php 

// if (isset($_REQUEST['check'])) {
//     echo 'お買い得情報のメールをお送りさせて頂きます。';
// } else {
//     echo 'ありがとうございます。';
// }


//練習2.　チェックボックスにチェックが入ってない場合は何もしない。

if (isset($_REQUEST['check'])) echo 'お買い得情報のメールをお送りさせて頂きます＃';


?>

<?php require '../footer.php' ?>