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
</style>


<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
$inspect = $_SESSION['modelo'];
$buscador = $_GET['modelo'];
$filtro = array_filter($inspect, function($array) use ($buscador){
    if (str_contains($array['Version_DescipcionModelo'], $buscador)) {
        return $array;
    }
});
if (count($filtro)>0) {
    $data = $filtro;
}else{
    $data = $inspect;
}

?>

<?php foreach (array_slice($data, 0, 1) as $datos) { ?>
<div class="home-content">
    <form method="POST" name="form" action="./includes/php/almacenador.php" enctype="multipart/form-data">
        <div class="flex flex-wrap p-4 justify-center">
            <div class="basis-11/12 md:basis-1/1">
                <div class="">
                    <div class="swiper-wrapper bg-dark">
                        <div class="swiper-slide">
                            <input type="file" required id="c1" name="c1" id='c1' value='w' accept="image/*"
                                onchange="loadFile(event,img='c1img')" style="display:none;" />
                            <label for="c1" class="w-full">
                                <img class='rounded' src="
                                    <?php 
                                        if ($datos['CarrouselIMG']) {
                                            echo './galery/'.$datos['Version_DescipcionModelo'].'/'.$datos['CarrouselIMG'];
                                        }else{
                                            echo 'https://www.ford.com.co/content/ford/co/es_co/escape-hybrid-content/billboard-carousels/overview-header/jcr:content/par/billboard_1979773588/imageComponent/image.imgs.full.high.jpg';
                                        }
                                    ?>
                                    " alt="" id="c1img" name='c1img' style="width: 100%; height: 100%">
                            </label>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <?php

            ?>

            <div class="basis-11/12 md:basis-1/1  bg-white">
                <div class="flex flex-wrap text-center">
                    <div class="basis-11/12 md:basis-1/3">
                        <h1 class="text-xl" name="puertas">Kilometraje</h1>
                        <input disabled type="text" name='puertas' value="0">
                    </div>
                    <div class="basis-11/12 md:basis-1/3">
                        <h1 class="text-xl">Estado</h1>
                        <input disabled type="text" name='estado' value="Nuevo">
                    </div>
                    <div class="basis-11/12 md:basis-1/3">
                        <h1 class="text-xl">Transmision</h1>
                        <input type="text" name='transmision' value="Automático">
                    </div>
                </div>
            </div>
            <div class="basis-11/12 md:basis-2/4">
                <div class="flex flex-wrap text-center pt-5 bg-white">
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Marca</h1>
                        <input disabled type="text" name='marca' readonly value="<?php echo $datos['Marca'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Modelo</h1>
                        <input disabled type="text" name='modelo'
                            value="<?php echo $datos['Version_DescipcionModelo'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Clase</h1>
                        <input required type="text" name='linea' value="<?php echo $datos['Clase'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Version</h1>
                        <input required type="text" name='version' value="<?php echo $datos['Ano_Modelo'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Combustible</h1>
                        <input required type="text" name="gasolina" value="<?php echo $datos['Combustible']?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Cilindraje</h1>
                        <input required type="text" name='cilindraje' value="<?php echo $datos['Cilindraje'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Tracción</h1>
                        <input required type="text" name='traccion' value="<?php echo $datos['Traccion'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Cojinería</h1>
                        <input required type="text" name='cojineria' value="<?php echo $datos['Cojineria'] ?>">
                    </div>
                    <div class="basis-11/12 md:basis-1/4">
                        <h1 class="text-xl">Puertas</h1>
                        <input required type="text" name='puertas' value="<?php echo $datos['Puertas'] ?>">
                    </div>
                    <input type="hidden" name='usuario' value="<?php echo $_SESSION['key']['usuario'] ?>">
                    <input type="hidden" name='modelo' value="<?php echo $datos['Version_DescipcionModelo'] ?>">
                </div>
                <div class="flex flex-wrap p-4 mr-2">
                    <div class="basis-1/4 p-2">
                        <input type="file" required id="p1" name="p1" accept="image/*"
                            onchange="loadFile(event,img='p1img')" style="display:none;" />
                        <label for="p1" class="w-full">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p1img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                    <div class="basis-1/4  p-2">
                        <input type="file" required id="p2" name="p2" accept="image/*"
                            onchange="loadFile(event,img='p2img')" style="display:none;" />
                        <label for="p2">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p2img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                    <div class="basis-1/4  p-2">
                        <input type="file" required id="p3" name="p3" accept="image/*"
                            onchange="loadFile(event,img='p3img')" style="display:none;" />
                        <label for="p3">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p3img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                    <div class="basis-1/4  p-2">
                        <input type="file" required id="p4" name="p4" accept="image/*"
                            onchange="loadFile(event,img='p4img')" style="display:none;" />
                        <label for="p4">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p4img" style="height: 100%; width: 100%">
                        </label>
                    </div>

                    <div class="basis-1/4 mb-5 p-2">
                        <input type="file" required id="p5" name="p5" accept="image/*"
                            onchange="loadFile(event,img='p5img')" style="display:none;" />
                        <label for="p5">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p5img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                    <div class="basis-1/4 mb-5 p-2">
                        <input type="file" required id="p6" name="p6" accept="image/*"
                            onchange="loadFile(event,img='p6img')" style="display:none;" />
                        <label for="p6">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p6img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                    <div class="basis-1/4 mb-5 p-2">
                        <input type="file" required id="p7" name="p7" accept="image/*"
                            onchange="loadFile(event,img='p7img')" style="display:none;" />
                        <label for="p7">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p7img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                    <div class="basis-1/4 mb-5 p-2">
                        <input type="file" required id="p8" name="p8" accept="image/*"
                            onchange="loadFile(event,img='p8img')" style="display:none;" />
                        <label for="p8">
                            <img class='rounded'
                                src="https://www.ford.com.co/content/ford/co/es_co/home/performance/raptor/jcr:content/par/brandgallery/image2/image.imgs.full.high.jpg/1635456907780.jpg"
                                id="p8img" style="height: 100%; width: 100%">
                        </label>
                    </div>
                </div>
            </div>
            <div class="basis-11/12 md:basis-1/4">
                <div class="p-4 m-4 mb-0 mt-0 pt-0 bg-white rounded">
                    <input type="file" required id="presentation" name="presentacion" accept="image/*"
                        onchange="loadFile(event,img='presentation_img')" style="display:none;" />
                    <label for="presentation" class="">
                        <img class="presentation mx-auto"
                            src="https://www.ford.com.co/content/dam/Ford/website-assets/latam/co/nameplate/raptor/2021/colores/colorizer/negro-agata/fco-f150-raptor-colorizer-negro-agata.jpg.dam.full.high.jpg/1636765571485.jpg"
                            id="presentation_img" alt="image description">
                    </label>
                    <div class="">
                        <p class='font-semibold p-4 text-center pt-2 pb-0'>
                            <?php echo $datos['Version_DescipcionModelo'] ?></p>
                        <p class='p-4 text-center'>Imagen de Presentacion</p>
                    </div>
                </div>
            </div>

            <div class="basis-12/12 p-4 m-4 h-full max-w-5xl">
                <textarea type='text' name="otro" id='otro' style='display: none'></textarea>
                <div id="editor" class='w-full mb-4 border border-gray-200  bg-gray-50'>
                    <?php echo $datos['Otro']?>
                </div>
                <button type="submit" id="GUARDAR" name="GUARDAR" 
                    class="p-4 mt-4 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
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