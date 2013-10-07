<html>
<head>
</head>
<body>
<form action=Nuevo.php method="POST">
<?php
session_start();
//if(!isset($_POST['txtNombre']))
//$_SESSION['txtNombre']=$_POST['txtNombre'];
if(!isset($_SESSION['txtNombre'])){
header('Location: Formulario.php');
}
echo "<table>";
echo "<tr><td>";
echo "Bienvenido usuario " .$_SESSION['txtNombre'];
echo "</td>";
echo "<td>";
echo  "<a href =\"Formulario.php\"> Cerrar Sesion </a>";
echo "</td>";
echo "</tr>";
echo "<tr><td></td><td>";
echo "<input type=submit name='Enviar' value='Nuevo'/>";
echo "</td></tr>";
?>
</body>
</html>