<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Tambah Berita Lalu Lintas<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1 class="p-2"><b>Form Tambah Berita Lalu Lintas</b></h1>
</nav>
<section class="content">
    <div class="main-content">
        <div class="container">
            <?php if (session('errors') != null) : ?>
                <div class="alert alert-danger">
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form id="tambahBeritaForm" action="<?php echo base_url('admin/lalulintas/simpan') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-8">
                        <div class=" form-group mb-4">
                            <label for="juduleberita">Judul Berita Umum:</label>
                            <input type="text" class="form-control" id="judulberita" name="judulberita" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Unggah Foto:</label>
                            <input type="file" class="form-control" id="foto" name="foto" onchange="previewFile()">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group mb-4">
                            <label for="isiberita">Deskripsi Berita Umum:</label>
                            <textarea class="form-control" id="isiberita" name="isiberita" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="holder mb-2">
                            <img id="imgPreview" src="#" alt="pic" width="40%" />
                        </div>
                    </div>
                    <div class="col-8">
                        <div class=" form-group mb-4">
                            <label for="kategori">Kategori :</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" required>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="return confirm('apakah anda yakin ingin menambah data tersebut?')">Publish</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>