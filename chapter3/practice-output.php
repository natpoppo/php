<h3>practice1.ようこそooさんと出力する↓</h3>
<p>1.文字列結合のみ<br>
<?php echo 'ようこそ'.$_REQUEST['user'].'さん'; ?></p>

<p>2.変数に入れる→文字列結合<br>
<?php

$user= $_REQUEST['user'];

echo 'ようこそ'.$user.'さん';

?></p>

<p>3.h1を軸に、定義したphpを代入(一旦変数に入れるのがおすすめ)<br>
また、$_REQUESTより$_POSTの方がセキュリティ〇</p>
<span>ようこそ<?= $user; ?>さん</span>

<!-- <?php echo $_REQUEST['user']; ?>  -->