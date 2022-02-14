<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/team.css" media="all" />

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <!--  Start Team  -->
        <section id="teamSection">
            <div class="container">
                <img src="images/1.png" style="position: absolute;">
                <div class="row justify-content-center rect-black">

                    <div class="col title-container-roster">
                        <p class="fontAnton">WHITE</p>
                    </div>
                    <div class="col text-container z-index">
                        <div class="col margin-left-15">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div id="team" class="team">
                                        <div class="player" data-name="Jiroz" data-role="Coach"></div>
                                        <div class="player player2" data-name="Prinz" data-role="Coach"></div>
                                        <div class="player player3" data-name="Esor" data-role="Player"></div>
                                        <div class="player player4" data-name="LaChevre" data-role="Player"></div>
                                        <div class="player player5" data-name="Dhallork" data-role="Player"></div>
                                        <div class="player player6" data-name="Skyyblue" data-role="Player"></div>
                                    </div>
                                    <div class="description">
                                        <span id="NameText" class="NameText">Team White</span>
                                        <span id="RoleText" class="RoleText">Valorant</span>
                                        <span id="NetworkText" class="NetworkText">
                                            <i class="fab fa-facebook-square"></i>
                                            <i class="fab fa-twitch"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-youtube"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team  -->

        <?php include('components/footer.php'); ?>

    </main>
</body>
<script>

let team = document.getElementById("team");
let playerName = document.getElementById("NameText");
let roleName = document.getElementById("RoleText");
let networkText = document.getElementById("NetworkText");

// Ce gestionnaire sera exécuté à chaque fois que le curseur
// se déplacera sur un autre élément de la liste
team.addEventListener(
  "mouseover",
  function (event) {
    // on met l'accent sur la cible de mouseover
    event.target.style.filter = "invert(50%)";
    playerName.innerHTML = event.target.dataset.name;
    roleName.innerHTML = event.target.dataset.role;

    // Network
    networkText.style.visibility = "visible";
    //

    // on réinitialise la couleur après quelques instants
    setTimeout(function () {
      event.target.style.filter = "invert(0)";
    }, 500);
  },
  false
);

</script>
</html>