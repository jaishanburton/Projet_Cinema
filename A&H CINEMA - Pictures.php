<!DOCTYPE HTML>
<html>

<head>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" type="text/css" href="lesfonts2.css">
<title>A&H CINEMA IMAGES</title>
</head>

<body>

    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
            <a href="1-joker.php" target="_parent"><img src="joker.webp" alt=""></a>
        </div>
		<div class="slide">
            <a href="2-spiderman.php" target="_parent"><img src="spiderman.jpg" alt=""></a>
		</div>
        <div class="slide">
            <a href="3-the batman.php" target="_parent"><img src="the batman.png" alt=""></a>
        </div>
        <div class="slide">
            <a href="4-avangers.php" target="_parent"><img src="avangers.jpg" alt=""></a>
        </div>
        <div class="slide">
            <a href="5-pirates.php" target="_parent"><img src="pirates.jpg" alt=""></a>
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->
  </body>
</html>
