<?php
   $descripcion = $_POST["descripcion"];
   $fecha = $_POST["fecha"];
   $decesos = $_POST["decesos"];
   $lesionados = $_POST["lesionados"];
   $eje = $_POST["eje"];
   $tramo = $_POST["tramo"];
   $kilometro = $_POST["kilometro"];
   $metros = $_POST["metro"];
   $observaciones = $_POST["observaciones"];

echo "DESCRIPCION: ".$descripcion."<br> FECHA:".$fecha."<br>DECESOS: ".$decesos."<br> LECIONADOS: "
    .$lesionados."<br> EJE:".$eje."<br> TRAMO:".$tramo
    ."<br> KILOMETROS: ".$kilometro."<br> METROS: ".$metros.
    "<br> OBSERVACIONES: ".$observaciones;


