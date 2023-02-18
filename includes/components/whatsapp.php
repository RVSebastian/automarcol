<div class="w">
    <div id='whatsapp-chat' class='hide'>
        <div class='header-chat' style="background: var(--main);">
            <div class="encabezado pt-4">
                <h3>Lista de contactos</h3>
            </div>
        </div>
        <?php
            $query = "SELECT * FROM usuarios WHERE contactable='SI'";
            $result_task = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result_task)) { ?>
        <form action="" method="POST">
            <a href="https://web.whatsapp.com/send?phone=57<?php echo $row['telefono'] ?>&text=Hola <?php echo $row['nombre'] ?>, vengo del aplicativo Web y estoy interesado en algo 🤔"
                target="_blank" onclick="console.log('hola')">
                <div class='header-chat'>
                    <div class='head-home'>
                        <div class='info-avatar'><img src='./image/plantilla.jpg' /></div>
                    </div>
                    <div class='get-new'>
                        <div id='get-label'><?php echo $row['cargo'] ?></div>
                        <div id='get-nama'><?php echo $row['nombre'] ?></div>
                    </div>
                </div>
            </a>
        </form>
        <?php } ?>


        <br>
        <br>
        <div id='get-number'></div><a class='close-chat' style="text-decoration: none;" onclick="cerrar_chat();">×</a>
    </div>


    <a class='blantershow-chat' style="text-decoration: none;" onclick="mostrar_chat();" title='Show Chat'><svg
            width="20" viewBox="0 0 24 24">
            <defs />
            <path fill="#eceff1"
                d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
            <path fill="#4caf50"
                d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
            <path fill="#fafafa"
                d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
        </svg>
        Contactanos
    </a>

</div>




<style>
body {
    font-family: "Lato", sans-serif;
    background: #f1f1f1;
}



/* CSS Whatsapp Chat */
#whatsapp-chat {
    position: fixed;
    background: #fff;
    width: 350px;
    border-radius: 10px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
    bottom: 90px;
    right: 30px;
    overflow: hidden;
    z-index: 100000;
    animation-name: showchat;
    animation-duration: 1s;
    transform: scale(1);
}

a.blantershow-chat {
    /*   background: #009688; */
    background: #27AE60;
    color: white;
    position: fixed;
    display: flex;
    font-weight: 400;
    justify-content: space-between;
    z-index: 1021;
    bottom: 25px;
    right: 30px;
    font-size: 18px;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}

a.blantershow-chat svg {
    transform: scale(1.2);
    margin: 0 10px 0 0;
}

.header-chat {
    /*background: #095e54; */
    color: #fff;
    padding: 20px 10px 5px 25px;

}

.header-chat h3 {
    margin: 0 0 10px;
}

.header-chat p {
    font-size: 14px;
    line-height: 1.7;
    margin: 0;
}

.info-avatar {
    position: relative;
}

.info-avatar img {
    border-radius: 100%;
    width: 50px;
    float: left;
    margin: 0 10px 0 0;
}

.info-avatar:before {
    content: "\f232";
    z-index: 1;
    font-family: "Font Awesome 5 Brands";
    background: #23ab23;
    color: #fff;
    padding: 4px 5px;
    border-radius: 100%;
    position: absolute;
    top: 30px;
    left: 30px;
}

.info-chat span {
    display: block;
}

#get-label,
span.chat-label {
    font-size: 12px;
    color: #444;
}

#get-nama,
span.chat-nama {
    margin: 5px 0 0;
    font-size: 15px;
    font-weight: 700;
    color: #444;
}

#get-label,
#get-nama {
    color: #444;
}

span.my-number {
    display: none;
}

.blanter-msg {
    color: #444;
    padding: 20px;
    font-size: 12.5px;
    text-align: center;
    border-top: 1px solid #ddd;
}

textarea#chat-input {
    border: none;
    font-family: "Arial", sans-serif;
    width: 100%;
    height: 20px;
    outline: none;
    resize: none;
}

a#send-it {
    color: #555;
    width: 40px;
    margin: -5px 0 0 5px;
    font-weight: 700;
    padding: 8px;
    background: #eee;
    border-radius: 10px;
}

.first-msg {
    background: #f5f5f5;
    padding: 30px;
    text-align: center;
}

.first-msg span {
    background: #e2e2e2;
    color: #333;
    font-size: 14.2px;
    line-height: 1.7;
    border-radius: 10px;
    padding: 15px 20px;
    display: inline-block;
}

.start-chat .blanter-msg {
    display: flex;
}

#get-number {
    display: none;
}

a.close-chat {
    position: absolute;
    top: 5px;
    right: 15px;
    color: #fff;
    font-size: 30px;
}

@keyframes showhide {
    from {
        transform: scale(0.5);
        opacity: 0;
    }
}

@keyframes showchat {
    from {
        transform: scale(0);
        opacity: 0;
    }
}

@media screen and (max-width: 480px) {
    #whatsapp-chat {
        width: auto;
        left: 5%;
        right: 5%;
        font-size: 80%;
    }
}

.w .hide {
    display: none;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}

.w .show {
    display: block;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}
</style>

<script>
function enviar_mensaje() {
    var a = document.getElementById("chat-input");
    if ("" != a.value) {
        var b = document.getElementById("get-number").innerHTML,
            c = document.getElementById("chat-input").value,
            d = "https://web.whatsapp.com/send",
            e = b,
            f = "&text=" + c;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) var d =
            "whatsapp://send";
        var g = d + "?phone=" + e + f;
        window.open(g, "_blank");
    }
}
var contador = 0;
const whatsapp_chat = document.getElementById("whatsapp-chat");

function cerrar_chat() {
    whatsapp_chat.classList.add("hide");
    whatsapp_chat.classList.remove("show");
    contador =0;
}

function mostrar_chat() {
    switch (contador) {
        case 1:
            whatsapp_chat.classList.add("hide");
            whatsapp_chat.classList.remove("show");
            contador =0;
            break;
        case 0:
            whatsapp_chat.classList.add("show");
            whatsapp_chat.classList.remove("hide");
            contador++;
            break;
    }

}
</script>