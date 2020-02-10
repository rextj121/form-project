<?php
    if(isset($_POST['submit'])){
        
        echo $_POST['name'] ."<br>";
        echo $_POST['email'] ."<br>";
        echo $_POST['tel'] ."<br>";
        echo $_POST['password'] ."<br>";
    }else{
        header("Location: index.php");
    }
?>