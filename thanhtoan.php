<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
      <!-- Lien ket css bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Lien ket font - awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Lien ket font size -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Lien ket aos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-blog.css">
    <link rel="stylesheet" href="assets/css/style-scroll-top.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.3/css/all.min.css">
</head>
<?php 
    include_once("connect.php");
    session_start();


    function randomId($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    if(isset($_POST['submit'])){
        
    }
?>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body{
        background-color: whitesmoke;
    }
    .tabcontent{
        display: flex;
        text-align: center;
        width: 100%;
        justify-content: center;
    }
    .tabcontent h3{
        color:white;
        background-color: rgb(50 49 47 / 75%);s;
        padding-bottom: 10px;
        margin-bottom: 0;
        padding-top: 10px;
    }
    .khung{
        margin: 1rem 1rem;
        width: 82%;
        /* border:1px solid; */
        background-color: white;
        box-shadow: 0px 3px 15px grey;
    }
    .khung td{
        font-size:15px;
    }
    .table th, .table td {
        vertical-align: baseline;
    }
    .table th {
        font-weight: 900;
        text-align: center;
    }
    .asd{
        font-size: 27px;
        color:red;
    }
    .deall{
        display: flex;
        width: 100%;
        justify-content: flex-end;
        padding-right: 5rem;
    }
    .butt{
        padding: 10px;
        background-color: lightgreen;
        border-radius: 14px;
    }
    .form-group{
        text-align: start;
        padding-left: 44px;
        
    }
    .form-group input{
        width: 68%;
        background: none;
        border: none;
        border-bottom: 1px solid;
    }
    .form-group label{
        padding-right: 14px;
    }
    .nut{
        display: flex;
        justify-content: flex-end;
        padding: 15px;
    }
    #submit{
        padding: 3px;
        background-color: lightgreen;
        border-radius: 11px;
    }
</style>
<body>
<?php 
    include_once('header.php');
?>
<div class="tabcontent">
    <div class="khung">
        <h2>Thông tin đơn hàng</h2>
        <?php
            $iduser = $_SESSION['MSKH'];   
            $msdh = randomId(5);
            if (isset($_SESSION['giohang'])) {
                $sql = "INSERT INTO dathang(SoDonDH, MSKH, NgayDH, NgayGH) VALUES('$msdh', '$iduser', SYSDATE(), DATE_ADD(SYSDATE(), INTERVAL 3 DAY))";
                mysqli_query($conn, $sql);
                foreach($_SESSION['giohang'] as $ten => $sl) {
                    $gia = $_SESSION['gia'][$ten];
                    $sql = "INSERT INTO chitietdathang(SoDonDH, MSHH, SoLuong, GiaDatHang, GiamGia)
                            VALUES('$msdh', '$ten', '$sl', '$gia', '0');";
                    mysqli_query($conn, $sql);
                }
                unset($_SESSION['gia']);
                unset($_SESSION['giohang']);
            }
        ?>
        <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Ngày giao hàng</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM dathang, chitietdathang, hanghoa 
                            WHERE dathang.SoDonDH = chitietdathang.SoDonDH 
                            && hanghoa.MSHH = chitietdathang.MSHH 
                            && MSKH LIKE '$iduser'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $i=1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $date1=date_create($row['NgayDH']);
                                    $date2=date_create($row['NgayGH']);
                                    echo "  <tr>
                                                <th scope='col'>".$i++."</th>
                                                <td><img style='width: 80px;height:80px;object-fit: cover;border:1px solid;' src='./assets/images/".$row['Anhmh']."'></td>
                                                <td>".$row['TenHH']."</td>
                                                <td>".$row['SoLuong']."</td>
                                                <td><span style='color: #0ed90e;font-weight: 700'>$ </span>".$row['GiaDatHang']."</td>
                                                <td>".date_format($date1,"d/m/Y")."</td> 
                                                <td>".date_format($date2,"d/m/Y")."</td>  
                                            </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>