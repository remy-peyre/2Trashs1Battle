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
		<script src="../js/ajax_form_company.js"></script>
		<script src="../js/ajax_form_assoc.js"></script>
		<script src="../js/ajax_user.js"></script>
		<script src='../js/display_form.js'></script>
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
			<li><a href="next-battle.php">Prochaines battles</a></li>
			<li><a class="underline_link_menu" href="contact.php">Contact</a></li>
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
				<li><a href="contact.php">Contact</a>
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="current_battle.php">Battle du moment</a></li>
						<li><a href="contact.php">Concept</a></li>
						<li><a href="next-battle.php">Next Battle</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<main>
		<h1 class="title_center_contact">Contactez-nous!</h1>

		</div>
		<div class="flex_align_case_contact">
			<p class="color_title_form" id="display_company">Entreprise</p>
			<p class="space_point" >	&bull;</p>
			<p id="display_association">Association</p>
			<p class="space_point">	&bull;</p>
			<p id="display_user">Particulier</p>
		</div>

		<div class="container" id="display_form_company">
			<form class="form" action="mail.php" id="form_submit_company" method="post">
				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="name_company" maxlength="25" tabindex="0" name="input_form_contact_one">
					<label for="nom">
						<span data-text="Nom d'entreprise *">Nom d'entreprise *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="activity_company" tabindex="0" maxlength="20" name="input_form_contact_two">
					<label for="secteur">
						<span data-text="Secteur d'activité">Secteur d'activité</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="adress_company" tabindex="0" maxlength="50" name="input_form_contact_three">
					<label for="Adresse">
						<span data-text="Adresse">Adresse</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __second">
					<input type="text" id="email_company" tabindex="0" name="input_form_contact_four">
					<label for="email">
						<span data-text="E-mail">E-mail</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="subject_company" tabindex="0" maxlength="60"  name="input_form_contact_five">
					<label for="subject">
						<span data-text="Sujet">Sujet</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="textarea" id="body_company" class="wordbreak" tabindex="0" name="input_form_contact_six">
					<label for="message">
						<span data-text="Message">Message</span>
					</label>
				</fieldset>

				<div class="form-footer">
					<input type="submit" class="btn" value="Envoyer" name="form_submit_company">
				</div>
			</form>
		</div>

		<div class="container none"  id="display_form_association">
			<form class="form" action="mail.php" id="form_submit_assoc" method="post">
				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="name_assoc" maxlength="25" tabindex="0" name="input_form_contact_one">
					<label for="nom_assoc">
						<span data-text="Nom de l'association *">Nom de l'association *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="activity_assoc" tabindex="0" maxlength="20" name="input_form_contact_two">
					<label for="cause">
						<span data-text="Cause défendue">Cause défendue</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="adress_assoc" tabindex="0" maxlength="50" name="input_form_contact_three">
					<label for="Adresse_assoc">
						<span data-text="Adresse">Adresse</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __second">
					<input type="text" id="email_assoc" tabindex="0" name="input_form_contact_four">
					<label for="email_assoc">
						<span data-text="E-mail">E-mail</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="subject_assoc" tabindex="0" maxlength="60"  name="input_form_contact_five">
					<label for="subject_assoc">
						<span data-text="Sujet">Sujet</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="textarea" id="body_assoc" class="wordbreak" tabindex="0" name="input_form_contact_six">
					<label for="message_assoc">
						<span data-text="Message">Message</span>
					</label>
				</fieldset>

				<div class="form-footer">
					<input type="submit" class="btn" value="Envoyer" name="form_submit_assoc" >
				</div>
			</form>
		</div>

		<div class="container none" id="display_form_user">
			<form class="form" action="mail.php" id="form_submit_user" method="post" >
				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="name_user" maxlength="25" tabindex="0" name="input_form_contact_one">
					<label for="user_lastname">
						<span data-text="Nom *">Nom *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="activity_user" tabindex="0" maxlength="20" name="input_form_contact_two">
					<label for="user_firstname">
						<span data-text="Prénom *">Prénom *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="adress_user" tabindex="0" maxlength="50" name="input_form_contact_three">
					<label for="user_age">
						<span data-text="Age *">Age *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __second">
					<input type="text" id="email_user" tabindex="0" name="input_form_contact_four">
					<label for="email_user">
						<span data-text="E-mail *">E-mail *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="subject_user" tabindex="0" maxlength="60"  name="input_form_contact_five">
					<label for="subject_user">
						<span data-text="Sujet *">Sujet *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="textarea" id="body_user" class="wordbreak" tabindex="0" name="input_form_contact_six">
					<label for="message_user">
						<span data-text="Message *">Message *</span>
					</label>
				</fieldset>

				<div class="form-footer">
					<input type="submit" class="btn" value="Envoyer" name="form_submit_user">
				</div>
			</form>
		</div>
		<div id="result_form_contact" class="bounce">
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
			<p><a href="contact.php">Notre concept</a></p>
			<p><a href="next-battle.php">Prochaine battle</a></p>
			<p><a href="contact.php">Nous contacter</a></p>
		</div>
		<div class="copyright_footer">
			<p> &copy; 2Trash1Battle | Tous droits réservés</p>
		</div>
	</footer>
	</body>
</html>