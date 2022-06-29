<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/staff.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start Staff  -->
        <section id="staff">
            <div class="container">
                <img src="images/1.png">
                <div class="row justify-content-center rect-black">

                    <div class="col title-container">
                        <p class="fontAnton">Staff</p>
                    </div>
                    <div class="col text-container">
                        <p class="fontAnton">L'équipe de choc !</p>
                        <p class="fontRaleway">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Aenean faucibus neque ac lorem tincidunt, eget rutrum sapien lobortis. Vestibulum gravida eleifend lorem, nec semper velit posuere in. Integer eget malesuada sem, eget cursus libero. <br><br>
                            Duis laoreet ornare libero vel gravida. Quisque sit amet ligula non elit fringilla eleifend a quis massa. Donec a nisi sed felis vehicula ultricies. Vestibulum dignissim ante a orci tincidunt gravida. <br><br>
                            Suspendisse potenti. Aenean quis ex lorem. Mauris rhoncus mattis arcu. Ut commodo mi fermentum diam feugiat, at rhoncus tellus tincidunt. Morbi varius rhoncus venenatis. Nam auctor lorem eu nisi gravida gravida.<br><br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--  End Staff  -->

        <div class="spacer"></div>

        <!--  Start Listing Staff  -->
        <section id="listing">
            <div class="container justify-content-center">
                <div class="row row-cols-1 row-cols-md-4 g-5" id="staff_list">
                    <script>
                        /* It's calling a function in the API.js file. */
                        getStaffs();
                    </script>
                </div>
            </div>
        </section>
        <!--  End Listing Staff  -->

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>