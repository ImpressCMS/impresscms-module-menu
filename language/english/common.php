<?php
/**
 * 'Menu' is a menu module for ImpressCMS
 *
 * File: /language/english/common.php
 *
 * english common language file
 *
 * @copyright	Copyright QM-B (Steffen Flohrer) 2012
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * ----------------------------------------------------------------------------------------------------------
 * 				Menu
 * @since		1.00
 * @author		QM-B <qm-b@hotmail.de>
 * @version		$Id$
 * @package		menu
 *
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

// menu
define("_CO_MENU_MENU_MENU_NAME", "Name");
define("_CO_MENU_MENU_MENU_NAME_DSC", "The name of the Menu to be used in the smarty function");
define("_CO_MENU_MENU_MENU_DSC", "Description");
define("_CO_MENU_MENU_MENU_DSC_DSC", "This will NOT be displayed. It's only to keep different menus better in mind");
define("_CO_MENU_MENU_MENU_HOME", "Display &quot;Home&quot; Link?");
define("_CO_MENU_MENU_MENU_HOME_DSC", "");
define("_CO_MENU_MENU_MENU_IMAGES", "Display images");
define("_CO_MENU_MENU_MENU_IMAGES_DSC", "");
define("_CO_MENU_MENU_MENU_HOME_TXT", "Text of the &quot;Home&quot;-Link");
define("_CO_MENU_MENU_MENU_HOME_TXT_DSC", "");
define("_CO_MENU_MENU_MENU_HOME_IMG", "Home-Image");
define("_CO_MENU_MENU_MENU_HOME_IMG_DSC", "");
define("_CO_MENU_MENU_MENU_IMAGES_WIDTH", "Images display width");
define("_CO_MENU_MENU_MENU_IMAGES_WIDTH_DSC", "Set the width of the menu icons to be displayed.");
define("_CO_MENU_MENU_MENU_ITEMS_DSC", "Display item Description");
define("_CO_MENU_MENU_MENU_ITEMS_DSC_DSC", "");
define("_CO_MENU_MENU_MENU_ULID", "ID of the ul-tag");
define("_CO_MENU_MENU_MENU_ULID_DSC", "");
define("_CO_MENU_MENU_DISPLAY_WITH_IMGS", "Display With images");
define("_CO_MENU_MENU_DISPLAY_WITHOUT_IMGS", "Without images");
define("_CO_MENU_MENU_DISPLAY_ONLY_IMGS", "Only Images");
// items
define("_CO_MENU_ITEM_ITEM_NAME", "Title of The Link");
define("_CO_MENU_ITEM_ITEM_NAME_DSC", "");
define("_CO_MENU_ITEM_ITEM_DSC", "Description of the link");
define("_CO_MENU_ITEM_ITEM_DSC_DSC", "");
define("_CO_MENU_ITEM_ITEM_MENU", "Menu");
define("_CO_MENU_ITEM_ITEM_MENU_DSC", "Select the Menu");
define("_CO_MENU_ITEM_ITEM_URL", "Url of the link");
define("_CO_MENU_ITEM_ITEM_URL_DSC", "You can enter a full url or use <br /> {ICMS_URL} to get the icms base url <br /> {MOD_URL} to get the modules url to /modules/ or <br /> {UID} to get the uid");
define("_CO_MENU_ITEM_ITEM_IMAGE", "Image");
define("_CO_MENU_ITEM_ITEM_TARGET", "Target");
define("_CO_MENU_ITEM_ITEM_IMAGE_DSC", "");
define("_CO_MENU_ITEM_ITEM_PID", "Parent Link");
define("_CO_MENU_ITEM_ITEM_PID_DSC", "Select the parent of the curent link");
define("_CO_MENU_ITEM_ITEM_ACTIVE", "Active?");
define("_CO_MENU_ITEM_ITEM_ACTIVE_DSC", "");
define("_CO_MENU_ITEM_ITEM_HASSUB", "Has Subitems?");
define("_CO_MENU_ITEM_ITEM_HASSUB_DSC", "");
define("_CO_MENU_ITEM_PERM_VIEW", "View Permissions");
define("_CO_MENU_ITEM_PERM_VIEW_DSC", "");
define("_CO_MENU_ITEM_WRONG_MENU", "Your current selected parent link is linked to another menu. Please select another pid");
/**
 * added in 1.2
 */
define("_CO_MENU_ITEM_ITEM_TARGET_BASE", 'Base-URL');
define("_CO_MENU_ITEM_ITEM_TARGET_MODULE", 'Module-URL');
define("_CO_MENU_ITEM_ITEM_TARGET_EXTERNAL", 'external URL');
define("_CO_MENU_MENU_CLASSES", "CSS-Classes");
define("_CO_MENU_MENU_CLASSES_DSC", "");
define("_CO_MENU_MENU_ITEM_ORDER", "Sort by");
define("_CO_MENU_MENU_ITEM_ORDER_DSC", "");
define("_CO_MENU_MENU_ITEM_SORT", "Order");
define("_CO_MENU_MENU_ITEM_SORT_DSC", "");