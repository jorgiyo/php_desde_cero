<?php

class miSistema {
  
  public function __construct(){
    echo "POST: ".$_POST["nombreFormulario"]."<br />";
    echo "GET: ".$_GET["nombreFormulario"]."<br />";
    echo "Inicia archivo recibir.<br />";
  }
  
  public function segundometodo(){
     echo "2-POST: ".$_POST["nombreFormulario"]."<br />";
    echo "2-GET: ".$_GET["nombreFormulario"]."<br />";
  }
}

$objeto = new miSistema();
$objeto->segundometodo();
