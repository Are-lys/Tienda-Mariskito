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
            <button class="btn btn-dark btn-sm" id="btn-consulta" style="margin-top: 35px;" onclick="fntSearchData()">
                <i class=" fa fa-search mr-2"></i> Consultar</button>
        </div>
    </div>

    <div class="row d-none" id="tabla-reporte-data">
        <div class="col-12 mt-2">
            <div class="row d-flex justify-content-center">
                <div class="col-6 col-md-2">
                    <img src="<?= media() ?>/tienda/images/logo-mariskito.png" width="100px">
                </div>
                <div class="col-6 col-md-7">
                    <h3 class="text-center"><b>MARISKITO</b></h3>
                    <h6 class="text-center">Últimos Pedidos</h6>
                </div>
                <div class="col-6 col-md-2">
                    <img src="<?= media() ?>/images/logo.jpeg" width="100px">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Últimos Pedidos</h3>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Tipo Pago</th>
                                    <th>Estado</th>
                                    <th class="text-right">Monto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tabla-data">
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php footerAdmin($data); ?>