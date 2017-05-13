<!DOCTYPE html>
<html class="no-js" lang="fr">
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
	<script src="../js/ajax_news.js"></script>

</head>

<body>
    
    <nav>
        <div>
            <a href="index.php">
                <img class="size_logo" src="../css/Logo.png" alt="logo">
            </a>
        </div>
        <ul>
            <li><a class="underline_link_menu" href="index.php">Accueil</a></li>
            <li><a href="current_battle.php">Battle du moment</a></li>
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
                <li><a href="#">Acceuil</a>
                    <ul>
                        <li><a href="current_battle.php">Battle du moment</a></li>
                        <li><a href="concept.php">Concept</a></li>
                        <li><a href="next-battle.php">Prochaines battles</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <main>
        <section class="home_current_battle flex_end_home_button">
            <a class="button_home" href="current_battle.php">
                <div>Battle du moment</div>
            </a>
        </section>
        <section class="home_concept flex_end_home_button flex_button_concept_tablet">
            <a class="button_home color_desk_concept" href="concept.php">
                <div>Notre concept</div>
            </a>
        </section>
        <section class="home_next_battles flex_end_home_button">
            <a class="button_home" href="next-battle.php">
                <div>Prochaine battle</div>
            </a>
        </section>
        <section class="home_contact flex_end_home_button flex_button_contact_tablet">
            <a class="button_home color_desk_contact" href="contact.php">
                <div>Nous contacter</div>
            </a>
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
            <p><a class="none" href="index.php">Accueil</a></p>
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