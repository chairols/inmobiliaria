  <!-- Site Showcase -->
  <div class="site-showcase">
  <!-- Start Page Header -->
  <div class="parallax page-header" style="background-image:url(http://placehold.it/1200x260&amp;text=IMAGE+PLACEHOLDER);">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
  					<h1>MIS PROPIEDADES EN VENTA</h1>
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
                  		<div class="block-heading" id="details">
                     			<a href="#additionalinfo" class="btn btn-sm btn-primary pull-right">Agregar nueva propiedad<i class="fa fa-long-arrow-right"></i></a>
           		                <h4><span class="heading-icon"><i class="fa fa-home"></i></span>PROPIEDADES EN VENTA</h4>
                     		</div>
        					<div class="properties-table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="15%">Imagen principal</th>
                                        <th width="25%">Título</th>
                                        <th width="11%">Tipo</th>
                                        <th width="12%">Operación</th>
                                        <th width="11%">Precio</th>
                                        <th width="26%">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($propiedades as $propiedad) { ?>
                                    <tr>
                                        <td>
                                            <a href="property-detail.html"><img src="http://placehold.it/150x100&amp;text=IMAGE+PLACEHOLDER" alt="" width="150"></a>
                                        </td>
                                        <td><a href="#"><?=$propiedad['titulo']?></a></td>
                                        <td><?=$propiedad['tipo_propiedad']?></td>
                                        <td><?=$propiedad['tipo_operacion']?></td>
                                        <td><strong><?=$propiedad['simbolo']?> <?=$propiedad['precio']?></strong></td>
                                        <td>
                                            <a href="#" class="action-button"><i class="fa fa-pencil"></i> <span>Editar</span></a>
                                            <a href="property-detail.html" class="action-button"><i class="fa fa-eye"></i> <span>Ver</span></a>
                                            <a href="#" class="action-button"><i class="fa fa-ban"></i> <span>Borrar</span></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                             </table>
                          </div>
                          <div class="text-align-center">
                              <ul class="pagination">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                              </ul>
                  		</div>
                      </div>
          			</div>
        		</div>
      		</div>
    	</div>
  </div>
