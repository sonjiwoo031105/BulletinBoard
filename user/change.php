<?php
include '.../board/db_conn.php';
$id = $_GET['c'];
$sql="select * from joint where id = '$id'";
$result = mysqli_query($conn, $sql);
$joint = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="utf-8">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>회원가입</title>
<style>
    .c{margin-right:10px;}
    #i{
        width:1000px;
        margin: 0 auto;
    }
</style>
<script type = "text/javascript">
    function checkid(){
	var userid = document.getElementById("uid").value;
	if(userid)
	{
		url = "idCheck.php?userid="+userid;
			window.open(url,"chkid","width=300,height=100");
		}else{
			alert("아이디를 입력하세요");
		}
	}
</script>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6" id="i">
                <form method="post" action="join.php">

                    <h2 style="margin-top:30px;color:rgb(8, 56, 75)">정보 수정</h2> <br>
                    <div class="form-group">
                        <label for="uid">ID</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="uid" name = "userid" placeholder="아이디" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-outline-dark" name = "idCheck" onclick="checkid();">중복확인</button>
                            </div>
                        </div>
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="passwd" placeholder="비밀번호" required> <br>
                        <label for="passCheck">Password Check</label>
                        <input type="password" class="form-control" id="passCheck" name="passwdCheck" placeholder="비밀번호확인" required> <br>                 
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail" name="email" placeholder="이메일" required> <br>
                        <label for="tel">Phone number</label>
                        <input type="tel" class="form-control" id="tel" name="tel" placeholder="전화번호" required> <br>
                        <label for="city">City</label>
                        <select class="form-control" name="city" required>
                            <option value='' selected>-- 선택 --</option>
                            <option value='서울/경기'>서울/경기</option>
                            <option value='강원도'>강원도</option>
                            <option value='충청도'>충청도</option>
                            <option value='경상도'>경상도</option>                         
                            <option value='전라도'>전라도</option>
                            <option value='제주도'>제주도</option>
                        </select> <br>
                    </div>
                    <center><button type="submit" class="btn btn-outline-primary">Change</button></center>
                  </form>
            </div>
        </div>
    </div>
    </body>
</html>





