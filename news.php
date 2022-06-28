<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/news.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start News  -->
        <section id="NewsPage">
            <div class="container">
                <img src="images/1.png">
                <div class="row justify-content-center rect-black">

                    <div class="col title-container">
                        <p class="fontAnton">News</p>
                    </div>
                    <div class="col text-container">
                        <p class="fontAnton">Les articles de News !</p>
                        <p class="fontRaleway">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Aenean faucibus neque ac lorem tincidunt, eget rutrum sapien lobortis. Vestibulum gravida eleifend lorem, nec semper velit posuere in. Integer eget malesuada sem, eget cursus libero. <br><br>
                            Duis laoreet ornare libero vel gravida. Quisque sit amet ligula non elit fringilla eleifend a quis massa. Donec a nisi sed felis vehicula ultricies. Vestibulum dignissim ante a orci tincidunt gravida. <br><br>
                            Suspendisse potenti. Aenean quis ex lorem. Mauris rhoncus mattis arcu. Ut commodo mi fermentum diam feugiat, at rhoncus tellus tincidunt. Morbi varius rhoncus venenatis. Nam auctor lorem eu nisi gravida gravida.<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--  End Shop  -->

        <div class="spacer"></div>

        <!--  Start News  -->
        <section id="news">
            <div class="container">
                <?php

                $url = 'https://foxup-backend.herokuapp.com/api/blogs?populate=Image';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HEADER, false);
                $data = curl_exec($curl);
                $data_decode = json_decode($data, true);
                curl_close($curl);

                for ($i = 0; $i < count($data_decode["data"]); $i++) {

                    $id = $data_decode['data'][$i]['id'];
                    $title = $data_decode['data'][$i]['attributes']['Titre'];
                    $description = substr($data_decode['data'][$i]['attributes']['Texte'], 0, 150) . '...';
                    $image = $data_decode['data'][$i]['attributes']['Image']['data']['attributes']['url'];

                    if ($i % 2 == 1) {
                        // impaire
                        echo '<a href="news_page.php?id=' . $id . '" class="newsLink">
                            <div class="margin-right">
                                <div class="card-wrapper">
                                    <div class="card-body">
                                        <h2>' . $title . '</h2>
                                        <p>' . $description . '</p>
                                    </div>
                                    <div class="card-image"></div>
                                </div>
                            </div>
                        </a>';
                    } else {
                        // paire
                        echo '<a href="news_page.php?id=' . $id . '" class="newsLink">
                            <div class="margin-left">
                                <div class="card-wrapper">
                                    <div class="card-body">
                                        <h2>' . $title . '</h2>
                                        <p>' . $description . '</p>
                                    </div>
                                    <div class="card-image"></div>
                                </div>
                            </div>
                        </a>';
                    }
                }



                ?>
                <!-- <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-left">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>Tournoi F-CUP</h2>
                                <p>Notre tournoi est de retour; mais avec cette fois-çi, 1000€ à gagner !
                                    INSCRIPTION - F-CUP
                                    Pour inscrire ta team ? c'est directement...
                                </p>
                            </div>
                            <div class="card-image"></div>
                        </div>
                    </div>
                </a>
                <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-right">
                        <div class="card-wrapper">
                            <div class="card-image image-border"></div>
                            <div class="card-body card-body-border">
                                <h2>Notre coach PtiRenard qui explique pourquoi Fracture est difficile à jouer.</h2>
                                <p>Fracture est une map compliqué à appréhender par les joueurs de par sa construction en "H" qui la rend unique.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-left">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>La team organise le 19 Décembre 2021, la première édition de son tournoi : la...</h2>
                                <p>Le bracket de la 1ère Édition ci-dessus. Les inscriptions se déroulent ici : https://play.toornament.com/fr/tournaments/5080650184610308096/
                                </p>
                            </div>
                            <div class="card-image"></div>
                        </div>
                    </div>
                </a>
                <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-right">
                        <div class="card-wrapper">
                            <div class="card-image image-border"></div>
                            <div class="card-body card-body-border">
                                <h2>La FOXUP annonce sa toute première lineup sur le jeu League of Legends.</h2>
                                <p>La FOXUP Esports, ayant commencé à faire ces premiers résultats sur Valorant et Rainbow Six Siege veux continuer sa progression en...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-left">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>Interview : Jess, co-fondatrice de la FOXUP, manageuse et joueuse R6 vous parles de son jeu favoris.</h2>
                                <p></p>
                            </div>
                            <div class="card-image"></div>
                        </div>
                    </div>
                </a> -->
            </div>
        </section>
        <!-- End News  -->

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>