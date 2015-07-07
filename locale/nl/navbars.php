<?php
#
# Dutch Translation by Koen Roggemans, based on the work of M. de Vogel
#
/**********************************************************************************
 *   Copyright(C) 2002 David Stevens
 *
 *   This file is part of OpenBiblio.
 *
 *   OpenBiblio is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   OpenBiblio is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with OpenBiblio; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **********************************************************************************
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
 *     $trans["homeWelcome"]       = "\$text='Welkom bij OpenBiblio';";
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
$trans["login"]                    = "\$text = 'Aanmelden';";
$trans["logout"]                   = "\$text = 'Afmelden';";
$trans["help"]                     = "\$text = 'Help';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Start';";
$trans["homeLicenseLink"]          = "\$text = 'Licentie';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Samenvatting';";
$trans["adminStaff"]               = "\$text = 'Toegangsbeheer';";
$trans["adminSettings"]            = "\$text = 'Algem. instellingen';";
$trans["adminMaterialTypes"]       = "\$text = 'Uitleenmateriaal';";
$trans["adminBibNew"]              = "\$text = 'Nieuw Object';";
$trans["adminBibNewLike"]          = "\$text = 'Nieuw als';";
$trans["adminCopyNew"]             = "\$text = 'Nieuw exemplaar';";
$trans["adminCopyEdit"]            = "\$text = 'Bewerk exemplaar';";
$trans["adminDelete"]              = "\$text = 'Verwijder';";
//$trans["adminGroupTypes"]        = "\$text = 'Group Types';";       // added vo  english
//$trans["adminGroupTypes"]        = "\$text = 'Groepen';";       // added vo  NL
$trans["adminCollections"]         = "\$text = 'Collecties';";
$trans["adminThemes"]              = "\$text = 'Thema\'s';";
$trans["adminTranslation"]         = "\$text = 'Vertaling';";
$trans["adminCities"]              = "\$text = 'Woonplaatsen';";
$trans["adminBackup"]              = "\$text = 'Backup';";
$trans["opacMbrClassifyEdit"]       = "\$text = 'Bewerken';";
$trans["opacMbrClassifyNew"]        = "\$text = 'Nieuw';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Samenvatting';";
$trans["catalogSearch1"]           = "\$text = 'Object zoeken';";
$trans["catalogSearch2"]           = "\$text = 'Object zoeken';";
$trans["catalogResults"]           = "\$text = 'Zoekresultaten';";
$trans["catalogBibInfo"]           = "\$text = 'Biblio Info';";
$trans["catalogBibEdit"]           = "\$text = 'Wijzigen';";
$trans["catalogBibEditMarc"]       = "\$text = 'Wijzig-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Nieuw MARC Veld';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Nieuw MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Wijzig MARC Veld';";
$trans["catalogCopyNew"]           = "\$text = 'Nieuw ex.';";
$trans["catalogCopyEdit"]          = "\$text = 'Bewerk ex.';";
$trans["catalogHolds"]             = "\$text = 'Reserveringen';";
$trans["catalogDelete"]            = "\$text = 'Verwijder';";
$trans["catalogBibNewLike"]        = "\$text = 'Nieuw als';";
$trans["catalogBibNew"]            = "\$text = 'Nieuw Object';";
$trans["Upload Marc Data"]         = "\$text = 'Upload Marc Data';";
$trans["catalogAuthorNew"]         = "\$text = 'Nieuwe Auteur';";
$trans["catalogAuthorEdit"]        = "\$text = 'Wijzig Auteur';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'Samenvatting';";
$trans["reportsReportListLink"]    = "\$text = 'Rapporten Lijst';";
$trans["reportsLabelsLink"]        = "\$text = 'Print Etiketten';";
$trans["reportsLettersLink"]       = "\$text = 'Print Brieven';";
$trans["reportsStatisticsLink"]    = "\$text = 'Statistieken';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Zoeken';";
$trans["catalogSearch2"]           = "\$text = 'Object zoeken';";
$trans["catalogResults"]           = "\$text = 'Zoekresultaten';";
$trans["catalogBibInfo"]           = "\$text = 'Biblioinfo';";
$trans["opacMbrClassify"]           = "\$text = 'Abonnementinfo';";

#****************************************************************************
#*  Translation text for page circulation.php
#****************************************************************************
$trans["memberInfo"]               = "\$text = 'Ledeninformatie';";
//$trans["memberSearch"]           = "\$text = 'Member Search';";
$trans["memberSearch"]             = "\$text = 'Lid zoeken';";
$trans["editInfo"]                 = "\$text = 'Wijzig info';";
$trans["checkoutHistory"]          = "\$text = 'Uitleengeschiedenis';";
//$trans["account"]        	   = "\$text = 'Account';";
$trans["account"]                  = "\$text = 'Afrekenen';";
$trans["checkIn"]                  = "\$text = 'Terugnemen';";
$trans["newMember"]                = "\$text = 'Nieuw lid';";
$trans["objectSearch"]             = "\$text = 'Object zoeken';";

?>
