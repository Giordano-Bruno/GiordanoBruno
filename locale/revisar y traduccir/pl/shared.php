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
$trans["sharedCancel"]             = "\$text = 'Anuluj';";
$trans["sharedDelete"]             = "\$text = 'Usuń';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Informacja biblograficzna';";
$trans["biblioViewMaterialType"]   = "\$text = 'Typ materiału';";
$trans["biblioViewCollection"]     = "\$text = 'Kolekcja';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Call Number';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Bibliography Copy Information';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Kod #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Opis';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Status';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Status Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Due Back';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Funkcja';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'usuń';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'edytuj';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Dodatkowa informacja bibliograficzna';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Brak dodatkowej informacji bibliograficznej.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Kopia nie została utworzona.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Pokaż w katalogu on-line';";
$trans["biblioViewNewCopy"]        = "\$text = 'Dodaj nową kopię';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Add New Electronic Copy';";
$trans["biblioViewYes"]            = "\$text = 'tak';";
$trans["biblioViewNo"]             = "\$text = 'nie';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Nie znaleziono żadnych pozycji.';";
$trans["biblioSearchResults"]      = "\$text = 'Rezultaty wyszukiwania';";
$trans["biblioSearchResultPages"]  = "\$text = 'Strony z rezultatami wyszukiwania';";
$trans["biblioSearchPrev"]         = "\$text = 'poprzednia';";
$trans["biblioSearchNext"]         = "\$text = 'następna';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = 'Znaleziono %items% pozycję.';
                                      } else if ((%items% > 1) and (%items% < 5)) {
                                        \$text = 'Znaleziono %items% pozycje, ';
                                      } else {
                                        \$text = 'Znaleziono %items% pozycji, ';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = 'zostały posortowane według autorów ';";
$trans["biblioSearchtitle"]        = "\$text = 'zostały posortowane według tytułów ';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'sortuj według autorach';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'sortuj według tytułach';";
$trans["biblioSearchTitle"]        = "\$text = 'Tytuł';";
$trans["biblioSearchTitleRemainder"]        = "\$text = 'Podtytuł';";
$trans["biblioSearchAuthor"]       = "\$text = 'Autor';";
$trans["biblioSearchMaterial"]     = "\$text = 'Materiał';";
$trans["biblioSearchCollection"]   = "\$text = 'Katalog';";
# biblioSearchCall usunieta z raportow wyszukiwania
$trans["biblioSearchCall"]         = "\$text = 'Sygnatura';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Sygnatura';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Brak dostępnych egzemplarzy.';";
$trans["biblioSearchHold"]         = "\$text = 'wstrzymaj';";
$trans["biblioSearchOutIn"]        = "\$text = 'check out/in';";
$trans["biblioSearchDetail"]       = "\$text = 'Pokaż szczegółową informację bibliograficzną';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Barcode to Check Out or Check In Form';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Barcode to Hold Form';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Logowanie pracowników';";
$trans["loginFormUsername"]        = "\$text = 'Użytkownik';";
$trans["loginFormPassword"]        = "\$text = 'Hasło';";
$trans["loginFormLogin"]           = "\$text = 'Login';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Are you sure you want to delete this hold request?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Hold request was successfully deleted.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Pomoc';";
$trans["helpHeaderCloseWin"]       = "\$text='Zamknij okno';";
$trans["helpHeaderContents"]       = "\$text='Zawartość';";
$trans["helpHeaderPrint"]          = "\$text='Drukuj';";

$trans["catalogResults"]           = "\$text='Rezultaty wyszukiwania';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='today\'s date:';";
$trans["headerDateFormat"]         = "\$text='m.d.Y';";
$trans["headerLibraryHours"]       = "\$text='godziny otwarcia:';";
$trans["headerLibraryPhone"]       = "\$text='kontakt:';";
$trans["headerHome"]               = "\$text='Strona główna';";
$trans["headerCirculation"]        = "\$text='Obieg dokumentów';";
$trans["headerCataloging"]         = "\$text='Katalogowanie';";
$trans["headerAdmin"]              = "\$text='Administracja';";
$trans["headerReports"]            = "\$text='Raporty';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Strona domowa biblioteki';";
$trans["footerOPAC"]               = "\$text='katalog on-line';";
$trans["footerHelp"]               = "\$text='pomoc';";
$trans["footerPoweredBy"]          = "\$text='Wspierane przez OpenBiblio wersja';";
$trans["footerDatabaseVersion"]    = "\$text='wersja bazy';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='zgodnie z';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>
