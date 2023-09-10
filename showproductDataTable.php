<?php
require_once 'connectDB.php';

$sql = "SELECT * FROM product";
$stmt = $conn->prepare($sql); //เตรียมข้อมูล
$stmt->execute(); //สิ่งที่ผูกเข้าด้วยกัน
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

//header('Content-Type: application/Json');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sumett Ampornsak">
    <meta name="description" content="เอกสารแสดงข้อมูลนักศึกษา">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Mitr', sans-serif;
        }
        .table-actions {
            display: flex;
        }
    </style>
    <title>Show Product DataTable</title>
</head>

<body>
    <div class="container mt-4">
        <h1>Show Product DataTable</h1>
        <table id="stdTable" class="table">
            <thead>
                <tr>
                    <th>Product Number</th>
                    <th>Product ID</th>
                    <th>Product Type</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $product) : ?>
                    <tr class="table-row">
                        <td><?php echo $product['id'];  ?></td>
                        <td><?php echo $product['productid'];  ?></td>
                        <td><?php echo $product['producttype'];  ?></td>
                        <td><?php echo $product['productname'];  ?></td>
                        <td><?php echo $product['productdescription'];  ?></td>
                        <td><?php echo $product['productprice'];  ?></td>
                        <td><?php echo $product['productamount'];  ?></td>
                        <td class="table-actions">
                            <form method="post" action="#php" style="display:inline">
                                <input type="submit" name="edit" value="แก้ไข" class="btn btn-warning btn-sm edit-button">
                            </form>

                            <form method="post" action="deleteproduct.php" style="display:inline">
                                <input type="hidden" name="order" value="<?php echo $product['id']; ?>">
                                <input type="submit" name="delete" value="ลบ" class="btn btn-danger btn-sm delete-button">
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div>
            <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="http://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        //ใช้งาน DataTable เมื่อเว็บโหลดเสร็จ
        $(document).ready(function() {
            let table = new DataTable('#stdTable');
        });
    </script>
</body>
</html>
