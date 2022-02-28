<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.3/css/all.min.css">
</head>
<?php
    include_once('connect.php');

    function randomId($n){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    $action = "";
    $Email = "";
    $MSHH ="";
    $MSNV ="";
    // Xoa khach hang
    if(isset($_GET['action'] )){
        $action =  $_GET['action'];
    }
    if(isset($_GET['Email'] )){
        $Email =  $_GET['Email'];
    }
    if(isset($action)){
        $sql = "DELETE FROM `Khachhang` WHERE Email='$Email'";
        $query = mysqli_query($conn,$sql);
    }
    // Xoa nhan vien
    if(isset($_GET['action'] )){
        $action =  $_GET['action'];
    }
    if(isset($_GET['MSNV'] )){
        $MSNV =  $_GET['MSNV'];
    }
    if(isset($action)){
        $sql = "DELETE FROM `Nhanvien` WHERE MSNV='$MSNV'";
        $query = mysqli_query($conn,$sql);
    }

    // Xoa hang hoa
    if(isset($_GET['action'] )){
        $action =  $_GET['action'];
    }
    if(isset($_GET['MSHH'] )){
        $MSHH =  $_GET['MSHH'];
    }
    if(isset($action)){
        $sql = "DELETE FROM `Hanghoa` WHERE MSHH='$MSHH'";
        $query = mysqli_query($conn,$sql);
    }


    if(isset($_POST['themsp'])){
        $tieude = $_POST['tensp'];
        $noidung = $_POST['mota'];
        $gia = $_POST['gia'];
        $sluong = $_POST['soluong'];

        //xu ly anh

        $target_dir = "./assets/images/";
        $target_file = $target_dir.basename($_FILES["anh"]["name"]);
        $file_name =
            basename($_FILES["anh"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $upload_ok = true;
        $is_exist = false;

        if ($_FILES['anh']['name'] == '') { 
            echo "<script>
                    alert('Ảnh không được để trống!');
                    window.location.href = 'admin.php';
                </script>";
            $upload_ok = false;
        }
       //kiemtra file ton tai chua
        if (file_exists($target_file)) {
            $is_exist = true;
        }
        //kiemtra kieu
        if ($imageFileType != "jpg" and $imageFileType != "png" and $imageFileType != "jpeg") {
            echo "<script>
                    alert('Định dạnh file không hợp lệ');
                    window.location.href = 'admin.php';
                </script>";
            $upload_ok = false;
        }
        if($is_exist == false){
            if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                $sql = "select * from Hanghoa ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);
                $mshh = randomId(5);

                $sql = "INSERT INTO
                `Hanghoa`(`MSHH`,`TenHH`,`Gia`,`SoLuongHang`,`Ghichu`,`Anhmh`)
                VALUES('$mshh','$tieude','$gia','$sluong','$noidung','$file_name')";
                
                if(mysqli_query($conn,$sql)){
                    echo "<script>
                    alert('Thêm thành công');
                    window.location.href = 'admin.php';
                    </script>";
                }
            }
        }else{
                $sql = "select * from Hanghoa ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($query);
                $mshh = randomId(5);

                $sql = "INSERT INTO
                `Hanghoa`(`MSHH`,`TenHH`,`Gia`,`SoLuongHang`,`Ghichu`,`Anhmh`)
                VALUES('$mshh','$tieude','$gia','$sluong','$noidung','$file_name')";
                
                if(mysqli_query($conn,$sql)){
                    echo "<script>
                    alert('Thêm thành công');
                    window.location.href = 'admin.php';
                    </script>";
                }
        }


    }
?>


<style>
    *{
        margin : 0;
        padding : 0;
        box-sizing: border-box;
    }
    .header{
        width: 100%;
        height:6rem;
        /* background-color: darkgray; */
        display:flex;
        justify-content: space-between;
        align-items:center;
        background:none;
    }
    .name{
        text-align: center;
        color:aqua;
        padding-left:5px;
    }
    .hello{
        text-align: center;
        padding-left:10px;
        /* margin-left:3rem; */
    }
    .chao{
        text-align: center;
        color:white;
        user-select:none;
        margin-left:2rem;
    }
    .dangxuat{
        font-weight:500;
        color: black;
        /* padding-right: 3rem; */
    }
    .dangxuat:hover{
        text-decoration: none;
        color:white;
        font-weight:500;
    }
    .navv:hover{
        background-color: gray;
    }
    .avatar{
        width: 100%;
        height:10rem;
        background: center;
        
    }
    .ava{
        width:5rem;
        border-radius:145px;
    }
    .tab {
        width: 10%;
        overflow: hidden;
        border: 2px solid #ccc;
        background-color: #f1f1f1;
        display:flex;
        flex-direction: column;
        
      }
      
      /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ccc;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
        background-color: rgba(241, 203, 99, 0.568);
    }
    
    /* Style the tab content */
    .tabcontent {
        width: 90%;
        display: none;
        padding: 6px 12px;
        border-top: none;
        /* height:34.4rem; */
        height:36rem;
    }
    .menu {
        display:flex;
        padding:2rem;
    }
    .tdmenu{
        text-align: center;
        border-bottom: 3px solid #ccc;
        padding:10px;
        user-select:none;
    }
    .themsanpham{
        display:flex;
        flex-direction: column;
    }
    .noidung{

        padding-bottom: 76px;
    }
    .form_themsp{
        padding:0 3rem 0 3rem;
    }
    .khung{
        padding:1rem;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }
    .anh{
        width: fit-content;
    }
    .but{
        width: 6rem;
        height:2.5rem;
        margin-top:10px;
        border: none;
        background-image: linear-gradient(160deg, #0077B6, #00B4D8);
        border-radius:10px;
    }
    .but:hover{
        box-shadow: rgb(255 0 0) 0px 2px 27px;
        cursor: pointer;
    }
    .butt{
        display:flex;
        justify-content: flex-end;
    }
    .themsanpham{
        padding-bottom: 10px;
    }
    #upload h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #upload{
        padding-top: 0;
    }
    #upload label{
        font-weight:650;
    }
    #user h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    .khung1{
        padding:1rem;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        height:33rem;
        overflow:auto;
    }
    #user{
        padding-top:0;
    }
    .khung2{
        padding:1rem;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        /* height:31.5rem; */
    }
    #update h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #update{
        padding-top:0;
    }
    /*table thong tin*/
    .table{
        box-shadow: rgb(0 0 0 / 15%) 0px 2px 20px;
    }
    .table th{
        font-weight:900;
        text-align: center;
    }
    .table tbody{
        text-align: center;
    }
    .table th, .table td{
        vertical-align:baseline;
    }
    body{
        background-image: url(./assets/images/admin1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navv{
        width:6rem;
        text-align: center;
        background-color:aqua;
        border-radius:15px;
        margin-right:3rem;
        height:35px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    #usertd h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #nhanvien h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #nhanvien{
        padding-top:0;
    }
    #khohang h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #khohang{
        padding-top:0;
    }
    #donhang h3{
        text-align: center;
        /* background-color:rgba(241, 203, 99, 0.568) ; */
        background-color: rgb(250 208 91 / 75%);
        padding-bottom: 5px;
        padding-top:5px;
        margin: 0;
        border: 1px solid #ccc;
        text-transform: uppercase;
    }
    #donhang{
        padding-top:0;
    }
</style>
<body>
    <div class="header">
        <div class="chao">
            <img class="ava" src="" alt="">
            <span class="hello">Chào:</span>
            <span class="name">Admin</span>
        </div>
        <div class="navv">
            <a href="index.php" class="dangxuat">Đăng xuất</a>
        </div>
    </div>
    <!-- <section class="avatar" style="background-image:url(./image/admin.jpg)"></section> -->
    <div class="menu">
        
        <div class="tab">
            <h4 class="tdmenu">Danh mục</h4>
            <button class="tablinks" onclick="openCity(event, 'user')">Khách hàng</button>
            <button class="tablinks" onclick="openCity(event, 'nhanvien')">Nhân viên</button>
            <button class="tablinks" onclick="openCity(event, 'donhang')">Đơn hàng</button>
            <button class="tablinks" onclick="openCity(event, 'khohang')">Kho hàng</button>
            <button class="tablinks" onclick="openCity(event, 'update')">Thêm SP</button>
        </div>

        <div id="user" class="tabcontent">
            <h3>Tài khoản khách hàng</h3>
            <div class="khung1">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">MSKH</th>
                        <th scope="col">Tên KH</th>
                        <th scope="col">Sđt</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM Khachhang";
                            $query = mysqli_query($conn,$sql);
                            $i = 1;
                            while($khachhang = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $i++; ?></th>
                                <td><?php echo $khachhang['MSKH']  ?></td>
                                <td><?php echo $khachhang['HoTenKH'] ?></td>
                                <td><?php echo $khachhang['SoDienThoai'] ?></td>
                                <td><?php echo $khachhang['Email'] ?></td>
                                <td><?php echo $khachhang['DiaChi'] ?></td>
                                <td><a href="/Baitaplon/admin.php?Email=<?php echo $khachhang['Email']?>&action=delete"><i class="fas fa-trash-alt" style="font-size:24px;"></i> </a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                  </table>
            </div>
        </div>

        <div id="nhanvien" class="tabcontent">
            <h3>Quản lý nhân viên</h3>
            <div class="khung1">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">MSNV</th>
                        <th scope="col">Tên NV</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Sa thải</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM Nhanvien";
                            $query = mysqli_query($conn,$sql);
                            $i = 1;
                            while($Nhanvien = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $i++; ?></th>
                                <td><?php echo $Nhanvien['MSNV']  ?></td>
                                <td><?php echo $Nhanvien['HoTenNV'] ?></td>
                                <td><?php echo $Nhanvien['ChucVu'] ?></td>
                                <td><?php echo $Nhanvien['DiaChi'] ?></td>
                                <td><?php echo $Nhanvien['SoDienThoai'] ?></td>
                                <td><a href="/Baitaplon/admin.php?MSNV=<?php echo $Nhanvien['MSNV']?>&action=delete"><i class="fas fa-trash-alt" style="font-size:24px;"></i> </a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="donhang" class="tabcontent">
            <h3>Quản lý đơn hàng</h3>
            <div class="khung1">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">MaSoDH</th>
                        <th scope="col">MaSoKH</th>
                        <th scope="col">MaSoHH</th>
                        <th scope="col">Tên KH</th>
                        <th scope="col">Địa chỉ KH</th>
                        <th scope="col">Số điện thoại KH</th>
                        <th scope="col">Ngày đặt hàng</th>
                      </tr>
                    </thead>
                    <?php 
                        echo "<tbody>";
                        $sql = "SELECT * FROM chitietdathang, dathang, khachhang 
                        WHERE chitietdathang.SoDonDH = dathang.SoDonDH 
                        && dathang.MSKH = khachhang.MSKH;";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "  <tr>
                                            <td>".$row['SoDonDH']."</td>
                                            <td>".$row['MSKH']."</td>
                                            <td>".$row['MSHH']."</td>
                                            <td>".$row['HoTenKH']."</td>
                                            <td>".$row['DiaChi']."</td>
                                            <td>".$row['SoDienThoai']."</td>
                                            <td>".$row['NgayDH']."</td>
                                        </tr>";
                            }
                        }
                        echo "</tbody>";
                    ?>
                </table>
            </div>
        </div>

        <div id="khohang" class="tabcontent">
            <h3>Thông tin hàng hóa</h3>
            <div class="khung1">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">MSHH</th>
                        <th scope="col">Tên hàng hóa</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM Hanghoa";
                            $query = mysqli_query($conn,$sql);
                            $i = 1;
                            while($hanghoa = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $i++; ?></th>
                                <td><img src="./assets/images/<?php echo $hanghoa['Anhmh'] ?>" alt="" style="width: 80px;height:80px;object-fit: cover;border:1px solid;"></td>
                                <td><?php echo $hanghoa['MSHH'] ?></td>
                                <td><?php echo $hanghoa['TenHH'] ?></td>
                                <td><?php echo $hanghoa['Gia'] ?></td>
                                <td><?php echo $hanghoa['SoLuongHang'] ?></td>
                                <td><a href="/Baitaplon/admin.php?MSHH=<?php echo $hanghoa['MSHH']?>&action=delete"><i class="fas fa-trash-alt" style="font-size:24px;"></i> </a></td>
                            </tr>
                        <?php }?>
                    </tbody>
                  </table>
            </div>
        </div>

        <div id="update" class="tabcontent">
            <h3>Thêm sản phẩm</h3>
            <div class="khung2">
            <form action="#" method="POST" onsubmit="" enctype="multipart/form-data">
                <div class="khung">
                    <div class="form_themsp">
                        <div class="themsanpham">
                            <label for="name">Tên sản phẩm <label>(<label style="color:red">*</label>)</label></label>
                            <input type="text" name="tensp" class="tieude" >
                        </div>
                        <div class="themsanpham">
                            <label for="name">Mô tả sản phẩm <label>(<label style="color:red">*</label>)</label></label>
                            <input type="text" name="mota" class="noidung" placeholder="vd:mô tả ">
                        <div class="themsanpham">
                            <label for="name">Giá sản phẩm <label>(<label style="color:red">*</label>)</label></label>
                            <input type="number" name="gia"  placeholder="...dola">
                        </div>
                        <div class="themsanpham">
                            <label for="name">Số lượng sản phẩm <label>(<label style="color:red">*</label>)</label></label>
                            <input type="number" name="soluong"  placeholder="số lượng">
                        </div>
                        <div class="themsanpham">
                            <label for="name">Ảnh mô tả  <label>(<label style="color:red">*</label>)</label></label>
                            <input type="file" name="anh" id="anh" class="anh" required>
                        </div>
                        <div class="butt">
                            <button type="submit" name="themsp" class="but">Upload</button>
                        </div>
                        
                    </div>
                </div>
            </form>
            </div>
        </div>

</div>
</body>
<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Box icons -->
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</html>