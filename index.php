<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PORTFOLIO</title>
        <link rel="icon" type="image/x-icon" href="assets/logo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
         <style>
            .glass-card{
                /* From https://css.glass */
                background: rgba(255, 255, 255, 0.2) !important;
                border-radius: 16px !important;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1) !important;
                backdrop-filter: blur(5px) !important;
                -webkit-backdrop-filter: blur(5px) !important;
                border: 1px solid rgba(255, 255, 255, 0.3) !important;
                position: absolute !important;
                top: 0 !important;
                bottom: 0 !important;
                left: 0 !important;
                right: 0 !important;
                z-index: -1 !important;
            }
            .glass-nav{
                /* From https://css.glass */
                background: rgba(255, 255, 255, 0.2) !important;
                /* border-radius: 16px !important; */
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1) !important;
                backdrop-filter: blur(5px) !important;
                -webkit-backdrop-filter: blur(5px) !important;
                /* border: 1px solid rgba(255, 255, 255, 0.3) !important; */
                /* position: absolute !important; */
                position: fixed !important;
                top: 0 !important;
                bottom: 0 !important;
                left: 0 !important;
                right: 0 !important;
                z-index: -1 !important;
            }
         </style>
    </head>
    <body class="d-flex flex-column h-100 " style="background-repeat: no-repeat; background-attachment: fixed; ">
    <div class="glass-nav"></div>
        <main class="flex-shrink-0 ">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"><img src="assets/logo.png" height="50px" alt=""></a>
                <button   class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0" style="color: darkgray;">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    
                    <div class="col-lg-6 align-self-start p-5 mt-3 minheight">
                        <!-- <hr class="divider" /> -->
                        <?php
                        $date1 = new DateTime("2021-03-12");
                        $date2 = new DateTime();
                        $interval = $date1->diff($date2);
                        ?>
                        <p class="text-white-75 mb-5 text-fadein">
                            <span>After 4 years </span>
                            <span>of college education </span>
                            <span>in Technology </span>
                            <span>and Information Systems </span>
                            <span>and <b style="color:#03e9f4; text-shadow: 0 0 8px lightblue;"><?=$interval->y . " years, " . $interval->m." months, ".$interval->d." days "?> </b> </span>
                            <span>of experience</span>
                            <span>as a web developer,</span>
                            <span>I can confidently say,</span>
                                </p>
                        
                        <div class="loader">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <h5 style="font-family: 'Electrolize', sans-serif;">I am eager to work on any project and am open to new experiences</h5>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="col-lg-6 align-self-end p-5">
                        <a href="#about" class="btn-custom mb-5 text-decoration-none"><p class="text-glitch mb-0" title="Read More"> Read More</p></a>
                    <br>
                    <br>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section bg-white py-1" id="about">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-4">Proficient At</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5" >
                    <div class="col-lg-3  col-md-6 text-center mx-auto  d-flex align-items-center justify-content-center" data-aos="flip-down" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out-quart">
                        <div class="my-4 text-center" style="max-width: 270px;">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary-2"></i></div>
                            <h3 class="h4 mb-2">WEB PROGRAMMING</h3>
                            <p class="text-muted mb-0">Already built many web apps with PHP, HTML, CSS, JAVASCRIPT</p>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 text-center  d-flex align-items-center justify-content-center" data-aos="flip-up" data-aos-delay="200" data-aos-anchor-placement="top-center">
                        <div class="my-4 text-center" style="max-width: 270px;">
                            <div class="mb-2"><i class="bi-file-bar-graph fs-1 text-primary-2"></i></div>
                            <h3 class="h4 mb-2 ">ANALYZE AND DESIGN</h3>
                            <p class="text-muted mb-0">Used to analyze and design a system</p>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 text-center  d-flex align-items-center justify-content-center" data-aos="flip-right" data-aos-delay="400" data-aos-anchor-placement="top-center">
                        <div class="my-4 text-center" style="max-width: 270px;">
                            <div class="mb-2"><i class="bi-archive fs-1 text-primary-2"></i></div>
                            <h3 class="h4 mb-2">DATA CONTROL</h3>
                            <p class="text-muted mb-0">Experienced in queries to collect dan analyze data from databases</p>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 text-center  d-flex align-items-center justify-content-center" data-aos="flip-left" data-aos-delay="600" data-aos-anchor-placement="top-center">
                        <div class="my-4 text-center" style="max-width: 270px;">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary-2"></i></div>
                            <h3 class="h4 mb-2">LARAVEL</h3>
                            <p class="text-muted mb-0">I liked using Laravel Framework to create a professional web app</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <div id="portfolio" >
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6 text-popout">
                        <a class="portfolio-box" href="uploads/portfolio/ijin-online.png" title="IJIN ONLINE">
                            <img class="img-fluid" src="uploads/portfolio/ijin-online.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white">WEB APP</div>
                                <div class="project-name">IJIN ONLINE</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-popout">
                        <a class="portfolio-box" href="uploads/portfolio/monitoring-produksi.png" title="MONITORING PRODUKSI">
                            <img class="img-fluid" src="uploads/portfolio/monitoring-produksi.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white">WEB APP</div>
                                <div class="project-name">MONITORING PRODUKSI</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-popout">
                        <a class="portfolio-box" href="uploads/portfolio/laporan-borongan.png" title="MONITORING PRODUKSI">
                            <img class="img-fluid" src="uploads/portfolio/laporan-borongan.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white">WEB APP</div>
                                <div class="project-name">LAPORAN BORONGAN</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-popout">
                        <a class="portfolio-box" href="uploads/portfolio/laporan-keuangan.png" title="LAPORAN KEUANGAN">
                            <img class="img-fluid" src="uploads/portfolio/laporan-keuangan.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white">WEB APP</div>
                                <div class="project-name">LAPORAN KEUANGAN</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-popout">
                        <a class="portfolio-box" href="uploads/portfolio/totalan.png" title="TOTALAN PRODUKSI">
                            <img class="img-fluid" src="uploads/portfolio/totalan.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white">WEB APP</div>
                                <div class="project-name">TOTALAN PRODUKSI</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-popout">
                        <a class="portfolio-box" href="uploads/portfolio/budgeting.png" title="BUDGETING">
                            <img class="img-fluid" src="uploads/portfolio/budgeting.png" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white">WEB APP</div>
                                <div class="project-name">BUDGETING</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0 text-white">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <!-- <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p> -->
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-md-3 mt-3">
                        <div class="card">
                            <a href="https://wa.me/6285780181591?text=Hallo,%20Saya%20tertarik%20untuk%20bekerjasama%20untuk%20project.." class="text-decoration-none">
                            <div class="card-body text-center text-dark">
                                <i class="bi-whatsapp fs-2 mb-3 text-muted"></i>
                                <div>+62 85780181591</div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="mailto:fransiska370@gmail.com" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body text-center text-dark">
                            <i class="bi-envelope fs-2 mb-3 text-muted"></i>
                            <div>fransiska370@gmail.com</div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="https://www.instagram.com/siskane_/" class="text-decoration-none">
                        <div class="card">
                            <div class="card-body text-center text-dark">
                            <i class="bi-instagram fs-2 mb-3 text-muted"></i>
                            <div>@siskane_</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                            <div class="col-md-3 mt-3">
                                <button class="btn btn-custom btn-block w-100" onclick="underRec()"><b>DOWNLOAD CV</b></button>
                            </div>
                            <div class="col-md-3 mt-3">
                                <a href="{{ route('portfolio') }}" class="btn btn-custom btn-block w-100"><b>DETAIL PORTFOLIO<b></a>
                            </div>
                            <!-- <div class="col-md-3 mt-3">
                                <button class="btn btn-custom btn-block">DOWNLOAD CV</button>
                            </div> -->
                        </div>
            </div>
        </section>
        </main>
        <footer class="bg-none py-3">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="text-center">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="jquery-3.7.0.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script type="text/javascript" async>
        $(document).ready(function() {
            AOS.init();
            $('#content-slider').lightSlider({
                item: 4,
                loop: false,
                slideMove: 2,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 800,
                        settings: {
                            item: 2,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            item: 1,
                            slideMove: 1
                        }
                    }
                ]
            });
        });
    </script>
    <script>
        const box = document.querySelectorAll('.box2');
            window.addEventListener('scroll', checkBoxes);
            checkBoxes();
            function checkBoxes() {
            const triggerBottom = window.innerHeight / 5 * 4;
            box.forEach(box => {
                const boxTop = box.getBoundingClientRect().top;
                if(boxTop < triggerBottom) {
                box.classList.add('show2');
                } else {
                box.classList.remove('show2');
                }
            })
            }
    </script>
    <script>
        function underRec(){
            alert('Sorry, Under Construction')
        }
    </script>
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background:none;">
                    <div class="glass-card"></div>
                <div class="modal-body p-5">
                    <h4 class="h4 text-light text-center mb-3">LOGIN<BR>DEMO WEBAPP</h4>
                   <form method="post" action="/">
                        <div class="d-grid">
                            <h4 class="h4 text-dark text-center m-3 bg-danger">Sorry, Under Construction</h4>
                        </div>
                   </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
