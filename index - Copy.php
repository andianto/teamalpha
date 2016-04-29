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
    <div class="nav-wrapper">
      <a href="C:/xampp/htdocs/Materialize/logo.png" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="login.php">login</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="container">
    <div class="row">
    <form class="col s12">
      <h2>REGISTER</h2>
         <div class="row">
        <div class="input-field col s12">
          <input id="fullname" type="text" class="validate">
          <label for="fullname">Full Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <p>
      <input type="checkbox" id="test5" />
      <label for="test5">i agree with you :*</label>
    </p>
      <button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
    <i class="material-icons right">send</i>
    </button>
        
          </form>
  </div>
  </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
