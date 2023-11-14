<!DOCTYPE html>
<html>
<head>
  <title>Danh sách thể loại phim</title>
  <style>
    /* CSS code goes here */
    /* Thiết lập giao diện chung */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
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

    .form_content table {
      width: 100%;
      border-collapse: collapse;
    }

    .form_content th,
    .form_content td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    .form_content th {
      font-weight: bold;
    }

    .form_content td:last-child {
      text-align: center;
    }

    .form_content input[type="checkbox"] {
      margin-right: 5px;
    }

    .form_content input[type="button"] {
      background-color: #555;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form_content input[type="button"]:hover {
      background-color: #333;
    }

    .form_content a {
      text-decoration: none;
    }

    .form_content .mr20 {
      margin-right: 20px;
    }

    .form_content .mb10 {
      margin-bottom: 10px;
    }

    /* Sửa đổi giao diện khung danh sách thể loại phim */
    .formds_loai {
      overflow: auto;
      max-height: 300px;
    }

    .form_content table tr:hover {
      background-color: #f2f2f2;
    }

    .form_content input[type="button"] {
      transition: background-color 0.3s ease;
    }

    .form_content input[type="button"]:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <div class="font_title">
    <h1>DANH SÁCH THỂ LOẠI PHIM</h1>
  </div>
  <div class="form_content">
    <div class="formds_loai">
      <table>
        <tr>
          <th></th>
          <th>MÃ LOẠI</th>
          <th>THỂ LOẠI PHIM</th>
          <th></th>
        </tr>
        <?php
        foreach ($listtheloai as $theloai) {
          extract($theloai);
          $suatl = "index.php?act=suatl&id_theloai=" . $id_theloai;
          $xoatl = "index.php?act=xoatl&id_theloai=" . $id_theloai;
          echo ' <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>' . $id_theloai . '</td>
            <td>' . $name . '</td>
            <td><a href="' . $suatl . '"><input type="button" value="Sửa"></a>  <a href="' . $xoatl . '"><input type="button" value="Xóa"></a></td>
          </tr>';
        }
        ?>
      </table>
    </div>
    <div class="row mb10">
      <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="index.php?act=addtl"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>
