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
$trans["indexHeading"]       = "\$text='Добро пожаловать в OpenBiblio';"; # Welcome to OpenBiblio
$trans["indexIntro"]         = "\$text=
  'Используйте вкладки для доступа к соответствующим разделам.';"; # Use the navigation tabs at the top of each page to access the following library
//  administration sections
$trans["indexTab"]           = "\$text='Вкладка';"; # Tab
$trans["indexDesc"]          = "\$text='Описание';"; # Description
$trans["indexCirc"]          = "\$text='Книгооборот';"; # Circulation
$trans["indexCircDesc1"]     = "\$text='Используйте эту вкладку для управления профилями читателей.';"; # Use this tab to manage your member records
$trans["indexCircDesc2"]     = "\$text='Управление читателями (создание, поиск, редактирование, удаление)';"; # Member administration (new, search, edit, delete)
$trans["indexCircDesc3"]     = "\$text='Выдача книг и заказ, история';"; # Member bibliography checkout, holds, account, and history
$trans["indexCircDesc4"]     = "\$text='Возврат книг и список книг, которые нужно вернуть на полки';"; # Bibliography checkin and shelving cart list
//$trans["indexCircDesc5"]     = "\$text='Платежи за просрочки';"; # Member late fee payment
$trans["indexCat"]           = "\$text='Каталогизация';"; # Cataloging
$trans["indexCatDesc1"]      = "\$text='Используйте эту вкладку для управления библиографическими записями.';"; # Use this tab to manage your bibliography records
$trans["indexCatDesc2"]      = "\$text='Управление материалами (создание, поиск, редактирование, удаление)';"; # Bibliography administration (new, search, edit, delete)
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';"; # 
$trans["indexAdmin"]         = "\$text='Администрирование';"; # Admin
$trans["indexAdminDesc1"]    = "\$text='Используйте эту вкладку для управления персоналом и другими записями.';"; # Use this tab to manage staff and administrative records
$trans["indexAdminDesc2"]    = "\$text='Управление персоналом (добавление, изменение, изменение пароля, удаление)';"; # Staff administration (new, edit, password, delete)
$trans["indexAdminDesc3"]    = "\$text='Общие настройки библиотеки';"; # General library settings
$trans["indexAdminDesc5"]    = "\$text='Перечень типов материалов';"; # Library material type list
$trans["indexAdminDesc4"]    = "\$text='Перечень коллекций';"; # Library collection list
$trans["indexAdminDesc6"]    = "\$text='Редактирование тем';"; # Library theme editor
$trans["indexReports"]       = "\$text='Отчеты';"; # Reports
$trans["indexReportsDesc1"]  = "\$text='Используйте эту вкладку для создания отчетов о вашей библиотеке.';"; # Use this tab to run reports on your library data
$trans["indexReportsDesc2"]  = "\$text='Отчеты.';"; # Report
$trans["indexReportsDesc3"]  = "\$text='Распечатки.';"; # Labels

?>
