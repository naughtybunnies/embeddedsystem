<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<style media="screen">
  .del{
    position:absolute;
  	top:0;
  	left:0;
  	width:152px;
  	height:214px;
  	background:url('css/images/deletehover.png');
    background-repeat: no-repeat;
    background-size: cover;
  	display:block;
  	z-index:5;
  	cursor:pointer;
  	display:none;
  }
</style>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<<?php
  include 'header2.php';
  head(basename($_SERVER['PHP_SELF']));
 ?>
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <h2>Delete Movie</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <?php
        require_once 'connect.php';
        $query = "SELECT idmovie,name,pic FROM movie";
        $result = $mysqli->query($query);
        $i =1;
        while ($row=$result->fetch_array()){
            $name = $row['name'];
            $pic = base64_encode($row['pic']);
            $id = $row['idmovie'];
            $i=$i+1;
         ?>
        <div class="movie <?php if ($i%6==0) {echo 'last'; } ?>" onclick="location.href='del.php?id=<?=$id?>'">
          <div class="movie-image">
            <span class="del play">
              <span class="name"><?=$name?></span>
            </span>
              <?php echo '<img src="data:image/jpeg;base64,'.$pic.'"/>'; ?>

          </div>
          <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
      <?php } ?>
        <div class="cl">&nbsp;</div>
      </div>




  <div id="footer">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">MovieHub <br>Krittikorn Kramgomut 5822771432<br>Thanapong Maleewan 5822790275 <br> Thanarath Piyakulpinyo</p>
    <div style="clear:both;"></div>
  </div>
</div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
