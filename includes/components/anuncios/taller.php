<style>
.image-grid {
    --gap: 10px;
    --num-cols: 4;
    --row-height: 250px;

    box-sizing: border-box;
    padding: var(--gap);

    display: grid;
    grid-template-columns: repeat(var(--num-cols), 1fr);
    grid-auto-rows: var(--row-height);
    gap: var(--gap);
}

.image-grid>img,
.vid {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-grid-col-2 {
    grid-column: span 2;
}

.image-grid-row-2 {
    grid-row: span 2;
}

.image-grid img:hover {
    filter: brightness(50%);

}

.go4269172405 {
    display: none !important;
}

/* Anything udner 1024px */
@media screen and (max-width: 1024px) {
    .image-grid {
        --num-cols: 2;
        --row-height: 150px;
    }
}
</style>
<section class="bg-dark">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-6" style="height: 40rem;">
                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/Wtwt1JDTzJQ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6" style="height: 40rem;">
                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/FrHt9T2rma4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="image-grid">
            <img class="image-grid-col-2 image-grid-row-2" src="./image/wl3.jpg" alt="architecture">
            <img src="./image/wl2.jpg" alt="architecture">
            <img src="./image/wl4.jpg" alt="architecture">
            <img src="./image/taller1.jpeg" alt="architecture">
            <img src="./image/taller2.jpeg" alt="architecture">
        </div>
    </div>
</section>