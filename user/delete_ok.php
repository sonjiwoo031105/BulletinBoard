<?php
include '.../board/db_conn.php';
$_id = $_GET['idx'];
$_passwd = $_POST['passwd'];

$query = "select * from joint where id = '$_id' and passwd = '$_passwd'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_row($result);

$sql="delete from joint where id = '$_id'";

if($_id==$row[0] && $_passwd==$row[2]){
    if(!mysqli_query($conn,$sql)){
        die('Error: '.mysql_error());
    }else{
        echo '<script> alert("삭제되었습니다."); location.replace("list.php"); </script>';
    }
}else{ 
    echo "<script>alert('잘못된 비밀번호입니다');</script>";
    echo "<script>location.href='list.php';</script>";
}
?>