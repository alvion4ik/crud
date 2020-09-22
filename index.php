<?php
    require_once ('back/config.php');
    require_once ('header.php');
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
                    <?php $objCrudDb->dbShow($my_Db_Connection); ?>
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