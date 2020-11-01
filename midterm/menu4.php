<?php
  $link=mysqli_connect("localhost", "root", "", 'youtube');
  $query="select title, thumbnail_link, channelTitle, max(view_count) view_count, likes from youtube where categoryID=15 group by title order by view_count desc limit 100;";

  $result=mysqli_query($link, $query);
  $top="";
  $num=1;

  while ($row=mysqli_fetch_array($result)) {
      $top .= '<tr>';
      $top .= '<td>'.$num.'</td>';
      $top .= '<td><img src="'.$row['thumbnail_link'].'"></td>';
      $top .= '<td>'.$row['title'].'</td>';
      $top .= '<td>'.$row['channelTitle'].'</td>';
      $top .= '<td>'.$row['view_count'].'</td>';
      $top .= '<td>'.$row['likes'].'</td>';
      $top .= '</tr>';
      $num+=1;
  }
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>YOUTUBE TREND</title>
    <style media="screen">
      #topMenu {
        height: 30px; width: 850px;  }

      #topMenu ul li {
        list-style: none;
        color: #000000;
        background-color: #ffffff;
        float: left;
        line-height: 30px;
        vertical-align: middle;
        text-align: center;
      }
      #topMenu .menuLink {
        text-decoration:none;
        color: black;
        display: block;
        width: 150px;
        font-size: 12px;
        font-weight: bold;
        font-family: "Trebuchet MS", Dotum, Arial;
      }

      #topMenu .mainmenuLink {
        text-decoration:none;
        color: red;
        display: block;
        width: 150px;
        font-size: 12px;
        font-weight: bold;
        font-family: "Trebuchet MS", Dotum, Arial;
      }

      #topMenu .menuLink:hover {
        color: red;
        background-color: #b5b5b5;
      }
      table{
        width: 100%;
        margin-left: 30px;
        margin-right: 30px;
        border-top: 1px solid #444444;
        border-collapse: collapse;
      }
      th, td {
        border-bottom: 1px solid #444444;
        padding: 10px;
      }
      #topMenu ul li dl.dropdown{
         border:3px #ccc solid;
         background:#ffffff;
         display:none;
       }
      #topMenu ul li dl.dropdown dd{
        height:30px;
        line-height:30px;
        margin: 0px;}
      #topMenu ul li dl.dropdown a{
        text-decoration:none;
        color: black;
        display: block;
        width: 145px;
        padding:0px;
        font-size: 12px;
        font-weight: bold;
        font-family: "Trebuchet MS", Dotum, Arial; }
      #topMenu ul li dl.dropdown a:hover{
        color:red;
        background-color: #b5b5b5}
      #topMenu ul li.menu2:hover .dropdown{
        display:block;
        text-align: center; }
    </style>
  </head>
  <body>
    <div style="text-align: center">
        <a href="index.php"><img src="youtube_logo.png" width="250" height="50"></a>
    </div>
    <div style="height:50px">
    <nav id="topMenu" >
      <ul>
        <li><a class="menuLink" href="index.php">HOME</a></li>
        <li class="menu2">
          <a class="mainmenuLink" href="#">CATEGORY</a>
          <dl class="dropdown">
            <dd><a href="menu1.php">Film & Animation</a></dd>
            <dd><a href="menu2.php">Autos & Vehicles</a></dd>
            <dd><a href="menu3.php">Music</a></dd>
            <dd><a href="menu4.php">Pets & Animals</a></dd>
            <dd><a href="menu5.php">Sports</a></dd>
          </dl>
        </li>
        <li><a class="menuLink" href="search.php">SEARCH</a></li>
      </ul>
    </nav>
  </div>
    <div>
      <table>
        <tr>
          <th>No.</th>
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Channel name</th>
          <th>View count</th>
          <th>Likes</th>
        </tr>
        <?=$top ?>
      </table>
    </div>
  </body>
</html>
