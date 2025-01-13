<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1 class="p-2"><b>Form Tambah User</b></h1>
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
            <form id="tambahagendaForm" action="<?php echo base_url('admin/user/simpan') ?>" method="post" enctype="multipart/form-data">
                <div class=" form-group">
                    <label for="nama_u">Nama :</label>
                    <input type="text" class="form-control" id="nama_u" name="nama_u" required>
                </div>
                <div class="form-group">
                    <label for="email_u">Email :</label>
                    <input type="text" class="form-control" id="email_u" name="email_u" required>
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="text" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Unggah Foto:</label>
                    <input type="file" class="form-control" id="foto" name="userfile" onchange="previewFile()">
                </div>
                <div class="holder mb-2">
                    <img id="imgPreview" src="#" alt="pic" />
                </div>
                <button class="btn btn-primary">Publish</button>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>