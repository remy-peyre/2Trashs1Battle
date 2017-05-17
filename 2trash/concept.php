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
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- JS -->
		<script src="../js/jquery-1.11.3.min.js"></script>
        <script src="../js/modal.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax_news.js"></script>
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
			<li><a href="current_battle.php">Battle du moment</a></li>
			<li><a class="underline_link_menu" href="concept.php">Notre concept</a></li>
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
				<li><a href="#">Concept</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="current_battle.php">Battle du moment</a></li>
						<li><a href="next-battle.php">Next Battle</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>




	<main>
		<section class="concept">
			<h2 class="center_title_concept">COMMENT CA FONCTIONNE ?</h2>

            <div class="flex_square_concept">
                <div class="third_square_concept">
                    <div class="round">
                        <img class="size_pic_in_round" src="../css/illu_mobile/conceptone.png">
                    </div>
                    <div class="title_square_concept">
                        <p>
                            Trouver votre poubelle
                        </p>
                    </div>
                    <div class="text_square_concept_one align_top">
                        <p class="size_mobile">Avec la map de Paris, trouvez les
                        points participants à l’évènement.
                        Choisissez votre camp favori et
                        jetter vos déchets pour le faire
                        gagner.
                        </p>
                    </div>
                </div>
                <div class="third_square_concept">
                    <div class="round">
                        <img class="size_pic_in_round megot" src="../css/illu_mobile/megot.png">
                    </div>
                    <div class="title_square_concept">
                        <p>
                            Jetter vos déchets
                        </p>
                    </div>
                    <div class="text_square_concept">
                        <div class="mini_round">
                            <img class="arrow" src="../css/illu_mobile/arrow.png">
                        </div>
                        <p class="size_p_arrow align_top2">Plus d’excuses pour jetter vos
                            mégots et chewing-gum par terre!
                            Nous avons LA solution à la fois
                            ludique et intelligible pour rendre
                            notre ville propre.
                        </p>
                    </div>
                </div>
                <div class="third_square_concept">
                    <div class="round">
                        <img class="size_pic_in_round recycler" src="../css/illu_mobile/recyclage.png">
                    </div>
                    <div class="title_square_concept ">
                        <p class="align_title3">
                            Un geste pour l’environnement
                        </p>
                    </div>
                    <div class="text_square_concept">
                        <div class="mini_round">
                            <img class="arrow second_try" src="../css/illu_mobile/arrow.png">
                        </div>
                        <p class="align_top3">Votre participation permettra à vos
                            mégots d’être distribués à
                            Terracycle pour permettre la
                            fabrication d’autres éléments
                            tels que le composte ou des billes
                            de plastique.
                        </p>
                    </div>
                </div>
            </div>



			<h3 class="size_subtitle_concept_lastpart">Que faisons-nous de ces mégots ?</h3>
			<div class="third_p_concept">
				<p class="p_size_concept">
					<span class="question_concept">Et si on vous dit qu’il est possible de recycler les mégots de cigarette ?</span>
				</p>
                <div class="size_gif_concept hide_tablet">
                    <video loop muted autoplay src="../css/illu_mobile/gif.mp4"></video>
                </div>
				<p class="p_size_concept">
					Tout d’abord, nos mégots récoltés seront distribués à notre partenaire Terracycle, qui prendra en main le processus de recyclage.
				</p>
				<p class="p_size_concept">
					Ensuite le papier et le reste de tabac (y compris les cendres) seront transformés en compost, qui sera utilisé dans l’aménagement du paysage.
				</p>
				<p class="p_size_concept">
					Le filtre quand à lui, sera recyclé en petites billes de plastique qui serviront à diverses utilisations possible après avoir été traité et dépollué.
					Ces billes en plastiques sont surtout utilisées actuellement dans la fabrication de paletes industrielles.
				</p>
				<p class="p_size_concept">
					Avec notre projet, en plus de vous amuser avec une rivalité amicale en choisssant votre camp,
					vous nous aidez aussi à résoudre un sérieux problème écologique que représentent les mégots jettés par terre !
				</p>
			</div>
            <div class="size_gif_concept hide">
                <video loop muted autoplay src="../css/illu_mobile/gif.mp4"></video>
            </div>

            <!--<div id="myBtn class="find_trash">
 -->
			<div id="myBtn" class="find_trash">
				<a class="color_find_trash" href="#">
					Trouver une poubelle !
				</a>
			</div>

            <!-- Trigger/Open The Modal -->
            <!--<button id="myBtn">Open Modal</button>-->

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Où nous trouver !</h2>
                    </div>
                    <div class="modal-body">
                        <div id="map"></div>
                    </div>
                </div>
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