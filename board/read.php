<?php
include '../db_conn.php';
$id = $_GET['a'];
$sql="select * from board where id = '$id'";
$result = mysqli_query($conn, $sql);
$board = mysqli_fetch_row($result);
if( empty($id) ) {
	alert('잘못된 접근입니다.');
	exit();
}

$query = "update board set hit = hit+1 where id = '$id'";
$re = mysqli_query($conn, $query);
$_SESSION['userid'.$id] = time();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<title>게시글</title>
<style>
body {
  padding-top: 70px;
  padding-bottom: 30px;
}
</style>
</head>
<body>
	<article>
		<div class="container" role="main">
			<h2>게시글</h2>
				<div class="mb-3">
					<label for="title" style="margin-top:20px;">제목</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="제목을 입력해 주세요" value="<?php echo $board[3]; ?>" readonly >
				</div>

				<div class="mb-3">
					<label for="content">내용</label>
					<textarea class="form-control" rows="5" name="content" id="content" placeholder="내용을 입력해 주세요" readonly ><?php echo $board[4];?></textarea>
				</div>
		</div>
	</article>
</body>
</html>