<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Test</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=0.2">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- CSS -->
		<link rel="stylesheet" href="../css/ionicons.min.css">
		<link rel="stylesheet" href="../css/style.css">

		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<!-- JS -->
		<script src="../js/jquery-1.11.3.min.js"></script>
		<script src="../js/script.js"></script>
		<script src='../js/display_form.js'></script>
	</head>
	<body>
	<nav>
		<ul>
			<li><a href="index.html">Accueil</a></li>
			<li><a href="concept.html">Concept</a></li>
			<li><a href="next-battle.html">Next Battle</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>

	<div class="menu-btn">
		<div>
			<a href="index.html">
				<img class="size_logo" src="../css/Logo.png" alt="logo">
			</a>
		</div>
		<a id="open_close" class="btn-open" href="javascript:void(0)"></a>
	</div>

	<div class="overlay">
		<div class="menu">
			<ul>
				<li><a href="contact.html">Contact</a>
					<ul>
						<li><a href="index.html">Accueil</a></li>
						<li><a href="current_battle.html">Battle du moment</a></li>
						<li><a href="concept.html">Concept</a></li>
						<li><a href="next-battle.html">Next Battle</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<main>
		<h1 class="title_center_contact">Contactez-nous!</h1>
		<div class="flex_align_case_contact">
			<p class="color_title_form" id="display_company">Entreprise</p>
			<p class="space_point" >	&bull;</p>
			<p id="display_association">Association</p>
			<p class="space_point">	&bull;</p>
			<p id="display_user">Particulier</p>
		</div>



		<div class="container" id="display_form_company" >
			<form class="form" action="mail.php" method="post" name="form_company">
				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="nom" tabindex="0" name="company">
					<label for="nom">
						<span data-text="Nom d'entreprise *">Nom d'entreprise *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="secteur" tabindex="0" name="activity">
					<label for="secteur">
						<span data-text="Secteur d'activité">Secteur d'activité</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="Adresse" tabindex="0" name="adresse">
					<label for="Adresse">
						<span data-text="Adresse">Adresse</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __second">
					<input type="email" id="email" tabindex="0" name="email">
					<label for="email">
						<span data-text="E-mail">E-mail</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="subject" tabindex="0" name="subject">
					<label for="subject">
						<span data-text="Sujet" >Sujet</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="textarea" id="message" class="wordbreak" tabindex="0" name="message">
					<label for="message">
						<span data-text="Message">Message</span>
					</label>
				</fieldset>

				<div class="form-footer">
					<input type="submit" class="btn" value="Envoyer" name="input_company">
				</div>
			</form>
		</div>



		<div class="container none"  id="display_form_association">
			<form class="form" action="#">
				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="nom_assoc" tabindex="0">
					<label for="nom_assoc">
						<span data-text="Nom de l'association *">Nom de l'association *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="cause" tabindex="0">
					<label for="cause">
						<span data-text="Cause défendue">Cause défendue</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="Adresse_assoc" tabindex="0">
					<label for="Adresse_assoc">
						<span data-text="Adresse">Adresse</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __second">
					<input type="email" id="email_assoc" tabindex="0">
					<label for="email_assoc">
						<span data-text="E-mail">E-mail</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="subject_assoc" tabindex="0">
					<label for="subject_assoc">
						<span data-text="Sujet">Sujet</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="textarea" id="message_assoc" class="wordbreak" tabindex="0">
					<label for="message_assoc">
						<span data-text="Message">Message</span>
					</label>
				</fieldset>

				<div class="form-footer">
					<input type="submit" class="btn" value="Envoyer">
				</div>
			</form>
		</div>

		<div class="container none" id="display_form_user">
			<form class="form" action="#" >
				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="user_lastname" tabindex="0">
					<label for="user_lastname">
						<span data-text="Nom *">Nom *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="user_firstname" tabindex="0">
					<label for="user_firstname">
						<span data-text="Prénom *">Prénom *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="user_age" tabindex="0">
					<label for="user_age">
						<span data-text="Age *">Age *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __second">
					<input type="email" id="email_user" tabindex="0">
					<label for="email_user">
						<span data-text="E-mail *">E-mail *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="text" id="subject_user" tabindex="0">
					<label for="subject_user">
						<span data-text="Sujet *">Sujet *</span>
					</label>
				</fieldset>

				<fieldset class="form-fieldset ui-input __first">
					<input type="textarea" id="message_user" class="wordbreak" tabindex="0">
					<label for="message_user">
						<span data-text="Message *">Message *</span>
					</label>
				</fieldset>

				<div class="form-footer">
					<input type="submit" class="btn" value="Envoyer">
				</div>
			</form>
		</div>

	</main>

	<footer>
		<h3>Newsletter</h3>
		<p class="center_p_footer">Soyez le premier à être au courant de notre actualité !</p>

		<form class="form_footer">
			<input class="mail_footer" type="email" placeholder="email@example.com">
			<input class="footer_submit" type="submit" class="btn" value="S'inscrire">
		</form>
		<div class="link_footer">
			<p><a href="index.html">Accueil</a></p>
			<p><a href="current_battle.html">Battle du moment</a></p>
			<p><a href="index.html">A propos</a></p>
			<p><a href="concept.html">Notre concept</a></p>
			<p><a href="next-battle.html">Prochaine battle</a></p>
		</div>
		<div class="copyright_footer">
			<p> &copy; 2Trash1Battle | Tous droits réservés</p>
		</div>
	</footer>
	</body>
</html>