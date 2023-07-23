<?php
require_once "clases/alumno.php";
// creamos una instancia de Alumno
$alum1 = new Alumno("Ana","Robles",23);
// Usamos el método para 
// retornar el nombre completo
// y lo desplegamos con echo
echo $alum1->mostrarNombreCompleto();
echo "<br>";
// mostramos edad
echo $alum1->getedad();
// cambiemos la edad
$alum1->setEdad(21);
echo "<br>";
echo $alum1->getedad();
echo "<br><hr>";
//  var_dump($alum1);

?>
