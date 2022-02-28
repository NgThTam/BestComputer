<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
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

     // Xoa hang hoa
    
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
        width: 90%;
    }
    .khung td{
        font-size:15px;
    }
    .table th, .table td {
        vertical-align: baseline;
    }
    .table{
        box-shadow: 0px 1px 10px grey;
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
</style>
<body>
<?php include_once('header.php'); ?>
<p class="deall">Delete All: <a href="logout.php"><i class="fas fa-trash-alt" style="font-size:20px;padding-left: 1rem;"></i></a></p>
<div class="tabcontent">
            <div class="khung">
                <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ẢNH SẢN PHẨM</th>
                            <th scope="col">TÊN SẢN PHẨM</th>
                            <th scope="col">DIỄN GIẢI</th>
                            <th scope="col">ĐƠN GIÁ </th>
                            <th scope="col">SỐ LƯỢNG </th>
                            <th scope="col">TỔNG</th>
                            <th scope="col">XÓA</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <?php 
                                $sql = "SELECT * FROM hanghoa;";
                                $result=mysqli_query($conn,$sql);
                                $thanhtien = 0;
                                $i=1;
                                while ($row=mysqli_fetch_assoc($result)) {
                                    if(isset($_SESSION['giohang'][$row['MSHH']])) {
                                        $gia = (int)$row['Gia'];
                                        $soluong = $_SESSION['giohang'][$row['MSHH']];
                                        $tong = $gia * $soluong;
                                        $_SESSION['gia'][$row['MSHH']] = $tong;
                                        $_SESSION['MSHH'] = $row['MSHH'];
                                        $str = "'";
                                        $mshh = $row['MSHH'];
                                        echo '<tr id='.$mshh.'>
                                                <th>'.$i++.'</th>
                                                <td><img src="./assets/images/'.$row['Anhmh'].'" alt="" style="width: 80px;height:80px;object-fit: cover;border:1px solid;"></td>
                                                <td>'.$row['TenHH'].'</td>
                                                <td>'.$row['Ghichu'].'</td>
                                                <td>'.$row['Gia'].'</td>
                                                <td>'.$soluong.'</td>       
                                                <td>'.$tong.'</td>
                                                <td onclick="xoa('.$str.$mshh.$str.')"><a href="" ><i class="fas fa-times asd"></i></a></td>
                                            </tr>';


                                        $thanhtien += $tong;
                                        
                                    }
                                }
                                echo '<tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="font-weight: 700;">THÀNH TIỀN</td>
                                <td><span id="thanhtien" style="color:green;font-weight:500;">$'
                                    .$thanhtien.'
                                    </span></td>
                                ';
                                if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)
                                    echo '<td><button onclick="kiemtra()" class="butt"><a style="color:black;" >THANH TOÁN</a></button></td>
                                </tr>';
                                else
                                    echo '   
                                    <td><button onclick="yeucau()" class="butt"><a style="color:black;" >THANH TOÁN</a></button></td>
                                    </tr>';
                                 
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>

<!-- Lien ket jquery -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
<!-- Lien ket popper -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script> -->
<!-- Lien ket bootstrap -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<!-- Lien ket vue js -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script> -->
<!-- Lien ket aos -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous"></script> -->
<!-- Lien ket my js -->
<!-- <script src="assets/js/blog.js"></script> -->
<!-- <script src="assets/js/scroll-top.js"></script> -->
<!-- Lien ket aos -->
 <script>
    // AOS.init();
    function xoa(id) {
        var xhttp = new XMLHttpRequest();
        document.getElementById(id).display = 'none';
        console.log(id);
		xhttp.open("GET", "addcart.php?xoa=" + id, true);
		xhttp.send();
    }

    function yeucau() {
        alert("Vui lòng đăng nhập");
        window.location.replace("login.php");
    }

    function kiemtra() {
        var thanhtien = document.getElementById("thanhtien").innerHTML;
        thanhtien = thanhtien.substring(0, 2);
        if (thanhtien == "$0") {
            alert("Don hang khong duoc rong!");
        }
        else {
            window.location.replace("thanhtoan.php");
        }
    }
 </script>
</body>
</html>