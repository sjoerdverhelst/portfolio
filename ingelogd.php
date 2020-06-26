<?php
include 'connection.php';
include 'process_bekijken.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ingelogd</title>
</head>

<style>
    body{
    background-image: url('mooi.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
  }

  .button2{
    background-color: rgb(255, 255, 255); 
    border: none;
    color: rgb(0, 0, 0);
    padding: 20px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 12px;
  }
  
  .cardinfoBIG {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 80%;
    font-size: 20px;
    background-color: rgba(255,255,255,0.4);
    margin-top: 3vh;
    float: unset;
    padding: 30px;
  }
  
  .cardinfoBIG:hover {
    box-shadow: 0 10px 18px 0 rgb(0, 0, 0);
  }
  .container {
    position: relative;
    font-family: Arial;
  }  

</style>

<body>

  <center><h1>welkom je bent ingelogd jonge</h1></center>
  <center><button class="button2" type="button" onClick="location.href='index.php#section-6'" >en hiero kunde terug gaan</button><br></center>
  <br>
  <br>

  <center><h3>hiero kunde alles bekijken</h3>
      <br>
      <br>
      <div class="cardinfoBIG">
        <div class="container">
        <table>
          <tr>
            <th>Projectnaam</th>
            <th>omschrijving</th>
            <th>codetaal</th>
          </tr>

          <?php  
          foreach($result as $planning)
            {
          ?>
          <tr>
            <td><a href="wijzigen.php?id=<?= $planning->id ?>"><?= $planning->projectnaam ?></a></td>
            <td><?php echo $planning->omschrijving;?></td>
            <td><?php echo $planning->codetaal;?></td>
          </tr>
                          
          <?php 
            }
          ?>
        </table>
        </center>

  <br>
  <br>
  <br>
  <br>


</body>
</html>