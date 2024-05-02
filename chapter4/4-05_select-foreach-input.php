<?php require '../header.php'; ?>

<p>商品の色を選択してください。</p>
<form action="4-05_select-foreach-output.php" method="post">
    <select name="color" id="">
    <?php
    $color=['ホワイト', 'ブルー', 'イエロー', 'ブラック'];
    foreach ($color as $c) {
        echo '<option value="', $c, '">', $c, '</option>';
    }
    ?>
    </select>
    <p><input type="submit" value="確定"></p>
</form>


<?php require '../footer.php'; ?>