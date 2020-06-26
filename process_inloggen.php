<?php
session_start();
include 'connection.php';

// if(isset($_POST{'btnInloggen'})) {
//     $username = $_POST['txtnaam'];
//     $wachtwoord = $_POST['txtwachtwoord'];


//     $query = "SELECT * FROM acount WHERE naam = '$username' AND wachtwoord = '$wachtwoord'";
//     var_dump($query);
//     $stm = $conn->prepare($query);
//     $stm->execute();
//     $login = $stm->fetch(PDO::FETCH_OBJ);
//     var_dump($login);

//     if($login != false) {
//         $_SESSION['login'] = $login;
//         Header("location: ingelogd.php");
//     } else {
//         echo ("gebruikers en/of wachtwoord is onjuist");
//     }

// }

// $name = $_POST['txtnaam'];
// $wachtwoord = $_POST['txtwachtwoord'];


if(isset($_POST['btnInloggen']))
  {
    if (empty($_POST['txtnaam']) || empty($_POST['txtwachtwoord']))
      {
        header("location:index.php#section-6?Empty= je hebt nog niks in gevuld");
      }
      else
      {
        
          $name = $_POST["txtnaam"];
          $wachtwoord = $_POST['txtwachtwoord'];
          $query = "SELECT * FROM acount WHERE naam = '$name' AND wachtwoord ='$wachtwoord' LIMIT 1";
          
          $stm = $con->prepare($query);
          if ($stm->execute())
            {
              $resulttt = $stm->fetch(PDO::FETCH_OBJ);
              if($resulttt != null){
                echo"ingelogd";
                header("location: ingelogd.php");
              } 
            else
            {
              header("location:index.php#section-6?Invalid= Verkeerde combinatie");
            }
            }
          
        }
      }
 ?>
