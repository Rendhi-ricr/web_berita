<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Rendhi News<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container my-2">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <?php
            foreach ($banner2 as $item) : ?>
                <div class="carousel-item active">
                    <img src="<?php echo (base_url()) ?>img/kesehatan/<?= $item['foto_kes']; ?>" class="d-block" width="100%" height="300" alt="...">
                </div>
            <?php endforeach ?>
            <?php
            foreach ($banner1 as $item2) : ?>
                <div class="carousel-item">
                    <img src="<?php echo (base_url()) ?>img/lalin/<?= $item2['foto_lalin']; ?>" class="d-block" width="100%" height="300" alt="...">
                </div>
            <?php endforeach ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <div class="namekategori my-5">
        <h2>kesehatan</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-start">
                <?php
                foreach ($kesehatan as $key) : ?>
                    <div class="col-md-3 mb-5">
                        <div class="berita-card">
                            <img src="<?php echo (base_url()) ?>img/kesehatan/<?= $key['foto_kes']; ?>" alt="Photo">
                            <div class="judulberita text-decoration-none ms-1"><a href="kesehatan/detail/<?= $key['id_kes']; ?>"><?= $key['judul']; ?></a></div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="namekategori my-5">
            <h2>Lalu Lintas</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-start">
                    <?php
                    foreach ($lalulintas as $key) : ?>
                        <div class="berita-card">
                            <img src="<?php echo (base_url()) ?>img/lalin/<?= $key['foto_lalin']; ?>" alt="Photo">
                            <div class="judulberita text-decoration-none"><a href="#">windi asksadk aksjdbakjb</a>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection() ?>