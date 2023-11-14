<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM PHIM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addtl" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã Phim</label> <br>
            <input type="text" name="maloai" placeholder="nhập vào mã loại">
           </div>
           <div class="row2 mb10">
            <label>Thể loại phim </label> <br>
            <input type="text" name="theloaiphim" placeholder="nhập vào tên">
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
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