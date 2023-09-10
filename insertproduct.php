<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

    <style>
        .new_container{
            width: 700px;
            margin: 0 auto;
            padding: 25px;
            border: 2px solid #ccc;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0 0 90px rgba(0, 0, 0, 0.3);
        }
        body{
            font-family: 'Mitr', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            height: 100vh;
        }
        h3 {
            margin-top: 20px;
            color: blue;
            text-align: center;
        }
    </style>

</head>
<body>

    <div class="new_container">
        <form action="insertproductscript.php" method="post">
        <h3 class="mt-4">กรอกข้อมูลสินค้า</h3>
        <hr>
            <div class="mb-3">
                <label for="productid" class="form-label">Product ID</label>
                <input type="number" class="form-control" name="productid">
            </div>
            <div class="mb-3">
                <label for="producttype" class="form-label">Product Type</label>
                <input type="text" class="form-control" name="producttype">
            </div>
            <div class="mb-3">
                <label for="productname" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="productname">
            </div>
            <div class="mb-3">
                <label for="productdescription" class="form-label">Product Description</label>
                <input type="text" class="form-control" name="productdescription">
            </div>
            <div class="mb-3">
                <label for="productprice" class="form-label">Product Price</label>
                <input type="number" class="form-control" name="productprice">
            </div>
            <div class="mb-3">
                <label for="productamount" class="form-label">Product Amount</label>
                <input type="number" class="form-control" name="productamount">
            </div>

            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
        <hr>
        <p class="text-end"><a href="index.php">กลับหน้าหลัก</a></p>
    </div>


</body>
</html>
