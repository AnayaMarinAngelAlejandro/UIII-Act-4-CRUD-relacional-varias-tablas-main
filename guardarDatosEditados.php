<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["descripcion"]) ||
	!isset($_POST["precio"]) ||
	!isset($_POST["cantidadstock"]) ||
	!isset($_POST["tamano"]) ||
	!isset($_POST["peso"]) ||
	!isset($_POST["fechalanzamiento"]) || 
	!isset($_POST["precioCompra"]) || 
	!isset($_POST["precioVenta"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$cantidadstock = $_POST["cantidadstock"];
$tamano = $_POST["tamano"];
$peso = $_POST["peso"];
$fechalanzamiento = $_POST["fechalanzamiento"];
$precioCompra = $_POST["precioCompra"];
$precioVenta = $_POST["precioVenta"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("UPDATE tbl_productos SET codigo = ?, nombre = ?, descripcion = ?, precio = ?, cantidadstock = ?, tamano = ?, peso = ?, fechalanzamiento = ?, precioCompra = ?, precioVenta = ?, existencia = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $nombre, $descripcion, $precio, $cantidadstock, $tamano, $peso, $fechalanzamiento, $precioCompra, $precioVenta, $existencia, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>