<!DOCTYPE html>
<html>
<head>
  <style>
/* Thiết lập giao diện chung */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

/* Thiết lập giao diện cho phần thanh menu ngang */
.navbar {
  background-color: #ffd9d9;
  color: #000;
  padding: 10px;
  font-family: Arial, sans-serif;
}

.navbar a {
  color: #000;
  text-decoration: none;
  margin-right: 20px;
}

.navbar a:hover {
  color: #999;
}

/* Thiết lập giao diện cho phần tiêu đề */
.font_title {
  background-color: #ffd9d9;
  color: #000;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
  text-align: center;
  font-family: Arial, sans-serif;
}

.font_title h1 {
  margin: 0;
  font-size: 24px;
}

/* Thiết lập giao diện cho phần nhập liệu */
.form_content {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
}

.form_content_container {
  margin-bottom: 20px;
}

.form_content label {
  font-weight: bold;
  font-family: Arial, sans-serif;
}

.form_content input[type="text"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

.form_content input[type="submit"],
.form_content input[type="reset"],
.form_content input[type="button"] {
  background-color: #555;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-right: 10px;
  font-family: Arial, sans-serif;
}

.form_content input[type="submit"]:hover,
.form_content input[type="reset"]:hover,
.form_content input[type="button"]:hover {
  background-color: #333;
}

/* Thiết lập giao diện cho phần thông báo */
.thongbao {
  color: red;
  font-weight: bold;
  margin-top: 10px;
  text-align: center;
  font-family: Arial, sans-serif;
}
  </style>
</head>
<body>
  <div class="row2">
    <div class="font_title">
      <h1>THÊM THỂ LOẠI</h1>
    </div>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=addtl" method="POST">
      <div class="form_content_container">
        <label>Thể loại phim</label> <br>
        <input type="text" name="theloaiphim" placeholder="Nhập vào tên">
      </div>
      <div class="form_content_container">
        <input type="submit" name="themmoi" value="THÊM MỚI">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listtl"><input type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if(isset($thongbao) && ($thongbao != ""))
        echo '<div class="thongbao">' . $thongbao . '</div>';
      ?>
    </form>
  </div>
</body>
</html>