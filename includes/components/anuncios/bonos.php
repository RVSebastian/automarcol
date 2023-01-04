<style>
.bonos .image-grid {
    --gap: 10px;
    --num-cols: 4;
    --row-height: 320px;
    box-sizing: border-box;
    padding: var(--gap);
    display: grid;
    grid-template-columns: repeat(var(--num-cols), 1fr);
    grid-auto-rows: var(--row-height);
    gap: var(--gap);
}

.bonos .image-grid>img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.bonos .image-grid-col-2 {
    grid-column: span 2;
}

.bonos .image-grid-row-2 {
    grid-row: span 2;
}

.bonos .image-grid img:hover {
    filter: brightness(80%);
}

@media screen and (max-width: 1100px) {
    .bonos .image-grid {
        --num-cols: 2;
        --row-height: 200px;
    }
}
@media screen and (max-width: 500px) {
    .bonos .image-grid {
        --num-cols: 2;
        --row-height: 155px;
    }
}
</style>

<section class="bg-gray bonos mt-4">
    <div class="container">
        <h1 class="fs-1 fw-bold text-center">Promociones</h3>
        <div class="image-grid">
            <img class="image-grid-col-2 image-grid-row-2" src="./image/bono5.jpg" alt="architecture">
            <img src="./image/bono1.jpg" alt="architecture">
            <img src="./image/bono2.jpg" alt="architecture">
            <img src="./image/bono3.jpg" alt="architecture">
            <img src="./image/bono4.jpg" alt="architecture">
        </div>
    </div>
</section>
