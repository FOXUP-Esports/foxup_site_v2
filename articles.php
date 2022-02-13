<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/articles.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start Articles  -->
        <section id="articles">
            <div class="row">
                <div class="col-md-6 panel">
                    <div class="col-7">
                        <img src="https://static.wixstatic.com/media/ab3530_28cf91124ccf458fb58be8e4c78a258f~mv2.jpg/v1/fill/w_500,h_500,al_c,q_85,usm_0.66_1.00_0.01/ab3530_28cf91124ccf458fb58be8e4c78a258f~mv2.webp" alt="article" class="img-responsive">
                    </div>
                    <div class="col-4">
                        <div class="title-product">Pantalon de Sport - FOX + PSEUDO</div>
                        <div class="price-product">59,90 €</div>
                        <p class="label">Taille :</p>
                        <select class="size-product form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <p class="label">Pseudo :</p>
                        <input type="text" class="pseudo-product form-control" placeholder="Pseudo">
                        <p class="label">Quantité :</p>
                        <input type="number" pattern="[0-9]*" aria-label="Quantité" max="99999" min="1" value="1">
                        <div class="payment-product">
                            <a href="#" class="btn btn-dark" >Ajouter au Panier</a>
                            <a href="#" class="btn btn-warning">Paypal</a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End Articles  -->
        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>