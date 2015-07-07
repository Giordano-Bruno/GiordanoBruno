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
$trans["login"]                    = "\$text = 'Zaloguj';";
$trans["logout"]                   = "\$text = 'Wyloguj';";
$trans["help"]                     = "\$text = 'Pomoc';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Strona główna';";
$trans["homeLicenseLink"]          = "\$text = 'Licencja';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Admin Summary';";
$trans["adminStaff"]               = "\$text = 'Staff Admin';";
$trans["adminSettings"]            = "\$text = 'Ustawienia Biblioteki';";
$trans["adminMaterialTypes"]       = "\$text = 'Typy Materiałów';";
$trans["adminCollections"]         = "\$text = 'Katalogi';";
$trans["adminThemes"]              = "\$text = 'Słowa kluczowe';";
$trans["adminTranslation"]         = "\$text = 'Tłumaczenia';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Catalog Summary';";
$trans["catalogSearch1"]           = "\$text = 'Biblio Search';";
$trans["catalogSearch2"]           = "\$text = 'Bibliography Search';";
$trans["catalogResults"]           = "\$text = 'Rezultaty szukania';";
$trans["catalogBibInfo"]           = "\$text = 'Biblio Info';";
$trans["catalogBibEdit"]           = "\$text = 'Edycja prosta';";
$trans["catalogBibEditMarc"]       = "\$text = 'Edycja MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Nowe pole MARC';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Nowy MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Edytuj pole MARC';";
$trans["catalogCopyNew"]           = "\$text = 'Nowa kopia';";
$trans["catalogCopyEdit"]          = "\$text = 'Edytuj kopię';";
$trans["catalogHolds"]             = "\$text = 'Wstrzymaj zamówienia';";
$trans["catalogDelete"]            = "\$text = 'Usuń';";
$trans["catalogBibNewLike"]        = "\$text = 'Nowy na tym schemacie';";
$trans["catalogBibNew"]            = "\$text = 'Nowa nota';";
$trans["Upload Marc Data"]         = "\$text = 'Wgraj dane MARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'Reports Summary';";
$trans["reportsReportListLink"]    = "\$text = 'Report List';";
$trans["reportsLabelsLink"]        = "\$text = 'Print Labels';";
$trans["reportsLettersLink"]        = "\$text = 'Print Letters';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Wyszukaj';";
$trans["catalogSearch2"]           = "\$text = 'Wyszukaj';";
$trans["catalogResults"]           = "\$text = 'Wyniki wyszukiwania';";
$trans["catalogBibInfo"]           = "\$text = 'Biblio Info';";

#Added

$trans["memberInfo"]="\$text = 'Member Info';";
$trans["memberSearch"]="\$text = 'Member Search';";
$trans["editInfo"]="\$text = 'Edit Info';";
$trans["checkoutHistory"]= "\$text = 'Checkout History';";
$trans["account"]="\$text = 'Konto';";
$trans["checkIn"]="\$text = 'check in';";
$trans["memberSearch"]= "\$text = 'Szukaj użytkowników';";
$trans["newMember"]= "\$text = 'Nowy użytkownik';";
//$trans["account"]        	= "\$text = 'Account';";
?>
