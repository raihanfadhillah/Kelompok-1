<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Money Manager</title>


    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-reboot.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/registrasi.css">

    <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary head">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-item nav-link" href="">Login <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link activee" href="registration/regis">Register</a>
                <a class="nav-item nav-link" href="">About</a>

                <div class="justify-content-right">
                    <button class="btn btn-success">Logout</button>
                </div>

            </div>
        </div>
    </nav>