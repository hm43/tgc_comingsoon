<?php
if(isset($_POST['mmm'])){
  try {
          $pdo = new PDO("mysql: host=localhost;dbname=cs;charset=UTF8","geeks","");
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // ici insertion dans BD 
          $pdo->exec("INSERT INTO `cs_emails`(`IP`, `email`) VALUES ('".$_SERVER['REMOTE_ADDR']."','".$_POST['mmm']."')");
          echo "ok";
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
}
else{
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>The GEEKS club </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/logo2.png">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/vegas.css"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="bg"></div>
<div id="l">
  <p>
    <img src="img/logo1.png"/>
    <br>
    <span>The GEEKS Club is Loading</span>
  </p>
  
</div>
<canvas></canvas>
<div class="vegas-wrapper" style="overflow: hidden; padding: 0px;"><div class="overlay-dash"></div></div>
<div id="desc">
  <div>
    <img src="img/logo.png"/>
    <h2>FSAC's geek universe, Coming Soon ...</h2>
    <div class="contain-subheading">
    <p>Stay tuned !</p>
  </div>
  <div class="contain-notify">
    
    <form action="" method="post">
      <input type="email" name="email" id = "email" placeholder="Votre Email .." required="required" />
      <button onclick="sendit(this);return false;">Prévenez-moi</button>
    </form>

  </div>
  </div>
</div>
<div id="popup">
  <p>Bienvenu chez</p>
  <img src="img/logo.jpg"/>
</div>

  <script src='js/zepto.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>


<?php


}?>