<?php
function insert_theloai($theloaiphim){
    $sql="insert into  theloai(name) values('$theloaiphim')";
    pdo_execute($sql);
}
function delete_theloai($id_theloai){
    $sql="delete from theloai where id_theloai=".$id_theloai;
    pdo_execute($sql);
}
function loadall_theloai(){
    $sql="select * from theloai order by name";
    $listtheloai=pdo_query($sql);
    return $listtheloai;
}
function loadone_theloai($id_theloai){
    $sql="select * from theloai where id_theloai=".$id_theloai; 
    $tl=pdo_query_one($sql);
    return $tl;
}
function update_theloai($id_theloai,$theloaiphim){
    $sql="update theloai set name='".$theloaiphim."' where id_theloai=".$id_theloai;
    pdo_execute($sql);
}
?>