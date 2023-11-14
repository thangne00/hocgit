<style>
  .row2 {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

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

  .form_content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
  }

  .form_content label {
    font-weight: bold;
  }

  .form_content input[type="text"] {
    padding: 5px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  .form_content input[type="submit"],
  .form_content input[type="reset"],
  .form_content input[type="button"] {
    background-color: #555;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .form_content input[type="submit"]:hover,
  .form_content input[type="reset"]:hover,
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
</style>

  <?php
 if(is_array($tl)){
      extract($tl);
  }
  ?>
  <div class="row2">
          <div class="row2 font_title">
            <h1>CẬP NHẬT THỂ LOẠI PHIM</h1>
          </div>
          <div class="row2 form_content ">
            <form action="index.php?act=updatetl" method="POST">
            <div class="row2 mb10 form_content_container">
            <label> Tên Thể Loại </label><br>
              <input type="text" name="tentheloai" value="<?php if(isset($name)&&($name!=""))echo $name; ?>">
            </div>
            <div class="row mb10 ">
              <input type="hidden" name="id_theloai" value="<?php if(isset($id_theloai)&&($id_theloai>0))echo $id_theloai; ?>">
          <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT LOẠI HÀNG">
          <input  class="mr20" type="reset" value="NHẬP LẠI">

          <a href="index.php?act=listtl"><input  class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao; 
            ?>
            </form>
          </div>
          </div>
  
      <!-- END HEADER -->

       
    </div>