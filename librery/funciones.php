<?php

/**
 * @author GatoLoco-FussionCreativa
 * @copyright 2014
 */

$accion=$_GET["accion"];

if($accion=="generarDatos")
{
    $cadena="";
    $rissokal3=$_GET["rissokal3"];
    $riseuro3=$_GET["riseuro3"];
    $teutos3=$_GET["teutos3"];
    $probeutos3=$_GET["probeutos3"];
    $riseutos3=$_GET["riseutos3"];
    
    $fp = fopen('../archivos/resultado.txt', 'w');
    $cadena=$cadena."Sokal RR: $rissokal3 \n";
    $cadena=$cadena."Hasford RR: $riseuro3 \n";
    $cadena=$cadena."EUTOS Risk group: $teutos3 \n";
    $cadena=$cadena."EUTOS Probability for no CCgr at 18 months: $probeutos3 \n";
    $cadena=$cadena."EUTOS Score: $riseutos3 \n";
    
    
    fwrite($fp, $cadena);
    fclose($fp);
    echo '<a href="archivos/resultado.txt" target="_blank">Visualizar</a>';
}

?>