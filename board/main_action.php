<?php
include './db_conn.php';
session_start();

if(!isset($_SESSION['userid']) || !isset($_SESSION['passwd'])){
    echo '로그인 해주세요.';?>
    <button type="button" onclick="location.href='../user/login.html'">확인</button>
    <?php
}else{
    $_userid = $_SESSION['userid'];
    $_passwd = $_SESSION['passwd'];
    echo $_userid.'님 반갑습니다.';
}

$_title = $_POST['title'];
$_content = $_POST['content'];
            
 
$sql = "insert into board(userid, passwd, title, content, w_date, hit) values('$_userid', '$_passwd', '$_title', '$_content', now(), 0)";
$result = mysqli_query($conn, $sql);


echo '<script> alert("글이 등록되었습니다."); location.replace("list.php"); </script>';

?>
