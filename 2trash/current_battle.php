<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>2 Trash 1 Battle</title>
		<link rel="icon" type="image/png" href="../css/Logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=0.2">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- CSS -->
		<link rel="stylesheet" href="../css/ionicons.min.css">
		<link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link href="../Hover/css/hover.css" rel="stylesheet" media="all">
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- JS -->
		<script src="../js/jquery-1.11.3.min.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax_news.js"></script>
		<script src="../js/countdown.js"></script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5FLOtt9k5ikQQpd9rDlu9yLIOwGkk2yM&callback=initMap">
        </script>
        <script src="../js/googleapi.js"></script>
	</head>
	<body>

	<nav>
		<div>
			<a href="index.php">
				<img class="size_logo" src="../css/Logo.png" alt="logo">
			</a>
		</div>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a class="underline_link_menu" href="current_battle.php">Battle du moment</a></li>
			<li><a href="concept.php">Notre concept</a></li>
			<li><a href="next-battle.php">Prochaines battles</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>

	<div class="menu-btn">
		<div>
			<a href="index.php">
				<img class="size_logo" src="../css/Logo.png" alt="logo">
			</a>
		</div>
		<a id="open_close" class="btn-open" href="javascript:void(0)">
			<img class="size_img_menu_open" src="../css/trashclose.png">
		</a>
	</div>

	<div class="overlay">
		<div class="menu">
			<ul>
				<li><a href="current_battle.php">Battle du moment</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="concept.php">Concept</a></li>
						<li><a href="next-battle.php">Prochaine Battle</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>


	<main>
		<section class="concept">
			<h1 class="center_title_concept">BATTLE EN COURS</h1>
			<h2 class="center_title_concept size_tablet">Temps restant</h2>
			<div class="center_title_concept">
            <div class="inline_time size_tablet_count">
					<span id='span_time_one'></span>
					 <p id="countdown"></p>
					 <span id='span_time_two'></span>
            </div>


			</div>
			<div class="flex_row_battle">
				<div class="center">
					<img class="size_trash_next_battle" src="../css/gryffon.png">
					<p class="pourcentage_mobile">XX%</p>
					<img class="size_name_team" src="../css/gryff_ai.png">
				</div>
				<div>
					<img class="lightning" src="../css/eclair.png">
				</div>
				<div class="center">
					<img class="size_trash_next_battle" src="../css/serpentard.png">
					<p class="pourcentage_mobile">XX%</p>
					<img class="size_name_team" src="../css/serp_ai.png">
				</div>

				<div class="line_pourcentage">
					<div class="stats">
						<div>30%</div>
						<div>70%</div>
					</div>
					<div class="color_stats">
						<div class="stats_gryffon"></div>
						<div class="stats_serpan"></div>
					</div>
				</div>
				<div class="center width_total">
					<p> Grâce à vous, 3kg de mégots vont pouvoir être recylclés!</p>
				</div>
				<div class="center_title_google">
					<p>Trouvez les battles près de chez vous!</p>
				</div>
				<div class="google_place_trash">
                    <div id="map"></div>
				</div>
			</div>

			<h2 class="center_title_concept">DERNIERES BATTLES</h2>

            <div class="square_end_current">
                <div class="square_last_battle"></div>
                <div class="second_part_square">
                     <div class="square marge_square"></div>
                     <div class="square "></div>
                </div>
            </div>
			<div class="button hvr-grow-shadow" style="display:block">
                <a href="next-battle.php">
				    Toutes les battles
                </a>
			</div>


		</section>



	</main>

    <footer>
        <div class="footer_left_part">
            <h3>Newsletter</h3>
            <p class="center_p_footer">Soyez le premier à être au courant de notre actualité !</p>
            <div id="result_news" class="bounce">
            </div>
            <form class="form_footer" method="post" action="newsletter.php" >
                <input class="mail_footer" type="text" id="email_form_news" name="destination" placeholder="email@example.com">
                <input class="footer_submit hvr-grow-shadow" type="submit" class="btn" value="S'inscrire" id="form_news">
            </form>
        </div>
        <div class="footer_div">
            <div class="_2V0DNe9b5bQu46I_uujrG7 _16O-eCHzZunQvcyy7I8zUQ _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy">
            </div>
            <div class="_2cZVduiqTZOjd_11SpdBDH _12lVcnt6PnujdWtpCynuB4 _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy">
            </div>
        </div>
        <div class="link_footer footer_right_part">
            <p><a class="none" href="index.php">Accueil</a></p>
            <p><a href="current_battle.php">Battle du moment</a></p>
            <p><a href="concept.php">Notre concept</a></p>
            <p><a href="next-battle.php">Prochaine battle</a></p>
            <p><a href="contact.php">Nous contacter</a></p>
            <div class="footer_div desktop_view">
                <div class="_2V0DNe9b5bQu46I_uujrG7 _16O-eCHzZunQvcyy7I8zUQ _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy">
                </div>
                <div class="_2cZVduiqTZOjd_11SpdBDH _12lVcnt6PnujdWtpCynuB4 _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy">
                </div>
            </div>
        </div>
        <div class="footer_div tablet_view">
            <div class="_2V0DNe9b5bQu46I_uujrG7 _16O-eCHzZunQvcyy7I8zUQ _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy">
            </div>
            <div class="_2cZVduiqTZOjd_11SpdBDH _12lVcnt6PnujdWtpCynuB4 _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy">
            </div>
        </div>
        <div class="copyright_footer">
            <p> &copy; 2Trash1Battle | Tous droits réservés</p>
        </div>
    </footer>

	</body>
</html>