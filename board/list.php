<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-light">
                <a class="navbar-brand">게시판</a>
            <form method="get" action="search.php" class="form-inline">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="catgo">
                    <option selected>선택</option>
                    <option value="title">제목</option>
                    <option value="userid">작성자</option>
                    <option value="content">내용</option>
                </select>
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" required>
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
            </nav>
<table class="table table-bordered table-sm" style="text-align: center;">
    <thead>
        <tr>
            <th width = "100">번호</th>
            <th width = "350">제목</th>
            <th width = "130">작성자</th>
            <th width = "200">등록일</th>
            <th width = "100">조회수</th>
            <th width = "100">수정</th>
            <th width = "100">삭제</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include './db_conn.php';
            $sql="select * from board order by id desc";
            $result = mysqli_query($conn, $sql);
            while($re = mysqli_fetch_row($result)){?>
                <tr><td><?php echo $re[0]?></td>
                <td><a href="read.php?a=<?php echo $re[0]?>" style="text-decoration:none;"><?php echo $re[3]?></td>
                <td><?php echo $re[1]?></td>
                <td><?php echo $re[5]?></td>
                <td><?php echo $re[6]?></td><td>
                <form method="post" action="change-before.php?a=<?php echo $re[0]?>">
                 <input type="submit" class="btn btn-outline-secondary btn-sm" value="Modify" name="mod">
                 </form></td><td>
                <form method="post" action="delete.php?b=<?php echo $re[0]?>">
                 <input type="submit" class="btn btn-outline-danger btn-sm" value="Delete" name="del">
                 </form></td></tr>                
            <?php
            }
            ?>
    </tbody>
</table>
<button type = "submit" onclick="location.href='main.html'" style = float:left; class="btn btn-outline-dark btn-sm" >글쓰기</button>
<button type = "submit" onclick="location.href='../user/list.php'" style = float:left;margin-left:10px; class="btn btn-outline-dark btn-sm" >회원리스트</button>
<?php
if(!isset($_SESSION['userid']) || !isset($_SESSION['passwd'])){
    echo '<a href="../user/login.html" style="float:right;">로그인 해주세요.</a>';
}else{
    $userid = $_SESSION['userid'];
    $passwd = $_SESSION['passwd'];
    echo '<p style="float:right;">'.$userid.'님 반갑습니다.</p>';
}
?>
</div>
    </div>
</div>
</body>
</html>