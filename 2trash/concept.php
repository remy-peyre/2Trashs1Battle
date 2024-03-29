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
  <link href="../Hover/css/hover.css" rel="stylesheet" media="all">

  <!-- JS -->
  <script src="../js/jquery-1.11.3.min.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/ajax_news.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5FLOtt9k5ikQQpd9rDlu9yLIOwGkk2yM&callback=initMap">
  </script>
  <script src="../js/googlemap_concept.js"></script>

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
      <img class="size_img_menu_open" src="../css/trashclose.png" alt="menu fermé">
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
            <img class="size_pic_in_round" src="../css/illu_mobile/conceptone.png" alt="icone poubelle">
          </div>
          <div class="title_square_concept">
            <p>
              Trouver votre poubelle
            </p>
          </div>
          <div class="text_square_concept_one align_top">
            <p class="size_mobile">Avec notre carte interactive de Paris, trouvez les points participants au concept. Choisissez votre camp favori et jetez vos déchets pour faire gagner votre équipe !
            </p>
          </div>
        </div>
        <div class="third_square_concept">
          <div class="round">
            <img class="size_pic_in_round megot" src="../css/illu_mobile/megot.png" alt="icone megot">
          </div>
          <div class="title_square_concept">
            <p>
              Jeter vos déchets
            </p>
          </div>
          <div class="text_square_concept">
            <div class="mini_round">
              <img class="arrow" src="../css/illu_mobile/arrow.png" alt="fleche">
            </div>
            <p class="size_p_arrow align_top2">Plus d’excuses pour jeter vos mégots de cigarette par terre ! Nous avons LA solution à la fois ludique et intelligible pour rendre notre ville propre.
            </p>
          </div>
        </div>
        <div class="third_square_concept">
          <div class="round">
            <img class="size_pic_in_round recycler" src="../css/illu_mobile/recyclage.png" alt="recycler">
          </div>
          <div class="title_square_concept ">
            <p class="align_title3">
              Un geste pour l’environnement
            </p>
          </div>
          <div class="text_square_concept">
            <div class="mini_round">
              <img class="arrow second_try" src="../css/illu_mobile/arrow.png" alt="fleche">
            </div>
            <p class="align_top3">Votre participation permettra à vos mégots d’être distribués à Terracycle pour permettre la fabrication d’autres éléments tels que des billes en plastique ou du compost.
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
          Tout d'abord, nos mégots récoltés seront distribués à notre partenaire Terracycle qui va prendre en main le processus de recyclage.
        </p>
        <p class="p_size_concept">
          Ensuite, le papier et le reste du tabac (y compris les cendres) seront transformés en compost, qui sera utilisé dans l'aménagement du paysage.
        </p>
        <p class="p_size_concept">
          Le filtre quand à lui, sera recyclé en petites billes de plastique qui serviront à diverses utilisations possible après avoir été traité et dépollué. Ces billes en plastiques sont surtout utilisées actuellement dans la fabrication de paletes industrielles.
        </p>
        <p class="p_size_concept">
          Avec notre concept, en plus de passer un bon moment avec une rivalité amicale en choisissant votre camp, vous nous aidez aussi à résoudre un sérieux problème que représentent les milliers de mégots de cigarette jetés par terre !
        </p>
      </div>
      <div class="size_gif_concept hide">
        <video loop muted autoplay src="../css/illu_mobile/gif.mp4"></video>
      </div>

      <!--<div id="myBtn class="find_trash">
-->
      <div id="myBtn" class="find_trash hvr-grow-shadow" style="display:block;">
        <div class="color_find_trash ">
          Trouver une poubelle !
        </div>
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