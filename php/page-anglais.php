<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- meda quand partager via une app tier -->

    <!-- Basic metadata -->
    <!-- description -->
    <meta name="description" content="just a student's portfolio..." />

    <!-- redirection quand on clique sur le Titre-->
    <meta name="url" content="https://portfolio.lafargue.info/en-uk">

    <!-- affiche le créateur du site -->
    <meta name="author" content="contact@lafargue.info">

    <!-- language du site -->
    <meta name='language' content='FR, UK'>

    <!-- Mots qui ferront resortire le site a la recherche -->
    <meta name="keywords" content="Portfolio, portfolio, étudiant, étudiants, BTS SIO, SIO.">


    <!-- OpenGraph metadata -->
    <meta name='og:title' content='Portfolio'>
    <meta name='og:type' content='portfolio'>
    <meta name='og:url' content='https://portfolio.lafargue.info/en-uk'>
    <meta name='og:image'
        content="https://cdn.discordapp.com/attachments/719960352028360796/1048993153971142666/metalogo.png">
    <meta name='og:site_name' content='portfolio-lafargue'>
    <meta name='og:description' content="just a student's portfolio...">

    <!-- Titre -->
    <title>Portfolio</title>

    <!-- Logo -->
    <link rel="icon" type="image/png" sizes="64x64" href="../img/logo/mainlogoo.png">

    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet">
</head>

<?php

// API ROOTME

$opts = array("http" => array("method" => "GET", "header" => "Cookie: api_key=409021_fea474cd8dc2fd09f28d446c6cd5af3ea201be3e94e05b7dd52f35ad3fb0fc22\r\n"));
$context = stream_context_create($opts);
$resp = file_get_contents("https://api.www.root-me.org/auteurs/409021", false, $context);
$data = json_decode($resp, false);
// print($data->{'nom'});
// print($data->{'score'});
// print($data->{'position'});
$name = $data->{'nom'};
$score = $data->{'score'};
$position = $data->{'position'};

// print($data);

// API CodeWars

$respco = file_get_contents("https://www.codewars.com/api/v1/users/zzAdri", false);
$dataco = json_decode($respco, false);
// print($dataco->{'username'});
// print($dataco->{'honor'});
// print($dataco-> ranks-> overall -> {'name'});
$nameco = $dataco->{'username'};
$scoreco = $dataco->{'honor'};
$ranksco = $dataco->ranks->overall->{'name'};


?>

<body id="page-top">
    <!-- _____       .___      .__                .____       _____  ________________ __________  ________ ____ ______________
        /  _  \    __| _/______|__| ____   ____   |    |     /  _  \ \_   _____/  _  \\______   \/  _____/|    |   \_   _____/
       /  /_\  \  / __ |\_  __ \  |/ __ \ /    \  |    |    /  /_\  \ |    __)/  /_\  \|       _/   \  ___|    |   /|    __)_ 
      /    |    \/ /_/ | |  | \/  \  ___/|   |  \ |    |___/    |    \|     \/    |    \    |   \    \_\  \    |  / |        \
      \____|__  /\____ | |__|  |__|\___  >___|  / |_______ \____|__  /\___  /\____|__  /____|_  /\______  /______/ /_______  /
              \/      \/               \/     \/          \/       \/     \/         \/       \/        \/                 \/  -->



    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
            <!-- Nom -->
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Adrien LAFARGUE</a>

            <!-- boutton menu telephone -->
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- menu ordinateur -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#presentation">
                            Presentation
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Mesexp">
                            Experiences
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Froma">
                            Training Courses
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#compe">
                            Skills
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="fr-fr">
                            language
                            <img src="../img/langue/UK.png" alt="logo-france">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

            <!-- pdp -->
            <img class="masthead-avatar mb-5" src="../img/pp/photo.jpg" alt="">

            <!-- Titre -->
            <h1 class="masthead-heading mb-0">Portfolio</h1>

            <!-- barre etoile -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- auto typewrite -->
            <h1>
                <a class="typewrite" data-period="5000" data-type='["I am a student in BTS SIO."]'>
                    <span class="wrap"></span>
                </a>
            </h1>
        </div>
    </header>
    <section class="page-section portfolio" id="presentation">
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Presentation</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- texte -->

            <h4 class="centertexte">
                For many years, I have been passionate about
                computer. My career path
                was immediately mapped out.
            </h4>

            <!-- Portfolio Grid Items-->
            <div class="row justify-content">
                <div class="card-pres">
                    <div class="card-body">
                        <div class="card">
                            <h5 class="presentation-title moi">Who am I?</h5>

                            <p class="presentation-title moi-texte">
                                My name is Adrien, I am currently in BTS SIO, option SLAM
                                <br>
                                Here you can discover my professional background, my skills and learn more about me.
                                <br><br>
                                <span class="reduss">SIO : (IT Services for Organisations)</span>
                                <br>
                                <span class="reduss">SLAM : (Software Solutions and Business Applications)</span>.
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <h5 class="presentation-title langue">
                                Language
                                <br>
                                ―― Practiced ――
                            </h5>
                            <div class="contenaire anglais">
                                <div class="wrapper">

                                    <div class="skill">
                                        <img src="/img/langue/Flag Uk.png" alt="drapeau-uk">
                                        <p>Anglais <span>niveau : B1+</span></p>
                                    </div>

                                    <div class="skill">
                                        <img src="/img/langue/Flag ES.png" alt="drapeau-es">
                                        <p>Espagole <span>niveau : A2</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="page-section bg-primary text-white mb-0" id="Mesexp">
        <div class="container">
            <!-- Titre section -->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">My Skills</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- TimeLine horizontale -->
            <div class="container">
                <div class="main-timeline">
                    <!-- block 1 <rose> -->
                    <div class="timeline">
                        <article class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-eye"></i></div>
                            <h3 class="title">Observation course</h3>
                            <p class="description">
                                From May 2018 to June 2019 I did an observation internship at the headquarters
                                the company APRR in Saint-Apollinaire
                            </p>
                        </article>
                    </div>
                    <!-- block 2 <vert> -->
                    <div class="timeline">
                        <article class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-hammer"></i></div>
                            <h3 class="title">Apprenticeship training</h3>
                            <p class="description">
                                From September 2020 to February 2022 I did two 2-month internships in the company
                                company SARL MAUBON ELEC as an apprentice electrician.
                        </article>
                    </div>
                    <!-- block 3 <violet> -->
                    <div class="timeline">
                        <article class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-code"></i></div>
                            <h3 class="title">Apprenticeship training</h3>
                            <p class="description">
                                From May 2023 to July 2023 I did a one-month internship in the company
                                Atol Conseils et Développements in Gevrey-Chambertin
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <!-- telechargé mon CV -->
        <div class="download">
            <div class="button" id="button-7">
                <a class="a-7" href="./pdf/CV_2022-09-11_Adrien_LAFARGUE BTS SIO.pdf"
                    download="CV_2022-09-11_Adrien_LAFARGUE BTS SIO.pdf">Download my CV</a>
            </div>
        </div>
        <!-- egg -->

        <a class="Easteregg1" href="Easter-Egg">.</a>

        <!-- fin egg -->
    </section>


    <section class="page-section" id="Froma">
        <div class="container">
            <!-- Titre sections -->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-secondary">My Training Courses</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="card-master">
                <div class="card">
                    <img src="/img/formation/saintbé.bmp" class="card-img-top" alt="image saint bénigne" />
                    <div class="card-body">
                        <h5 class="card-title">BTS SIO <br>September 2022 to July 2024</span> <br><a
                                href="https://www.sb-lycee.fr/">school website</a></h5>
                        <p class="card-text">At the private high school Saint Bénigne in Dijon, I passed my BTS SIO
                            <br>option: SLAM <span class="reduss">(Software Solutions and Business Applications)</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/formation/saintjo.bmp" class="card-img-top" alt="image saint Joseph" />
                    <div class="card-body">
                        <h5 class="card-title">Baccalaureate<br><span class="reduss-title">September 2021 to July
                                2022</span><br><a href="https://www.stjodijon.com/">school website</a></h5>
                        <p class="card-text">At the private high school Saint Joseph la salle in Dijon, I passed my Bac
                            professional. <br> Section : MELEC <span class="reduss">(Trades in Electricity and its
                                Connected Environments)</span></p>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/formation/BEP.png" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">BEP MELEC<br><span>September 2020 to July 2021</span> <br><a
                                href="https://www.stjodijon.com/">school website</a></h5>
                        <p class="card-text">At the private high school Saint Joseph la salle in Dijon, I passed my BEP
                            MELEC <span class="reduss">(Trades in Electricity and its Connected Environments)</span>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/formation/pix.bmp" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">Pix certificate<br><span>March 2022 to April 2022</span><br><a
                                href="https://www.stjodijon.com/">school website</a></h5>
                        <p class="card-text">At the private high school Saint Joseph la salle, I passed my Pix
                            certificate.<br> <span class="reduss">Certificate verification code : P-VW4K836X</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-section bg-primary text-white mb-0" id="compe">
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">My skills</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row justify-content">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="/img/comp/java.png" alt="Java">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="/img/comp/js.png" alt="Java-script">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="/img/comp/unity.png" alt="unity">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="/img/comp/html.png" alt="html">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="/img/comp/c-sharp.png" alt="C-sharp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <img id="img-item-competence" src="/img/comp/python.png" alt="python">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <h2>Code wars</h2>
                                <div class="container">
                                    <div class="card hover-lift hover-shadow-xl shadow-sm border-0">
                                        <div class="card-body p-4">
                                            <div class="d-flex mb-4 align-items-center">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div
                                                        class="p-2 bg-black shadow-lg position-relative flex-center rounded-circle border">
                                                        <img src="../img/comp/code wars.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-secondary">
                                                <?php echo "Username : " . $nameco ?>
                                            </h5>
                                            <h6 class="mb-0 text-muted"><?php echo "Score : " . $scoreco ?></h6>
                                            <h6 class="mb-0 text-muted">
                                                <?php echo "Ranks : " . $ranksco ?>
                                            </h6>
                                        </div>
                                        <!--link-->
                                        <a href="https://www.codewars.com/users/zzAdri" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <h2>Root-me</h2>
                                <div class="container">
                                    <div class="card hover-lift hover-shadow-xl shadow-sm border-0">
                                        <!--card-body-->
                                        <div class="card-body p-4">
                                            <div class="d-flex mb-4 align-items-center">

                                                <!--Companies group-->
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <!--Campany-->
                                                    <div
                                                        class="p-2 bg-black shadow-lg position-relative flex-center rounded-circle border">
                                                        <img src="../img/comp/rootmee.png" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-secondary">
                                                <?php echo "Username : " . $name ?>
                                            </h5>
                                            <h6 class="mb-0 text-muted"><?php echo "Score : " . $score ?></h6>
                                            <h6 class="mb-0 text-muted">
                                                <?php echo "Position : " . $position . "ème" ?>
                                            </h6>
                                        </div>
                                        <!--link-->
                                        <a href="https://www.root-me.org/zzadri?lang=fr" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- quand click effectuer sur image dans comp -->
    <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal0Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Java</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                    src="../img/comp/lvl/Débutant.png" alt="Level java" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    I am starting to learn the java language on my own and soon in my future internship.
                                </p>
                                <a class="btn btn-primary"
                                    href="https://github.com/zzadri/Projet-en-java/blob/master/chronom%C3%A8tre.java"
                                    target="_blank">
                                    <i class="fab fa-fw fa-github"></i>
                                    Project in java
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Java-script</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                    src="../img/comp/lvl/inter.png" alt="Level js" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    I started to learn the java-script language as part of my studies and as an
                                    autodidact.
                                </p>
                                <a class="btn btn-primary"
                                    href="https://github.com/zzadri/Bot-JavaScript/tree/main/bot%20Discord%20JavaScript"
                                    target="_blank">
                                    <i class="fab fa-fw fa-github"></i>
                                    Project in java-script
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Unity</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                    src="../img/comp/lvl/Débutant.png" alt="Level Unity" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    I started using unity as part of my studies via the C# language
                                </p>
                                <a class="btn btn-primary" href="https://github.com/zzadri/porjet-C-sharp"
                                    target="_blank">
                                    <i class="fab fa-fw fa-github"></i>
                                    Project in Unity
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Html</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                    src="../img/comp/lvl/inter.png" alt="Level html" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    I have already practised HTML and have some solid grounding in it.
                                </p>
                                <a class="btn btn-primary" href="https://github.com/zzadri/Portfolio" target="_blank">
                                    <i class="fab fa-fw fa-github"></i>
                                    Project in HTML
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">C-Sharp</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                    src="../img/comp/lvl/amateur.png" alt="Level C#" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    I started to learn the C# language as part of my studies and as an autodidact.
                                </p>
                                <a class="btn btn-primary" href="https://github.com/zzadri/porjet-C-sharp"
                                    target="_blank">
                                    <i class="fab fa-fw fa-github"></i>
                                    Project in C-sharp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
        aria-labelledby="#portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Python</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5"
                                    src="../img/comp/lvl/inter.png" alt="Level Python" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">
                                    Python is the first programming language I learned, I have a pretty good base in
                                    this language.
                                </p>
                                <a class="btn btn-primary"
                                    href="https://github.com/zzadri/Tiktok-Discord/tree/main/live%20tiktok"
                                    target="_blank">
                                    <i class="fab fa-fw fa-github"></i>
                                    Project in Python
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Titre de section -->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
            </div>
            <!-- barre etoile -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- information pour Contact -->
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                        <div class="text-muted">Telephone number</div>
                        <div class="lead font-weight-bold">(+33)6 42 04 96 90</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="text-muted">Email</div>
                        <a class="lead font-weight-bold" href="mailto:contact@lafargue.info" target="_blank">
                            Contact@lafargue.info
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">Location</h4>
                    <p class="pre-wrap lead mb-0">99 Rue de Talant<br>21000 Dijon</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">My other networks</h4>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://wakelet.com/wake/3lAVLJgqKgVxGObIuOVQL">
                        <i class="fab fa-weebly"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.linkedin.com/in/adrien-lafargue/">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/zzadri">
                        <i class="fab fa-fw fa-github"></i>
                    </a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="mb-4">Important link</h4>
                    <div data-toggle="modal" data-target="#portfolioModal10">
                        <a class="a-10" target="_blank" id="tab">Referential BTS SIO <i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © LAFARGUE 2022</small></div>
    </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed"><a
            class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a></div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>

</body>

</html>