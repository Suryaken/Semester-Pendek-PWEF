<?php

    require_once('helper.php');

    $query = "SELECT * FROM Simulasi";
    $sql = mysqli_query($db_connect, $query);

    if ($sql) {

        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push( $result, array(
                'id'=> $row['id'],
                'Simulasi'=> $row['Simulasi'],
            )   );
        }   # code...
        
        echo json_encode ( $result );
    }