<?php 
	require "Controlador/controlador.php";
	require "VO/Conexion.php";
	require "VO/Categoria.php";
	require "DAO/DAOadmin.php";
	require "VO/Productos.php";
	
	$controlador = new Controlador();


		if (isset($_GET['accion'])) { 
			switch ($_GET['accion']) { 
				case 'categorias': $controlador->abrir_pagina("Vista/html/panel_categoria.php");
					 break; 
				case 'RegistrarCategoria' : $controlador->RegistrarCategoria($_POST['frmcat_desc'],$_POST['frmcat_estado']);
					break;
				case 'EditarCategoria': $controlador->EditarCategoria($_POST['id']); 
					break; 
				case 'ActualizarCategoria': $controlador->ActualizarCategoria($_POST['frmcat_id1'],$_POST['frmcat_desc1'],$_POST['frmcat_estado1']);
					break; 
				case 'EliminarCategoria': $controlador->EliminarCategoria($_POST['id']);
					break;
				//Productos
				case 'productos': $controlador->abrir_pagina("Vista/html/panel_productos.php");
					 break;
				case 'RegistrarProductos': $controlador->RegistrarProducto(
					$_POST['frmnombre'],
					$_POST['frmcategoria_id'],
					$_POST['frmimg_pro'],
					$_POST['frmdes_pro'],
					$_POST['frmstock'],
					$_POST['frmestado'],
					$_POST['frmval_pro'],
					$_POST['frmprecio_prov']);
					break;
				case 'EditarProducto': $controlador->EditarProducto($_POST['id']); 
					break; 
				case 'ActualizarProducto': $controlador->ActualizarProducto(
					$_POST['frmid1'],
					$_POST['frmnombre1'],
					$_POST['frmcategoria_id1'],
					$_POST['frmimg_pro1'],
					$_POST['frmdes_pro1'],
					$_POST['frmstock1'],
					$_POST['frmestado1'],
					$_POST['frmval_pro1'],
					$_POST['frmprecio_prov1']
				);
					break; 
				case 'EliminarProducto': $controlador->EliminarProducto($_POST['id']);
					break;
				}
		}else{ 
			$controlador->abrir_pagina("Vista/html/plantilla.php"); 
		}

?>
