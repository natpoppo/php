<?php require '../header.php' ?>

<?php 

// switch ($_REQUEST['seat']) {
//     case '指定席':
//         echo '追加料金は1200円です。';
//         break;
//     case 'グリーン席':
//         echo '追加料金は2500円です。';
//         break;
//     default:
//         echo '追加料金はありません。';
//         break;
// }

switch ($_REQUEST['company']) {
    case 'オロ宮崎':
        echo '職種:WEB広告運用<br>雇用形態:正社員<br>給与:20~24万';
        break;
    case 'スパークジャパン':
        echo '職種:SE<br>雇用形態:正社員<br>給与:25~29万';
        break;
    case 'GMOインターネット':
        echo '職種:カスタマーサポート<br>雇用形態:契約社員<br>給与:20~24万';
        break;
}


?>

<?php require '../footer.php' ?>