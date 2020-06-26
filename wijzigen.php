<?php
include 'connection.php';
include 'process_bekijken.php';
// include 'process_wijzigen.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wijzigen</title>
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

  <center><h1>welkom hier kan je het wijzigen</h1></center>
  <center><h3>hiero kunde je zooi veranderen</h3></center>
  <center><button class="button2" type="button" onClick="location.href='ingelogd.php'" >en hiero kunde terug gaan</button><br></center>
  <br>
  <br>
  <center>
  

  <?php
include 'connection.php';

$id = $_GET['id'];

if(isset($_POST['btnUpdate']))
{
$projectnaam = $_POST['projectnaam'];
$code = $_POST['code'];
$omschrijving = $_POST['omschrijving'];
$codetaal = $_POST['codetaal'];


$query = "UPDATE projecten SET projectnaam = '$projectnaam', code = '$code', omschrijving = '$omschrijving', codetaal = '$codetaal' WHERE id = '$id'";
$stm = $con->prepare($query);
if($stm->execute())
{
    echo "UPDATE gelukt!!";
}

}

$query = "SELECT * FROM projecten WHERE id = $id";
$stm = $con->prepare($query);
if($stm->execute())
{

$vliegtuig = $stm->fetch(PDO::FETCH_OBJ);

?>

<form method="POST">
    <table>
        <tr>
            <th>projectnaam</th>
            <td><input type="text" name="txtVnummer" value="<?php echo $vliegtuig->projectnaam; ?>" /></td>
        </tr>
        <tr>
            <th>code</th>
            <td><textarea name="code" id="" cols="30" rows="10" value="<?php echo $vliegtuig->code; ?>"> </textarea></td>
        </tr>
        <tr>
            <th>omschrijving</th>
            <td><input type="text" name="txtVliegmaatschappij" value="<?php echo $vliegtuig->omschrijving; ?>" /></td>
        </tr>
        <tr>
            <th>codetaal</th>
            <td><input type="text" name="txtbestemming" value="<?php echo $vliegtuig->codetaal; ?>" /></td>
        </tr>
        <tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btnUpdate" value="UPDATE" /></td>
        </tr>
    </table>




</form>
<?php
}
?>

  </center>
</body>
</html>