<form action=Formulario.php method="POST">
<?php
session_start();
$Nombre=$_POST['txtNombre'];
$Telefono=$_POST['txtTelefono'];
$Celular=$_POST['txtCelular'];
$Domicilio=$_POST['txtDomicilio'];
echo "<table>";
echo "<tr><input type=submit name='Enviar' value='Cerrar Sesion'/></tr>";
echo "<tr>";
echo "<td>Nombre:</td>";
echo "<td>  $Nombre </td></tr>";
echo "<tr>";
echo "<td>Telefono:</td>";
echo "<td>  $Telefono </td></tr>";
echo "<tr>";
echo "<td>Celular:</td>";
echo "<td>  $Celular </td></tr>";echo "<tr>";
echo "<td>Direccion:</td>";
echo "<td> $Domicilio </td></tr>";
echo "<td></td>";
echo  "<a href =\"Sesion.php\"> Volver </a>";
echo "</table>";
?>