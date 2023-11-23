<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM tbl_productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Código del paquete:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="nombre">Nombre del Producto:</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el Nuevo Nombre">

			<label for="descripcionipcion">Descripcion:</label>
			<input value="<?php echo $producto->descripcion ?>" id="descripcion" name="descripcion" class="form-control" required type="text" placeholder="Escribe el paquete y recarga">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Escribe el id_chip">

			<label for="cantidadstock">Stock:</label>
			<input value="<?php echo $producto->cantidadstock ?>" id="cantidadstock" name="cantidadstock" class="form-control" required type="text" placeholder="Escribe el chip">

			<label for="tamano">Tamaño:</label>
			<input value="<?php echo $producto->tamano ?>" class="form-control" name="tamano" required type="text" id="tamano" placeholder="Escribe el id_accesorio">

			<label for="peso">Peso:</label>
			<input value="<?php echo $producto->peso ?>" id="peso" name="peso" class="form-control" required type="text" placeholder="Escribe el accesorio">

			<label for="fechalanzamiento">Fecha de lanzamiento:</label>
			<input value="<?php echo $producto->fechalanzamiento ?>" class="form-control" name="fechalanzamiento" required type="text" id="fechalanzamiento" placeholder="Escribe el id_tel">

			<label for="precioVenta">Precio de venta:</label>
			<input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

			<label for="precioCompra">Precio de compra:</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
