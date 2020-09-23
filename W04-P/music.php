<?php
  $link= mysqli_connect('localhost', 'root', '', 'dbp');

  $query="SELECT * FROM music";
  $result=mysqli_query($link, $query);
  $author_info='';

  while ($row=mysqli_fetch_array($result)) {
      $filtered=array(
      'id'=>htmlspecialchars($row['id']),
      'singer'=>htmlspecialchars($row['singer']),
      'title'=>htmlspecialchars($row['title'])
    );
      $author_info.='<tr>';

      $author_info.='<td>'.$filtered['id'].'</td>';
      $author_info.='<td>'.$filtered['singer'].'</td>';
      $author_info.='<td>'.$filtered['title'].'</td>';
      $author_info.='<td><a href="music.php?id='.$filtered['id'].'">update</a></td>';
      $author_info.='<td>
      <form action="process_delete_music.php" method="post">
      <input type="hidden" name="id" value="'.$filtered['id'].'">
      <input type="submit" value="delete">
      </form>
      </td>';
      $author_info.='</tr>';
  };

  $escaped= array(
    'singer'=>'',
    'title'=>''
  );

  $label_submit='Create submit';
  $form_action='process_create_music.php';
  $form_id='';

  if (isset($_GET['id'])) {
      $filtered_id=mysqli_real_escape_string($link, $_GET['id']);
      settype($filtered_id, 'integer');

      $query="select * from music where id={$filtered_id}";
      $result=mysqli_query($link, $query);
      $row=mysqli_fetch_array($result);
      $escaped['singer']=$row['singer'];
      $escaped['title']=$row['title'];
      $label_submit='Update submit';
      $form_action='process_update_music.php';
      $form_id='<input type="hidden" name="id" value="'.$_GET['id'].'">';
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
     <p><a href="index.php">cravity</a></p>

     <table border="1">
       <tr>
         <th>id</th>
         <th>singer</th>
         <th>title</th>
         <th>update</th>
         <th>delete</th>
       </tr>
       <?= $author_info ?>
     </table>
     <br>

     <form action="<?=$form_action ?>" method="post">
       <?=$form_id?>
       <label for="singer">singer:</label><br>
       <input type="text" id ="singer" name="singer" placeholder="singer" value="<?= $escaped['singer']?>"><br>
       <label for="title">title:</label><br>
       <input type="text" id ="title" name="title" placeholder="title" value="<?= $escaped['title']?>"><br><br>
       <input type="submit" value="<?=$label_submit?>">
     </form>
   </body>
 </html>
