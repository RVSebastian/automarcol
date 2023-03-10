<?php include'./includes/components/header.php';?>
<?php require'./includes/php/carrito.php';?>
<style>
.bg-dark {
    background-color: #2c3b6d !important;
}

.flickity-prev-next-button {
    top: 80%;
}
</style>
<br><br><br>
<script>
$(document).ready(function($) {
    function cargar() {
        $.ajax({
                type: "POST",
                url: "./includes/components/carrito/listado",
            })
            .done(function(res) {
                $("#productos").html(res),$("#cargando").hide();
            });
        $.ajax({
                type: "POST",
                url: "./includes/components/carrito/precios",
            })
            .done(function(res) {
                $("#precios").html(res),$("#cargando").hide();
            })
    };
    cargar();
});


function cargar() {
    $.ajax({
            type: "POST",
            url: "./includes/components/carrito/listado",
            beforeSend: function() {
                $("#cargando").show();
            },
        })
        .done(function(res) {
            $("#productos").html(res),$("#cargando").hide();
        });
    $.ajax({
            type: "POST",
            url: "./includes/components/carrito/precios",
            beforeSend: function() {
                $("#cargando").show();
            },
        })
        .done(function(res) {
            $("#precios").html(res),$("#cargando").hide();
        })
};

function test(parte, value) {
    if (value == '0 - Eliminar') {
        $.ajax({
                type: "POST",
                data: {
                    eliminar: parte
                },
                url: "./includes/php/carrito",
                beforeSend: function() {
                    $("#cargando").show();
                },
            })
            .done(function() {
                cargar();
                $("#cargando").hide();
            });
    } else {
        $.ajax({
                type: "POST",
                data: {
                    editar: parte,
                    cantidad: value,
                },
                url: "./includes/php/carrito",
                beforeSend: function() {
                    $("#cargando").show();
                },
            })
            .done(function() {
                cargar();
                $("#cargando").hide();
            });
    }
}
</script>
<section class="bg-gray">
    <br><br><br><br>
    <div class="container carrito">
        <div class="row">
            <div class="col-md-6">
                <div id="cargando">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://lottie.host/ffaf19c2-00c2-4428-a40f-6c7af3493b23/3bKkp03jsa.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px; margin: 0 auto;" loop
                        autoplay></lottie-player>
                    <p class="text-center">Cargando Repuestos</p>
                </div>
                <div id="productos"></div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div id="precios"></div>
                </div>
            </div>
        </div>
        <br><br>
        <br><br><br>
    </div>
</section>
<style>
.container form,
.carrito .card {
    width: 100%;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .row .col {
    flex: 1 1 250px;
}

.container form .row .col .title {
    font-size: 20px;
    color: #333;
    padding-bottom: 5px;
    text-transform: uppercase;
}

.container form .row .col .inputBox {
    margin: 15px 0;
}

.container form .row .col .inputBox span {
    margin-bottom: 10px;
    display: block;
}

.container form .row .col .inputBox input {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
    text-transform: none;
}

.container form .row .col .inputBox input:focus {
    border: 1px solid #000;
}

.container form .row .col .flex {
    display: flex;
    gap: 15px;
}

.container form .row .col .flex .inputBox {
    margin-top: 5px;
}

.container form .row .col .inputBox img {
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    background: var(--main);
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
}

.container form .submit-btn:hover {
    background: #2ecc71;
}
</style>
<br><br><br><br><br><br><br>
<?php include'./includes/components/footer.php';?>