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
            <form class="p-2 m-2"
                action="https://inteligenciadevendas.my.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
                method="POST" target="_blank">
                <div class=" rounded p-4 mb-2">
                    <input type="hidden" name="oid" value="00D6A000001UcOT">
                    <input type="hidden" name="retURL" value="https://automarcol.com/">
                    <label for="m_first_name">Nombre:</label>
                    <input id="m_first_name" maxlength="40" class="form-control" name="first_name" size="20"
                        type="text">
                    <label for="m_last_name">Apellido:</label>
                    <input id="m_last_name" maxlength="80" class="form-control" name="last_name" size="20" type="text">
                    <label for="m_email">Email:</label>
                    <input id="m_email" maxlength="80" name="email" class="form-control" size="20" type="text">
                    <label for="m_mobile">Teléfono Móvil / Contacto:</label>
                    <input id="m_mobile" maxlength="40" name="mobile" class="form-control" size="20" type="text">
                    <label for="m_VehicleModelLatam__c">Vehículo de interés</label>
                    <select id="m_VehicleModelLatam__c" class="form-control" name="VehicleModelLatam__c">
                        <option value="">Seleccionar</option>
                        <option value="Fusion Colombia">Fusion</option>
                        <option value="Mustang Colombia">Mustang</option>
                        <option value="Ecosport Colombia">Ecosport</option>
                        <option value="Escape Colombia">Escape</option>
                        <option value="Bronco Colombia">Bronco</option>
                        <option value="Edge Colombia">Edge</option>
                        <option value="Explorer Colombia">Explorer</option>
                        <option value="Expedition Colombia">Expedition</option>
                        <option value="Ranger Colombia">Ranger</option>
                        <option value="F150 Colombia">F150</option>
                    </select>

                    <input type="hidden" id="m_recordType" name="recordType" value="0122K000001QJ5O">
                    <input type="hidden" id="m_MobilePhoneType__c" name="MobilePhoneType__c" value="Personal">
                    <input type="hidden" id="m_LeadSubSource__c" name="LeadSubSource__c" value="Website Colombia">
                    <input type="hidden" id="m_LeadSubSource2__c" name="LeadSubSource2__c" value="Organic">
                    <input type="hidden" id="m_DealerCode__c" name="DealerCode__c" value="C1013">
                    <input type="hidden" id="m_lead_source" name="lead_source" value="Dealer Digital Colombia">

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
                        <button class="btn btn-dark fs-2" name='submit' id='submit' type="submit">Generar PQR</button>
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