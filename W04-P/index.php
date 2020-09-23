<?php
  $link = mysqli_connect("localhost", "root", "", "dbp");
  $query="select * from cravity";
  $result=mysqli_query($link, $query);

  $list="";
  while ($row=mysqli_fetch_array($result)) {
      $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['name']}</a></li>";
  }

  $article = array(
    'name' => '',
    'birthday' => '',
    'tall' => ''

  );

$update_link='';
$delete_link='';
$author="";

  if (isset($_GET['id'])) {
      $filtered_id=mysqli_real_escape_string($link, $_GET['id']);
      $query = "SELECT * FROM cravity LEFT JOIN music ON cravity.music_id=music.id WHERE cravity.id={$filtered_id}";//저 주소에 저장되니까 그 아이디에 맞느거 가져옴.
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article['name'] = htmlspecialchars($row['name']);
      $article['birthday'] = htmlspecialchars($row['birthday']);
      $article['tall'] = htmlspecialchars($row['tall']);
      $article['singer']= htmlspecialchars($row['singer']);

      $update_link='<a href="update.php?id='.$_GET['id'].'">수정하기</a>';
      $delete_link='<form action="process_delete.php" method="POST">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="delete">
      </form>';
      $author="<p>좋아하는가수: {$article['singer']}</p>";
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
    <a href="music.php">music</a>
    <ol>
      <?=$list?>
    </ol>
    <a href="create.php">멤버 추가하기</a>
    <?= $update_link ?>
    <?= $delete_link ?>
    <br>
    <h2 style="display:inline">이름 : </h2><h2 style="display:inline"><?=$article['name'] ?></h2>
    <br>
    <h2 style="display:inline">생년월일 : </h2><h2 style="display:inline"><?=$article['birthday'] ?></h2>
    <br>
    <h2 style="display:inline">키 : </h2><h2 style="display:inline"><?=$article['tall'] ?></h2>
    <h2><?=$author?></h2>
  </body>
</html>
