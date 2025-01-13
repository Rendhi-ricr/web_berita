<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Berita Kesehatan<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container my-2">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <?php
            foreach ($kbaru as $key) : ?>
                <div class="carousel-item active">
                    <img src="<?php echo (base_url()) ?>img/kesehatan/<?= $key['foto_kes']; ?>" class="d-block" width="100%" height="300" alt="...">
                </div>
            <?php endforeach; ?>
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
        <h2>Kesehatan</h2>
    </div>
    <div class="row">

        <div class="col-8">
            <?php
            foreach ($kesehatan as $key) : ?>
                <div class="umum-card mb-3">
                    <img src="<?php echo (base_url()) ?>img/kesehatan/<?= $key['foto_kes']; ?>" alt="Photo">
                    <div class="text">
                        <small><?= $key['kategori']; ?> | <?= $key['tanggal']; ?></small>
                        <a href="kesehatan/detail/<?= $key['id_kes']; ?>">
                            <h3><?= $key['judul']; ?></h3>
                        </a>
                        <p><?= substr($key['deskripsi'], 0, 1000) ?>...</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-4">
            <div class="position-sticky" style="top: 2rem">
                <div>
                    <h4 class="fst-italic">Berita Populer</h4>
                    <ul class="list-unstyled">
                        <?php
                        foreach ($bpop as $key) : ?>
                            <li>
                                <a class="gap-3 py-3 d-flex flex-column flex-lg-row align-items-start align-items-lg-center link-body-emphasis text-decoration-none border-top" href="kesehatan/detail/<?= $key['id_kes']; ?>">
                                    <img src="<?php echo (base_url()) ?>img/kesehatan/<?= $key['foto_kes']; ?>" width="40%" height="" class="img-fluid align-middle" alt="" />
                                    <div class="col-lg-8">
                                        <small><?= $key['kategori']; ?></small>
                                        <h6 class="mb-0">
                                            <?= $key['judul']; ?>
                                        </h6>
                                        <small class="text-body-secondary"><?= $key['tanggal']; ?></small>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>