<?php
$link= mysqli_connect("localhost","root","","dbp");
$query = "
INSERT INTO cravity(
  name,
  birthday,
  tall
  ) VALUE (
    '{$_POST['name']}',
    '{$_POST['birthday']}',
    '{$_POST['tall']}'
    )";

$result = mysqli_query($link,$query);
if($result == false)//문제가 있다면
{
  echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요';
  error_log(mysql_error($link));
}
else{
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
 ?>
