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

		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- JS -->
		<script src="../js/jquery-1.11.3.min.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax_news.js"></script>
        <script src='../js/display_section.js'></script>

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
			<li><a href="concept.php">Notre concept</a></li>
			<li><a class="underline_link_menu" href="next-battle.php">Prochaines battles</a></li>
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
				<li><a href="#">Next Battle</a>
					<ul>
						<li><a href="concept.php">Accueil</a></li>
						<li><a href="current_battle.php">Battle du moment</a></li>
						<li><a href="concept.php">Concept</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<main>
		<div class="flex_align_case_contact margin_next_battle">
			<div id="display_next_battle" class="center_categories_next-battle color_cate_next_battle">
				<p>Prochaine</p>
				<p>&nbsp;battle</p>
			</div>
			<p class="space_point top_point">	&bull;</p>
			<div id="display_old_battle" class="center_categories_next-battle">
				<p>Anciennes</p>
				<p>&nbsp;battles</p>
			</div>
			<p class="space_point top_point">	&bull;</p>
			<div id="display_vote" class="center_categories_next-battle">
				<p>Place au</p>
				<p>&nbsp;vote</p>
			</div>
		</div>

        <section id="display_section_next_battle">
            <div class="size_img_next_battle">

            </div>
            <div class="center_categories_next-battle bold">
                <p class="no_marge">Rejoignez-nous le Jeudi 18 Mai pour une</p>
                <p class="no_marge">&nbsp;battle du tonnerre!</p>
            </div>
            <div class="join_us_next_battle">
                <p>
                    Rejoignez-nous dès aujourd’hui pour suivre toute notre actualité.
                    Une invitaiton au rire et à la bonne humeur !
                </p>
            </div>
            <div class="all_struct_twitter">

                <blockquote class="twitter-tweet" data-lang="fr"><p lang="fr" dir="ltr">Plus d’excuse pour ne pas jeter ses mégots dans nos super poubelles !<br>Aujourd’hui, Serpentard VS Gryffondor on compte sur vous ;) <a href="https://twitter.com/hashtag/%C3%A9cologie?src=hash">#écologie</a></p>&mdash; 2 Trash 1 Battle (@2Trash1Battle) <a href="https://twitter.com/2Trash1Battle/status/863729789278056450">14 mai 2017</a></blockquote>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>
        </section>
        <section id="display_section_old_battle" class="none">
            <p>coucou old battle</p>
        </section>
        <section id="display_section_vote" class="none">
            <div class="title_vote">Quelle battle voulez-vous voir prendre forme ?</div>

            <form class="form_vote">
                <input type="radio" id="one" name="choice" value="1">
                <label class="square_form_vote" for="one"></label><br>

                <input type="radio" id="two" name="choice" value="2">
                <label class="square_form_vote" for="two"></label><br>

                <input type="radio" id="tree" name="choice" value="3">
                <label class="square_form_vote" for="tree"></label><br>

                <input type="submit" value="Voter">
            </form>

            <div class="second_title_vote">
                <p>Merci! Les résultats seront disponibles le 25 mai !</p>
            </div>
            <p id="countdown"></p>
            <div>

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
				<input class="footer_submit" type="submit" class="btn" value="S'inscrire" id="form_news">
			</form>
		</div>
		<div class="link_footer footer_right_part">
			<p><a href="index.php">Accueil</a></p>
			<p><a href="current_battle.php">Battle du moment</a></p>
			<p><a href="concept.php">Notre concept</a></p>
			<p><a href="next-battle.php">Prochaine battle</a></p>
			<p><a href="contact.php">Nous contacter</a></p>
		</div>
		<div class="copyright_footer">
			<p> &copy; 2Trash1Battle | Tous droits réservés</p>
		</div>
	</footer>

	</body>
</html>