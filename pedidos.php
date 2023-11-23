<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT tbl_pedidos.total, tbl_pedidos.fecha, tbl_pedidos.id, GROUP_CONCAT(	tbl_productos.codigo, '..', tbl_productos.nombre, '..',  tbl_productos.descripcion, '..', tbl_productos.precio, '..',  tbl_productos.cantidadstock, '..', tbl_productos.tamano, '..',  tbl_productos.peso, '..', tbl_productos.fechalanzamiento, '..', tbl_productosvendidos.cantidad SEPARATOR '__') AS tbl_productos FROM tbl_pedidos INNER JOIN tbl_productosvendidos ON tbl_productosvendidos.id_venta = tbl_pedidos.id INNER JOIN tbl_productos ON tbl_productos.id = tbl_productosvendidos.id_producto GROUP BY tbl_pedidos.id ORDER BY tbl_pedidos.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Ventas</h1>
		<div>
			<a class="btn btn-success" href="./vender.php">Nueva <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Número</th>
					<th>Fecha</th>
					<th>Productos vendidos</th>
					<th>Total</th>
					<th>Ticket</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($ventas as $venta){ ?>
				<tr>
					<td><?php echo $venta->id ?></td>
					<td><?php echo $venta->fecha ?></td>
					<td>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre del Producto</th>
									<th>Descripcion</th>
									<th>Precio</th>
									<th>Stock</th>
									<th>Tamaño</th>
									<th>Peso</th>
									<th>Fecha de lanzamiento</th>
									<th>Cantidad</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach(explode("__", $venta->tbl_productos) as $productosConcatenados){ 
								$producto = explode("..", $productosConcatenados)
								?>
								<tr>
									<td><?php echo $producto[0] ?></td>
									<td><?php echo $producto[1] ?></td>
									<td><?php echo $producto[2] ?></td>
									<td><?php echo $producto[3] ?></td>
									<td><?php echo $producto[4] ?></td>
									<td><?php echo $producto[5] ?></td>
									<td><?php echo $producto[6] ?></td>
									<td><?php echo $producto[7] ?></td>
									<td><?php echo $producto[8] ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</td>
					<td><?php echo $venta->total ?></td>
					<td><a class="btn btn-info" href="<?php echo "imprimirTicket.php?id=" . $venta->id?>"><i class="fa fa-print"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminarVenta.php?id=" . $venta->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>