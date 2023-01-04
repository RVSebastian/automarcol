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
    <div class="pb-5 container" >
            <div class="row">
                <div class="col-md-7" style="padding: 10px">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.37882059403637!2d-72.49417628470384!3d7.918910916947649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e66453783ff406d%3A0xdb8c10c4ad431621!2sAUTOMARCOL%20FORD%20C%C3%BAcuta!5e0!3m2!1ses-419!2sco!4v1672175093137!5m2!1ses-419!2sco"
                        width="100%" height="100%" style="border:0;" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-5 bg-white" style="border-radius: 10px; padding: 20px">
                    <div class="row gx-2">
                        <h1 class="fs-1 fw-bold titulo text-center">AUTOMARCOL MULTIMARCAS</h2>
                            <div class="col-md-6 p-4 pt-3">
                                <h2 class="fs-2 subtitulo text-center">Ventas</h2>
                                <p class="fs-4 fw-bold">LUNES | MARTES | MIERCOLES | JUEVES | VIERNES</p>
                                <p class="fs-4">8:00 AM - 6:00 PM</p>
                                <p class="fs-4 fw-bold">SABADO</p>
                                <p class="fs-4">8:00 AM - 6:00 PM</p>
                                <p class="fs-4 fw-bold">DOMINGO</p>
                                <p class="fs-4">8:00 AM - 6:00 PM</p>
                            </div>
                            <div class="col-md-6 p-4">
                                <h2 class="fs-2 subtitulo text-center">Taller</h2>
                                <p class="fs-4 fw-bold">LUNES | MARTES | MIERCOLES | JUEVES | VIERNES</p>
                                <p class="fs-4">8:00 AM -6:00 PM</p>
                                <p class="fs-4 fw-bold">SABADO</p>
                                <p class="fs-4">8:00 AM - 2:00 PM</p>
                                <p class="fs-4 fw-bold">DOMINGO</p>
                                <p class="fs-4">CERRADO</p>
                            </div>
                            <p class="fs-4 text-center text-muted">Encuentranos en la Av. Libertadores #2-160, Cúcuta,
                                Norte de Santander</p>
                            <div class="d-grid gap-2">
                                <button class="btn btn-dark fs-3" type="button" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Contactanos</button>
                            </div>
                    </div>
                </div>

            </div>


            <div class="modal fade rounded fs-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-dark text-white">
                            <h1 class="modal-title fs-3 text-center" id="staticBackdropLabel">Contactanos</h1>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="p-2 m-2">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nombre completo <span
                                            class="text-muted fs-4">-obligatorio</span></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Celular <span
                                            class="text-muted fs-4">-obligatorio</span></label>
                                    <input type="number" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Correo Electronico <span
                                            class="text-muted fs-4">-obligatorio</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Comentario <span
                                            class="text-muted fs-4">-opcional</span></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Compra vehículo Ford
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Agendamiento taller Ford
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Otro motivo
                                    </label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Acepta los términos y
                                        condiciones</label>
                                </div>

                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed fs-3 bg-light text-black"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                Leer Terminos y condiciones
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body fs-4 text-muted text-justify bg-light"> De
                                                conformidad con lo
                                                dispuesto en la ley
                                                1581 de 2012 y el
                                                decreto 1377 de 2013, declaro
                                                que entrego de forma libre y voluntaria mis datos personales, para su
                                                respectivo
                                                tratamiento
                                                por parte de CENTRAL MOTOR AMERICA SAS o sus empresas aliadas (Descritas
                                                en la
                                                política de
                                                tratamiento de datos personales). La autorización expresa se
                                                circunscribe a las
                                                siguientes
                                                ﬁnalidades: Medir niveles de satisfacción, informar sobre campañas de
                                                servicio,
                                                comunicar
                                                campañas promocionales, realizar encuestas, realizar recordatorio para
                                                mantenimientos,
                                                ejecutar campañas de fidelización de clientes, enviar invitaciones a
                                                eventos, rifas,
                                                realizar actualización de datos, invitar a pruebas de vehículos,
                                                ofrecimiento de
                                                productos y
                                                servicios, comunicar noticias de sus marcas y de la red de ventas y
                                                servicios,
                                                comunicar
                                                información relacionada con productos para la ﬁnanciación en la
                                                adquisición de
                                                nuestros
                                                bienes y servicios.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark fs-3">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      
    </div>
</section>