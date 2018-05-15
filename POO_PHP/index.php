<?php

include 'Persona.php';

//instaciar la clase
$Martin=new Persona();

//asignar valroes a las propiedades del objeto
$Martin->setId(01);
$Martin->setNombres(Martin);
$Martin->setAppaterno(Llanca);
$Martin->setApmaterno(Huaman);
$Martin->setTelefono(994326896);

echo '<center><h2>Nombres de datos PHP POO </h2></center><br/>';

echo '<br/>Numero Id:'.$Martin->id;

echo '<br/>Nombres:'.$Martin->nombres;

echo '<br/>Apellido Paterno:'.$Martin->appaterno;

echo '<br/>Apellido Materno:'.$Martin->apmaterno;

echo '<br/>Telefono:'.$Martin->telefono;