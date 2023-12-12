<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lucida Sans", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#B1624EFF;
  overflow-x: hidden;
  padding-top: 100px;
  
  border-right: 10px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  top:0;
  text-decoration: none;
  font-size: 25px;
  font-style: bold;
  font-family: Lucida Sans;
  color:#ADEFD1FF;
  display: block;
}

.sidenav a:hover {
  color: #5CC8D7FF;
  background-color: gray;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<form action="" method="POST">
  <div class="sidenav">
    <a href="home.php"><img style="height: 55px; width: 70px;" src="image/home.png"><b>HOME</b></a>
    <a href="insert.php">Insert Task</a>
    <a href="delete.php">Delete Task<!--  <img style="height: 35px; width: 130px;" src="delete1.jpg">--></a>
    <a href="update.php">Update Task<!--<img style="height: 35px; width: 130px;" src="update.jpg">--></a>
    <a href="search.php">search</a>
    <a href="logout.php"><img style="height: 55px; width: 70px;" src="image/log.png"><b>LOGOUT</b></a>
  </div>
</form>
</body>
</html> 