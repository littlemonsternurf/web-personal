<?php

require "function.php";
session_start();

$conn = mysqli_connect("localhost","root","","db_pemweb");
$query = mysqli_query($conn, "SELECT * FROM tb_registrasi_pemweb");
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahakarya Cipta Solusi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    body {
        padding-top: 56px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <img src="logo.png" alt="logo" srcset="" style="width: 60px;">
            <a class="navbar-brand" href="index.html"
                style="color: gold; font-weight: bold; font-size: 18px; margin-left: 10px;">
                Mahakarya Cipta Solusi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Our Product</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- <header class="bg-primary text-white text-center" style="height: 500px;" id="home">
        <h1 style="padding-top: 200px;">Welcome to Our Company</h1>
        <p>Your trusted partner in providing innovative solutions.</p>
    </header> -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="background.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="background.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="background.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 500px;">
            </div>
        </div>
    </div>
    <div class="card"
        style="width: 1000px; margin-top:-110px; margin-left: 160px; position:absolute; background-color:black; color : white; border-radius:20px;">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="gold"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        <p class="card-title"
                            style="margin-top: -20px; margin-left: 20px; font-size:12px; color: gold;">Lokasi</p>
                        <p class="card-text">
                            Jl. Gading Kirana Timur Blok A-11 RT.01 RW.08 Kel. Kelapa Gading Barat, Kec. Kelapa Gading,
                            Jakarta
                            Utara,
                            Provinsi DKI Jakarta
                        </p>
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="gold"
                            class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        </svg>
                        <p class="card-title"
                            style="margin-top: -20px; margin-left: 20px; font-size:12px; color: gold;">Jam
                            Operasional</p>
                        <p class="card-text">Senin-Jum'at <br>
                            08:00 WIB - 17:00 WIB <br><br>
                        </p>
                    </div>
                    <div class="col" style="margin-left: -100px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="gold"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <p class="card-title"
                            style="margin-top: -20px; margin-left: 20px; font-size:12px; color: gold;">Kontak Kami
                        </p>
                        <p class="card-text">
                            021-3111-8055 / <br>
                            081-388-097-189
                        </p>
                    </div>
                    <div class="col" style="margin-left: -150px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="gold"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                        <p class="card-title"
                            style="margin-top: -20px; margin-left: 20px; font-size:12px; color: gold;">Email</p>
                        <p class="card-text">
                            mahakaryaciptasolusi24@gmail.com
                        </p> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div style="text-align:center;">
                    <h2 style="text-shadow: 2px 2px 0px gold;">Profil Perusahaan</h2>
                </div>
                <hr>
                <p class="">Kami adalah integrator sistem terkemuka yang berbasis di indonesia, berkomitmen untuk
                    menawarkan solusi sistem terintegrasi. <br>
                    Kami berspesialisasi dalam sistem IT Visual, IT Developer,
                    Maintanance, Design Grafis, Event Organizer, dan Interior/Exterior.
                    <br>
                    Kami telah mengembangkan
                    berbagai Proyek untuk Perusahaan
                    Swasta, Rumah Ibadah, Perusahaan Pendidikan dan Hiburan.
                </p>
                <div class="button" style="text-align: center; margin-top: 20px;">
                    <a href="about.php">
                        <button type="button" class="btn btn-outline-warning">Read More</button>
                    </a>

                </div>
            </div>
            <div class="col-md-6">
                <img src="general.jpeg" class="img-fluid rounded mx-auto d-block" alt="Company Overview"
                    style="width: 500px;">
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div style="text-align:center;">
                    <h2 style="text-shadow: 2px 2px 0px gold;">Our Products</h2>
                </div>
                <div class="container text-center" style="margin-top: 40px;">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 200px; height: 250px; background-color: black">
                                <div class="card-body">
                                    <div class="lingkaran"
                                        style="border: 2px solid gold; border-radius: 100px; width: 60px; height:60px; margin-top: -40px; margin-left: 50px; background-color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="gold"
                                            style="margin-top:8px" class="bi bi-laptop" viewBox="0 0 16 16">
                                            <path
                                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                                        </svg>
                                    </div>
                                    <a href="" style="text-decoration: none;">
                                        <h5 class="card-title"
                                            style="text-align: center; color: gold; margin-top: 10px;">General Supplier
                                            Barang</h5>
                                    </a>
                                    <p style="font-size: 14px; color:white; text-align: left; margin-top: 20px;">
                                        Bangunan, Alat Industri, Alat Kesehatan, Perlengkapan Kantor, dan lain-lain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 200px; height: 250px; background-color: black">
                                <div class="card-body">
                                    <div class="lingkaran"
                                        style="border: 2px solid gold; border-radius: 100px; width: 60px; height:60px; margin-top: -40px; margin-left: 50px; background-color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            style="margin-top:8px;" fill="gold" class="bi bi-gear-wide-connected"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                                        </svg>
                                    </div>
                                    <a href="" style="text-decoration: none;">
                                        <h5 class="card-title"
                                            style="text-align: center; color: gold; margin-top: 10px;">IT Consulting
                                        </h5>
                                    </a>
                                    <p style="font-size: 14px; color:white; text-align: left; margin-top: 20px;">
                                        Bangunan, Alat Industri, Alat Kesehatan, Perlengkapan Kantor, dan lain-lain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 200px; height: 250px; background-color: black">
                                <div class="card-body">
                                    <div class="lingkaran"
                                        style="border: 2px solid gold; border-radius: 100px; width: 60px; height:60px; margin-top: -40px; margin-left: 50px; background-color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            style="margin-top:8px;" fill="gold" class="bi bi-code-slash"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                                        </svg>
                                    </div>
                                    <a href="" style="text-decoration: none;">
                                        <h5 class="card-title"
                                            style="text-align: center; color: gold; margin-top: 10px;">Software</h5>
                                    </a>
                                    <p style="font-size: 14px; color:white; text-align: left; margin-top: 20px;">
                                        Software Web, ERP, Mobile Apps, Sistem Berbasis Cloud dan lain-lain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 200px; height: 250px; background-color: black">
                                <div class="card-body">
                                    <div class="lingkaran"
                                        style="border: 2px solid gold; border-radius: 100px; width: 60px; height:60px; margin-top: -40px; margin-left: 50px; background-color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38"
                                            style="margin-top:10px;" fill="gold" class="bi bi-motherboard"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0zm0 1h3v3H5zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                            <path
                                                d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1z" />
                                        </svg>
                                    </div>
                                    <a href="" style="text-decoration: none;">
                                        <h5 class="card-title"
                                            style="text-align: center; color: gold; margin-top: 10px;">Hardware</h5>
                                    </a>
                                    <p style="font-size: 14px; color:white; text-align: left; margin-top: 20px;">LED
                                        Videotron Indoor dan Outdoor, Pembangunan Data Center, Migrasi Sistem, atau
                                        Optimasi Jaringan Perusahaan, dan lain-lain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 200px; height: 250px; background-color: black">
                                <div class="card-body">
                                    <div class="lingkaran"
                                        style="border: 2px solid gold; border-radius: 100px; width: 60px; height:60px; margin-top: -40px; margin-left: 50px; background-color: black;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            style="margin-top:10px;" fill="gold" class="bi bi-calendar-event"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                        </svg>
                                    </div>
                                    <a href="" style="text-decoration: none;">
                                        <h5 class="card-title"
                                            style="text-align: center; color: gold; margin-top: 10px;">Event Organizer
                                        </h5>
                                    </a>
                                    <p style="font-size: 14px; color:white; text-align: left; margin-top: 20px;">
                                        Wedding, Konser, Seminar, Launching Produk, Gathering Perusahaan, dan Pameran.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button" style="text-align: center; margin-top: 20px;">
                <button type="button" class="btn btn-outline-warning">Read More</button>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-4" style="text-align: center; margin-top: 150px;">
                    <h4 style="color: goldenrod;">OUR CATEGORIES</h4>
                    <h2 style="text-shadow: 2px 2px 0px gold;">DESIGN INTERIOR</h2>
                </div>
                <div class="col" style="text-align: center;">
                    <img src="interior1.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                    <img src="interior2.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); margin-left: 3px;">
                    <img src="interior3.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); margin-top:6px;">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col" style="text-align: center; margin-top: 40px;">
                    <img src="exterior1.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                    <img src="exterior2.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); margin-left: 3px;">
                    <img src="exterior3.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); margin-top:6px;">
                </div>
                <div class="col-4" style="text-align: center; margin-top: 150px;">
                    <h4 style="color: goldenrod;">OUR CATEGORIES</h4>
                    <h2 style="text-shadow: 2px 2px 0px gold;">DESIGN EXTERIOR</h2>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-4" style="text-align: center; margin-top: 200px;">
                    <h3 style="color: goldenrod;">OUR CATEGORIES</h3>
                    <h1 style="text-shadow: 2px 2px 0px gold;">HARDWARE</h>
                </div>
                <div class="col" style="text-align: center;">
                    <img src="HARDWARE01.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 280px; height: auto; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                        <img src="HARDWARE02.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 300px; height: auto; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                        <img src="HARDWARE03.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 400px; margin-top:10px; height: auto; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                        <img src="onlimo.avif" alt="sample foto"
                        style="border-radius: 10px; width: 180px; margin-top:10px; height: auto; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col" style="margin-top: 40px;">
                    <img src="SOFTWAREE.jpeg" alt="sample foto"
                        style="border-radius: 10px; width: 600px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);">
                </div>
                <div class="col-4" style="text-align: center; margin-top: 130px;">
                    <h3 style="color: goldenrod;">OUR CATEGORIES</h3>
                    <h1 style="text-shadow: 2px 2px 0px gold;">SOFTWARE</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container text-center" style="margin-top: 30px;">
            <div style="text-align:center;">
                <h2 style="text-shadow: 2px 2px 0px gold;">Mengapa Memilih Kami?</h2>
            </div>
            <hr>
            <p>Kami menonjol karena komitmen kami terhadap Kualitas, Kepuasan Pelanggan, dan Inovasi berkelanjutan. <br>
                Berikut Mitra yang Bekerja Sama dengan Kami</p>
            <div class="row mt-4" style="margin-top: 20px;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="Dispendik_kab_Bogor.png" alt="" srcset="" style="width:100px;">
                    </div>
                    <div class="col">
                        <img src="Kec_Curug_Kota_Serang.jpg" alt="" srcset="" style="width:100px;">
                    </div>
                    <div class="col">
                        <img src="Kemenag.png" alt="" srcset="" style="width:auto;">
                    </div>
                    <div class="col">
                        <img src="PT_CNI.png" alt="" srcset="" style="width:120px;">
                    </div>
                    <div class="col">
                        <img src="PT_Dipori_Persada_Raya.png" alt="" srcset="" style="width:150px;">
                    </div>
                    <div class="col">
                        <img src="UIN_Sultan_Maulana_Hasanuddin_Banten.jpg" alt="" srcset="" style="width:100px;" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Mahakarya Cipta Solusi. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>