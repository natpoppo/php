<?php require '../header.php'; ?>

<!-- <p>座席の種類を選択してください。</p>
<form action="select-output.php" method="post">
    <select name="seat">
        <option value="自由席">自由席</option>
        <option value="指定席">指定席</option>
        <option value="グリーン席">グリーン席</option>
    </select>
    <p><input type="submit" value="確定"></p>
</form> -->


<!-- 練習1. ラジオと同様 -->
<p>どこの会社の求人募集状況を知りたいですか？</p>

<form action="4-03_select-output.php" method="post">
    <select name="company" id="">
        <option value="オロ宮崎" checked>オロ宮崎</option>
        <option value="スパークジャパン" checked>スパークジャパン</option>
        <option value="GMOインターネット" checked>GMOインターネット</option>
    </select>
    <p><input type="submit" value="確定"></p>
</form>


<?php require '../footer.php'; ?>