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

      #f {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div style="text-align: center">
        <a href="index.php"><img src="youtube_logo.png" width="250" height="50"></a>
    </div>
    <div style="height:50px;">
      <nav id="topMenu" >
        <ul>
          <li><a class="menuLink" href="index.php">HOME</a></li>
          <li class="menu2">
            <a class="menuLink" href="#">CATEGORY</a>
            <dl class="dropdown">
              <dd><a href="menu1.php">Film & Animation</a></dd>
              <dd><a href="menu2.php">Autos & Vehicles</a></dd>
              <dd><a href="menu3.php">Music</a></dd>
              <dd><a href="menu4.php">Pets & Animals</a></dd>
              <dd><a href="menu5.php">Sports</a></dd>
            </dl>
          </li>
          <li><a class="mainmenuLink" href="search.php">SEARCH</a></li>
        </ul>
      </nav>
    </div>
    <div id="f">
      <form style="margin-left:90px"action="search_process.php" method="POST">
        <input type="text" name ="keyword" placeholder="keyword" >
        <input type="submit" value="Search">
      </form>
    </div>
  </body>
</html>
