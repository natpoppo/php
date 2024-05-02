<?php require '../header.php'; ?>

<!-- 100円×500円=500円 -->
<?php
echo $_REQUEST['price'].'円×'.$_REQUEST['count'].'個='.$_REQUEST['price'] * $_REQUEST['count'].'円'; 
?>

<?php require '../footer.php'; ?>