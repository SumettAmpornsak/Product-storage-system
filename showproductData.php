<?php
    require_once 'connectDB.php';
    $sql ="SELECT * FROM product";
    $stmt=$conn->prepare($sql); //เตรียมข้อมูล
    $stmt->execute(); //สิ่งที่ผูกเข้าด้วยกัน
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sumett Ampornsak">
    <meta name="description" content="เอกสารแสดงข้อมูลสินค้า">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Mitr', sans-serif;
        }
    </style>
    <title>Show Product Data</title>
</head>
<body>
    <div class="container mt-4">
    <h1>Show Product Data</h1>
        <table class="table mt-4"> 
            <thead>
            <tr>
                <th>Product Number</th>
                <th>Product ID</th>
                <th>Product Type</th>
                <th>Product Name</th>
                <th>Product Description</th> 
                <th>Product Price</th>
                <th>Product Amount</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $product): ?>
            <tr>
                <td><?php echo $product['id'];  ?></td>
                <td><?php echo $product['productid'];  ?></td>
                <td><?php echo $product['producttype'];  ?></td>
                <td><?php echo $product['productname'];  ?></td>
                <td><?php echo $product['productdescription'];  ?></td>
                <td><?php echo $product['productprice'];  ?></td>
                <td><?php echo $product['productamount'];  ?></td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <div>
            <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>
        </div>
    </div>
</body>
</html>