<?php
    class CrudDb {
        private $servername;
        private $database;
        private $username;
        private $password;

        public function __construct($servername, $database, $username, $password)
        {
            $this->servername= $servername;
            $this->database = $database;
            $this->username = $username;
            $this->password = $password;
        }

        private function dbConnect() {
            $sqlConf = "mysql:host=$this->servername;dbname=$this->database;";
            $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            try {
                return $my_Db_Connection = new PDO($sqlConf, $this->username, $this->password, $dsn_Options);
            } catch (PDOException $error) {
                echo 'Connection error: ' . $error->getMessage();
            }
        }

        public function dbShow () {
            foreach ($this->dbConnect()->query('SELECT * FROM testwork') as $row) {
                echo "<ul>";
                echo "<li>" . $row['id'] . "</li>";
                echo "<li>" . $row['firstname'] . "</li>";
                echo "<li>" . $row['lastname'] . "</li>";
                echo "<li>" . $row['email'] . "</li>";
                echo "<li>" . $row['createDate'] . "</li>";
                echo "<li>" . $row['updateDate'] . "</li>";
                echo "<li><a href='edituser.php?id=" . $row['id'] . "'>Edit</a></li>";
                echo "<li><a href='back/deleteuser.php?id=" . $row['id'] . "'>delete</a></li>";
                echo "</ul>";
            }
        }

        public function showUserById ($uId) {
            $mupd = $this->dbConnect()->prepare('SELECT * FROM testwork WHERE id=:id');
            $mupd->bindParam(':id', $uId, PDO::PARAM_INT);
            $mupd->execute();
            $result = $mupd->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function createUser($firstname, $lastname, $email) {
            $myInsert = $this->dbConnect()->prepare('INSERT INTO testwork (firstname, lastname, email) VALUES (:firstname, :lastname, :email)');
            $myInsert->bindParam(':firstname', $firstname);
            $myInsert->bindParam(':lastname', $lastname);
            $myInsert->bindParam(':email', $email);
            if ($myInsert->execute()) {
                echo 'New record created successfully';
                header('location: /index.php');
            } else {
                echo 'Unable to create record';
            }

        }
        public function deleteUser($uId) {
            $mdel = $this->dbConnect()->prepare('DELETE FROM testwork WHERE id=:id');
            $mdel->bindParam(':id', $uId, PDO::PARAM_INT);
            if ($mdel->execute()) {
                echo 'Delete successfully';
                header('location: /index.php');
            } else {
                echo 'Delete fail';
            }
        }

        public function updateUser($id, $firstname, $lastname, $email) {
            $sql = 'UPDATE testwork SET firstname=:firstname, lastname=:lastname, email=:email WHERE id=:id';
            $mupd = $this->dbConnect()->prepare($sql);
            $mupd->bindParam(':id', $id, PDO::PARAM_INT);
            $mupd->bindParam(':firstname', $firstname);
            $mupd->bindParam(':lastname', $lastname);
            $mupd->bindParam(':email', $email);
            if ($mupd->execute()) {
                echo 'Update successfully';
                header('location: /index.php');
            } else {
                echo 'Update fail';
            }
        }
    }

    $objCrudDb = new CrudDb('localhost', 'crud', 'admin', 'admin123');
