<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/streaming.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start Streaming  -->
        <section id="streaming">
            <div class="jumbo">
                <iframe src="https://player.twitch.tv/?channel=foxupesports&parent=localhost" height="100%" width="100%" allowfullscreen="true"></iframe>
            </div>
            <div class="container icons">
                <div class="big-icon"></div>
            </div>
            <div class="container bio">
                <div class="details">
                    <h3>FoxUP eSports</h3>
                    <p>Communauté</p>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro officiis fugit hic vel voluptates perferendis aut quibusdam sit omnis unde aspernatur quae repellat blanditiis autem, a libero asperiores neque illum aliquid est tempore. Eveniet velit voluptate amet facere, repellendus aperiam, cumque est ipsam. Asperiores expedita iusto, inventore sit suscipit nihil repudiandae? Laboriosam cum maxime dolorem neque, in veniam expedita ad. Hic fugit necessitatibus blanditiis, optio dignissimos molestiae nam, numquam odio.</p>
                </div>
                <hr />
                <div class="network">
                    <div id="social">
                        <div>
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div>
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div>
                            <i class="fa-brands fa-twitch"></i>
                        </div>
                        <div>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact  -->

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>