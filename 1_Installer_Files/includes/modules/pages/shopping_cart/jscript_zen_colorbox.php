<?php
/**
 * Zen Colorbox
 *
 * @author niestudio (daniel [dot] niestudio [at] gmail [dot] com)
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: jscript_zen_colorbox.php 2014-06-21 niestudio $
 */

if (ZEN_COLORBOX_STATUS == 'true') {
  require_once(DIR_FS_CATALOG . DIR_WS_CLASSES . 'zen_colorbox/jquery_colorbox.php');
?>
<script type="text/javascript">
<?php
  require(DIR_FS_CATALOG . DIR_WS_CLASSES . 'zen_colorbox/autoload_default.php');
  $anchor = 'a[href*="session_win"]';
  $closenear = 'p';
  $zcb_given = zen_href_link(FILENAME_INFO_SHOPPING_CART);

  require_once(DIR_FS_CATALOG . DIR_WS_CLASSES . 'zen_colorbox/display_js_link.php');
  unset($zcb_given);
?>
</script>
<?php  }
