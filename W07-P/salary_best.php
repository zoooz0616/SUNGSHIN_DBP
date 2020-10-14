<?php
    $link = mysqli_connect('localhost','admin','admin','employees');
    $query = "
    SELECT e.first_name, e.last_name, d.dept_name, max(s.salary) as salary 
    FROM employees e INNER JOIN dept_emp de on de.emp_no = e.emp_no 
    INNER JOIN departments d on d.dept_no = de.dept_no 
    INNER JOIN salaries s on s.emp_no = e.emp_no 
    GROUP BY d.dept_name ORDER BY Salary desc;
    ";

    $result = mysqli_query($link,$query);

    $article='';
    while($row=mysqli_fetch_array($result)){
        $article .= '<tr><td>';

        $article .= $row['first_name'];
        $article .= '</td><td>';
        $article .= $row['last_name'];
        $article .= '</td><td>';
        $article .= $row['dept_name'];
        $article .= '</td><td>';
        $article .= $row['salary'];
        $article .= '</td>';

        $article .= '</td></tr>';
    }
?>

<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>부서별 최고 연봉 정보</title>
    <style> 
        body{
            font-family:Consolas, monospace;
            font-family: 12px;
        }
        table{
            width:100%
        }
        th, td{
            padding:10px;
            border-bottom:1px solid #dadada;
        }
    </style>
</head>
<body>
    <h2><a href="index.php">직원 관리 시스템</a>| 부서별 최고 연봉 정보</h2>
    <table>
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>dept_name</th>
            <th>salary</th>
        </tr>
        <?=$article?>
    </table>
</body>
</html>