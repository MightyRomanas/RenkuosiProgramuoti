<?php 
//include "functions.php";
//include "klases.php";
//include "temp.php";
?>
<?php
if(isset($_POST["prisijungti"])) {
  $vardas = $_POST["vardas"];
  $slaptazodis = $_POST["slaptazodis"];
  $gVardas = "admin";
  $gSlaptazodis = "123";
  if($vardas == $gVardas && $slaptazodis == $gSlaptazodis) {
    $_SESSION["arPrisijunges"] = 1;
    $_SESSION["vardas"] = $vardas;
    setcookie("FailedLogin","1",time()-1);
    setcookie("OkLoginStatus","hidden",time()+3600*24*365);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="main">
    <div class="error-placeholder"></div>
    <div class="logo-placeholder"><p>LOGOTIPAS</p></div>
    <div class="news-notifications"><p>NAUJIENOS</p></div>
    <div class="trumpa-bendra-suvestine"><p>Suvestine</p></div>
    <div class="login-placeholder" >
      <div class="login-signin">
        <form method="post" action="index.php">
          <label for="Login"><pre style="margin: 0;">Login</pre></label>
          <input type="text" name="vardas"></input>
          <br>
          <label for="password"><pre style="margin: 0;">Password</pre></label>
          <input type="password" name="slaptazodis"></input>
            <button type="submit" name="prisijungti" >Login</button>
          </div>
        </form>
      </div>
    </div>
    <nav class="nav-bar">
      <ul>
        <li><a href="">Pagrindinis</a></li>
        <li><a href="">Įplaukos</a></li>
        <li><a href="">Išlaidos</a></li>
        <li>Statistika</li>
        <li>Pirkinių sąrašas</li>
        <li>Apie</li>
        <li>Kontaktai</li>
      </ul>
    </nav>
    <div class="left-side"><p>left-side</p></div>
    <div class="main-stuff">
      <!-- <p>main-stuff</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, odio eveniet a quibusdam harum consequatur consequuntur omnis voluptates eos fuga obcaecati nam eaque, accusantium aspernatur maxime repudiandae nesciunt fugiat architecto?</p> -->
      <?php include "pages/IslaidosNew.php" ?>
    </div>
    <div class="right-side"><p>right-side</p></div>
    <div class="footer"><p>footer</p></div>
  </div> 
</body>
</html>