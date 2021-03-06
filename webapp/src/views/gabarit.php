<html>
  <head>
    <title>
      <?php echo localize('Company-Name') . " - " . $title; ?>
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="JavaScript/script.js"></script>
      <script type="text/javascript" src="JavaScript/jquery-validation-1.17.0/lib/jquery-1.11.1.js"></script>
      <script type="text/javascript" src="JavaScript/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
      <script type="text/javascript" src="JavaScript/jquery-validation-1.17.0/dist/localization/messages_fr.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
   </head>
  <body>

    <header class="header-outs inner_page-banner" id="home">
      <div class="headder-top">
        <div style="display: inline" id="logo">
          <img src="images/completeLogo.svg" alt="Carl et Mélanie Massothérapie" />
        </div>
        <nav style="display: inline">
          <label for="drop" class="toggle"><?php echo localize('Header-Menu'); ?></label>
          <input type="checkbox" id="drop">
          <ul class="menu mt-2">
            <li class="active">
              <a href="index.php?action=home"><?php echo localize('PageTitle-Home'); ?></a>
            </li>
            <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
              <a href="index.php?action=about"><?php echo localize('PageTitle-About'); ?></a>
            </li>
              <li>
                  <a href="?action=appointments"><?php echo localize('PageTitle-Appointments'); ?></a>
              </li>
            <?php
              if (!isset($_SESSION['username'])) {
            ?>
            <li>
              <a href="index.php?action=login"><?php echo localize('PageTitle-Login'); ?></a>
            </li>

            <?php
              } else {
            ?>
            <li>
            <a href="index.php?action=inscription"><?php echo localize('PageTitle-Inscription') ?></a>
            <li>
              <label for="drop-3" class="toggle toogle-2">
                <?php echo $_SESSION['username']; ?>
                <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">
                <?php echo localize('Header-Account'); ?>
                <span class="fa fa-angle-down" aria-hidden="true"></span>
              </a>
              <input type="checkbox" id="drop-3" />
              <ul>
                <li>
                  <a href="index.php?action=personalinformation" class="drop-text">
                    <?php echo localize('Header-Account-Manage'); ?>
                  </a>
                </li>
                <li>
                  <a href="index.php?action=updatepassword" class="drop-text">
                    <?php echo localize('Header-Manage-Password'); ?>
                  </a>
                </li>
                <li>
                  <a href="index.php?action=logout" class="drop-text">
                    <?php echo localize('Header-Logout'); ?>
                  </a>
                </li>
              </ul>
            </li>
                  <?php
              }
            if($_SESSION['locale'] == 'fr')
            {
                $setLocale = 'en';
            }
            else if($_SESSION['locale'] == 'en')
            {
                $setLocale = 'fr';
            }
            else
            {
                $setLocale = 'fr';
            }
            ?>
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
              <?php
                  echo '<a href="?action='.htmlentities($_GET['action']).'&setLocale='.$setLocale.'">'.$setLocale.'</a>'
              ?>
              </li>
          </ul>
        </nav>
      </div>
    </header>

    <content><?php echo $contenu ?></content>

    <footer class="py-lg-4 py-md-3 py-sm-3 py-3" >
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="row">
          <div class="col-lg-6 col-md-6 footer-left-grid">
            <div class="footer-w3layouts-head">
              <h2><a href="index.html"><?php echo localize('Company-Name'); ?></a></h2>
            </div>
            <div class="mb-1 pt-lg-5 pt-md-4 pt-3 footer-address">
              <ul>
                <li>
                  <h4><?php echo localize('Footer-Text-Address'); ?></h4>
                </li>
                <li>
                  <p><?php echo localize('Company-Address'); ?></p>
                </li>
              </ul>
            </div>
            <div class="mb-1 footer-address">
              <ul>
                <li>
                  <h4><?php echo localize('Footer-Text-Email'); ?></h4>
                </li>
                <li>
                  <p>
                    <a href="mailto:<?php echo localize('Company-Email'); ?>">
                      <?php echo localize('Company-Email'); ?>
                    </a>
                  </p>
                </li>
              </ul>
            </div>
            <div class="mb-1 footer-address">
              <ul>
                <li>
                  <h4><?php echo localize('Footer-Text-Phone'); ?></h4>
                </li>
                <li>
                  <p><?php echo localize('Company-Phone'); ?></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-info-bottom col-lg-6 col-md-6">
            <div class="icons mt-3 ">
              <ul>
                <li><a href="<?php echo localize('Company-Fb'); ?>"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-rss"></span></a></li>
                <li><a href="#"><span class="fa fa-vk"></span></a></li>
              </ul>
            </div>
              <div>
                  <i><a href="?action=report-bug" style="color:white; font-style:normal;"><span class="fa  fa-bug" aria-hidden="true">
                          </span> <?php echo localize('Report-Problem') ?></a></i>
              </div>
          </div>
        </div>
        <div class="bottem-wthree-footer text-center pt-lg-5 pt-md-4 pt-3">
          <p>© 2019 <?php echo localize('Company-Name').' - '.localize('Company-Rights'); ?></p>
          <p><?php echo localize('Website-Credits'); ?></p>
          <!-- <p><a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p> -->
        </div>
        <div class="text-center">
          <a href="#home" class="move-top text-center mt-3"></a>
        </div>
      </div>
    </footer>

    <div id="modal01" class="modal" onclick="this.style.display='none'">
      <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      <div class="modal-content">
        <img id="img02" style="max-width:100%">
      </div>
    </div>

  </body>
</html>
