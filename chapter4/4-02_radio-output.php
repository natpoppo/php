<?php require '../header.php'; ?>

<?php 

// switch($_REQUEST['meal']) {
//     case '和食':
//         // 和食が選択されたとき
//         echo '焼き魚、煮物、味噌汁、御飯、果物をご提供いたします。';
//         break;
//     case '洋食':
//         // 洋食が選択されたとき
//         echo 'ジュース、オムレツ、ハッシュポテト、パン、コーヒーをご提供いたします。';
//         break;
//     case '中華':
//         // 中華が選択されたとき
//         echo '春巻、餃子、卵スープ、炒飯、杏仁豆腐をご提供いたします。';
//         break;
// }


// 練習1.会社情報を返す

// switch ($_REQUEST['company']) {
//     case 'オロ宮崎':
//         echo '職種:WEB広告運用<br>雇用形態:正社員<br>給与:20~24万';
//         break;
//     case 'スパークジャパン':
//         echo '職種:SE<br>雇用形態:正社員<br>給与:25~29万';
//         break;
//     case 'GMOインターネット':
//         echo '職種:カスタマーサポート<br>雇用形態:契約社員<br>給与:20~24万';
//         break;
// }


// 練習2.　給与の条件で当たる会社情報を出す

switch ($_POST['salary']) {
    case '15~19':
        echo '該当しませんでした';
        break;
    case '20~24':
        echo 'オロ宮崎<br>GMOインターネット<br>が該当しました';
        break;
    case '25~29':
        echo 'スパークジャパン<br>が該当しました';
        break;
}

?>

<?php require '../footer.php'; ?>