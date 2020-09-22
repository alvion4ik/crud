<?php require_once ('header.php'); ?>


<form action="back/create.php" method="POST" class="new-user-form">
    <input type="text" name="firstname" placeholder="firstname" required>
    <input type="text" name="lastname" placeholder="lastname" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="submit" value="Submit">
</form>


<?php require_once ('footer.php'); ?>
