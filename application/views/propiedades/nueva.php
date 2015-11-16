  <!-- Site Showcase -->
  <div class="site-showcase">
  <!-- Start Page Header -->
  <div class="parallax page-header" style="background-image:url(http://placehold.it/1200x260&amp;text=IMAGE+PLACEHOLDER);">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
  					<h1>CARGAR NUEVA PROPIEDAD</h1>
        		</div>
           </div>
       </div>
  </div>
  <!-- End Page Header -->
  </div>
  <!-- Start Content -->
  <div class="main" role="main">
      <div id="content" class="content full">
        	<div class="container">
          		<div class="page">
        			<div class="row">
              			<div class="col-md-12">
                                    <form method="POST">
                          <div class="block-heading" id="details">
                     			
                              <h4><span class="heading-icon"><i class="fa fa-home"></i></span>Información general</h4>
                          </div>
                          <div class="padding-as25 margin-30 lgray-bg">
                              <div class="row">
                                      <div class="col-md-4 col-sm-4">
                                          <input name="titulo" type="text" class="form-control" maxlength="100" placeholder="Titulo" required autofocus>
                                  </div>
                                      <div class="col-md-4 col-sm-4">
                                          <input name="direccion" type="text" class="form-control" maxlength="200" placeholder="Dirección (Mapa)" required>
                                  </div>
                                      <div class="col-md-4 col-sm-4">
                                          <input name="barrio" type="text" class="form-control" maxlength="100" placeholder="Barrio" required>
                                  </div>
                              </div>
                              <div class="row">
                                      <div class="col-md-4 col-sm-4">
                                          <select name="provincia" class="form-control" placeholder="Provincia" required>
                                              <option value="NO USAR" selected disabled>Provincia</option>
                                                <?php foreach($provincias as $provincia) { ?>
                                                <option value="<?=$provincia['idprovincia']?>"><?=$provincia['provincia']?></option>
                                                <?php } ?>
                                          </select>
                                      </div>
                                      <div class="col-md-8 col-sm-8 submit-description">
                                      <textarea name="descripcion" class="form-control margin-0" rows="5" cols="10" placeholder="Descripción" required></textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="block-heading" id="additionalinfo">
                     			 
                            <h4><span class="heading-icon"><i class="fa fa-plus"></i></span>Detalles</h4>
                          </div>
                          <div class="padding-as25 margin-30 lgray-bg">
                              <div class="row">
                                  <div class="col-md-2 col-sm-2">
                                      <select name="moneda" class="form-control">
                                          <option value="NO USAR" disabled selected>Moneda</option>
                                          <?php foreach($monedas as $moneda) { ?>
                                          <option value="<?=$moneda['idmoneda']?>"><?=$moneda['simbolo']?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                                  <div class="col-md-2 col-sm-2">
                                      <input name="precio" type="text" class="form-control" placeholder="Precio">
                                  </div>
                                      <div class="col-md-4 col-sm-4 submit-property-type">
                                          <select name="tipo_propiedad" class="form-control margin-0 selectpicker">
                                              <option value="NO USAR" disabled selected>Tipo de propiedad</option>
                                              <?php foreach($tipos_propiedad as $tipo_propiedad) { ?>
                                              <option value="<?=$tipo_propiedad['idtipo_propiedad']?>"><?=$tipo_propiedad['tipo_propiedad']?></option>
                                              <?php } ?>
                                          </select>
                                  	</div>
                                      <div class="col-md-4 col-sm-4 submit-contract-type">
                                          <select name="tipo_operacion" class="form-control margin-0 selectpicker">
                                              <option value="NO USAR" disabled selected>Tipo de operación</option>
                                              <?php foreach($tipos_operacion as $tipo_operacion) { ?>
                                              <option value="<?=$tipo_operacion['idtipo_operacion']?>"><?=$tipo_operacion['tipo_operacion']?></option>
                                              <?php } ?>
                                          </select>
                                  </div>
                              </div>
                              <div class="row">
                              		<div class="col-md-4 col-sm-4">
                                          <select name="habitacion" class="form-control selectpicker">
                                              <option value="NO USAR" selected disabled>Habitaciones</option>
                                          	<?php foreach($habitaciones as $habitacion) { ?>
                                              <option value="<?=$habitacion['idhabitacion']?>"><?=$habitacion['habitacion']?></option>
                                                <?php } ?>
                                      	</select>
                                  	</div>
                                    <div class="col-md-4 col-sm-4">
                                          <select name="bano" class="form-control selectpicker">
                                              <option value="NO USAR" selected disabled>Baños</option>
                                          	<?php foreach($banos as $bano) { ?>
                                              <option value="<?=$bano['idbano']?>"><?=$bano['bano']?></option>
                                                <?php } ?>
                                      	   </select>
                                  	</div>
                                   	<div class="col-md-4 col-sm-4">
                                          <select name="cochera" class="form-control selectpicker">
                                              <option value="NO USAR" selected disabled>Cochera</option>
                                          	<?php foreach($cocheras as $cochera) { ?>
                                              <option value="<?=$cochera['idcochera']?>"><?=$cochera['cochera']?></option>
                                                <?php } ?>
                                      	  </select>
                                  	</div>
                              </div>
                              <div class="row">
                                 	<div class="col-md-3 col-sm-3">
                                      	<label>Subir imagenes</label>
                                        <p>Seleccione las imagenes de la propiedad</p> 
                                  	</div>
                                 	<div class="col-md-3 col-sm-3 submit-image">
                                    	<div class="image-placeholder">800x600 (JPG)</div>
                                    	<input type="file" name="image1">
                                  </div>
                              </div>
                          </div>
                          <div class="block-heading" id="amenities">
                     			 <a href="#submit-property" class="btn btn-sm btn-default pull-right">Submit Property <i class="fa fa-chevron-down"></i></a>
                              <h4><span class="heading-icon"><i class="fa fa-star"></i></span>Amenities</h4>
                          </div>
                          <div class="padding-as25 margin-30 lgray-bg">
                              <div class="row">
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Air Conditioning
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Heating
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Balcony
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Dishwasher
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Pool
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Internet
                                       	</label> 	
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Terrace
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Microwave
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Fridge
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Cable TV
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Security Camera
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Toaster
                                       	</label> 	
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Grill
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Oven
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Fans
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Servants
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Furnished
                                       	</label> 	
                                  </div>
                                  <div class="col-md-2 col-sm-2 col-xs-6">
                                     	<label class="checkbox">
                                        	<input type="checkbox">Cupboards
                                       	</label> 	
                                  </div>
                              </div>
                          </div>
                          <div class="text-align-center" id="submit-property">
                          	<button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> Guardar y Subir </button>
                          </div>
                        	</form>	
                   	</div>
          			</div>
        		</div>
      		</div>
    	</div>
  </div>
