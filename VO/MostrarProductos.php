<?php 

	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM productos";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarProducto\" onclick=\"EditarProducto('.$filas['ID'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarProductos('.$filas['ID'].')\"><i class=\"fa fa-trash\"></i></button>';
		
		$tabla.='{
			"ID":"'.$filas['ID'].'",
			"Nombre":"'.$filas['NOMBRE'].'",
			"Categoria":"'.$filas['CATEGORIA_ID'].'",
			"Imagen":"'.$filas['IMG_PRO'].'",
			"Descripcion":"'.$filas['DES_PRO'].'",
			"Stock":"'.$filas['STOCK'].'",
			"Estado":"'.$filas['ESTADO'].'",
			"Valor_venta":"'.$filas['VAL_PRO'].'",
			"Valor_compra":"'.$filas['PRECIO_PROVE'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>