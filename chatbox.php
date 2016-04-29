<?php session_start();
if($_SESSION["email"]==null)
{
header("location:login.php");
} ?>
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
        <li><a href="destroy.php">logout</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="container">
    <div class="row">
    <form method="POST" action="proses.php" class="col s12">
      <h2>CHAT BOX</h2>
       <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input name="chat" id="chat" type="text" class="validate" >
          <label for="chat">chat</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
    <i class="material-icons right">send</i>
    </button>
        
          </form>
          <div class="row">
          </div>
          <div class="row">
          <div></div> <div></div> 
          <div>
            <table>
        <thead>
          <tr>
              <th data-field="id">Email</th>
              <th data-field="name">Chat</th>
          </tr>
        </thead>

        <tbody>
          <?php
   
      function filter($text){ 
            //Sensor
                  $find = array( 
                      '/damn/i', 
                      '/shit/i', 
                      '/fuck/i',
                      '/adult/i',
                      '/jancok/i' 
                  ); 
                  $replace = array( 
                      'd*mn', 
                      'sh*t', 
                      'f*ck',
                      '*d*lt',
                      'j*nc*k' 
                  );
                $result = preg_replace($find,$replace,$text);
          
                //emoticons
            $smiles = array(
                'xD'  => 'devil.png',
                '>:)' => 'devil2.png',
                'x('  => 'angry.png',
                ':((' => 'cry.png',
                ':*'  => 'kiss.png',
                ':))' => 'laugh.png',
                ':D'  => 'laugh2.png',
                ':-D' => 'laugh3.png',
                ':3'  => 'love.png',
                '(:|' => 'sleepy.png',
                ':)'  => 'smile.png',
                ':-)' => 'smile2.png',
                ':('  => 'sad.png',
                ':-(' => 'sad2.png',
                ';)'  => 'wink.png',
                ';-)' => 'wink2.png'
            );

            foreach($smiles as $key => $img) {
              $result = str_replace($key, '<img src="Emoji/'.$img.'" height="18" width="18" />', $result);
            }
            return $result;
            }

          $x = file_get_contents('pesan.txt');
          echo filter($x);
              
      ?>
          
        </tbody>
      </table>            
          </div>
  </div>
  </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
