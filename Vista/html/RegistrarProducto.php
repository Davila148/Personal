<!-- ..................................MODAL REGISTRAR PRODUCTO................................--> 
<div class="modal fade" id="frmRegistrarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog modal-lg cascading-modal" role="document"> 
		<!--Content--> 
		<div class="modal-content"> 
			<!--Header--> 
			<div class="modal-header cyan white-text"> 
				<h4 class="title">
					<i class="fa fa-pencil"></i> Registro
				</h4> 
				<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div> 
			<!--Body--> 
			<div class="modal-body mb-0"> 
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmnombres" class="form-control" placeholder="Nombre"> 
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmcategorias_id" class="form-control" placeholder="Categoria">   
						</div> 
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmimg_pro" class="form-control" placeholder="Imagen"> 
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmdes_pro" class="form-control" placeholder="Descripcion"> 
						</div> 
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmstock" class="form-control" placeholder="Stock"> 
						</div> 
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmestado" class="form-control" placeholder="Estado"> 
						</div> 
					</div>
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmval_pro" class="form-control" placeholder="Valor de venta"> 
						</div> 
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmprecio_prov" class="form-control" placeholder="Valor de compra"> 
						</div> 
					</div>
					<div class="col-md-1"></div>  
				</div>
				<br><br>	
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="RegistrarProductos">Registrar 
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>


<!-- .....................................MODAL EDITAR PRODUCTO.......................................--> 
<div class="modal fade" id="frmEditarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg cascading-modal" role="document"> 
		<!--Content--> 
		<div class="modal-content"> 
			<!--Header--> 
			<div class="modal-header cyan white-text"> 
				<h4 class="title">
					<i class="fa fa-pencil"></i> Actualizar
				</h4> 
				<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div> 
			<!--Body--> 
			<div class="modal-body mb-0">

				<div class="row no-gutters">
					<div class="col-md-2"></div> 
					<div class="col-md-8"> 
						<div class="md-form form-sm"> 
							<input type="text" disabled="true" id="frmid1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-2"></div> 
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmnombre1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcategoria_id1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmimg_pro1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmdes_pro1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmstock1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmestado1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-1"></div>  
				</div> 
				<br>
				<div class="row no-gutters"> 
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmval_pro1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-2"></div>  
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmprecio_prov1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-1"></div>  
				</div> 
				<br><br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarProducto">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>