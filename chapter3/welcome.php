<?php

// welcomeと出力
echo 'welcome';
print 'welcome';

// ヒアドキュメント　複数行の文字列を表現するための　htmlとの併用必須
echo <<< EO
    <p>
        welcome<br>
        to<br>
        PHP
    </p>
EO;

?>

<?php

// ヒアドキュメント practice
echo <<< EO
    <h1>
        welcome<br>
        to<br>
        PHP
    <h1>

EO;
?>