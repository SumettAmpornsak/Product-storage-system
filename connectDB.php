<?php
    $serverName = "localhost";
    $databaseName = "productsystem";
    $username = "root";
    $password = "";


    try{
        $conn = new PDO ("mysql:host=$serverName;dbname=$databaseName",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "เชื่อมต่อฐานข้อมูลสำเร็จแล้วครับ";

        }catch(PDOException $e){
        echo "พบข้อผิดพลาด".$e->getMessage();
    }

?>
