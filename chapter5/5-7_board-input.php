<?php require '../header.php' ?>

<!-- 投稿されたメッセージをサーバに保存する -->
<p>投稿するメッセージを入力してください。</p>
<form action="5-7_board-output.php" method="post">
<input type="text" name="message">
<input type="submit" value="投稿">
</form>

<?php require '../footer.php' ?>