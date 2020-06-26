<?php

include ("connection.php");

$id = '';
$planetype = '';
$vliegtuignummer = '';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM vliegtuigen WHERE id=$id";
    $stm = $conn->prepare($query);
    if($stm->execute()){

        $result = $stm->fetch(PDO::FETCH_OBJ);
        ?>

        <form method="post">
            <input type="text" name="txtNummer" readonly value="<?php echo  $result->projectnaam; ?>"/>
            <input type="text" name="txtType" value="<?php echo $result->code; ?>"/>
            <input type="submit" name="btnUpdate" value="update "/>
        </form>

        <?php

    }

}else header('location: wijzigen.php');

if(isset($_POST['btnUpdate']))
{
    $id = $_POST['txtNummer'];
    $type = $_POST['txtType'];
    $query = "UPDATE projecten SET code = '".$type."'WHERE projectnaam = '".$id."'";
    $stm = $conn->prepare($query);


    if($stm->execute())
    {
        Header("Location: ingelogd.php");
    }

}

?>