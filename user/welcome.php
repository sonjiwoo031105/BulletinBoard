<?php
session_start();

if(!isset($_SESSION['userid']) || !isset($_SESSION['passwd'])){
    echo '로그인 해주세요.';?>
    <button type="button" onclick="location.href='login.html'">확인</button>
    <?php
}else{
    $userid = $_SESSION['userid'];
    $passwd = $_SESSION['passwd'];
    echo $userid.'님 반갑습니다. <script>location.href="list.php"</script>';
    
}
?>
