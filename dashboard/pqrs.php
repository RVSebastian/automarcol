<?php include'./components/header.php';?>
<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="quill-image-resize-module-master/image-resize.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdn.rawgit.com/kensnyder/quill-image-resize-module/3411c9a7/image-resize.min.js">
</script>
<style>
.Activo {
    background-color: #F4D03F;
}

.Atendido {
    background-color: #27AE60;
}

.Rechazado {
    background-color: #C0392B;
}
.respuesta{
    background-color: #73B7FA;
}

#editor img {
    float: left;
    padding: 10px;
}
</style>

<div class="home-content">
    <div class="flex flex-wrap">
        <div class="basis-full m-4 mt-0 p-2">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
                <table class="w-full text-sm text-left text-gray-500 text-center">
                    <thead class="text-xs uppercase bg-gray-100 text-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombres
                            </th>
                            <th scope="col" class="px-6 py-3">
                                #Documento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Solicitud
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lugar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Respuesta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                 $query = "SELECT * FROM pqrs ORDER BY id desc";
                                 $result_task = mysqli_query($conn, $query);
                                 while ($row = mysqli_fetch_array($result_task)) { 
                                ?>
                        <tr class="bg-white border-b hover:bg-gray-200"
                            data-modal-target="defaultModal<?php echo $row['id'] ?>"
                            data-modal-toggle="defaultModal<?php echo $row['id'] ?>">
                            <td class="px-6 py-4">
                                <?php echo $row['id'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['correo'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['documento'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['ncontacto'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['tsolicitud'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['levento'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['fevento'] ?>
                            </td>
                            <td class="px-6 py-4">
                            <?php if (!empty($row['respuesta'])) { ?>
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full mr-2 respuesta"></div>
                                    Respondido
                                </div>
                            <?php } ?>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full <?php echo $row['estado'] ?> mr-2"></div>
                                    <?php echo $row['estado'] ?>
                                </div>
                            </td>
                        </tr>
                        <div id="defaultModal<?php echo $row['id'] ?>" tabindex="110" style='z-index: 200 !important'
                            aria-hidden="true"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-2xl md:h-full">
                                <div class="relative bg-white rounded-lg shadow">

                                    <div class="p-6 space-y-6 overflow-y-auto text-justify">
                                        <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                                            Nombre: <?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                                            Correo: <?php echo $row['correo'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0 mb-0">
                                            Solicitud: <?php echo $row['tsolicitud'] ?> / Lugar:
                                            <?php echo $row['levento'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            Fecha del evento: <?php echo $row['fevento'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            <?php echo $row['ncontacto'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            <?php echo $row['descripcion'] ?>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                            Responder PQR:
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-800 mt-0">
                                        <div id="editor<?php echo $row['id'] ?>"
                                            class="w-full mb-4 border border-gray-200  bg-gray-50"
                                            style="margin-top: 0px !important; height: 400px">
                                            <?php echo $row['respuesta'];?></div>
                                        </p>

                                    </div>
                                    <div class="flex items-center p-6 space-x-2 border-t  bg-gray-100 rounded-b">
                                        <form method='POST' action="./funciones/pqrs.php">
                                            <input type="hidden" name="id" value='<?php echo $row['id'] ?>'>
                                            <input type="hidden" name="correo" value='<?php echo $row['correo'] ?>'>
                                            <input type="hidden" name="nombre" value='<?php echo $row['nombre'] ?> <?php echo $row['apellido'] ?>'>
                                            <input type="hidden" name="usuario"
                                                value='<?php echo $_SESSION['key']['usuario'] ?>'>
                                            <textarea type='text' name="res" style="display: none"
                                                id='otro<?php echo $row['id'];?>'></textarea>

                                            <?php 
                                                    if (empty($row['respuesta'])) {
                                                        $idd = $row['id'];
                                                ?>
                                            <button type="submit" data-modal-hide="defaultModal<?php echo $row['id'] ?>"
                                                name="respuesta" onclick="otrochange(id='<?php echo $idd ?>')"
                                                class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Responder</button>
                                            <?php 
                                                    }else{
                                                ?>
                                            <button data-modal-hide="defaultModal<?php echo $row['id'] ?>" type="submit"
                                                name="rechazado"
                                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Rechazado</button>
                                            <button data-modal-hide="defaultModal<?php echo $row['id'] ?>" type="submit"
                                                name="atendido"
                                                class="text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10">Atendido</button>
                                            <?php 
                                                    }
                                                ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script>
                            var toolbarOptions = [
                                ['bold', 'italic', 'underline', 'strike', 'image', 'video',
                                    'code-block'
                                ], // toggled buttons
                                ['blockquote', 'code-block'],

                                [{
                                    'header': 1
                                }, {
                                    'header': 2
                                }], // custom button values
                                [{
                                    'list': 'ordered'
                                }, {
                                    'list': 'bullet'
                                }],
                                [{
                                    'script': 'sub'
                                }, {
                                    'script': 'super'
                                }], // superscript/subscript
                                [{
                                    'indent': '-1'
                                }, {
                                    'indent': '+1'
                                }], // outdent/indent
                                [{
                                    'direction': 'rtl'
                                }], // text direction

                                [{
                                    'size': ['small', false, 'large', 'huge']
                                }], // custom dropdown
                                [{
                                    'header': [1, 2, 3, 4, 5, 6, false]
                                }],

                                [{
                                    'color': []
                                }, {
                                    'background': []
                                }], // dropdown with defaults from theme
                                [{
                                    'font': []
                                }],
                                [{
                                    'align': []
                                }],
                                ['clean'] // remove formatting button
                            ];
                            var quill = new Quill('#editor<?php echo $row['id'] ?>', {
                                modules: {
                                    imageResize: {
                                        displaySize: true // default false
                                    },
                                    toolbar: toolbarOptions,
                                },
                                theme: 'snow'
                            });

                            function otrochange(id) {
                                var articulo1 = document.querySelector('#editor'+id+' .ql-editor').innerHTML;
                                document.getElementById('otro'+id).innerHTML = articulo1;
                            };
                            </script>
                        </div>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include'./components/footer.php';?>