<?php 
session_start();
    if (!isset($_SESSION['nama'])) {
        echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beranda</title>
        <link rel="icon" type="image/x-icon" href="images/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <!--<span class="d-block d-lg-none">Agung Saputra</span>-->
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded mx-auto mb-2" src="assets/img/pasphoto.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#keahlian">Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#hobi">Hobi</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pengalaman">Pengalaman</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="tentang">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Agung
                        <span class="text-primary">Saputra</span>
                    </h1>
                    <div class="subheading mb-5">
                        Desa Ulapato A, Kec. Telaga Biru · (62) 812-8468-xxxx ·
                        <span class="text-primary">agungsaputraofficial@gmail.com</span>
                    </div>
                    <p class="lead mb-5">Hai, Selamat datang di website personal saya.</p>
                    <div class="subheading mb-3">Media Sosial Saya</div>
                    <div class="social-icons">
                        <a class="social-icon" href="https://github.com/itsAgungSaputra"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://gitlab.com/users/agung_saputra"><i class="fab fa-gitlab"></i></a>
                        <a class="social-icon" href="https://www.instagram.com/itsagungsaputra"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="https://twitter.com/itsAgungSaputra"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/agung.saputra.comel"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Experience-->
            <!--
                
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            -->


            <!-- Education-->
            <section class="resume-section" id="pendidikan">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pendidikan</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">SD Negeri 13 Telaga Biru</h3>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Juli 2009 - Juni 2015</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">SMP Negeri Widyakrama</h3>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Juli 2015 - Juni 2018</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">SMK Negeri 1 Limboto</h3>
                            <div class="subheading mb-3">Rekayasa Perangkat Lunak (RPL)</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Juli 2018 - Juni 2021</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="keahlian">
                <div class="resume-section-content">
                    <h2 class="mb-5">Keahlian</h2>
                    <div class="subheading mb-3">Bahasa Pemrograman dan Framework</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="hobi">
                <div class="resume-section-content">
                    <h2 class="mb-5">Hobi</h2>
                    <p>Selain sebagai web developer, saya juga sering mengisi waktu luang saya dengan menonton anime. Mengapa saya suka menonton Anime? Ada banyak alasan dan saya hanya akan memberi tahu yang utama saja.</p>
                    <p class="mb-0"> Anime bukan hanya kartun untuk anak-anak, bukan hanya beberapa episode dan film, ini adalah seni dan budaya. Anime berisi cerita epik, momen epik, pertarungan epik, kutipan epik, dan karakter epik. Jika Anda ingin tahu seberapa epiknya, Anda harus menonton setidaknya satu episode anime karena tidak dapat dijelaskan dengan kata-kata.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="pengalaman">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pengalaman</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Google Analytics Certified Developer
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Mobile Web Specialist - Google Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2009
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2008
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - James Buchanan High School - Hackathon 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Place - James Buchanan High School - Hackathon 2005
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
