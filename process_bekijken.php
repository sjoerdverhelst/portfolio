<?php  
include 'connection.php';

    require_once('connection.php');
    {

        $query = "SELECT * FROM projecten " ;

        //inlezen query
        $stm = $con->prepare($query);
        //statement uitvoeren
        if($stm->execute()){
            //ophalen resultaten
            $result = $stm->fetchALL(PDO::FETCH_OBJ);
        }

    }

?>