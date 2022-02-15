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
                <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-left">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>Go Down Sunshine</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellat distinctio tenetur delectus consectetur aperiam molestias quibusdam impedit earum pariatur perspiciatis obcaecati sit quae tempore, sint error porro fugit sunt.</p>
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
                                <h2>Go Down Sunshine</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellat distinctio tenetur delectus consectetur aperiam molestias quibusdam impedit earum pariatur perspiciatis obcaecati sit quae tempore, sint error porro fugit sunt.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="news_page.php?id=1" class="newsLink">
                    <div class="margin-left">
                        <div class="card-wrapper">
                            <div class="card-body">
                                <h2>Go Down Sunshine</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellat distinctio tenetur delectus consectetur aperiam molestias quibusdam impedit earum pariatur perspiciatis obcaecati sit quae tempore, sint error porro fugit sunt.</p>
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
                                <h2>Go Down Sunshine</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellat distinctio tenetur delectus consectetur aperiam molestias quibusdam impedit earum pariatur perspiciatis obcaecati sit quae tempore, sint error porro fugit sunt.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- End News  -->

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>