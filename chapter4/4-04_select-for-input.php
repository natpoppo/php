<?php require '../header.php'; ?>

<!-- <p>購入数を選択してください。</p>
<form action="4-04_select-for-output.php" method="post">
<select name="count" id="">
    <?php
        for ($i=0; $i<10; $i++) {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select>
<p><input type="submit" value="確定"></p>
</form> -->


<!-- 練習1.whileでやってみよう -->

<p>購入数を選択してください。</p>
<form action="4-04_select-for-output.php" method="post">
<select name="count" id="">
    <?php
    $i=0;
    while ($i<10) {
        echo '<option value="', $i, '">', $i, '</option>';
        $i++;
    }
    ?>
</select>
<p><input type="submit" value="確定"></p>
</form>



<?php require '../footer.php'; ?>