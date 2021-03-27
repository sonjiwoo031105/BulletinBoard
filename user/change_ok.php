<?php
include '.../board/db_conn.php';
$id = $_GET['idx']; 
$_userid = $_POST['userid'];
$_passwd = $_POST['passwd'];
$_passwdCheck = $_POST['passwdCheck'];
$_email = $_POST['email'];
$_tel = $_POST['tel'];
$_city = $_POST['city'];


if($_passwd == $_passwdCheck){
    $sql = "update joint set userid='$_userid', passwd='$_passwd', email='$_email', tel='$_tel', city='$_city' where id = '$id'";
    mysqli_query($conn, $sql);
    echo '<script> alert("수정 완료되었습니다."); location.replace("list.php"); </script>';
}else{
    echo '<script> alert("비밀번호가 일치하지 않습니다."); history.back(); </script>';
}
?>