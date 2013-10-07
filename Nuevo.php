<html>
<head>
</head>
<body>
<form action=Ver.php method="POST">
<?php
session_start();
echo "Bienvenido usuario " .$_SESSION['txtNombre'];
echo "<table>";
echo "<tr>";
echo "<td>Nombre:</td>"; 
echo "<td><input type=text size=10 maxlength=10 name='txtNombre' /></td></tr>";
echo "<tr>";
echo "<td>Telefono:</td>";
echo "<td><input type=text size=10 maxlength=10 name='txtTelefono' /></td></tr>";
echo "<tr>";
echo "<td>Celular:</td>";
echo "<td><input type=text size=10 maxlength=10 name='txtCelular' /></td></tr>";
echo "<tr>";
echo "<td>Direccion:</td>";
echo "<td><input type=text size=10 maxlength=10 name='txtDomicilio' /></td></tr>";
echo "<tr>";
echo "<td><input type=submit name='Enviar' value='Guardar'/></td>";
echo "<td><a href =\"Sesion.php\"> Regresar </a></td></tr>";
echo "</table>";
?>
</body>
</html>