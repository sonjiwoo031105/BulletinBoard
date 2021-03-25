<?php
include '../db_conn.php';
$id = $_GET['a'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
	#i{
		display:flex;
  		align-items:center;
        margin-top : 280px;
	}
</style>
<body>
<div id ='i' class="row text-center" style="width: 100%">
	<div style="width: 25%; float:none; margin:0 auto" >
	<form class="form-inline" method="post" action="changeCheck.php?idx=<?php echo $id;?>">
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control mx-sm-3"  name="passwd" size=10 placeholder="비밀번호" required>
        <button type="submit" class="btn btn-outline-dark">확인</button>
    </div>
	</form>	
	</div>
 </div>
</div>
</body>
</html>