<?php
// $Id: template.php,v 1.1.2.9 2010/07/09 14:53:42 himerus Exp $

/*
 * Add any conditional stylesheets you will need for this sub-theme.
 *
 * To add stylesheets that ALWAYS need to be included, you should add them to
 * your .info file instead. Only use this section if you are including
 * stylesheets based on certain conditions.
 */
/* -- Delete this line if you want to use and modify this code
// Example: optionally add a fixed width CSS file.
if (theme_get_setting('mhaa2_fixed')) {
  drupal_add_css(path_to_theme() . '/layout-fixed.css', 'theme', 'all');
}
// */


/**
 * Implementation of HOOK_theme().
 */
function mhaa2_theme(&$existing, $type, $theme, $path) {
  $hooks = omega_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */

/* function mhaa2_preprocess_page(&$vars, $hook) {
  kpr($vars);
  static $preprocess_page;
  if (!$preprocess_page) {
    // Prepare 960gs CSS. Fixed width is default, fluid is optional via theme-settings
    if(theme_get_setting('omega_fixed_fluid') == 'fluid') {
      $css_960 = drupal_get_path('theme', 'omega') .'/css/960-fluid.css';
    }
    else {
      $css_960 = drupal_get_path('theme', 'omega') .'/css/960.css';
    }
    drupal_add_css($css_960, 'module', 'all');

    // enable/disable optional CSS files
    if (theme_get_setting('reset_css') == '1') {
      drupal_add_css(drupal_get_path('theme', 'omega') .'/css/reset.css', 'module', 'all');
    }
    if (theme_get_setting('text_css') == '1') {
      drupal_add_css(drupal_get_path('theme', 'omega') .'/css/text.css', 'module', 'all');
    }
    if (theme_get_setting('regions_css') == '1') {
      drupal_add_css(drupal_get_path('theme', 'omega') .'/css/regions.css', 'module', 'all');
    }
    if (theme_get_setting('defaults_css') == '1') {
      drupal_add_css(drupal_get_path('theme', 'omega') .'/css/defaults.css', 'module', 'all');
    }
    if (theme_get_setting('custom_css') == '1') {
      drupal_add_css(drupal_get_path('theme', 'omega') .'/css/custom.css', 'module', 'all');
    }
    // redeclare $styles
    kpr($vars['styles']);
    $vars['styles'] = drupal_get_css();
    kpr($vars['styles']);
    $preprocess_page = TRUE;
  }
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function mhaa2_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function mhaa2_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function mhaa2_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function mhaa2_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */


/**
 * Create a string of attributes form a provided array.
 *
 * @param $attributes
 * @return string
 */
function mhaa2_render_attributes($attributes) {
	return omega_render_attributes($attributes);
}

/**
 * For meetup
 */

function mhaa2_meetup_events_venueid($node) {
  $loc = node_load($node->field_location[0]["nid"]);
  $venue = $loc->field_meetupvenue[0]["value"];
  return $venue;
}

function mhaa2_meetup_events_body($node) {
  $boilerplate = node_load($node->field_boilerplate[0]["nid"]);
  $location = node_load($node->field_location[0]["nid"]);
  $result = $node->body . $boilerplate->body . $location->body;
  return $result;
}

function mhaa2_meetup_events_date($node) {
  return $node->field_date[0]["value"];
}

/***
 * Fix the calendar templates
 */
function mhaa2_calendar_ical_icon($url) {
  if ($image = theme('image', drupal_get_path('module', 'date_api') .'/images/ical16x16.gif', t('Add to calendar'), t('Add to calendar'))) {
      $string = '<div style="text-align:right; padding-top: 4px">';
      $string .= '<a href="http://www.google.com/calendar/render?cid=' . urlencode("http://" . $_SERVER['HTTP_HOST'] . $url . "/" . time()) . '" target="_blank">';
       $string .= '<img src="http://www.google.com/calendar/images/calendar_plus_en.gif" alt="Add to Google Calendar" title="Add to Google Calendar" border=0></a> ';
      $string .= '<a href="'. check_url($url) .'" class="ical-icon" title="ical">'. $image .'</a>';
      $string .= '</div>';

      return $string;
  }
}

/**
 * For follow us
 */
function mhaa2_follow_us() {
  $string = "<div>";
  $string .= '<a href="http://www.meetup.com/Mid-Hudson-Astronomical-Association/"><img alt="RSVP on Meetup" title="RSVP on Meetup" src="/sites/all/themes/mhaa2/images/meetup.png" /></a>&nbsp;';
  $string .= '<a href="http://tech.groups.yahoo.com/group/mhastro/"><img alt="Discuss at our Yahoo Group" title="Discuss at our Yahoo Group" src="/sites/all/themes/mhaa2/images/yahoo24.png" /></a>&nbsp;';
  $string .= '<a href="http://www.facebook.com/mhastro"><img alt="Like us on Facebook" title="Like us on Facebook" src="/sites/all/themes/mhvlug/images/facebook_button.png" /></a>&nbsp;';
  $string .= '<a href="http://www.google.com/calendar/render?cid=' . urlencode("http://" . $_SERVER['HTTP_HOST'] . "/calendar/ical?" . time()) . '"><img alt="Add us to Google Calendar" title="Add us to Google Calendar" src="/sites/all/themes/mhvlug2/images/Google-Calendar-32.png" /></a>&nbsp;';
  $string .= '</div>';
  return $string;

}