<?php include'./includes/components/header.php';?>

<style>
.form-control {
    background-color: #F8F9F9;
    padding: 4px;
    border-radius: 5px;
    font-size: 15px;
}

.formulario {
    max-width: 80rem;
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
    <div class="row m-4">
        <div class="col-12 bg-white p-4 fs-3 rounded mx-auto formulario"
            style=" box-shadow: 0 4px 80px rgb(38 25 88 / 10%) !important;">
            <form class="p-4 m-2" method="POST">
                <h1 class="text-center">TRATAMIENTO DE DATOS PERSONALES</h1>
                <p class="fs-4 pt-2">
                    de conformidad
                    con la ley 1581 de 2012 (Ley de Protección de Datos Personales)
                </p>
                <p class="fs-4 pt-2">
                    Entiendo que Ford Motor de Colombia S.A.S (En adelante “Ford”) y
                    AUTOMARCOL S.A.S informan que para efectos de dar cabal cumplimiento
                    a las Obligaciones emanadas del contrato de compraventa y/o de servicio
                    posventa en Relación con mi vehículo. Y demás obligaciones descritas en la
                    ley en relación con vehículos automotores deberán hacer tratamiento de
                    mis datos personales.
                </p>
                <p class="fs-4 pt-2">
                    Esta información podrá ser tratada bien en virtud de la autorización o por
                    mandato legal por AUTOMARCOL S.A.S, FORD, su Casa Matriz, sociedades
                    vinculadas, afiliadas y sus proveedores, bien sea en Colombia o en el
                    exterior de acuerdo con lo descrito en su política de privacidad disponible
                    en www.ford.com.co
                </p>
                <p class="fs-4 pt-2">
                    Autorizo a AUTOMARCOL S.A.S y FORD, para permitir el tratamiento de
                    mis datos para investigaciones de mercado y para fines publicitarios y
                    promocionales de la compañía.
                </p>
                <p class="fs-4 pt-2">
                    Las políticas de privacidad de AUTOMARCOL S.A.S y de FORD respecto del
                    tratamiento de los datos personales están disponibles en los términos y
                    condiciones de uso de las páginas web www.Automarcol.com y
                    www.ford.com.co o en nuestras oficinas localizadas en AV. Libertadores
                    N°.2-160 Zona franca en Cúcuta y Cra. 7 N°. 113-43 Of. 1101 en Bogotá. Para
                    ejercer sus derechos de conocer, actualizar y rectificar sus datos personales,
                    así como revocarla autorización, presentar reclamos, podrá dirigirse a los
                    siguientes correos electrónicos sac@automarcol.com y
                    contactoford@atento.com.co o directamente en nuestras oficinas.
                </p>

                <iframe src="./includes/Resumen.pdf&layer=mapnik" style="width:100%; height:700px;" frameborder="0"></iframe>
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