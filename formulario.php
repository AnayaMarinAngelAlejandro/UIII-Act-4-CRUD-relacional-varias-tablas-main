<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Código del paquete:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Código">

		<label for="nombre">Nombre del Producto:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Nombre">

		<label for="descripcion">Descripcion:</label>
		<input class="form-control" required type="text" id="descripcion" name="descripcion" placeholder="Descripcion">

		<label for="precio">Precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio">

		<label for="cantidadstock">Stock Disponible:</label>
		<input class="form-control" required type="text" id="cantidadstock" name="cantidadstock" placeholder="Stock Disponibles">

		<label for="tamano">Tamaño (En centimetros):</label>
		<input class="form-control" name="tamano" required type="text" id="tamano" placeholder="Tamaño">

		<label for="peso">Peso (En gramos):</label>
		<input class="form-control" required type="text" id="peso" name="peso" placeholder="Peso">

		<label for="fechalanzamiento">Fecha de lanzamiento:</label>
		<input class="form-control" name="fechalanzamiento" required type="text" id="fechalanzamiento" placeholder="Fecha de lanzamiento">

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>