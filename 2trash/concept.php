<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>2 Trashs 1 Battle</title>
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
			<h2 class="center_title_concept">QUI SOMMES NOUS ?</h2>
			<p>
				Un joyeux groupe d’étudiants du web mélangeant 3 spécialités, design, développement et marketing.
				<br>
				Nous avons cherché une solution rapide et efficace face à la pollution
				urbaine et environnementale que représentent les mégots de cigarette
				jetés par terre. Notre projet à la fois ludique et intelligible permet
				aux jeunes adultes et seniors de s’y retrouver.
			</p>
			<h3 class="size_subtitle_concept">Notre concept en un GIF !</h3>
			<div class="flex_tablet_concept">
				<div class="size_gif_concept">
					<!--<img src="" alt="git du concept">-->
				</div>
				<div class="second_p_conept">
					<p>2 Trash 1 Battle met en place un concept innovant qui oppose deux poubelles
					qui représentent deux camps rivaux, où vous devez simplement jeter vos mégots
					de cigarette dans la poubelle représentant son camp favori.
					</p>
					<p>
					Le camp qui compte la masse de déchet la plus élevée est le vainqueur de la battle.
					</p>
					<p>
					A vous de jouer !
					</p>
				</div>
			</div>
			<h3 class="size_subtitle_concept_lastpart">Que faisons-nous de ces mégots ?</h3>
			<div>
				<p>
					<span class="question_concept">Et si on vous dit qu’il est possible de recycler les mégots de cigarette ?</span>
				</p>
				<p>
					Tout d’abord, nos mégots récoltés seront distribués à notre partenaire Terracycle, qui prendra en main le processus de recyclage.
				</p>
				<p>
					Ensuite le papier et le reste de tabac (y compris les cendres) seront transformés en compost, qui sera utilisé dans l’aménagement du paysage.
				</p>
				<p>
					Le filtre quand à lui, sera recyclé en petites billes de plastique qui serviront à diverses utilisations possible après avoir été traité et dépollué.
					Ces billes en plastiques sont surtout utilisées actuellement dans la fabrication de paletes industrielles.
				</p>
				<p>
					Avec notre projet, en plus de vous amuser avec une rivalité amicale en choisssant votre camp,
					vous nous aidez aussi à résoudre un sérieux problème écologique que représentent les mégots jettés par terre !
				</p>
			</div>
			<div class="find_trash">
				<a class="color_find_trash" href="#">
					Trouver une poubelle !
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