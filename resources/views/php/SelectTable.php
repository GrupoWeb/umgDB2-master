<?php 
    require_once('../../controller/conexion/conexion.php');
    $conn = new Conexion();
    $conexion = $conn->Conectar();
    try {
        $sql = $conexion->prepare("EXEC SP_ALL_CAPACITACION");
        $sql->execute(); 
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        $rowdata=array();
        $i=0;
        foreach($resultado as $row) {
            $rowdata[$i]=$row;
            $i++;
        }
        $sql->closeCursor();
        echo json_encode($rowdata);
    } catch (PDOException $e) {
        
    }
   
?>