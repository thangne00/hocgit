<?php
include "../models/pdo.php";
include "../models/theloai.php";
include "header.php";
//controller
if (isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'addtl':
            //kiểm tra ng dùng có click vào nút add hay k
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $theloaiphim=$_POST['theloaiphim'];
                insert_theloai($theloaiphim);
                $thongbao="Thêm thành công";
            }
            include "theloai/add.php";
            break;
        case 'listtl':
            $listtheloai=loadall_theloai();
            include "theloai/list.php";
            break;
        case 'xoatl': 
            if(isset($_GET['id_theloai'])&&($_GET['id_theloai']>0)){
                delete_theloai($_GET['id_theloai']);
            }
            $listtheloai=loadall_theloai();
            include "theloai/list.php";
            break;
        case 'suatl':
                if(isset($_GET['id_theloai'])&&($_GET['id_theloai']>0)){
                    $tl=loadone_theloai($_GET['id_theloai']);
                }
                include "theloai/update.php";
                break; 
        case 'updatetl' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $theloaiphim=$_POST['tentheloai'];
                    $id_theloai=$_POST['id_theloai'];
                    update_theloai($id_theloai,$theloaiphim);
                    $thongbao="Cập nhật thành công";
                }
                $listtheloai=loadall_theloai();
                include "theloai/list.php";
                break;
        // case 'xoabl': 
        //         if(isset($_GET['id'])&&($_GET['id']>0)){
        //             delete_binhluan($_GET['id']);
        //         }
        //         $listbl=loadall_binhluan(0);
        //         include "binhluan/list.php";
        //         break;
        // case 'xoatk': 
        //             if(isset($_GET['id'])&&($_GET['id']>0)){
        //                 delete_taikhoan($_GET['id']);
        //             }
        //             $listtaikhoan=loadall_taikhoan();
        //             include "taikhoan   /list.php";
        //             break;


        // case 'dskh':
        //                 $listtaikhoan=loadall_taikhoan();
        //                 include "taikhoan/list.php";
        //                 break;
        //                 case 'dsbl':
        //                     $listbl=loadall_binhluan(0);
        //                     include "binhluan/list.php";
        //                     break;
        // case 'suadm':
        //     if(isset($_GET['id'])&&($_GET['id']>0)){
        //         $dm=loadone_theloai($_GET['id']);
        //     }
        //     include "theloai/update.php";
        //     break;
      

            /* controller sản phẩm*/

        // case 'addsp':
        //         //kiểm tra ng dùng có click vào nút add hay k
        //         if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
        //             $iddm=$_POST['iddm'];
        //             $tensp=$_POST['tensp'];
        //             $giasp=$_POST['giasp'];
        //             $mota=$_POST['mota'];
        //             $hinh=$_FILES['hinh']['name'];
        //             $target_dir="../upload/";
        //             $target_file=$target_dir .basename($_FILES["hinh"]["name"]);
        //             if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        //             //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        //               } else {
        //             //echo "Sorry, there was an error uploading your file.";
        //               }
        //             insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
        //             $thongbao="Thêm thành công";
        //         }
        //         $listtheloai=loadall_theloai();
        //         include "sanpham/add.php";
        //         break;
        // case 'listsp':
        //         if(isset($_POST['listok'])&&($_POST['listok'])){
        //         $kyw=$_POST['kyw'];
        //         $iddm=$_POST['iddm'];
        //         }else{
        //             $kyw='';
        //             $iddm=0;
        //         }
        //         $listtheloai=loadall_theloai();
        //         $listsanpham=loadall_sanpham($kyw,$iddm);
        //         include "sanpham/list.php";
        //         break;
        // case 'xoasp': 
        //         if(isset($_GET['id'])&&($_GET['id']>0)){
        //             delete_sanpham($_GET['id']);
        //         }
        //         $listsanpham=loadall_sanpham("",0);
        //         include "sanpham/list.php";
        //         break;
        // case 'suasp':
        //         if(isset($_GET['id'])&&($_GET['id']>0)){
        //             $sanpham=loadone_sanpham($_GET['id']);
        //         }
        //         $listsanpham=loadall_sanpham();
        //         $listtheloai=loadall_theloai();
        //         include "sanpham/update.php";
        //         break;
        // case 'updatesp':
        //         if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
        //             $id=$_POST['id'];
        //             $iddm=$_POST['iddm'];
        //             $tensp=$_POST['tensp'];
        //             $giasp=$_POST['giasp'];
        //             $mota=$_POST['mota'];
        //             $hinh=$_FILES['hinh']['name'];
        //             $target_dir="../upload/";
        //             $target_file=$target_dir .basename($_FILES["hinh"]["name"]);
        //             if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        //             //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        //               } else {
        //             //echo "Sorry, there was an error uploading your file.";
        //               }
        //             update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
        //             $thongbao="Cập nhật thành công";
        //         }
        //         $listtheloai=loadall_theloai();
        //         $listsanpham=loadall_sanpham();
        //         include "sanpham/list.php";
        //         break;
            
            
                default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}

include "footer.php"
?>