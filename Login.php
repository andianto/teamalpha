 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="height: 1000px">
 <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper light-blue darken-1
">
      <a href="C:/xampp/htdocs/Materialize/logo.png" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">register</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="container">
    <div class="row">
    <form method="POST" action="Login_proses.php" class="col s12">
      <h2>LOGIN</h2>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">thumb_up</i>
          <input name="email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input name="password" id="password" type="password" class="validate" >
          <label for="password">Password</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
    <i class="material-icons right">send</i>
    </button>
        
          </form>
          <div class="row">
          </div>
          <div class="row">
            <?php

if ((isset ($_POST["email"]))||(isset ($_POST["password"])))
   {
  if ((($_POST["email"])=="")||(($_POST["password"])=="")) {
    echo "Tolong isi semua kolom";
  }
  else
  {
  session_start();
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["password"] = $_POST["password"];
  header("location:chatbox.php"); 

  }
}
?>
          </div>
  </div>
  </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
