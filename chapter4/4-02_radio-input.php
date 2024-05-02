<?php require '../header.php'; ?>

<!-- お食事を選択してください。
<form action="4-02_radio-output.php" method="post">
    <p><input type="radio" name="meal" value="和食" checked>和食</p>
    <p><input type="radio" name="meal" value="洋食" checked>洋食</p>
    <p><input type="radio" name="meal" value="中華" checked>中華</p>
    <p><input type="submit" value="確定"></p>
</form> -->


<!-- 練習1. 知りたい会社情報を選択-->
<!-- <p>どこの会社の求人募集状況を知りたいですか？</p>

<form action="4-02_radio-output.php" method="post">
    <p><input type="radio" name="company" value="オロ宮崎" checked>オロ宮崎</p>
    <p><input type="radio" name="company" value="スパークジャパン" checked>スパークジャパン</p>
    <p><input type="radio" name="company" value="GMOインターネット" checked>GMOインターネット</p>
    <p><input type="submit" value="確定"></p>
</form> -->


<!-- 練習2.　知りたい条件から、会社の名前をヒットさせる -->

<p>ご希望の給与条件を選択してください</p>
<form action="4-02_radio-output.php" method="post">
    <p><input type="radio" name="salary" value="15~19" checked>15~19万</p>
    <p><input type="radio" name="salary" value="20~24">20~24万</p>
    <p><input type="radio" name="salary" value="25~29">25~29万</p>
    <p><input type="submit" value="確定"></p>
</form>

<?php require '../footer.php'; ?>