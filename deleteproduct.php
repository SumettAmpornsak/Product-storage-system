<?php
require_once 'connectDB.php';

if (isset($_POST['delete']) && isset($_POST['order'])) {
    $product_id = $_POST['order'];

    // เรียกดูข้อมูลของนักเรียนที่จะลบ
    $sql = "SELECT * FROM product WHERE id = :order";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':order', $product_id);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // แสดงข้อความยืนยันลบข้อมูล
    echo "Are you sure you want to delete the following Product?<br>";
    echo "ID: " . $product['id'] . "<br>";
    echo "Product ID: " . $product['productid'] . "<br>";
    echo "Product Type: " . $product['producttype'] . "<br>";
    echo "Product Name: " . $product['productname'] . "<br>";
    echo "Product Description: " . $product['productdescription'] . "<br>";
    echo "Product Price: " . $product['productprice'] . "<br>";
    echo "Product Amount: " . $product['productamount'] . "<br>";


    // สร้างปุ่มยืนยันลบข้อมูล
    echo "<form action='deleteproduct.php' method='POST'>";
    echo "<input type='hidden' name='order' value='" . $product_id . "'>";
    echo "<input type='submit' name='confirm_delete' value='Confirm Delete'>";
    echo "</form>";
}

if (isset($_POST['confirm_delete']) && isset($_POST['order'])) {

    // $del = 5;

    $del = $_POST['order'];

    $sql = "DELETE FROM product where id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $del);
    $stmt->execute();

    echo "Delete SuccessFully";
    header("Location: showproductDataTable.php");
}
