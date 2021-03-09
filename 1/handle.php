<?php
    require_once "class.php";
    $mycon=new Database();
    $mycon->connect();
   
    if(isset($_POST['user'])){
        if($_POST['pass']==$_POST['conpass']){
             $data['user']=$_POST['user'];
             $data['name']=$_POST['name'];
             $data['pass']=$_POST['pass'];
             $data['img']=$_POST['img'];
             $data['type']=$_POST['type'];
             $mycon->insertData($data);
             header("location: home.php");
        }else{
            echo "Connected successfully<br>";
            echo "Error Check<br>";
            echo "PASSWORD NOT MATCH<br>";
            echo "  <a href='register.php'>Link back here...</a>";
        }
    }else if(isset($_GET['delId'])){
        $mycon->deleteId($_GET['delId']);
        header("location: home.php");
    }else if(isset($_POST['log_user'])){
        $rs=$mycon->varify_user($_POST['log_user'],$_POST['log_pass']);
        session_start();
        if($rs['n']==1){
            $_SESSION['user']=$rs['USER_NAME'];
            $_SESSION['type']=$rs['TYPE'];
            header("location: member.php");
        }else{
            echo "รหัสผ่านไม่ถูกต้อง";
            echo "  <a href='login.php'>Link back here...</a>";
        }
    }
