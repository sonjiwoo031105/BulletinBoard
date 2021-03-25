<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<div id ='i' class="row text-center" style="width: 100%">
	<div style="width: 25%; float:none; margin:0 auto" >
	<form class="form-inline" method="post" action="delete_ok.php?idx=<?php echo $id;?>">
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control mx-sm-3"  name="passwd" size=10 placeholder="비밀번호" required>
        <button type="submit"  class="btn btn-outline-dark">확인</button>
    </div>
	</form>	
	</div>
 </div>
</div>
</body>
</html>


