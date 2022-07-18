<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Daftar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="<?= base_url() ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets') ?>/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="<?= base_url('Welcome/aksi_daftar') ?>">
    <img class="mb-4" src="<?= base_url() ?>/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Daftar</h1>

    <div class="form-floating">
      <input type="text" name="nama" class="form-control" id="floatingInputName" placeholder="Nama lengkap">
      <label for="floatingInputName">Nama Lengkap</label>
    <?php echo form_error('nama','<small class="text-danger pl-3">','</small>'); ?>

    </div>

    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" >
      <label for="floatingInput">Username</label>
    <?php echo form_error('username','<small class="text-danger pl-3">','</small>'); ?>

    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?>

    </div>
     <div class="form-floating">
      <input type="password" name="password2" class="form-control" id="floatingPassword" placeholder="Konfirmasi Password">
      <label for="floatingPassword">Konfirmasi Password</label>
    <?php echo form_error('password2','<small class="text-danger pl-3">','</small>'); ?>

    </div>
     <div class="form-floating">
      <input type="file" name="gambar" class="form-control" id="floatingInput" placeholder="gamber" >
      <label for="floatingInput">Upload Gambar / Dokumen</label>
    <?php echo form_error('gambar','<small class="text-danger pl-3">','</small>'); ?>

    </div>

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
  </form>
</main>


    
  </body>
</html>
