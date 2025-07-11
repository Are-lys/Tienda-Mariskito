function fntSearchData() {
    let fecha_inicio = $("#fecha-inicio-r-m").val();
    let fecha_fin = $("#fecha-fin-r-m").val();
    if (fecha_inicio == "") {
        swal("", "Seleccione una fecha incio", "error");
    } else if (fecha_fin == "") {
        swal("", "Seleccione una fecha fin", "error");
    } else if (moment(fecha_inicio).isAfter(fecha_fin)) {
        swal("", "La fecha desde no puede ser menor", "error");
    } else {
        let request = (window.XMLHttpRequest) ?
            new XMLHttpRequest() :
            new ActiveXObject('Microsoft.XMLHTTP');
        let ajaxUrl = base_url + '/VentasMensuales/ultimosPedidosFecha';
        divLoading.style.display = "flex";
        let formData = new FormData();
        formData.append('inicio', fecha_inicio);
        formData.append('fin', fecha_fin);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function () {
            if (request.readyState != 4) return;
            if (request.status == 200) {
                let objData = JSON.parse(request.responseText);
                if (objData.status) {
                    swal("Atención", objData.msg, "success");
                    $('#tabla-reporte-data').removeClass('d-none');
                    let tr = '';
                    let i = 1 ;
                    objData.html.forEach(element => {
                        tr += ` <tr>
                       <td>${element.idpedido}</td>
                       <td>${element.nombre}</td>
                       <td>${element.tipopago}</td>
                       <td>${element.status}</td>
                       <td class="text-right"></td>
                       <td><a href="http://localhost/Proyecto_Tienda/pedidos/orden/${element.idpedido}"
                               target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                   </tr>`;
                   i++;
                        
                    });
                    $('#tabla-data').html(tr);

                } else {
                    swal("Error", objData.msg, "error");
                    $('#tabla-reporte-data').addClass('d-none');
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }
}