<?php
  $link = mysqli_connect ("localhost","root","","dbp");
  $query="select * from cravity";
  $result=mysqli_query($link,$query);

  $list="";
  while($row=mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['name']}</a></li>";
  }

  $article = array (
    'name' => '',
    'birthday' => '',
    'tall' => ''

  );

  if(isset($_GET['id'])){
    $query = "SELECT * FROM cravity WHERE id={$_GET['id']}";//저 주소에 저장되니까 그 아이디에 맞느거 가져옴.
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array
    (
      'name' => $row['name'],
      'birthday' => $row['birthday'],
      'tall' => $row['tall']
    );
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRAVITY</title>
  </head>
  <body>
    <h1><a href="index.php">아이돌 크래비티 멤버</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <a href="create.php">멤버 추가하기</a>
    <br>
    <h2 style="display:inline">이름 : </h2><h2 style="display:inline"><?=$article['name'] ?></h2>
    <br>
    <h2 style="display:inline">생년월일 : </h2><h2 style="display:inline"><?=$article['birthday'] ?></h2>
    <br>
    <h2 style="display:inline">키 : </h2><h2 style="display:inline"><?=$article['tall'] ?></h2>

  </body>
</html>
