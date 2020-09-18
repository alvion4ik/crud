
<?php
require_once ('controller/config.php');
require_once ('header.php');
$id = $_GET['id'];
$sql = 'SELECT * FROM testwork WHERE id=:id';
$mupd = $my_Db_Connection->prepare($sql);
$mupd->bindParam(':id', $id, PDO::PARAM_INT);
$mupd->execute();
$result = $mupd->fetch(PDO::FETCH_ASSOC);

?>


<form action="controller/updateuser.php" method="POST" class="new-user-form">
    <input type="hidden" name="id" placeholder="firstname" value="<?php echo $result['id']?>" required>
    <input type="text" name="firstname" placeholder="firstname" value="<?php echo $result['firstname']?>" required>
    <input type="text" name="lastname" placeholder="lastname" value="<?php echo $result['lastname']?>" required>
    <input type="email" name="email" placeholder="email" value="<?php echo $result['email']?>" required>
    <input type="submit" value="Submit">
</form>


<?php require_once ('footer.php'); ?>
