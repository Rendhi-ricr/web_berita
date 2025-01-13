<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?><?= $kesehatan['judul']; ?><?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="detail-container">
        <h2 class="text-center mb-4"><?= $kesehatan['judul']; ?></h2>
        <center><img src="<?php echo (base_url('img/kesehatan/' . $kesehatan['foto_kes'])) ?>" alt="logo" class="profile-image mb-5" width="30%">
        </center>
        <p class="mb-5">
            <?= $kesehatan['deskripsi']; ?>
        </p>
    </div>
</div>
<?= $this->endSection() ?>