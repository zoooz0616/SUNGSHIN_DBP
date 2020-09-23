<?php
$link= mysqli_connect("localhost", "root", "", "dbp");
$filtered = array(
  'name' => mysqli_real_escape_string($link, $_POST['name']),
  'birthday'=> mysqli_real_escape_string($link, $_POST['birthday']),
  'tall'=> mysqli_real_escape_string($link, $_POST['tall']),
  'music_id' =>mysqli_real_escape_string($link, $_POST['music_id'])
);
$query = "
INSERT INTO cravity(
  name,
  birthday,
  tall,
  music_id
  ) VALUE (
    '{$filtered['name']}',
    '{$filtered['birthday']}',
    '{$filtered['tall']}',
    '{$filtered['music_id']}'
    )
";

$result = mysqli_multi_query($link, $query);
if ($result == false) {//문제가 있다면
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요';
    error_log(mysql_error($link));
} else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
