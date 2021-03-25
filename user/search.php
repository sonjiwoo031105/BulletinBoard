<?php 
  ini_set('error_reporting','E_ALL ^ E_NOTICE');
  include '../db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원리스트</title>
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
            <?php
              $catagory = $_GET['catgo'];
              $search_con = $_GET['search'];
            ?>
            <a class="navbar-brand"><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</a>
            <form method="get" action="search.php" class="form-inline">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="catgo">
                    <option value="choice" selected>선택</option>
                    <option value="userid">아이디</option>
                    <option value="email">이메일</option>
                    <option value="city">도시</option>
                </select>
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
            </nav>
<?php
  $sql = "select * from joint where $catagory like '%$search_con%'";
  $re = mysqli_query($conn, $sql);
  $user = mysqli_fetch_row($re);
  if($user==null){ ?>
  <div class="alert alert-danger" role="alert">
    찾고자 하는 회원이 존재하지 않습니다!
  </div>
<?php
  }else{
?>
<table class="table table-bordered table-sm" style="text-align: center;">
    <thead>
        <tr>
            <th width = "100">번호</th>
            <th width = "200">아이디</th>
            <th width = "300">이메일</th>
            <th width = "150">도시</th>
            <th width = "200">등록일</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td width="70"><?php echo $user[0];?></td>
          <td width="500"><?php echo $user[1];?></td>
          <td width="120"><?php echo $user[3];?></td>
          <td width="100"><?php echo $user[5];?></td>
          <td width="100"><?php echo $user[6];?></td>
        </tr>    
    </tbody>
      <?php }?>
</table>
</div>
    </div>
</div>
</body>
</html>