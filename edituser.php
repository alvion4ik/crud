
<?php
    require_once ('back/config.php');
    require_once ('header.php');
    $result = $objCrudDb->showUserById($_GET['id']);
?>


<form action="back/updateuser.php" method="POST" class="new-user-form">
    <input type="hidden" name="id" placeholder="firstname" value="<?php echo $result['id']?>" required>
    <input type="text" name="firstname" placeholder="firstname" value="<?php echo $result['firstname']?>" required>
    <input type="text" name="lastname" placeholder="lastname" value="<?php echo $result['lastname']?>" required>
    <input type="email" name="email" placeholder="email" value="<?php echo $result['email']?>" required>
    <input type="submit" value="Submit">
</form>


<?php require_once ('footer.php'); ?>
