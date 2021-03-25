<?php
include '../db_conn.php';
$id = $_GET['idx']; 

$_title = $_POST['title'];
$_content = $_POST['content'];

$sql = "update joint set title='$_title', content='$_content' where id = '$id'";
mysqli_query($conn, $sql);
echo '<script> alert("수정 완료되었습니다."); location.replace("list.php"); </script>';

?>