<!DOCTYPE html>
<html lang="es_MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gob. Puebla | <?= $title; ?></title>
        <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">
        <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free-5.15.4-web/css/all.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/plugins/slick-1.8.1/slick/slick.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/slick-1.8.1/slick/slick-theme.css') ?>" />
    </head>
    <body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a href="<?= base_url('Home'); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none iconHeader">
            <img class="imglogos" src="<?= base_url('assets/images/logo.svg') ?>" alt="logo" style="width: 4rem;">
            <span class="fs-4"><img class="imglogos" src="<?= base_url('assets/images/letrasGobPuebla.svg') ?>" alt="logo" style="width: 4rem;"></span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="<?= base_url('Home') ?>" class="nav-link <?= $title == "Home" ? "active" : "" ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#programas" class="nav-link <?= $title != "Home" ? "active" : "" ?>">Programas</a></li>
        </ul>
        </nav>
    </header>