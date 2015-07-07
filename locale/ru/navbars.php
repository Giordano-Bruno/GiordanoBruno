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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Войти';"; # Login
$trans["logout"]                   = "\$text = 'Выйти';"; # Logout
$trans["help"]                     = "\$text = 'Помощь';"; # Help

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Главная';"; # Home
$trans["homeLicenseLink"]          = "\$text = 'Лицензия';"; # License

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Администрирование';"; # Admin Summary ???
$trans["adminStaff"]               = "\$text = 'Персонал';"; # Staff Admin ???
$trans["adminSettings"]            = "\$text = 'Настройки библиотеки';"; # Library Settings ???
$trans["adminMaterialTypes"]       = "\$text = 'Типы материалов';"; # Material Types
$trans["adminCollections"]         = "\$text = 'Коллекции';"; # Collections
$trans["adminThemes"]              = "\$text = 'Темы';"; # Themes
$trans["adminTranslation"]         = "\$text = 'Перевод';"; # Translation

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Каталогизация';"; # Catalog Summary
$trans["catalogSearch1"]           = "\$text = 'Поиск материала';"; # Biblio Search
$trans["catalogSearch2"]           = "\$text = 'Поиск материала';"; # Bibliography Search
$trans["catalogResults"]           = "\$text = 'Результаты поиска';"; # Search Results
$trans["catalogBibInfo"]           = "\$text = 'Информация о материале';"; # Biblio Info
$trans["catalogBibEdit"]           = "\$text = 'Редактировать';"; # Edit-Basic
$trans["catalogBibEditMarc"]       = "\$text = 'Редактировать поля MARC';"; # Edit-MARC
$trans["catalogBibMarcNewFld"]     = "\$text = 'Добавить поле MARC';"; # New MARC Field
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Нов. поле MARC';"; # New MARC
$trans["catalogBibMarcEditFld"]    = "\$text = 'Ред. поле MARC';"; # Edit MARC Fld
$trans["catalogCopyNew"]           = "\$text = 'Новый экземпляр';"; # New Copy
$trans["catalogCopyEdit"]          = "\$text = 'Редактировать экземпляр';"; # Edit Copy
$trans["catalogHolds"]             = "\$text = 'Заказанные книги';"; # Hold Requests ???
$trans["catalogDelete"]            = "\$text = 'Удалить';"; # Delete
$trans["catalogBibNewLike"]        = "\$text = 'Создать похожую запись';"; # New Like
$trans["catalogBibNew"]            = "\$text = 'Новая запись';"; # New Bibliography
$trans["Upload Marc Data"]         = "\$text = 'Загрузить файл MARC';"; # Upload Marc Data

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'Отчеты';"; # Reports Summary
$trans["reportsReportListLink"]    = "\$text = 'Список отчетов';"; # Report List
$trans["reportsLabelsLink"]        = "\$text = 'Сделать распечатку';"; # Print Labels
$trans["reportsLettersLink"]        = "\$text = 'Напечатать письма';"; # Print Letters

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Поиск';"; # Search
$trans["catalogSearch2"]           = "\$text = 'Поиск по записям';"; # Bibliography Search
$trans["catalogResults"]           = "\$text = 'Результаты поиска';"; # Search Results
$trans["catalogBibInfo"]           = "\$text = 'Информация о материале';"; # Biblio Info

#Added

$trans["memberInfo"]="\$text = 'Информация о читателе';"; # Member Info
$trans["memberSearch"]="\$text = 'Поиск читателя';"; # Member Search
$trans["editInfo"]="\$text = 'Редактировать профиль';"; # Edit Info
$trans["checkoutHistory"]= "\$text = 'История выдачи';"; # Checkout History
$trans["account"]="\$text = 'Расчеты';"; # Account
$trans["checkIn"]="\$text = 'Возврат';"; # Check In
$trans["memberSearch"]= "\$text = 'Поиск читателя';"; # Member Search
$trans["newMember"]= "\$text = 'Новый читатель';"; # New Member
$trans["account"]        	= "\$text = 'Расчеты';"; # Account
$trans["Offline Circulation"]        	= "\$text = 'Офлайн книгооборот';"; 
$trans["Member Types"]           = "\$text = 'Типы читателей';";
$trans["Member Fields"]           = "\$text = 'Поля читателей';";
$trans["Copy Fields"]           = "\$text = 'Копируемые поля';";
$trans["Checkout Privs"]           = "\$text = 'Проверка привилегий';"; #
?>
