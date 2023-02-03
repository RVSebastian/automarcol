<?php 
if (isset($_POST['cotizar'])) {
    $nombre = $_POST['first_name']; 
    $apellido = $_POST['last_name'];
    $email = $_POST['email']; 
    $telefono = $_POST['mobile'];
    $vehiculo = $_POST['VehicleModelLatam__c'];
    $marca = $_POST['marca'];
    $query = "INSERT INTO leads(nombres, apellidos, correo, telefono, vinteres, marca, medio) 
    VALUES ('$nombre', '$apellido', '$email','$telefono', '$vehiculo', '$marca', 'pagina')";
    mysqli_query($conn, $query);
    unset($_POST['cotizar']);
    $response = "<script> enviado(); </script>";
    if ($marca == 'PRUEBA') { 
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://example.com/api/send_data",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array(
            "field1" => "value1",
            "field2" => "value2"
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    };
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"
    integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="col-md-3 pt-0 ">
    <div class="sticky-top" style="top:12rem">
        <div class="bg-white rounded-1 p-1 mb-4 mt-2">
            <h1 class="fw-semibold text-center fs-2 pt-5 p-2 pb-0">Cotiza tu
            </h1>
            <h1 class="fw-semibold text-center fs-2 pt-0 p-2"><?php echo $datos['Version_DescipcionModelo']?>
            </h1>
            <form method="POST" class="p-1 m-2 fs-4">
                <div class="rounded p-4 mb-2">
                    <input type="hidden" name="oid" value="00D6A000001UcOT">
                    <input type="hidden" name="retURL" value="https://automarcol.com/">
                    <label for="m_first_name">Nombre:</label>
                    <input required id="m_first_name" maxlength="40" class="form-control" name="first_name" size="20"
                        type="text">
                    <label for="m_last_name">Apellido:</label>
                    <input required id="m_last_name" maxlength="80" class="form-control" name="last_name" size="20"
                        type="text">
                    <label for="m_email">Email:</label>
                    <input required id="m_email" maxlength="80" name="email" class="form-control" size="20" type="text">
                    <label for="m_mobile">Teléfono Móvil / Contacto:</label>
                    <input required id="m_mobile" maxlength="40" name="mobile" class="form-control" size="20"
                        type="text">
                    <label for="m_VehicleModelLatam__c">Vehículo de interés</label>
                    <input required id="m_VehicleModelLatam__c" maxlength="40" name="VehicleModelLatam__c"
                        class="form-control" size="20" type="text" readonly
                        value="<?php echo $datos['Version_DescipcionModelo']?>">
                    <input type="hidden" id="marca" name="marca" value="<?php echo $datos['Marca']?>">
                    <input type="hidden" id="m_recordType" name="recordType" value="0122K000001QJ5O">
                    <input type="hidden" id="m_MobilePhoneType__c" name="MobilePhoneType__c" value="Personal">
                    <input type="hidden" id="m_LeadSubSource__c" name="LeadSubSource__c" value="Website Colombia">
                    <input type="hidden" id="m_LeadSubSource2__c" name="LeadSubSource2__c" value="Organic">
                    <input type="hidden" id="m_DealerCode__c" name="DealerCode__c" value="C1013">
                    <input type="hidden" id="m_lead_source" name="lead_source" value="Dealer Digital Colombia">


                    <div class="d-grid gap-2 pb-4 pt-3">
                        <button type="submit" name='cotizar' class='btn btn-dark fs-3 p-2'>Cotiza</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

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
        });

    };
    </script>
    <?php if (isset($response)) {
        echo $response;
    } ?>