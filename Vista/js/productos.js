$(document).ready(function(){ 
	MostrarProductos(); 
	$("#frmid").attr('readonly',true); 
}); 

	$("#RegistrarProductos").click(function(){
			var frmnombre1 = $("#frmnombres").val(),
			frmcategoria_id1 = $("#frmcategorias_id").val(),
			frmimg_pro1 = $("#frmimg_pro").val(),
			frmdes_pro1 = $("#frmdes_pro").val(),
			frmstock1 = $("#frmstock").val(),
			frmestado1 = $("#frmestado").val(),
			frmval_pro1 = $("#frmval_pro").val(),
			frmprecio_prov1 = $("#frmprecio_prov").val();

		$.post("index.php?accion=RegistrarProductos",{frmnombre:frmnombre1,
			frmcategoria_id:frmcategoria_id1,
			frmimg_pro:frmimg_pro1,
			frmdes_pro:frmdes_pro1,
			frmstock:frmstock1,
			frmestado:frmestado1,
			frmval_pro:frmval_pro1,
			frmprecio_prov:frmprecio_prov1},function(datos){

			$("#frmRegistrarProducto").modal('hide');	
			MostrarProductos();
		});

		$("#frmnombres").val("");
		$("#frmcategorias_id").val("");
		$("#frmimg_pro").val("");
		$("#frmdes_pro").val("");
		$("#frmstock").val("");
		$("#frmestado").val("");
		$("#frmval_pro").val("");
		$("#frmprecio_prov").val("");
	});	

	function MostrarProductos(){
		var table = $('#MostrarProductos').DataTable({
		destroy:true,
		responsive: true,
		"bDeferRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"VO/MostrarProductos.php",
			"type":"POST"
		},
		"columns":[
			{"data":"ID"},
			{"data":"Nombre"},
			{"data":"Categoria"},
			{"data":"Imagen"},
			{"data":"Descripcion"},
			{"data":"Stock"},
			{"data":"Estado"},
			{"data":"Valor_venta"},
			{"data":"Valor_compra"},
			{"data":"Editar"},
			{"data":"Eliminar"}
		]
	});
	new $.fn.dataTable.FixedHeader( table );
	}

	function EditarProducto(id){
		$.post("index.php?accion=EditarProducto",{id:id},function(data){

			var data = JSON.parse(data);
			console.log(data);
			$("#frmid1").val(data.ID);
			$("#frmnombre1").val(data.NOMBRE);
			$("#frmcategoria_id1").val(data.CATEGORIA_ID);
			$("#frmimg_pro1").val(data.IMG_PRO);
			$("#frmdes_pro1").val(data.DES_PRO);
			$("#frmstock1").val(data.STOCK);
			$("#frmestado1").val(data.ESTADO);
			$("#frmval_pro1").val(data.VAL_PRO);
			$("#frmprecio_prov1").val(data.PRECIO_PROVE);
		});

	}

	$("#ActualizarProducto").click(function(){

		var frmid1 = $("#frmid1").val(),
			frmnombre1 = $("#frmnombre1").val(),
			frmcategoria_id1 = $("#frmcategoria_id1").val(),
			frmimg_pro1 = $("#frmimg_pro1").val(),
			frmdes_pro1 = $("#frmdes_pro1").val(),
			frmstock1 = $("#frmstock1").val(),
			frmestado1 = $("#frmestado1").val(),
			frmval_pro1 = $("#frmval_pro1").val(),
			frmprecio_prov1 = $("#frmprecio_prov1").val();

		$.post("index.php?accion=ActualizarProducto",{frmid1:frmid1,
			frmnombre1:frmnombre1,
			frmcategoria_id1:frmcategoria_id1,
			frmimg_pro1:frmimg_pro1,
			frmdes_pro1:frmdes_pro1,
			frmstock1:frmstock1,
			frmestado1:frmestado1,
			frmval_pro1:frmval_pro1,
			frmprecio_prov1:frmprecio_prov1,},function(datos){

			$("#frmEditarProducto").modal('hide');	
			MostrarProductos();				
		});	
	});

	function EliminarProductos(id){
		$.post("index.php?accion=EliminarProducto",{id:id},function(datos){
			MostrarProductos();
		});	
	}


	