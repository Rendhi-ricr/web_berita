<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1 class="p-2"><b>Form Edit User</b></h1>
</nav>
<section class="content">
    <div class="main-content">
        <div class="container">
            <form id="tambahBeritaForm" action="<?php echo base_url('admin/user/update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user['id_user']; ?>">
                <!-- <img src="" alt="" class="img-fluid" width="10%"> -->
                <div class=" form-group">
                    <label for="nama_u">Nama :</label>
                    <input type="text" class="form-control" id="nama_u" name="nama_u" value="<?= $user['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email_u">Email :</label>
                    <input type="text" class="form-control" id="email_u" name="email_u" value="<?= $user['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="text" class="form-control" id="password" name="password">
                    <small>Isi bila ingin mengganti password</small>
                </div>
                <div class="form-group">
                    <label for="foto">Pilih Foto:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="userfile">
                        <label class="custom-file-label" for="userfile">Pilih file...</label>
                    </div>
                </div>
                <div class="holder mt-3 mb-2">
                    <img id="imgPreview" src="<?= base_url('img/user/' . $user['userfile']); ?>" width="50%" alt="pic" />
                </div>
                <button class="btn btn-primary">Publish</button>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>