<?php
$link= mysqli_connect("localhost", "root", "", "dbp");
settype($_POST['id'], 'integer');

$filtered = array(
  'id' => mysqli_real_escape_string($link, $_POST['id'])
);

$query = "
DELETE FROM music
  WHERE
    id = '{$filtered['id']}'
  ";

$result = mysqli_query($link, $query);
if ($result == false) {  //문제가 있다면
    echo '삭제하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요';
    error_log(mysql_error($link));
} else {
    header('Location: music.php');
}
