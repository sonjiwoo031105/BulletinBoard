<?php
include '.../board/db_conn.php';
$_userid = $_POST['userid'];
$_passwd = $_POST['passwd'];
$_passwdCheck = $_POST['passwdCheck'];
$_email = $_POST['email'];
$_tel = $_POST['tel'];
$_city = $_POST['city'];


if($_passwd == $_passwdCheck){
    echo "<script>alert('회원가입 완료되었습니다');location.href='login.html';</script>";
    $sql = "insert into joint(userid, passwd, email, tel, city) values('$_userid', '$_passwd', '$_email', '$_tel', '$_city')";
    mysqli_query($conn, $sql);
}else{
    echo '<script> alert("비밀번호가 일치하지 않습니다."); history.back(); </script>';
}

?>