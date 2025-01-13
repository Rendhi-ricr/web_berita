<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?><?= $lalulintas['judul']; ?><?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="detail-container">
        <h2 class="text-center mb-4"><?= $lalulintas['judul']; ?></h2>
        <center><img src="<?php echo (base_url('img/lalin/' . $lalulintas['foto_lalin'])) ?>" alt="logo" class="profile-image mb-5" width="30%">
        </center>
        <p class="mb-5">
            <?= $lalulintas['deskripsi']; ?>
        </p>
    </div>
</div>
<?= $this->endSection() ?>