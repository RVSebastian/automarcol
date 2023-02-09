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
.bg-white {
    padding: 10px 10px;
    margin-top: 20px;
    border-radius: 8px;
}

input {
    border: 0;
    border-radius: 4px;
    background-color: #F8F9F9 !important;
    text-align: center !important;
    font-weight: 600;
    margin: 5px;
    text-transform: uppercase;
}

.presentation {
    width: 100% !important;
    height: 180px !important;
}

#editor img {
    float: left;
    padding: 10px;
}
</style>


<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
$inspect = $_SESSION['modelo'];
$buscador = $_GET['parte'];

$filtro = array_filter($inspect, function($array) use ($buscador){
    if (str_contains($array['Parte'], $buscador)) {
        return $array;
    }
});
if (count($filtro)>0) {
    $data = $filtro;
}else{
    $data = $inspect;
}

if (isset($datos['CollageIMG'])) {
    $imagenes = json_decode($datos['CollageIMG'],true);
}

?>

<?php foreach (array_slice($data, 0, 1) as $datos) { ?>
<div class="home-content mt-0 pt-0">
    <form method="POST" name="form" action="./includes/php/almacenador.php" enctype="multipart/form-data">
        <div class="basis-11/12 mt-0 md:m-5 md:p-5">
            <div class="bg-white p-4 flex flex-row">
                <div class="basis-11/12 md:basis-2/4 md:p-4">
                    <input type="file" id="c1" name="c1" accept="image/*" onchange="loadFile(event,img='c1img')"
                        style="display:none;" />
                    <label for="c1">
                        <img class='rounded mx-auto' src="<?php if (isset($datos['presentation_img'])) {
                                  echo './galery/'.$datos['Parte'].'/'.$datos['presentation_img'];
                                }else {
                                    echo 'https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png';
                                }
                                ?>" id="c1img" style="height: 30rem; width: 100%rem">
                    </label>
                    <div class="basis-11/12 m-4 flex flex-row">
                        <div class="basis-1/5 m-2">
                            <input type="file" id="p1" name="p1" accept="image/*" onchange="loadFile(event,img='p1img')"
                                style="display:none;" />
                            <label for="p1" class="w-full">
                                <img class='rounded' src="<?php if (isset($imagenes['img1'])) {
                                  echo './galery/'.$datos['Parte'].'/'.$imagenes['img1'];
                                }else {
                                    echo 'https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png';
                                }
                                ?>" id="p1img" style="height: 100%; width: 100%">
                            </label>
                        </div>
                        <div class="basis-1/5 m-2">
                            <input type="file" id="p2" name="p2" accept="image/*" onchange="loadFile(event,img='p2img')"
                                style="display:none;" />
                            <label for="p2" class="w-full">
                                <img class='rounded' src="<?php if (isset($imagenes['img2'])) {
                                  echo './galery/'.$datos['Parte'].'/'.$imagenes['img2'];
                                }else {
                                    echo 'https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png';
                                }
                                ?>" id="p2img" style="height: 100%; width: 100%">
                            </label>
                        </div>
                        <div class="basis-1/5 m-2">
                            <input type="file" id="p3" name="p3" accept="image/*" onchange="loadFile(event,img='p3img')"
                                style="display:none;" />
                            <label for="p3" class="w-full">
                                <img class='rounded' src="<?php if (isset($imagenes['img3'])) {
                                  echo './galery/'.$datos['Parte'].'/'.$imagenes['img3'];
                                }else {
                                    echo 'https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png';
                                }
                                ?>" id="p3img" style="height: 100%; width: 100%">
                            </label>
                        </div>
                        <div class="basis-1/5 m-2">
                            <input type="file" id="p4" name="p4" accept="image/*" onchange="loadFile(event,img='p4img')"
                                style="display:none;" />
                            <label for="p4" class="w-full">
                                <img class='rounded' src="<?php if (isset($imagenes['img4'])) {
                                  echo './galery/'.$datos['Parte'].'/'.$imagenes['img4'];
                                }else {
                                    echo 'https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png';
                                }
                                ?>" id="p4img" style="height: 100%; width: 100%">
                            </label>
                        </div>
                        <div class="basis-1/5 m-2">
                            <input type="file" id="p5" name="p5" accept="image/*" onchange="loadFile(event,img='p5img')"
                                style="display:none;" />
                            <label for="p5" class="w-full">
                                <img class='rounded' src="<?php if (isset($imagenes['img5'])) {
                                  echo './galery/'.$datos['Parte'].'/'.$imagenes['img5'];
                                }else {
                                    echo 'https://qsystems.com.co/wp-content/uploads/2021/02/placeholder.png';
                                }
                                ?>" id="p5img" style="height: 100%; width: 100%">
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="parte" value='<?php echo $datos['Parte'] ?>'>
                    <input type="hidden" name="Usuario" value='<?php echo $_SESSION['key']['usuario'] ?>'>
                    <button type="submit" name="saverepuest" onclick='change();'
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600">Guardar</button>
                </div>
                <div class="basis-11/12 md:basis-2/4 text-2xl md:p-4">
                    <div class=" p-4">
                        <div class="bg-gray-100 mb-5 rounded p-4">
                            <h1 class="font-semibold"><?php echo $datos['Descripcion'] ?></h1>
                            <p class="pt-2">Precio: <?php echo $datos['Costo$'] ?> </p>
                        </div>
                        <div class="bg-gray-100 mb-5 rounded p-4"">
                            <textarea type='text' name=" otro" id='otro' style='display: none'></textarea>
                            <p class="pb-2">Detalle del Articulo:</p>
                            <div id="editor" class='mb-4 border border-gray-200 mt-2 bg-gray-50'
                                style='width:50rem;height:20rem'>
                                <?php print_r($datos['otro'])?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </form>
</div>
<?php } ?>
<script>
var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike', 'image', 'video', 'code-block'], // toggled buttons
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
var quill = new Quill('#editor', {
    modules: {
        imageResize: {
            displaySize: true // default false
        },
        toolbar: toolbarOptions,
    },
    theme: 'snow'
});

function change() {
    var articulo1 = document.querySelector('.ql-editor').innerHTML;
    document.getElementById('otro').innerHTML = articulo1;
}
// funcion para cargar las imagenes
var loadFile = function(event, img) {
    var output = document.getElementById(img);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }

};
</script>

<?php include'./components/footer.php';?>