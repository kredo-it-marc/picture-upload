<?php
    include 'connection.php';

    class SQL extends Database{
        public function insertToTable($user, $pic){
            $sql= "INSERT into pic(name, image) VALUES('$user', '$pic')";

            if($this->conn->query($sql)){
                //successful in inserting the picture
                return 1;
            }else{
                echo "Not saved " .$this->conn->error;
                return 0;
            }
        }

        public function showAllImages(){
            $sql = "select * from pic";

            $rows = array();
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }

                return $rows;
            }
        }

        public function searchSpecificImage($id){
            $sql = "SELECT * FROM  pic WHERE id = '$id'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row;
        }
    }
?>