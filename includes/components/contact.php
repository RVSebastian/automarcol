<?php

if (isset($_POST['contactanos'])) {
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['nombre'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];
    $motivo = $_POST['motivo'];
    $query = "INSERT INTO leads(nombres, apellidos, correo, telefono, vinteres, medio) 
    VALUES ('$nombres', '$apellidos', '$correo','$celular', '$motivo', 'pagina')";
    mysqli_query($conn, $query);
}

?>

<style>
.contac .titulo {
    font-size: 90px;
    font-weight: bold;
    color: var(--main) !important;
    margin: 12px;
}

.contac .subtitulo {
    font-weight: bold;
    text-align: center;
    font-size: 40px;
    color: var(--main) !important;
    margin: 12px;
    padding: 0;
}

.fs-4 {
    margin: 12px;
}
</style>
<section class="bg-gray">
    <div class="pb-5 container">
        <div class="row">
            <div class="col-md-7">
                <div class="row gx-2 p-4 bg-white rounded mx-4 rounded rounded-3">
                    <h1 class="fs-1 fw-bold titulo text-center  my-4">AUTOMARCOL MULTIMARCAS</h2>
                        <div class="col-md-6 p-4 text-center">
                            <h2 class="fs-2 subtitulo text-center fw-bold">Sector de Ventas</h2>
                            <p class="fs-4 fw-bold">LUNES | MARTES | MIERCOLES | JUEVES | VIERNES</p>
                            <p class="fs-4">8:00 AM - 6:00 PM</p>
                            <p class="fs-4 fw-bold">SABADO</p>
                            <p class="fs-4">8:00 AM - 6:00 PM</p>
                            <p class="fs-4 fw-bold">DOMINGO</p>
                            <p class="fs-4">8:00 AM - 2:00 PM</p>
                        </div>
                        <div class="col-md-6 p-4 text-center">
                            <h2 class="fs-2 subtitulo text-center fw-bold">Sector de Taller</h2>
                            <p class="fs-4 fw-bold">LUNES | MARTES | MIERCOLES | JUEVES | VIERNES</p>
                            <p class="fs-4">8:00 AM -6:00 PM</p>
                            <p class="fs-4 fw-bold">SABADO</p>
                            <p class="fs-4">8:00 AM - 2:00 PM</p>
                            <p class="fs-4 fw-bold">DOMINGO</p>
                            <p class="fs-4">CERRADO</p>
                        </div>
                        <p class="fs-4 text-center  text-black">Encuentranos en la Av. Libertadores #2-160, Cúcuta,
                            Norte de Santander</p>
                        <p class="fs-4 text-center text-black"><i class='bx bx-phone-call'></i>Pide tu cita al Telefono +57 3157006633</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row gx-2 mx-2 bg-white p-4 mx-2 rounded">
                    <form class="p-2 m-2" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-3">Nombres<span
                                    class="text-muted fs-4"></span></label>
                            <input type="text" required class="form-control" name="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-3">Apellidos<span
                                    class="text-muted fs-4"></span></label>
                            <input type="text" required class="form-control" name="apellidos"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label fs-3">Celular <span
                                    class="text-muted fs-4"></span></label>
                            <input type="text" required class="form-control" name="celular">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-3">Correo Electronico <span
                                    class="text-muted fs-4"></span></label>
                            <input type="text" required class="form-control" name="correo" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-3">Comentario<span
                                    class="text-muted fs-4"></span></label>
                            <input type="text" required class="form-control" name="comentario"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-3">Propósito<span
                                    class="text-muted fs-4"></span></label>
                            <select class="form-control" name="motivo" aria-label="C">
                                <option value="Compra vehículo Ford" class="fs-4">Compra vehículo Ford</option>
                                <option value="Compra vehículo Multimarca" class="fs-4">Compra vehículo Multimarca
                                </option>
                                <option value="Agendamiento taller Ford" class="fs-4">Agendamiento taller Ford</option>
                                <option value="Agendamiento taller Multimarca" class="fs-4">Agendamiento taller
                                    Multimarca</option>
                                <option value="Otro motivo" class="fs-4">Otro motivo</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-4 ml-4 ">
                            <input type="checkbox" class="form-check-input fs-3" required name="terminos">
                            <label class="form-check-label fs-3" for="exampleCheck1">Acepta los términos y
                                condiciones</label>
                        </div>
                        <div class="mb-3 form-check">
                           <a href="./tratamientodp" class="fs-3 text-body" target="_blank">Leer Terminos y Condiciones</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="contactanos" class="btn btn-dark fs-3">Enviar</button>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
    <div class="container p-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.37882059403637!2d-72.49417628470384!3d7.918910916947649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e66453783ff406d%3A0xdb8c10c4ad431621!2sAUTOMARCOL%20FORD%20C%C3%BAcuta!5e0!3m2!1ses-419!2sco!4v1672175093137!5m2!1ses-419!2sco"
            width="100%" height="50%" style="border:0;" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>