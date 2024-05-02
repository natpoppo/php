<!-- <?php echo $_REQUEST['user']; ?> -->
<!-- PHPの文字列結合は. -->
<?php echo 'ようこそ'.$_REQUEST['user'].'さん'; ?>


<!-- practice1 -->
<?php
$user=$_REQUEST['user']
?>
<h1>ようこそ<?= $user ?>さん</h1>