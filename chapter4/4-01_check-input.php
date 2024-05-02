<?php require '../header.php'; ?>

<form action="4-01_check-output.php" method="post">
    <p><input type="checkbox" name="mail">お買い得情報のメールを受け取る</p>
    <!-- <p><input type="submit" value="確定"></p> -->
</form>


<!-- 練習 -->

<form action="4-01_check-output.php" method="post">
    <p><input type="checkbox" name="check">お買い得情報のメールを受け取る</p>
    <p><input type="submit" value="確定"></p>
</form>

<!-- ☆check気づき　確定ボタンが2つあった場合、片方はチェックをしていても[確定]を押してないためにチェックしてないと認識される？ -->
<!-- ★Plan,Do　一つ目の確定ボタンをコメントアウトしてみる -->
<!-- ☆check　一つ目の確定ボタンを押しても変わらなかった。つまり、同じ<form>内に存在しないと、どちらかのチェックボックスが認識されない。-->


<?php require '../footer.php'; ?>