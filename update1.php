<?php 
	$ID = $_GET['ID'];
	$conn = mysqli_connect("localhost","root","") or die ("Lỗi kết nối đến server");
	//Lựa chọn csdl
	$name = mysqli_select_db($conn,"quan_ly_sinh_vien") or die ("Không tồn tại csdl");
	$qr = mysqli_query($conn,"select * from sinhviendh7c1 where ID ='$ID'") or die('lỗi truy vấn');
	$rs = mysqli_fetch_assoc($qr);

	$diem = json_decode($rs["Diem"]);

	echo "<pre>";
	print_r($rs);
	echo "</pre>";


echo "<pre>";
print_r($diem);
echo "</pre>";


 ?>
 <H1>
	Thêm Người dùng
</H1>
<form action="update1.php" method="post">
	id : <input type="text" name="ID" value="<?php echo $rs['ID'];?>"><br>
	Họ Tên : <input type="number" name="HoTen2" value="<?php echo $rs['HoTen'];?>"><br>
	Giới Tính : <input type="text" name="GioiTinh2" value="<?php echo $rs['GioiTinh'];?>"><br>
	Ngày sinh : <input type="text" name="NgaySinh2" value="<?php echo $rs['NgaySinh'];?>"><br>


    <p>
        Python
        <input name="diem[python]" value="<?php echo $diem->python ?>">
    </p>

    <p>
        Java
        <input name="diem[java]" value="<?php echo $diem->java ?>">
    </p>

    <p>
        PHP
        <input name="diem[php]" value="<?php echo $diem->php ?>">
    </p>

    <p>
        C
        <input name="diem[c]" value="<?php echo $diem->c ?>">
    </p>

    <p>
        SQL
        <input name="diem[sql]" value="<?php echo $diem->sql ?>">
    </p>

    <p>
        HTML
        <input name="diem[html]" value="<?php echo $diem->html ?>">
    </p>

    <p>
        CSS
        <input name="diem[css]" value="<?php echo $diem->css ?>">
    </p>

	<input type="submit" value="Update người dùng">
</form>