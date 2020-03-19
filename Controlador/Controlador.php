<?php

class Controlador{
    public function abrir_pagina($url){
        require $url;
    }
    //CATEGORIAS
    public function RegistrarCategoria($frmcat_desc,$frmcat_estado){ 
        $dao = new DAOAdmin();
        $categoria = new Categoria();  
        $categoria->setfrmcat_desc($frmcat_desc); 
        $categoria->setfrmcat_estado($frmcat_estado); 
        $result = $dao->RegistrarCategoria($categoria); 
    }

    public function EditarCategoria($id){
        $dao = new DAOAdmin(); 
        $categoria = new Categoria(); 
        $categoria->setfrmcat_id($id); 
        $result = $dao->EditarCategoria($categoria); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['ID'], 'DES_CAT' => $row['DES_CAT'], 'ESTADO' => $row['ESTADO']); 
        echo json_encode($data); 
     }
 
     public function ActualizarCategoria($frmcat_id1,$frmcat_desc1,$frmcat_estado1){
         $dao = new DAOAdmin(); 
         $categoria = new Categoria();
         $categoria->setfrmcat_id($frmcat_id1); 
         $categoria->setfrmcat_desc($frmcat_desc1); 
         $categoria->setfrmcat_estado($frmcat_estado1);
         $result = $dao->ActualizarCategoria($categoria); 
     }
 
     public function EliminarCategoria($id){ 
         $dao = new DAOAdmin(); 	
         $categoria = new Categoria(); 
         $categoria->setfrmcat_id($id); 
         $result = $dao->EliminarCategoria($categoria);
     }

    //PRODUCTOS

    public function RegistrarProducto($frmnombre,$frmcategoria_id,$frmimg_pro,$frmdes_pro,$frmstock,$frmestado,$frmval_pro,$frmprecio_prov){ 
        $dao = new DAOAdmin();
        $producto = new Producto();  
        $producto->setfrmnombre($frmnombre); 
        $producto->setfrmcategoria_id($frmcategoria_id);
        $producto->setfrmimg_pro($frmimg_pro);
        $producto->setfrmdes_pro($frmdes_pro);
        $producto->setfrmstock($frmstock);
        $producto->setfrmestado($frmestado);
        $producto->setfrmval_pro($frmval_pro);
        $producto->setfrmprecio_prov($frmprecio_prov);
        $result = $dao->RegistrarProducto($producto); 
    }

    public function EditarProducto($id){
        $dao = new DAOAdmin(); 
        $producto = new Producto(); 
        $producto->setfrmid($id); 
        $result = $dao->EditarProducto($producto); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['ID'], 'NOMBRE' => $row['NOMBRE'], 'CATEGORIA_ID' => $row['CATEGORIA_ID'], 'IMG_PRO' => $row['IMG_PRO'], 'DES_PRO' => $row['DES_PRO'], 'STOCK' => $row['STOCK'], 'STOCK' => $row['STOCK'], 'ESTADO' => $row['ESTADO'], 'VAL_PRO' => $row['VAL_PRO'], 'PRECIO_PROVE' => $row['PRECIO_PROVE']); 
        echo json_encode($data); 
     }
 
     public function ActualizarProducto($frmid1,$frmnombre1,$frmcategoria_id1,$frmimg_pro1,$frmdes_pro1,$frmstock1,$frmestado1,$frmval_pro1,$frmprecio_prov1){
         $dao = new DAOAdmin(); 
         $producto = new Producto();
         $producto->setfrmid($frmid1); 
         $producto->setfrmnombre($frmnombre1); 
         $producto->setfrmcategoria_id($frmcategoria_id1);
         $producto->setfrmimg_pro($frmimg_pro1);
         $producto->setfrmdes_pro($frmdes_pro1);
         $producto->setfrmstock($frmstock1);
         $producto->setfrmestado($frmestado1);
         $producto->setfrmval_pro($frmval_pro1);
         $producto->setfrmprecio_prov($frmprecio_prov1);
         $result = $dao->ActualizarProducto($producto); 
     }
 
     public function EliminarProducto($id){ 
         $dao = new DAOAdmin(); 	
         $producto = new Producto(); 
         $producto->setfrmid($id); 
         $result = $dao->EliminarProducto($producto);
     }
}

?>