<?php
include __DIR__ . './partials/_header.php';
?>
<div class="content pl-80 pt-8">
    Dashboard
    <?php echo $_SESSION['username'] ?>
    <?php echo $_SESSION['role'] ?>

</div>
<?php
include __DIR__ . './partials/_footer.php';
?>