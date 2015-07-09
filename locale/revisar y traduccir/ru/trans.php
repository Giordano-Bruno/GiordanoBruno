<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */


#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["Cancel"]            = "Отмена"; # Cancel
$trans["Delete"]            = "Удалить"; # Delete
$trans["Refresh"]           = "Обновить"; # Refresh
$trans["Yes"]               = "Да"; # Yes
$trans["No"]                = "Нет"; # No
$trans["Title"]          	= "Наименование";
$trans["Author"]        	= "Автор";
$trans["Subject"]           = "Тема";
$trans["Keyword"]           = "Ключевое слово";
$trans["Barcode"]           = "Штрих-код";
$trans["Material"]          = "Материал";
$trans["Collection"]        = "Коллекция";
$trans["Publisher"]         = "Издатель";

$trans["Cataloging"]        = "Каталогизация";

$trans["Login"]             = "Войти"; # Login
$trans["Logout"]            = "Выйти"; # Logout
$trans["Help"]              = "Помощь"; # Help
$trans["login"]             = "войти"; # Login
$trans["logout"]            = "выйти"; # Logout
$trans["help"]              = "помощь"; # Help


?>
