
<html lang="fr-FR">

<?php include_once 'includes/head.php';?>
<head>
  <link rel="stylesheet" href="./assets/css/home.css?u=2105" />
</head>

  <body>

      <!--<strong><p style="width: 100%; background: rgb(255, 68, 68); position: relative; top: -25px; text-align: center; border-radius: 10px; border-style: solid; border-color: white; border-width: 1px;">Ce site est actuellement en développement. En cas de problème(s), 
        merci d'envoyer un mail à <a href="mailto:<?php echo WEBSITE_MAIL ?>" class="deco"><?php echo WEBSITE_MAIL ?></a></p></strong>-->
    <main>
      <div class="avi">
        <img
          src="assets/images/chartiste.png"
          width="220"
          height="220"
          alt="Un chat qui fait de l'art."
        />
      </div>
      <h1><?php echo WEBSITE_NAME ?></h1>
      <p>
        Salut ! Moi, c'est Harmony. J'utilise les pronoms <?php include './assets/svg/demigirl_flag.html' ?> <a href="https://fr.pronouns.page/@odixiz" target="_bank" class="deco"> elle et iel</a>. Je vis en <img src="assets/images/breizh.png" class="flag"></img> Bretagne et j'étudie au
          <img src="assets/images/lxp.jpg" class="flag"></img> Lycée Expérimental de Saint-Nazaire.
      </p>
      <p>Je m'intéresse aux <strong><i class="fas fa-palette" style="color: rgb(255, 198, 41)"></i> arts</strong>, 
        <strong>aux <i class="fas fa-atom" style="color: rgb(251, 4, 210)"></i> sciences</strong>, 
        ainsi que <strong><i class="fas fa-laptop" style="color: rgb(98, 41, 255)"></i> l'informatique</strong>.</p>
      <p>Je défend les droits <?php include './assets/svg/lgbt_flag.html' ?> <strong>LGBTQ+</strong>, <?php include './assets/svg/anarco_flag.html' ?> <strong>l'égalité et la liberté</strong> de tou·te·s, 
        <strong>l'anticlassime</strong>, <strong>l'antivalidisme</strong>, ainsi que <strong>les logiciels et l'internet libre</strong>.</p>
     
     <!-- Contact -->
     
        <p class="box">

        Tu peux me joindre sur
        <a rel="me" href="<?php echo $btn_social_2_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_2_icon ?>" style="color:<?php echo $btn_social_2_color ?>"></i> <?php echo $btn_social_2 ?></a></strong>, 
        
        <strong><a href="<?php echo $btn_social_3_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_3_icon ?>" style="color: <?php echo $btn_social_3_color ?>"></i> <?php echo $btn_social_3 ?></a></strong>, 

        et <strong><a href="<?php echo $btn_social_1_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_1_icon ?>" style="color: <?php echo $btn_social_1_color ?>"></i> <?php echo $btn_social_1 ?></a>. 

        Tu peux aussi me contacter par

        <strong><a href="<?php echo $btn_social_4_link ?>" class="deco"><i class="<?php echo $btn_social_4_icon ?>" style="color: <?php echo $btn_social_4_color ?>"></i> <?php echo $btn_social_4 ?></a></strong> 

        ou par 
        
        <strong><i class="<?php echo $btn_social_5_icon ?>" style="color: <?php echo $btn_social_5_color ?>"></i> <?php echo $btn_social_5 ?></strong>.
      </br></br>

      <!-- Musique -->
      Je fais également de la musique. Tu peux l'écouter sur

      <strong><a href="<?php echo $btn_social_6_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_6_icon ?>" style="color: <?php echo $btn_social_6_color ?>"></i> <?php echo $btn_social_6 ?></a></strong>, 

      <strong><a href="<?php echo $btn_social_7_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_7_icon ?>" style="color: <?php echo $btn_social_7_color ?>"></i> <?php echo $btn_social_7 ?></a></strong>, 
      
      <strong><a class="deco" href="<?php echo $btn_social_8_link ?>" target="_blank"><i class="<?php echo $btn_social_8_icon ?>" style="color: <?php echo $btn_social_8_color ?>"></i> <?php echo $btn_social_8 ?></a></strong>.</br>

      <!-- Photo -->
      Ainsi que de la photo, que tu peux voir sur 

      <strong><a href="<?php echo $btn_social_9_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_9_icon ?>" style="color: <?php echo $btn_social_9_color ?>"></i> <?php echo $btn_social_9 ?></a></strong>, 

      <strong><a href="<?php echo $btn_social_10_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_10_icon ?>" style="color: <?php echo $btn_social_10_color ?>"></i> <?php echo $btn_social_10 ?></a></strong>, 

      <strong><a href="<?php echo $btn_social_11_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_11_icon ?>" style="color: <?php echo $btn_social_11_color ?>"></i> <?php echo $btn_social_11 ?></a></strong> 
      
      (ou Instagram).

</br>

      Il m'arrive de dev. Tu peux voir ça sur <strong><a href="<?php echo $btn_social_12_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_12_icon ?>" style="color: <?php echo $btn_social_12_color ?>"></i> <?php echo $btn_social_12 ?></a></strong>.
      </p>

<!-- Neurodivergence -->

      <p>Je suis une personne <?php include './assets/svg/neurodiv.html' ?> autiste. Merci de communiquer avec moi en utilisant des <a href="https://toneindicators.carrd.co" target="_blank" class="deco">indicateurs de ton</a>.</p>
      <footer>
        <span>
        <?php include './assets/svg/lgbt_flag.html' ?>
        <?php include './assets/svg/demigirl_flag.html' ?>
        <?php include './assets/svg/anarco_queer_flag.html' ?>
        <?php include './assets/svg/anarco_flag.html' ?>
        <?php include './assets/svg/neurodiv.html' ?>
        <?php include './assets/svg/solarpunk.html' ?>
        <?php include './assets/svg/blm.html' ?>
        </span>
        <br />
        <small>
        ©&thinsp;2021&#8209;<?php echo WEBSITE_TIME_YEAR ?> <?php echo WEBSITE_NAME ?>.
</br>
          Développé avec <i class="fas fa-heart" style="color: rgb(255, 38, 38)"></i> par <a href="<?php echo WEBSITE_AUTHOR_LINK ?>" class="deco"><?php echo WEBSITE_AUTHOR ?></a>.
          <a href="https://github.com/ODXZ/Odixiz" class="deco">Source</a>.
</br> 
<a href="https://inakaz.fr/" target="_blank"><img src="https://zupimages.net/up/22/04/kja2.jpg" alt="Hébergé par Inakaz" class="hostedby" width="100px"></a>
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a>
        </small>
      </footer>
    </main>
  </body>
