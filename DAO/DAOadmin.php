<?php

class DAOAdmin{

    //Categorias
    public function RegistrarCategoria(Categoria $categoria){ 
        echo "<script>alert('dao');</script>";
        $conexion = new Conexion(); 
        $frmcat_id=$categoria->getfrmcat_id(); 
        $frmcat_desc=$categoria->getfrmcat_desc(); 
        $frmcat_estado=$categoria->getfrmcat_estado(); 

        $error = 1; 
        $exito = 2; 

        if ($frmcat_desc == "" OR $frmcat_estado == "" ) { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO categorias VALUES (null,'$frmcat_desc','$frmcat_estado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $id=$categoria->getfrmcat_id(); 
        $sql = "SELECT * FROM categorias WHERE ID = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $frmcat_id1=$categoria->getfrmcat_id(); 
        $frmcat_desc1=$categoria->getfrmcat_desc(); 
        $frmcat_estado1=$categoria->getfrmcat_estado();

        $sql = "UPDATE categorias SET DES_CAT = '$frmcat_desc1', ESTADO = '$frmcat_estado1' WHERE ID = '$frmcat_id1'"; 

        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    public function EliminarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $id=$categoria->getfrmcat_id(); 

        $sql = "DELETE FROM categorias WHERE ID = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //Productos

    public function RegistrarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $frmid=$producto->getfrmid();
        $frmnombre=$producto->getfrmnombre(); 
        $frmcategoria=$producto->getfrmcategoria_id(); 
        $frmimg_pro=$producto->getfrmimg_pro(); 
        $frmdes_pro=$producto->getfrmdes_pro(); 
        $frmstock=$producto->getfrmstock(); 
        $frmestado=$producto->getfrmestado(); 
        $frmval_pro=$producto->getfrmval_pro(); 
        $frmprecio_prov=$producto->getfrmprecio_prov(); 
        
        $error = 1; 
        $exito = 2; 

        if ($frmnombre == "" OR $frmcategoria == "" OR $frmimg_pro == "" OR $frmdes_pro == "" OR $frmstock == "" OR $frmestado == "" OR $frmval_pro == "" OR $frmprecio_prov == "" ) { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO productos VALUES (null,'$frmnombre','$frmcategoria','$frmimg_pro','$frmdes_pro','$frmstock','$frmestado','$frmval_pro','$frmprecio_prov')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $id=$producto->getfrmid(); 
        $sql = "SELECT * FROM productos WHERE ID = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $frmid1=$producto->getfrmid(); 
        $frmnombre1=$producto->getfrmnombre(); 
        $frmcategoria_id1=$producto->getfrmcategoria_id(); 
        $frmimg_pro1=$producto->getfrmimg_pro(); 
        $frmdes_pro1=$producto->getfrmdes_pro(); 
        $frmstock1=$producto->getfrmstock(); 
        $frmestado1=$producto->getfrmestado(); 
        $frmval_pro1=$producto->getfrmval_pro(); 
        $frmprecio_prov1=$producto->getfrmprecio_prov(); 

        $sql = "UPDATE productos SET NOMBRE = '$frmnombre1', CATEGORIA_ID = '$frmcategoria_id1', IMG_PRO ='$frmimg_pro1', DES_PRO = '$frmdes_pro1', STOCK = '$frmstock1', ESTADO = '$frmestado1', VAL_PRO = '$frmval_pro1', PRECIO_PROVE = '$frmprecio_prov1' WHERE ID = '$frmid1'"; 

        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    public function EliminarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $id=$producto->getfrmid(); 
        $sql = "DELETE FROM productos WHERE ID = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }
}

?>