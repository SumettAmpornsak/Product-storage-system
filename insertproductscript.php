<?php
//ติดต่อ db 
require_once 'connectDB.php';

//ดึงข้อมูลจากฟอร์ม เก็บไว้ในตัวแปร สำหรับเตรียมส่งไปยัง db
$productidValue = $_POST['productid'];
$producttypeValue = $_POST['producttype'];
$productnameValue = $_POST['productname'];
$productdescriptionValue = $_POST['productdescription'];
$productpriceValue = $_POST['productprice'];
$productamountValue = $_POST['productamount'];

$sql = "INSERT INTO product(productid, producttype, productname, productdescription,productprice,productamount) VALUES (?,?,?,?,?,?)";

$stmt = $conn->prepare($sql); //เตรียมข้อมูล

$stmt->bindParam(1, $productidValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(2, $producttypeValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(3, $productnameValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(4, $productdescriptionValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(5, $productpriceValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(6, $productamountValue); //จับคู่ตัวแปรกับ hd

$result=$stmt->execute(); //สิ่งที่ผูกเข้าด้วยกัน 

//echo "เพิ่มข้อมูลเรียบร้อยแล้วนะครับ"

    

//Sweetalert

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if($result){
echo '<script>
    setTimeout(function () {

        Swal.fire({
            position: "center",
            icon: "success",
            title: "บันทึกข้อมูลสำเร็จ",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location = "insertproduct.php";
        });
    }
    , 1000);  
</script>';
}else{
    echo '<script>
    setTimeout(function () {

        Swal.fire({
            position: "center",
            icon: "error",
            title: "เกิดข้อผิดพลาด",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location = "insertproduct.php";
        });
    }
    , 1000);  
</script>';

}
?>