<?php
session_start();
include '../db_conn.php';

$_userid = $_POST['userid'];
$_passwd = $_POST['passwd'];

$query = "select * from joint where userid = '$_userid' and passwd = '$_passwd'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_row($result);
echo 'userid='.$row[1].'<br>';

if($_userid==$row[1] && $_passwd==$row[2]){ 
    $_SESSION['userid'] = $row[1];
    $_SESSION['passwd'] = $row[2];
    echo $_SESSION['userid'];
    echo $_SESSION['passwd'];
    echo "<script>location.href='welcome.php';</script>";
}else{ 
    echo "<script>alert('잘못된 아이디 또는 비밀번호 입니다'); location.href='login.html';</script>";
}
?>