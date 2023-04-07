<?php
    if(isset($_POST['submit'])){
        include('mysqldemo.php');
            $name = $_POST['name'];
            $amount = $_POST['amount'];
            $query = $db -> prepare("INSERT INTO expense (name,amount)
            VALUES (:name,:amount);");
            $query->bindParam(':name', $name);
            $query->bindParam(':amount', $amount);
            $query->execute();
            header('Location: '.'index.php');
        }   
        ?>