<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
include '../db_conn.php';
$_id = $_GET['idx'];
$_passwd = $_POST['passwd'];

$query = "select * from joint where id = '$_id' and passwd = '$_passwd'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_row($result);

if($_id==$row[0] && $_passwd==$row[2]){
?>
<style>
	#i{
		display:flex;
  		align-items:center;
        margin-top : 280px;
        float : left;
	}
</style>
<div id ='i' class="row text-center" style="width: 100%">
    <div style="width: 25%; float:none; margin:0 auto" >
    <form method="post" action="change.php?c=<?php echo $_id;?>">
    <h4>수정 페이지로 이동합니다.</h4>
    <button type="submit" class="btn btn-outline-dark">확인</button>
</form> 
	</div>
 </div>
<?php
}else{ 
    echo "<script>alert('잘못된 비밀번호입니다');</script>";
    echo "<script>location.href='list.php';</script>";
}
?>