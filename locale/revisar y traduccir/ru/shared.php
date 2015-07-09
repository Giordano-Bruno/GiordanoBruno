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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = 'Отмена';"; # Cancel
$trans["sharedDelete"]             = "\$text = 'Удалить';"; # Delete

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Информация о материале';"; # Bibliography Information
$trans["biblioViewMaterialType"]   = "\$text = 'тип материала';"; # Material Type
$trans["biblioViewCollection"]     = "\$text = 'коллекция';"; # Collection
$trans["biblioViewCallNmbr"]       = "\$text = 'шифр';"; # Call Number
$trans["biblioViewTble2Hdr"]       = "\$text = 'Информация об экземплярах';"; # Bibliography Copy Information
$trans["biblioViewTble2Col1"]      = "\$text = 'Штрих-код #';"; # Barcode
$trans["biblioViewTble2Col2"]      = "\$text = 'Описание';"; # Description
$trans["biblioViewTble2Col3"]      = "\$text = 'Состояние';"; # Status
$trans["biblioViewTble2Col4"]      = "\$text = 'Время последн. измен.';"; # Status Dt
$trans["biblioViewTble2Col5"]      = "\$text = 'Подлежит возврату к';"; # Due Back
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Функции';"; # Function
$trans["biblioViewTble2Coldel"]    = "\$text = 'удал.';"; # del
$trans["biblioViewTble2Coledit"]   = "\$text = 'ред.';"; # edit
$trans["biblioViewTble3Hdr"]       = "\$text = 'Дополнительная информация о материале';"; # Additional Bibliographic Information
$trans["biblioViewNoAddInfo"]      = "\$text = 'Нет информации.';"; # No additional bibliographic information available
$trans["biblioViewNoCopies"]       = "\$text = 'Экзепляры не занесены в базу.';"; # No copies have been created
$trans["biblioViewOpacFlg"]        = "\$text = 'показ. в элект. каталоге';"; # Show in OPAC
$trans["biblioViewNewCopy"]        = "\$text = 'Добавить экземпляр';"; # Add New Copy
$trans["biblioViewNeweCopy"]       = "\$text = 'Добавить экземпляр в электронном виде';"; # Add New Electronic Copy
$trans["biblioViewYes"]            = "\$text = 'да';"; # yes
$trans["biblioViewNo"]             = "\$text = 'нет';"; # no

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Поиск не дал результатов.';"; # No results found
$trans["biblioSearchResults"]      = "\$text = 'Результаты поиска';"; # Search Results
$trans["biblioSearchResultPages"]  = "\$text = 'Страницы';"; # Result Pages
$trans["biblioSearchPrev"]         = "\$text = 'пред.';"; # prev
$trans["biblioSearchNext"]         = "\$text = 'след.';"; # next
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = 'найден %items% материал.';
                                      } elseif ((%items% == 2) or (%items% == 3) or (%items% == 4)) {
                                        \$text = 'найдено %items% материала.';
									  } elseif ((%items% >= 5) and ((%items% <= 20))) {
                                        \$text = 'найдено %items% материалов.';
										} elseif ((((%items%) % 10) == 0) or (((%items%) % 10) >= 5) and (((%items%) % 10) <= 9)) {
                                        \$text = 'найдено %items% материалов.';
									  } elseif (((%items%) % 10) == 1) {
                                        \$text = 'найден %items% материал.';
									  } elseif ((((%items%) % 10) >= 2) and (((%items%) % 10) <= 4)) {
                                        \$text = 'найдено %items% материала.';
									  } else {
                                        \$text = '%items% results found';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' Отсортировано по Автору';"; # sorted by author
$trans["biblioSearchtitle"]        = "\$text = ' Отсортировано по названию';"; # sorted by title
$trans["biblioSearchSortByAuthor"] = "\$text = 'сортировать по автору';"; # sort by author
$trans["biblioSearchSortByTitle"]  = "\$text = 'сортировать по названию';"; # sort by title
$trans["biblioSearchTitle"]        = "\$text = 'Название';"; # Title
$trans["biblioSearchTitleRemainder"] = "\$text = ' доп. название';";
$trans["biblioSearchAuthor"]       = "\$text = 'Автор';"; # Author
$trans["biblioSearchMaterial"]     = "\$text = 'Тип материала';"; # Material
$trans["biblioSearchCollection"]   = "\$text = 'Коллекция';"; # Collection
$trans["biblioSearchCall"]         = "\$text = 'Вызванный номер';"; # 
$trans["biblioSearchCopyBCode"]    = "\$text = 'Штрих-код экземпляра';"; # Copy Barcode
$trans["biblioSearchCopyStatus"]   = "\$text = 'Состояние';"; # Status
$trans["biblioSearchNoCopies"]     = "\$text = 'Экземпляры не занесены в базу.';"; # No copies are available
$trans["biblioSearchHold"]         = "\$text = 'hold';"; # 
$trans["biblioSearchOutIn"]        = "\$text = 'проверка выход/вход';"; # 
$trans["biblioSearchDetail"]       = "\$text = 'Полная информация о материале';"; # Show detailed Bibliography information
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Barcode to Check Out or Check In Form';"; # !!!
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Barcode to Hold Form';"; # !!!

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Представьтесь';"; # Staff Login
$trans["loginFormUsername"]        = "\$text = 'Логин';"; # Username
$trans["loginFormPassword"]        = "\$text = 'Пароль';"; # Password
$trans["loginFormLogin"]           = "\$text = 'Войти';"; # Login

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Are you sure you want to delete this hold request?';"; # !!!

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Hold request was successfully deleted.';"; # !!!

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Помощь по OpenBiblio';"; # OpenBiblio Help
$trans["helpHeaderCloseWin"]       = "\$text='Закрыть окно';"; # Close Window
$trans["helpHeaderContents"]       = "\$text='Разделы';"; # Contents
$trans["helpHeaderPrint"]          = "\$text='Печать';"; # Print

$trans["catalogResults"]           = "\$text='Результаты поиска';"; # Search Results

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='сегодня:';"; # today\'s date
$trans["headerDateFormat"]         = "\$text='d.m.Y';"; # Это формат даты, его не надо переводить
$trans["headerLibraryHours"]       = "\$text='часы работы:';"; # library hours
$trans["headerLibraryPhone"]       = "\$text='телефон:';"; # library phone
$trans["headerHome"]               = "\$text='Главная';"; # Home
$trans["headerCirculation"]        = "\$text='Книгооборот';"; # Circulation
$trans["headerCataloging"]         = "\$text='Каталогизация';"; # Cataloging
$trans["headerAdmin"]              = "\$text='Администрирование';"; # Admin
$trans["headerReports"]            = "\$text='Отчеты';"; # Reports

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Библиотека';"; # Library Home
$trans["footerOPAC"]               = "\$text='Электронный каталог(OPAC)';"; # OPAC
$trans["footerHelp"]               = "\$text='Помощь';"; # Help
$trans["footerPoweredBy"]          = "\$text='Работает на OpenBiblio версии';"; # Powered by OpenBiblio version
$trans["footerDatabaseVersion"]    = "\$text='версия баз данных';"; # database version
$trans["footerCopyright"]          = "\$text='Copyright';"; # 
$trans["footerUnderThe"]           = "\$text='По лицензии';"; # under the
$trans["footerGPL"]                = "\$text='GNU General Public License';"; # 

?>
