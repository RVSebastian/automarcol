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
.fs-4 {
    margin: 12px;
}

.wrapper {
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    padding: 34px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.wrapper h2 {
    position: relative;
    font-size: 22px;
    font-weight: 600;
    color: #333;
}

.wrapper h2::before {
    content: '';
    position: absolute;
    left: 15;
    bottom: 0;
    height: 3px;
    width: 50px;
    border-radius: 12px;
    background: var(--main);
}

.wrapper form {
    margin-top: 30px;
}

.wrapper form .input-box {
    height: 52px;
    margin: 18px 0;
}

form .input-box input,
select {
    height: 100%;
    width: 100%;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-weight: 400;
    color: #333;
    border: 1.5px solid #C7BEBE;
    border-bottom-width: 2.5px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.input-box input:focus,
.input-box input:valid,
select:focus,
select:valid {
    border-color: var(--main);
}

form .policy {
    display: flex;
    align-items: center;
}

form h3 {
    color: #707070;
    font-size: 14px;
    font-weight: 500;
    margin-left: 10px;
}

.input-box.button input {
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: var(--main);
    cursor: pointer;
}



form .text h3 {
    color: #333;
    width: 100%;
    text-align: center;
}

form .text h3 a {
    color: #4070f4;
    text-decoration: none;
}

form .text h3 a:hover {
    text-decoration: underline;
}
</style>
<br><br>
<section class="bg-gray m-5">
    <div class="container-md">
        <div class="row gx-2 gy-5">
            <div class="col-md-7 p-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.37882059403637!2d-72.49417628470384!3d7.918910916947649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e66453783ff406d%3A0xdb8c10c4ad431621!2sAUTOMARCOL%20FORD%20C%C3%BAcuta!5e0!3m2!1ses-419!2sco!4v1672175093137!5m2!1ses-419!2sco"
                    width="100%" height="100%" style="border:0;" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="bg-white p-4 mx-2 rounded wrapper">
                    <h2 class="p-4">Contactanos</h2>
                    <form class="p-2 m-2" method="POST">
                        <div class="mb-3 input-box">
                            <input type="text" required placeholder="Nombres" name="nombre"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 input-box">
                            <input type="text" required placeholder="Apellidos" name="apellidos"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 input-box">
                            <input type="text" required placeholder="Celular" name="celular">
                        </div>
                        <div class="mb-3 input-box">
                            <input type="text" required placeholder="Correo" name="correo" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 input-box">
                            <input type="text" required placeholder="Comentario" name="comentario"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 input-box">
                            <select class="" name="motivo" aria-label="C">
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
                            <a href="./tratamientodp" class="fs-3 text-body" target="_blank">Leer Terminos y
                                Condiciones</a>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="contactanos" class="btn btn-dark fs-3">Enviar</button>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</section>
<br><br><br>