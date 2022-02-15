<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff | FOXUP Esports</title>

    <?php include 'components/head.php'; ?>

</head>

<body>
    <?php include 'components/nav.php'; ?>
    <main>

        <div class="spacer"></div>

        <?php
        if (!isset($_GET["game"])) {
            include('components/roster.php');
        } ?>

        <?php
        if (isset($_GET["game"]) && $_GET["game"] == "valorant") {
        ?>
            <!--  Start Roster  -->
            <section id="roster">
                <div class="container">
                    <img src="images/1.png" style="position: absolute;">
                    <div class="row justify-content-center rect-black">

                        <div class="col title-container-roster">
                            <p class="fontAnton">Valorant</p>
                        </div>
                        <div class="col text-container z-index">
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <a href="team.php?game=valorant&team=white"><img src="images/teams_rosters/valo_white2.jpg" class="img-roster imgwhite"></a>
                                        <a href="team.php?game=valorant&team=red"><img src="images/teams_rosters/valo_red.jpg" class="img-roster"></a>
                                        <a href="team.php?game=valorant&team=green"><img src="images/teams_rosters/valo_green.jpg" class="img-roster"></a>
                                        <a href="team.php?game=valorant&team=blue"><img src="images/teams_rosters/valo_blue.jpg" class="img-roster"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End Roster  -->
        <?php
        } else if (isset($_GET["game"]) && $_GET["game"] == "leagueoflegends") {
        ?>
            <!--  Start Roster  -->
            <section id="roster">
                <div class="container">
                    <img src="images/1.png" style="position: absolute;">
                    <div class="row justify-content-center rect-black">

                        <div class="col title-container-roster">
                            <p class="fontAnton">LoL</p>
                        </div>
                        <div class="col text-container z-index">
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <a href="team.php?game=leagueoflegends&team=orange"><img src="images/teams_rosters/lol_orange.jpg" class="img-roster"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End Roster  -->
        <?php
        } else if (isset($_GET["game"]) && $_GET["game"] == "rocketleague") {
        ?>
            <!--  Start Roster  -->
            <section id="roster">
                <div class="container">
                    <img src="images/1.png" style="position: absolute;">
                    <div class="row justify-content-center rect-black">

                        <div class="col title-container-roster">
                            <p class="fontAnton">Rocket League</p>
                        </div>
                        <div class="col text-container z-index">
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <a href="team.php?game=rocketleague&team=rl1"><img src="images/teams_rosters/rl1.jpg" class="img-roster"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End Roster  -->
        <?php
        } else if (isset($_GET["game"]) && $_GET["game"] == "rainbowsix") {
        ?>
            <!--  Start Roster  -->
            <section id="roster">
                <div class="container">
                    <img src="images/1.png" style="position: absolute;">
                    <div class="row justify-content-center rect-black">

                        <div class="col title-container-roster">
                            <p class="fontAnton">Rainbow Six</p>
                        </div>
                        <div class="col text-container z-index">
                            <div class="col">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <a href="team.php?game=rainbowsix&team=black"><img src="images/teams_rosters/r6_black.jpg" class="img-roster"></a>
                                        <a href="team.php?game=rainbowsix&team=pink"><img src="images/teams_rosters/r6_pink.jpg" class="img-roster"></a>
                                        <a href="team.php?game=rainbowsix&team=blue"><img src="images/teams_rosters/r6_blue.jpg" class="img-roster"></a>
                                        <a href="team.php?game=rainbowsix&team=green"><img src="images/teams_rosters/r6_green.jpg" class="img-roster"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  End Roster  -->
        <?php
        }
        ?>

        <div class="spacer"></div>

        <?php include('components/network.php'); ?>

        <?php include('components/footer.php'); ?>

    </main>
</body>

</html>