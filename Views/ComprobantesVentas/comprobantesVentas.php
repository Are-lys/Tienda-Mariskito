<?php 
    headerAdmin($data); 
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-box"></i> <?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/productos"><?= $data['page_title'] ?></a></li>
        </ul>
    </div>
    <div class="row mb-3 d-flex justify-content-center">
        <div class="col-6 col-md-4 col-lg-3 form-group">
            <label>Desde</label>
            <input id="fecha-inicio-r-m" type="date" class="form-control form-control-sm">
        </div>
        <div class="col-6 col-md-4 col-lg-3 form-group">
            <label>Hasta</label>
            <input id="fecha-fin-r-m" type="date" class="form-control form-control-sm">
        </div>
        <div class="col-6 col-md-4 col-lg-3 form-group">
            <button class="btn btn-dark btn-sm" id="btn-consulta" style="margin-top: 35px;">
                <i class=" fa fa-search mr-2"></i> Consultar</button>
            <button class="btn btn-primary btn-sm " id="btn-imprimir" style="margin-top: 35px;">
                <i class="far fa-file-pdf mr-2"></i> PDF</button>
        </div>
    </div>

    <div class="row" id="tabla-reporte-data">
        <div class="col-12 mt-2">
            <div class="row d-flex justify-content-center">
                <div class="col-6 col-md-2">
                    <img src="<?= media() ?>/tienda/images/logo-mariskito.png" width="100px">
                </div>
                <div class="col-6 col-md-7">
                    <h3 class="text-center"><b>MARISKITO</b></h3>
                    <h6 class="text-center">Comprobantes De Venta</h6>
                    <div class="row d-flex justify-content-center">
                        <h6 class="text-purple">Desde: <span class="text-dark" id="fecha-inicio-r-m2"></span>
                        </h6>
                        <h6 class="text-purple">&nbsp - Hasta: <span class="text-dark" id="fecha-fin-r-m2"></span>
                        </h6>
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <img src="<?= media() ?>/images/logo.jpeg" width="100px">
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <small><b>Fecha de Consulta: <span id="fecha-consulta-s"></span></b></small>
                <small><b>Hora de Consulta: <span id="hora-consulta-s"></span></b></small>
            </div>

            <div class="row mt-1">
                <div class="col-12 text-center">
                    <div class="mt-3">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered dataTable text-center">
                                    <thead>
                                        <tr class="bg-purple">
                                            <th>#</th>
                                            <th>N°</th>
                                            <th>Productos</th>
                                            <th>Fecha Venta</th>
                                            <th>Subtotal</th>
                                            <th>Iva</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-reporte-data">

                                    </tbody>
                                    <tfoot>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-purple">Totales: </th>
                                        <th id="total-general" class="text-purple"></th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="mt-3">
                        <div class="card card-purple shadow-lg">
                            <div class="card-header">
                                <h5>Cantidad Totales</h5>
                            </div>
                            <div class="card-body">
                                <div id="comprobantes-totales"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>