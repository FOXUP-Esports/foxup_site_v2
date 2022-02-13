<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>
        <!--  Start Header  -->
        <header>

        <?php 
        $json = file_get_contents($Strappi_Video);
        $json_decode = json_decode($json, true);
        $video = $json_decode["data"]["attributes"]["video"]["data"]["attributes"]["url"];
        
        ?>

            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay"></div>

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php echo $StrappiBaseUrl.$video; ?>" type="video/mp4">
            </video>

            <!-- The header content -->
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3 fontAnton">FOXUP</h1>
                        <p class="lead mb-0 fontAnton">ESPORTS</p>
                    </div>
                </div>
            </div>
        </header>
        <!--  End Header  -->

        <div class="spacer"></div>

        <!--  Start About  -->
        <section id="about">
            <div class="container">
                <img src="images/1.png" style="position: absolute;">
                <div class="row justify-content-center rect-black">

                    <div class="col title-container">
                        <p class="fontAnton">A PROPOS</p>
                    </div>
                    <div class="col text-container">
                        <p class="fontAnton">À la conquête du monde !</p>
                        <p class="fontRaleway">FOXUP Esports est née en 2021 de la passion de 2 amies. Basés à Draguignan dans une petite ville de Provence, nous sommes aujourd’hui une association Esports, avec pour but d'être l'une des plus influente d'Europe, et l’ambition
                            d’étendre notre impact dans le monde entier. <br><br> Nous évoluons sur les plus grandes licences d’esport : Valorant, League of Legends, Rainbow Six Siege, et d'autres pôles en attente. <br><br> Au-delà de la performance,
                            nous travaillons pour révéler le talent de nos joueurs.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--  End About  -->

        <div class="spacer"></div>

        <!--  Start Network  -->
        <section id="network">
            <div class="container justify-content-center">
                <div class="row justify-content-center title-network fontAnton">NOS RÉSEAUX</div>
                <div class="row">
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/Discord.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/Instagram.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/tiktok.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/Twitter.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/Twitch.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  End Network  -->

        <div class="spacer"></div>

        <!--  Start Youtube  -->
        <section id="youtube">
            <div class="container">
                <div class="row justify-content-center rect-black">
                    <div class="col text-container-rtl">
                        <iframe width="749" height="422" src="https://www.youtube.com/embed/2CsODUeplkY?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col title-container-rtl">
                        <p class="fontAnton text-align-center">NOTRE YOUTUBE</p>
                    </div>
                </div>
                <img src="images/2.png">
            </div>
        </section>
        <!--  End Youtube  -->

        <div class="spacer"></div>

        <!--  Start Sponsors  -->
        <section id="sponsors">
            <div class="container justify-content-center">
                <div class="row justify-content-center title-sponsors fontAnton">NOS SPONSORS</div>
                <div class="row">
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/GS.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col text-align-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <img src="images/ALPHA.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  End Sponsors  -->

        <div class="spacer"></div>

        <!--  Start Roster  -->
        <section id="roster">
            <div class="container">
                <img src="images/1.png" style="position: absolute;">
                <div class="row justify-content-center rect-black">

                    <div class="col title-container-roster">
                        <p class="fontAnton">ROSTERS</p>
                    </div>
                    <div class="col text-container">
                        <div class="col">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <img src="images/teams_rosters/r6-nb.jpg" class="img-roster">
                                    <img src="images/teams_rosters/valo2.jpg" class="img-roster">
                                    <img src="images/teams_rosters/lol2.jpg" class="img-roster">
                                    <img src="images/teams_rosters/rl2.jpg" class="img-roster">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--  End Roster  -->

        <div class="spacer"></div>

        <!--  Start News  -->
        <section id="news">
            <div class="container justify-content-center">
                <div class="row justify-content-center title-news-section fontAnton">News</div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://static.wixstatic.com/media/ab3530_d38e8a5c06224b138441f3c076d7aad5~mv2.jpg/v1/fill/w_454,h_341,fp_0.50_0.50,q_90/ab3530_d38e8a5c06224b138441f3c076d7aad5~mv2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">TOURNOI F-CUP</h5>
                                <p class="card-text">Notre tournoi est de retour ; mais avec cette fois-ci, 1.000€ à gagner ! INSCRIPTION - F-CUP Pour inscrire ta team ? c'est directement...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://static.wixstatic.com/media/ab3530_30001e69e69d4aa6b16133e9ffdddad0~mv2.jpg/v1/fill/w_454,h_341,fp_0.50_0.50,q_90/ab3530_30001e69e69d4aa6b16133e9ffdddad0~mv2.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Notre coach PtiRenard qui explique pourquoi Fracture est difficile à jouer.</h5>
                                <p class="card-text">Fracture est une map compliqué à appréhender par les joueurs de par sa construction en "H" qui la rend unique. En effet, les défenseurs...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://static.wixstatic.com/media/ab3530_0b38acdfdd864546a418bd14ba7b7e28~mv2.jpg/v1/fill/w_454,h_341,fp_0.50_0.50,q_90/ab3530_0b38acdfdd864546a418bd14ba7b7e28~mv2.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">La team organise le 19 Décembre 2021, la première édition de son tournoi</h5>
                                <p class="card-text">Le bracket de la 1ère Édition ci-dessus. Les inscriptions se déroulent ici : https://play.toornament.com/fr/tournaments/5080650...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  End News  -->

        <div class="spacer"></div>

        <!--  Start Shop  -->
        <section id="shop">
            <div class="container">
                <div class="row justify-content-center rect-black">
                    <div class="col text-container-rtl">
                        <img src="https://static.wixstatic.com/media/ab3530_040cbcd97fba46fbb6c36103e60a82a0~mv2.png/v1/fill/w_970,h_226,al_c,q_85,usm_0.66_1.00_0.01/2022-01-29%2017_38_19-Wix%20Website%20Editor.webp" alt="">
                    </div>
                    <div class="col title-container-rtl">
                        <p class="fontAnton text-align-center">LE SHOP</p>
                    </div>
                </div>
                <img src="images/2.png">
            </div>
        </section>
        <!--  End Shop  -->

        <?php include('components/footer.php'); ?>
 
    </main>
</body>

</html>