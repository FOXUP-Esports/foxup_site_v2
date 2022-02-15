<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/contact.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start Contact  -->
        <section id="contact">
            <div class="container col-12 col-md-6 gy-4">
                <form action="contact_traitement.php" method="GET" class="row">
                    <div class="col-6">
                        <label for="surname" class="form-label">Prénom *</label>
                        <input type="text" placeholder="Prénom" class="form-control" name="surname" id="surname" required />
                    </div>
                    <div class="col-6">
                        <label for="name" class="form-label">Nom *</label>
                        <input type="text" placeholder="Nom" class="form-control" name="name" id="name" required />
                    </div>

                    <div class="col-12 margin-top-15">
                        <label for="email" class="form-label">E-mail *</label>
                        <input type="mail" placeholder="E-mail" class="form-control" name="email" id="email" required />
                    </div>

                    <div class="col-12 margin-top-15">
                        <label for="message" class="form-label">Message *</label>
                        <textarea name="message" placeholder="Message" id="message" rows="3" class="form-control" required></textarea>
                        <div class="col-12 margin-top-15">
                            <button type="submit" class="btn btn_contact w-100 bgbtn">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Contact  -->

        <div class="spacer"></div>

        <?php include('components/network.php'); ?>

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>