<?php
include '../db_conn.php';
$id = $_GET['c'];
$sql="select * from board where id = '$id'";
$result = mysqli_query($conn, $sql);
$board = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<title>수정하기</title>
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
			<h2>수정하기</h2>
			<form method="post" action="change_ok.php?idx=<?php echo $id;?>">
				<div class="mb-3">
					<label for="title" style="margin-top:20px;">제목</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="제목을 입력해 주세요" value="<?php echo $board[3]?>">
				</div>

				<div class="mb-3">
					<label for="content">내용</label>
					<textarea class="form-control" rows="5" name="content" id="content" placeholder="내용을 입력해 주세요"><?php echo $board[4]?></textarea>
				</div>
				<input type="submit" class="btn btn-sm btn-primary" value="저장">     
            </form>
		</div>
	</article>
</body>
</html>