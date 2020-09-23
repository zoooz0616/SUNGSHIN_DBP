<?php
$link= mysqli_connect("localhost", "root", "", "dbp");
$filtered = array(
  'singer' => mysqli_real_escape_string($link, $_POST['singer']),
  'title'=> mysqli_real_escape_string($link, $_POST['title'])
);
$query = "
INSERT INTO music(
  singer,
  title
  ) VALUE (
    '{$filtered['singer']}',
    '{$filtered['title']}'
    )
";

$result = mysqli_multi_query($link, $query);
if ($result == false) {//문제가 있다면
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요';
    error_log(mysql_error($link));
} else {
    header('Location: music.php');//문제 없으면 바로 뮤직.php 페이지로 바로 오기.
}
