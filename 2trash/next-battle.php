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
  <script src="../js/ajax_sondage.js"></script>
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
      <img class="size_img_menu_open" src="../css/trashclose.png" alt="menu fermé">
    </a>
  </div>

  <div class="overlay">
    <div class="menu">
      <ul>
        <li><a href="#">Next Battle</a>
          <ul>
            <li><a href="index.php">Accueil</a></li>
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
      <p class="space_point top_point"> &bull;</p>
      <div id="display_old_battle" class="center_categories_next-battle">
        <p>Anciennes</p>
        <p>&nbsp;battles</p>
      </div>
      <p class="space_point top_point"> &bull;</p>
      <div id="display_vote" class="center_categories_next-battle">
        <p>Place au</p>
        <p>&nbsp;vote</p>
      </div>
    </div>

    <section id="display_section_next_battle">
      <div class="size_img_next_battle">

      </div>
      <div class="center_categories_next-battle bold">
        <p class="no_marge">Rejoignez-nous le 04 Juin pour une</p>
        <p class="no_marge">&nbsp;battle du tonnerre!</p>
      </div>
      <div class="join_us_next_battle">
        <p>
          Rejoignez-nous dès aujourd’hui pour suivre toute notre actualité. Une invitaiton au rire et à la bonne humeur !
        </p>
      </div>
      <div class="all_struct_twitter">

      <blockquote class="twitter-tweet" data-lang="fr"><p lang="fr" dir="ltr">Plus d’excuses pour ne pas jeter ses mégots dans nos supers poubelles !<br>Aujourd’hui, Serpentard VS Gryffondor on compte sur vous <a href="https://twitter.com/hashtag/%C3%A9cologie?src=hash">#écologie</a></p>&mdash; 2 Trash 1 Battle (@2Trash1Battle) <a href="https://twitter.com/2Trash1Battle/status/866207395063771136">21 mai 2017</a></blockquote>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

      </div>
    </section>


    <section id="display_section_old_battle" class="none">

      <div class="first_row_old_battle">
        <div class="marge_submenu_old_battle color_cate_next_battle_underline">All</div>
        <div class="marge_submenu_old_battle">Battles sponsorisées</div>
        <div class="marge_submenu_old_battle">Sport</div>
        <div class="marge_submenu_old_battle">Nourriture</div>
        <div class="marge_submenu_old_battle">Musique</div>
      </div>

      <div class="first_row_flex_old_battle">
        <div class="first_square_pic" id="first_battle"></div>
        <div class="little_square_first">
          <p class="uppercase_name">rugby - foot</p>
          <p>score</p>
          <div class="inline_second_square">
            <p>30%</p>
            <p>70%</p>
          </div>
        </div>
      </div>

      <div class="first_row_flex_old_battle">
        <div class="little_square_first">
          <p class="uppercase_name">cape ten US - hi run man </p>
          <p>score</p>
          <div class="inline_second_square">
            <p>86%</p>
            <p>14%</p>
          </div>
        </div>
        <div class="first_square_pic" id="second_battle"></div>
      </div>

      <div class="first_row_flex_old_battle">
        <div class="first_square_pic" id="thirth_battle"></div>
        <div class="little_square_first">
          <p class="uppercase_name">kauka - faon ta</p>
          <p>score</p>
          <div class="inline_second_square">
            <p>65%</p>
            <p>35%</p>
          </div>
        </div>
      </div>
    </section>


    <section id="display_section_vote" class="none">
      <div class="title_vote">Quelle battle voulez-vous voir prendre forme ?</div>

      <form class="form_vote" action="sondage.php" method="post" id="form_survey">
        <input type="radio" id="one" name="choice_survey" value="sugar_sal">
        <label class="square_form_vote" id="vote_one" for="one"></label>
        <br>

        <input type="radio" id="two" name="choice_survey" value="dog_cat">
        <label class="square_form_vote" id="vote_two" for="two"></label>
        <br>

        <input type="radio" id="tree" name="choice_survey" value="ski_beach">
        <label class="square_form_vote" id="vote_three" for="tree"></label>
        <br>

        <input type="submit" value="VOTER" name="form_submit_survey" id="form_submit_survey" class="hvr-grow-shadow">
      </form>

      <div class="second_title_vote">
        <p id="result_survey" class="bounce"></p>
        <!--<p>Merci! Les résultats seront disponibles le 27 juin !</p>-->

        <div class="inline_time size_tablet_count">
          <!--<span id='span_time_one'></span>-->
          <p id="countdown" class="position_count_vote"></p>
          <!--<span id='span_time_two'></span>-->
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
      <form class="form_footer" method="post" action="newsletter.php">
        <input class="mail_footer" type="text" id="email_form_news" name="destination" placeholder="email@example.com">
        <input class="footer_submit hvr-grow-shadow btn" type="submit" value="S'inscrire" id="form_news">
      </form>
    </div>
    <div class="footer_div">
      <a class="_2V0DNe9b5bQu46I_uujrG7 _16O-eCHzZunQvcyy7I8zUQ _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy" target="_blank" href="https://www.facebook.com/2Trash1Battle/?fref=ts">
      </a>
      <a class="_2cZVduiqTZOjd_11SpdBDH _12lVcnt6PnujdWtpCynuB4 _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy" target="_blank" href="https://twitter.com/2Trash1Battle">
      </a>
    </div>
    <div class="link_footer footer_right_part">
      <p><a class="none" href="index.php">Accueil</a></p>
      <p><a href="current_battle.php">Battle du moment</a></p>
      <p><a href="concept.php">Notre concept</a></p>
      <p><a href="next-battle.php">Prochaine battle</a></p>
      <p><a href="contact.php">Nous contacter</a></p>
      <div class="footer_div desktop_view">
        <a class="_2V0DNe9b5bQu46I_uujrG7 _16O-eCHzZunQvcyy7I8zUQ _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy" target="_blank" href="https://www.facebook.com/2Trash1Battle/?fref=ts">
        </a>
        <a class="_2cZVduiqTZOjd_11SpdBDH _12lVcnt6PnujdWtpCynuB4 _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy" target="_blank" href="https://twitter.com/2Trash1Battle">
        </a>
      </div>
    </div>
    <div class="footer_div tablet_view">
      <a class="_2V0DNe9b5bQu46I_uujrG7 _16O-eCHzZunQvcyy7I8zUQ _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy" target="_blank" href="https://www.facebook.com/2Trash1Battle/?fref=ts">
      </a>
      <a class="_2cZVduiqTZOjd_11SpdBDH _12lVcnt6PnujdWtpCynuB4 _2nwluuq-gBupJmVNwIMyEy _1Fba10Vcpc4_UBtLy_oMYy" target="_blank" href="https://twitter.com/2Trash1Battle">
      </a>
    </div>
    <div class="copyright_footer">
      <p> &copy; 2Trash1Battle | Tous droits réservés</p>
    </div>
  </footer>

</body>

</html>