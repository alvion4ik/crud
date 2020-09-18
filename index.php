<?php
require_once ('controller/config.php');
require_once ('header.php');
$sql = 'SELECT * FROM testwork';
?>


    <div class="user-list">
        <div class="user-list-cont">
            <div class="user-list-cont-header">
                <ul>
                    <li>id</li>
                    <li>firstname</li>
                    <li>lastname</li>
                    <li>email</li>
                    <li>createDate</li>
                    <li>updateDate</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!-- /.user-list-cont-header -->
            <div class="user-list-cont-wrap">
                    <?php
                    foreach($my_Db_Connection->query($sql) as $row) {
                        echo "<ul>";
                        echo "<li>" . $row['id'] . "</li>";
                        echo "<li>" . $row['firstname'] . "</li>";
                        echo "<li>" . $row['lastname'] . "</li>";
                        echo "<li>" . $row['email'] . "</li>";
                        echo "<li>" . $row['createDate'] . "</li>";
                        echo "<li>" . $row['updateDate'] . "</li>";
                        echo "<li><a href='edituser.php?id=" . $row['id'] . "'>Edit</a></li>";
                        echo "<li><a href='controller/deleteuser.php?id=" . $row['id'] . "'>delete</a></li>";
                        echo "</ul>";
                    } ?>
            </div>
            <!-- /.user-list-cont-wrap -->
        </div>
        <!-- /.user-list-cont -->
        <div class="user-list-btn">
            <a href="newuser.php">Create new user</a>
        </div>
        <!-- /.user-list-btn -->
    </div>
    <!-- /.user-list -->
<?php require_once ('footer.php'); ?>