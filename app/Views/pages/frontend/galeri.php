<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Galeri<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container">
    <h1 class="text-center mt-3 mb-4">Galeri Foto</h1>

    <div class="gallery-container">
        <?php
        foreach ($galeri as $key) : ?>
            <div class="image-container">
                <img src="<?= base_url('img/galeri/' . $key['foto']); ?>" alt="Foto 1">
                <div class="image-text"><?= $key['judul_foto']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>