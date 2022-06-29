<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/news_page.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start News Page  -->
        <section id="news_page">
            <div class="container">
                <div class=image-news>
                    <img src="http://autoecoleroute32.com/wp-content/themes/kleo/assets/img/404_image.png" class="img-fluid">
                </div>
                <div class="title-news">
                    <p>Mince !</p>
                </div>
                <div class="body-news">
                    <p>Il y a eu un soucis...</p>
                </div>
            </div>
        </section>
        <!-- End News Page  -->
        <script>
            /* It's calling the function getNews() from the API.js file. */
            const id = new URLSearchParams(window.location.search).get('id')
            getOneNews(id);
        </script>
        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>