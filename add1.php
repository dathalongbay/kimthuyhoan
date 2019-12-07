<H1>
	Thêm Dữ Liệu
</H1>
<form action="add.php" method="post"><br>
	Họ Tên : <input type="text" name="HOTEN" placeholder="nhập họ tên"><br>
	Giới Tính : <input type="radio" name="GIOITINH" value="nữ" > Nữ
            <input type="radio" name="GIOITINH" value="nam" checked> Nam <br>
	Ngày Sinh : <input type="text" name="NGAYSINH"><br>
	  <p>
            <label>Tháng</label>

            <select name="thang">
                <option value="1">Tháng 1</option>
                <option value="2">Tháng 2</option>
                <option value="3">Tháng 3</option>
                <option value="4">Tháng 4</option>
                <option value="5">Tháng 5</option>
                <option value="6">Tháng 6</option>
                <option value="7">Tháng 7</option>
                <option value="8">Tháng 8</option>
                <option value="9">Tháng 9</option>
                <option value="10">Tháng 10</option>
                <option value="11">Tháng 11</option>
                <option value="12">Tháng 12</option>
            </select>
        </p>

    <p>
        Python
        <input name="diem[python]" value="">
    </p>

    <p>
        Java
        <input name="diem[java]" value="">
    </p>

    <p>
        PHP
        <input name="diem[php]" value="">
    </p>

    <p>
        C
        <input name="diem[c]" value="">
    </p>

    <p>
        SQL
        <input name="diem[sql]" value="">
    </p>

    <p>
        HTML
        <input name="diem[html]" value="">
    </p>

    <p>
        CSS
        <input name="diem[css]" value="">
    </p>
	<input type="submit" value="Thêm Dữ Liệu">
	 
            

          
</form>