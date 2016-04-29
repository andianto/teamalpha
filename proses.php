<?php    
session_start();
if ($_POST["chat"]!= null &&  isset($_POST["chat"])) {  
    
          //save to file txt
          $konten_lama = file_get_contents("pesan.txt");
          $konten_baru = "<tr> <td>" .$_SESSION["email"]. "</td> <td>".$_POST["chat"]. "</td> </tr>".$konten_lama;
          file_put_contents("pesan.txt", $konten_baru);
        }
    header("location:chatbox.php"); 
 ?>