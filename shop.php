<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/shop.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start Shop  -->
        <section id="shopPage">
            <div class="container">
                <img src="images/1.png">
                <div class="row justify-content-center rect-black">

                    <div class="col title-container">
                        <p class="fontAnton">Shop</p>
                    </div>
                    <div class="col text-container">
                        <p class="fontAnton">Les articles de PGM !</p>
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

        <!--  Start ShopListing  -->
        <section id="shopListing">
            <div class="container justify-content-center">
                <div class="row row-cols-1 row-cols-md-4 g-5">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                    ?>
                        <div class="col">
                            <div class="card card-shop">
                                <img src="https://static.wixstatic.com/media/ab3530_d38e8a5c06224b138441f3c076d7aad5~mv2.jpg/v1/fill/w_310,h_310,al_c,q_80,usm_0.66_1.00_0.01/ab3530_d38e8a5c06224b138441f3c076d7aad5~mv2.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title fontStencil">Inscription F-CUP Édition.</p>
                                    <p class="card-role fontRaleway">15.00€</p>
                                    <div class="d-grid gap-2">
                                        <a href="articles.php?id=1" class="btn btn-dark">Plus d'informations</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- End ShopListing  -->

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>