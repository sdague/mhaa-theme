<?php
// $Id: page.tpl.php,v 1.1.2.16 2010/11/16 14:39:39 himerus Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width" />
  <link href='http://fonts.googleapis.com/css?family=Lustria|Droid+Sans:400,700|Vollkorn:400,700' rel='stylesheet' type='text/css'>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="bodyblack <?php print $body_classes; ?>">
  <?php if (!empty($admin)) print $admin; ?>
  <div id="page" class="clearfix">
    <div id="site-header" class="container-<?php print $branding_wrapper_width; ?> clearfix">
      <div id="branding" class="grid-<?php print $header_logo_width; ?>">
        <?php if ($linked_logo_img): ?>
          <?php print $linked_logo_img; ?>
        <?php endif; ?>
        <?php if ($linked_site_name): ?>
          <?php if ($title): ?>
            <h2 id="site-name" class=""><?php print $linked_site_name; ?></h2>
          <?php else: ?>
            <h1 id="site-name" class=""><?php print $linked_site_name; ?></h1>
          <?php endif; ?>
        <?php endif; ?>
      </div><!-- /#branding -->
      <div id="title-right" class="grid-2">
        <div><h3>Follow Us</h3>
        <?php print mhaa2_follow_us(); ?>
        </div>
      </div><!-- /#site-menu -->
    </div>

    <?php if($header_first || $header_last): ?>
    <div id="header-regions" class="container-<?php print $header_wrapper_width; ?> clearfix">
      <?php if($header_first): ?>
        <div id="header-first" class="<?php print $header_first_classes; ?>">
          <?php print $header_first; ?>
        </div><!-- /#header-first -->
      <?php endif; ?>
      <?php if($header_last): ?>
        <div id="header-last" class="<?php print $header_last_classes; ?>">
          <?php print $header_last; ?>
        </div><!-- /#header-last -->
      <?php endif; ?>
    </div><!-- /#header-regions -->
    <?php endif; ?>

    <div id="menu-wrapper" class="container-<?php print $preface_wrapper_grids; ?> clearfix">
      <?php if ($main_menu_links || $secondary_menu_links): ?>
        <div id="site-menu" >
        <?php if($main_menu_links): ?>
          <div><?php print $main_menu_links; ?></div>
        <?php endif; ?>
        <?php if($secondary_menu_links): ?>
          <div><?php print $secondary_menu_links; ?></div>
        <?php endif; ?>
        </div><!-- /#site-menu -->
      <?php endif; ?>
    </div><!-- /#site-header -->
  </div>

    <?php if($preface_first || $preface_middle || $preface_last): ?>
    <div id="preface-wrapper" class="container-<?php print $preface_wrapper_grids; ?> clearfix">
      <?php if($preface_first): ?>
        <div id="preface-first" class="preface <?php print $preface_first_classes; ?>">
          <?php print $preface_first; ?>
        </div><!-- /#preface-first -->
      <?php endif; ?>
      <?php if($preface_middle): ?>
        <div id="preface-middle" class="preface <?php print $preface_middle_classes; ?>">
          <?php print $preface_middle; ?>
        </div><!-- /#preface-middle -->
      <?php endif; ?>
      <?php if($preface_last): ?>
        <div id="preface-last" class="preface <?php print $preface_last_classes; ?>">
          <?php print $preface_last; ?>
        </div><!-- /#preface-last -->
      <?php endif; ?>
    </div><!-- /#preface-wrapper -->
    <?php endif; ?>

    <?php if($help || $messages): ?>
    <div class="container-<?php print $default_container_width; ?> clearfix">
      <div class="grid-<?php print $default_container_width; ?>">
        <?php print $help; ?><?php print $messages; ?>
      </div>
    </div><!-- /.container-xx -->
    <?php endif; ?>

    <div id="front-page-container" class="container-<?php print $content_container_width; ?> clearfix">
      <?php if($front_right): ?>
      <div id="front-center" class="front-block column grid-4 push-4">
        <?php print $front_center; ?>
      </div>
     <div id="front-left" class="front-block column region grid-4 pull-4">
        <?php print $front_left; ?>
      </div>
      <div id="front-right" class="front-block column region grid-4">
        <?php print $front_right; ?>
      </div>
      <?php else: ?>
      <div id="front-center" class="front-block column grid-6 push-6">
        <?php print $front_center; ?>
      </div>
     <div id="front-left" class="front-block column region grid-6 pull-6">
        <?php print $front_left; ?>
      </div>
    <?php endif; ?>
    </div>

    <div id="astrographics" class="no-mobile container-<?php print $content_container_width; ?> clearfix">
      <div id="astrographics-inner" class="grid-12 column region">
        <div id="blackback">
          <a href="http://www.wunderground.com/US/NY/Ancram.html?bannertypeclick=sunandmoon"
             ><img src="http://weathersticker.wunderground.com/weathersticker/sunandmoon/language/www/US/NY/Ancram.gif" alt="Forecast for Ancram NY" alt="Forecast for Ancram NY" border="0" width="256" height="150"></a>

          <a href="http://cleardarksky.com/c/LkTagNYkey.html"
             ><img class="clearsky" alt="Clear Sky Chart for Lake Taghkanic" title="Clear Sky Chart for Lake Taghkanic" hspace="10" src="http://cleardarksky.com/csk/getcsk.php?id=LkTagNY" border="0" width="416" height="150"></a>

          <a href="http://sohowww.nascom.nasa.gov/data/realtime/realtime-update.html"
             ><img alt="The Sun courtesy of SOHO" title="The Sun courtesy of SOHO"
                   src="http://sohowww.nascom.nasa.gov/data/realtime/hmi_igr/512/latest.jpg"
                   width="150" height="150" border="0"></a>

          </div>
        </div>
      </div>
    <div id="astrographics-mobile" class="mobile-only container-<?php print $content_container_width; ?> clearfix">
      <div id="astrographics-inner" class="grid-12 column region">
        <div id="blackback">
          <a href="http://www.wunderground.com/US/NY/Ancram.html?bannertypeclick=sunandmoon">
            <img src="http://weathersticker.wunderground.com/weathersticker/sunandmoon/language/www/US/NY/Ancram.gif" alt="Forecast for Ancram NY" alt="Forecast for Ancram NY" border="0" width="256" height="150">
            </a>
          <a href="http://sohowww.nascom.nasa.gov/data/realtime/realtime-update.html">
            <img  width="150" height="150" alt="The Sun right now" src="
                                              http://sohowww.nascom.nasa.gov/data/realtime/hmi_igr/512/latest.jpg">
            </a>
            <br/>
          <a href="http://cleardarksky.com/c/LkTagNYkey.html">
            <img class="clearsky" alt="Clear Sky Chart for Lake Taghkanic" title="Clear Sky Chart for Lake Taghkanic" hspace="10" src="http://cleardarksky.com/csk/getcsk.php?id=LkTagNY" border="0" width="416" height="150">
          </a>
          </div>
        </div>
      </div>

      <div id="front-bottom-wrapper" class="container-12 clearfix">
        <div id="front-bottom-center" class="front-block column grid-4 push-4">
          <?php print $front_bottom_center; ?>
        </div>
        <div id="front-bottom-right" class="front-block column region grid-4 push-4">
          <?php print $front_bottom_right; ?>
        </div>
        <div id="front-bottom-left" class="front-block column region grid-4 pull-8">
          <?php print $front_bottom_left; ?>
      </div>

      </div>

    <?php if($postscript_one || $postscript_two || $postscript_three || $postscript_four): ?>
    <div id="postscript-wrapper" class="container-<?php print $postscript_container_width; ?> clearfix">
      <?php if($postscript_one): ?>
        <div id="postscript-one" class="postscript <?php print $postscript_one_classes; ?>">
          <?php print $postscript_one; ?>
        </div><!-- /#postscript-one -->
      <?php endif; ?>
      <?php if($postscript_two): ?>
        <div id="postscript-two" class="postscript <?php print $postscript_two_classes; ?>">
          <?php print $postscript_two; ?>
        </div><!-- /#postscript-two -->
      <?php endif; ?>
      <?php if($postscript_three): ?>
        <div id="postscript-three" class="postscript <?php print $postscript_three_classes; ?>">
          <?php print $postscript_three; ?>
        </div><!-- /#postscript-three -->
      <?php endif; ?>
      <?php if($postscript_four): ?>
        <div id="postscript-four" class="postscript <?php print $postscript_four_classes; ?>">
          <?php print $postscript_four; ?>
        </div><!-- /#postscript-four -->
      <?php endif; ?>
    </div><!-- /#postscript-wrapper -->
    <?php endif; ?>

    <?php if($footer_first || $footer_last || $footer_message): ?>
    <div id="footer-wrapper" class="container-<?php print $footer_container_width; ?> clearfix">
      <?php if($footer_first): ?>
        <div id="footer-first" class="<?php print $footer_first_classes; ?>">
          <?php print $footer_first; ?>
        </div><!-- /#footer-first -->
      <?php endif; ?>
      <?php if($footer_last || $footer_message): ?>
        <div id="footer-last" class="<?php print $footer_last_classes; ?>">
          <?php print $footer_last; ?>
          <?php if ($footer_message): ?>
            <div id="footer-message">
              <?php print $footer_message; ?>
            </div><!-- /#footer-message -->
          <?php endif; ?>
        </div><!-- /#footer-last -->
      <?php endif; ?>
    </div><!-- /#footer-wrapper -->
    <?php endif; ?>
  </div><!-- /#page -->
  <?php print $closure; ?>
</body>
</html>