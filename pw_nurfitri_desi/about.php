<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        /* Supaya navbar selalu di atas elemen lain */
    }

    body {
        padding-top: 56px;
        /* Sesuaikan dengan tinggi navbar agar konten tidak tertutup */
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
    <header class="text-black text-center py-5"
        style="height: 300px; background-color: goldenrod; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1>About Us</h1>
        <p>Learn more about our company and values</p>
    </header>

    <section class="container my-5">
        <div style="text-align:center;">
            <h2 style="text-shadow: 2px 2px 0px gold;">PPOFIL PERUSAHAAN</h2>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center" style="background-color: black; height: 300px; border-radius: 20px; 
                            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.3); margin-top: 20px;">
                    <img src="logo.png" alt="Logo">
                </div>
                <div class="col"
                    style="margin-top: 20px; border: 2px solid goldenrod; font-size: 18px; border-radius: 4px; margin-left:10px; padding-top: 20px; padding-left:20px;">
                    <p style="font-weight: bold;">Kami adalah integrator sistem terkemuka yang berbasis di indonesia,
                        berkomitmen untuk
                        menawarkan untuk
                        menawarkan solusi sistem terintegrasi. kami berspesialisasi dalam sistem IT Visual, IT
                        Developer,
                        Maintanance, Design Grafis,
                        Event Organizer, dan Interior/Exterior. kami telah mengembangkan berbagai Proyek untuk
                        Perusahaan Swasta,
                        Rumah Ibadah,
                        Perusahaan Pendidikan dan Hiburan.
                    </p>
                    <p style="font-weight: bold;">Dengan pengalaman bertahun-tahun, kami menyediakan solusi sistem
                        terintegrasi yang berkualitas
                        tinggi, mahir,
                        dan Handal dengan dukungan Pelanggan yang sangat baik.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container text-center">
            <div class="row mt-4">
                <div class="col-8">
                    <!-- <h2 style="color: gold; text-shadow: 2px 2px 4px black;">Mahakarya Cipta Solusi</h2> -->
                    <h2 style="text-shadow: 2px 2px 0px gold;">BIODATA PEMILIK</h2>
                    <hr>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Andi</td>
                                <td>CEO</td>
                                <td>andi@example.com</td>
                            </tr>
                            <tr>
                                <td>Budi</td>
                                <td>Manager</td>
                                <td>budi@example.com</td>
                            </tr>

                        </tbody>
                    </table>

                    <p style="margin-top: 30px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima nemo
                        voluptates placeat est quos rerum saepe hic nihil, accusamus, aliquam veritatis sunt incidunt
                        ratione iste explicabo debitis, quibusdam cumque similique!</p>
                </div>
                <div class="col">
                    <img src="profil.jpeg" class="rounded-circle mb-3" alt="pak Hary">
                    <h4>HARIYONO</h4>
                    <p>Chief Executive Officer</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5" style="height: 300px; padding-top:50px;">
        <div class="row mt-4">
            <div class="col-md-6" style=" border: 2px solid goldenrod;">
                <div style="text-align:center;">
                    <h2 style="text-shadow: 2px 2px 0px gold;">VISI</h2>
                </div>
                <hr>
                <p>Menjadi Penyedia yang terdepan dalam bidang penyediaan barang & jasa dengan selalu memberikan solusi
                    yang
                    Inovatif, demi kelancaran usahanya. Sehingga Mitra kami mampu bertumbuh usahanya & bersaing dalam
                    skala
                    Nasional.
                </p>
            </div>
            <div class="col-md-6" style=" border: 2px solid goldenrod;">
                <div style="text-align:center;">
                    <h2 style="text-shadow: 2px 2px 0px gold;">MISI</h2>
                </div>
                <hr>
                <p>Memberikan Pelayanan Jasa Kontraktor Penyedia Barang dan Jasa yang terbaik dengan nilai tambah kepada
                    setiap
                    Mitra yang menjalin Kerjasama dengan kami. Berdasarkan Prinsip Kualitas & Profesionalisme yang
                    tinggi.
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-light py-5">
            <div class="container">
                <div style="text-align:center;">
                    <h2 style="text-shadow: 2px 2px 0px gold;">4 NILAI PERUSAHAAN</h2>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col" style="background-color:black; color:gold;">
                                <h2 style="padding-top: 10px;">01</h2>
                                <h5>Orientasi Kemitraan</h5>
                                <hr style="border: 1px solid yellow;">
                                <p style="color:white; text-align:left; padding :2px;">Mitra bisnis merupakan salah satu
                                    kesatuan yang tidak dapat dipisahkan, Oleh karena itu kami selalu menghargai dan
                                    menjaga kepercayaan mitra dalam setiap kerjasama yang kami jalani</p>
                            </div>
                            <div class="col" style="background-color:gold; color:black">
                                <h2 style="padding-top: 10px;">02</h2>
                                <h5>Efektifitas & Efisiensi Solusi</h5>
                                <hr style="border: 1px solid black;">
                                <p style="color:black; text-align:left; padding :2px;">Mitra bisnis merupakan salah satu
                                    kesatuan yang tidak dapat dipisahkan, Oleh karena itu kami selalu menghargai dan
                                    menjaga kepercayaan mitra dalam setiap kerjasama yang kami jalani</p>
                            </div>
                            <div class="col" style="background-color:black; color:gold;">
                                <h2 style="padding-top: 10px;">03</h2>
                                <h5>Komitmen dalam Pelayanan</h5>
                                <hr style="border: 1px solid yellow;">
                                <p style="color:white; text-align:left; padding :2px;">Kami sangat menghargai setiap
                                    kerjasama yang dijalin dengan mitra, Untuk itu kami memberikan komitmen sepenuhnya
                                    untuk selalu memberikan hasil yang terbaik tepat waktu dan tepat guna</p>
                            </div>
                            <div class="col" style="background-color:gold; color:black">
                                <h2 style="padding-top: 10px;">04</h2>
                                <h5>Kualitas & Profesionalisme</h5>
                                <hr style="border: 1px solid black;">
                                <p style="color:black; text-align:left; padding :2px;">Setiap individu yang
                                    berpengalaman dan kompten dibidangnya masing masing

                                    Dengan kualitas tim yang bandal dan sikap profesionalisme yang tinggi, kami mampu
                                    memberikan pasa yang konsisten dan bernital tambah demilercapainya tujuan bersama
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row">
                <div style="text-align:center;">
                    <h2 style="text-shadow: 2px 2px 0px gold;">LINGKUP KERJA PERUSAHAAN</h2>
                    <hr>
                </div>
                <div class="container text-center" style="margin-top: 60px;">
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
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Company Name. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>