<?php include'./includes/components/header.php';?>
<?php 

if (isset($_POST['PQR'])) {
   $correo = $_POST['correo'];
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $documento = $_POST['documento'];
   $contacto = $_POST['contacto']; 
   $solicitud = $_POST['solicitud'];
   $evento_lugar = $_POST['evento_lugar'];
   $evento_fecha = $_POST['evento_fecha'];
   $descripcion = $_POST['descripcion'];
   $query = "INSERT INTO pqrs(correo, nombre, apellido, documento, ncontacto, tsolicitud, levento, fevento, descripcion, estado) 
   VALUES ('$correo', '$nombre', '$apellidos','$documento', '$contacto', '$solicitud', '$evento_lugar', '$evento_fecha', '$descripcion','Activo')";
   mysqli_query($conn, $query);
   unset($_POST['PQR']);
   $response = "<script> enviado(); </script>";
}
?>
<style>
.form-control {
    background-color: #F8F9F9;
    padding: 4px;
    border-radius: 5px;
    font-size: 15px;
}

.formulario {
    max-width: 60rem;
}

#pop-up-message-circle {
    background-color: var(--main) !important;
}

.bg-dark {
    background-color: #2c3b6d !important;
}
</style>
<br><br><br><br><br><br>
<section class="bg-gray bg-form" id="pqr">
    <div class="row">
        <div class="p-4">
            <h2 class="fs-1 fw-bold text-center "><i class='bx bx-check-shield'></i></h2>
            <h2 class="text-center">Formulario de Peticiones, Quejas y Reclamos (PQR)</h2>
            <h2 class="fs-3 text-muted text-justify">Para nosotros es muy importante conocer tu opinión, completa los
                siguientes
                campos y pronto nos
                pondremos en
                contacto contigo.</h2>
        </div>
        <div class="col-sm-12 col-md-6 bg-white p-4 fs-3 rounded mx-auto formulario"
            style=" box-shadow: 0 4px 80px rgb(38 25 88 / 10%) !important;">
            <form class="p-2 m-2" method="POST">
                <div class=" rounded p-4 mb-2">
                    <h2 class="text-center text-muted">Informacion del cliente</h2>
                    <div class="mb-3 mt-2">
                        <label for="correo" class="form-label">Correo</label>
                        <input required type="email" class="form-control" name="correo" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input required type="text" class="form-control" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input required type="text" class="form-control" name="apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="documento" class="form-label">Numero de documento</label>
                        <input required type="text" class="form-control" name="documento">
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Numero de contacto</label>
                        <input required type="text" class="form-control" name="contacto">
                    </div>
                </div>
                <div class=" rounded p-4 pt-2">
                    <h2 class="text-center text-muted">Informacion del caso</h2>
                    <div class="mb-3 mt-2">
                        <label for="solicitud" class="form-label">Tipo de solicitud</label>
                        <select required name='solicitud' class="form-select form-control"
                            aria-label="Default select example">
                            <option value="Queja">Queja</option>
                            <option value="Reclamo">Reclamo</option>
                            <option value="Peticion">Petición</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">¿Donde se presento el evento?</label>
                        <input required type="text" class="form-control" name="evento_lugar">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Fecha del evento</label>
                        <input required type="date" class="form-control" name="evento_fecha">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="descripcion" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-check form-switch m-2">
                    <input required class="form-check-input" type="checkbox" name='tratamiento' role="switch"
                        id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Autorizo el tratamiento de mis datos
                        personales
                    </label>

                </div>
                <div class="accordion accordion-flush mb-2" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-3 bg-light text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Leer Terminos y condiciones
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fs-4 text-muted text-justify bg-light"> De conformidad con lo
                                dispuesto en la ley
                                1581 de 2012 y el
                                decreto 1377 de 2013, declaro
                                que entrego de forma libre y voluntaria mis datos personales, para su respectivo
                                tratamiento
                                por parte de AUTOMARCOL S.A.S o sus empresas aliadas (Descritas en la
                                política de
                                tratamiento de datos personales). La autorización expresa se circunscribe a las
                                siguientes
                                ﬁnalidades: Medir niveles de satisfacción, informar sobre campañas de servicio,
                                comunicar
                                campañas promocionales, realizar encuestas, realizar recordatorio para
                                mantenimientos,
                                ejecutar campañas de fidelización de clientes, enviar invitaciones a eventos, rifas,
                                realizar actualización de datos, invitar a pruebas de vehículos, ofrecimiento de
                                productos y
                                servicios, comunicar noticias de sus marcas y de la red de ventas y servicios,
                                comunicar
                                información relacionada con productos para la ﬁnanciación en la adquisición de
                                nuestros
                                bienes y servicios.</div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-dark fs-2" name='PQR' type="submit">Generar PQR</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function enviado() {
    swal({
        title: 'Su peticion fue enviada',
        text: 'Nos contactaremos muy pronto contigo',
        icon: "success",
        buttons: {
            catch: {
                text: "Aceptar",
                value: "true",
            },
        },
    })

}
</script>
<?php if (isset($response)) {
    echo $response;
} ?>
<?php include'./includes/components/footer.php';?>