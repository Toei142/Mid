<?php
    class Database{
        public $dbConn=null;
        public function connect(){
            $this->dbConn=new mysqli("localhost","root","","db");
            $this->dbConn->query("SET NAMES UTF8");
        }
        public function show_information(){
            $sql="SELECT * FROM `user`";
            $result=$this->dbConn->query($sql);
            echo "<table border='1'>";
            $counter=0;
            while ($row=$result->fetch_assoc()){
                if($counter==0){
                    echo "<tr><th colspan='8'><h1>Manage user</h1></th></tr>";
                    echo "<tr><th colspan='8' align='left'><a href='register.php'>+user</a></th></tr>";
                    echo "<tr>";
                    foreach($row as $key=>$value){
                        echo "<th>{$key}</th>";
                    }
                    echo "<th>OPERATION</th>";
                    echo "</tr>";
                    $counter++;
                }
                echo "</tr>";
                foreach($row as $key=>$value){
                    echo "<td>{$value}</td>";
                }
                echo "<td><a href='handle.php?delId={$row['USER_ID']}'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        public function insertData($data){
            $sql="INSERT INTO `user`(`USER_ACCOUNT`, `USER_NAME`, `PASS`, `IMAGE`, `TYPE`) 
            VALUES ('{$data['user']}','{$data['name']}',MD5({$data['pass']}),'{$data['img']}','{$data['type']}')";
            $rs=$this->dbConn->query($sql);
        }
        public function deleteId($id){
            $sql="DELETE FROM `user` WHERE `USER_ID`={$id}";
            $this->dbConn->query($sql);
        }
        public function varify_user($user,$pass){
            $sql="SELECT count(`USER_ID`) as n,`USER_NAME`,`TYPE` FROM `user` WHERE `USER_ACCOUNT`='{$user}' and `PASS`=MD5('{$pass}')";
            $rs=$this->dbConn->query($sql);
            $row=$rs->fetch_assoc();
            return $row;
        }
        public function show_foodAll(){
            $sql="SELECT * FROM `food`";
            $result=$this->dbConn->query($sql);
            echo "<table border='1'>";
            echo "<tr><th colspan='4'><h4>สูตรอาหาร</h4></th></tr>";
            while ($row=$result->fetch_assoc()){

                   
                  
                echo "</tr>";
                foreach($row as $key=>$value){
                    echo "<td>{$value}</td>";
                }
                echo "<td><a href='recipe_detail.php?Recipe_id={$row['Food_ID']}'>detail</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        public function show_foodDetail($id){
            $sql="SELECT * FROM `recipe`,food WHERE recipe.Recipe_ID=food.Food_ID and food.Food_ID={$id}";
            $result=$this->dbConn->query($sql);
            echo "<table border='1'>";
            $counter=0;
            while ($row=$result->fetch_assoc()){
                echo "<tr><td>{$row['Food_Name']}</td></tr>";
                echo "<tr><td>{$row['Food_Description']}</td></tr>";
                echo "<tr><td>{$row['Ingredient']}</td></tr>";
                echo "<tr><td>{$row['How_to_Cook']}</td></tr>";
            }
            echo "</table>";
        }
     
    }
