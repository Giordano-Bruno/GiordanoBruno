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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'Annuleren';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Rapporten';";
$trans["indexDesc"]                = "\$text = 'Gebruik het linker menu om rapporten of etiketten aan te maken.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'Rapportenlijst';";
$trans["reportListDesc"]           = "\$text = 'Kies uit onderstaande rapporten.';";
$trans["reportListXmlErr"]         = "\$text = 'Fout opgetreden bij genereren xml-rapport.';";
$trans["reportListCannotRead"]     = "\$text = 'Kan etikettenbestand niet lezen: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Etikettenlijst';";
$trans["labelListDesc"]            = "\$text = 'Kies om etiketten te maken in pdf-formaat.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Fout opgetreden bij genereren xml-rapport.  Error = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Brievenlijst';";
$trans["letterListDesc"]           = "\$text = 'Kies om brieven te maken in pdf-formaat.';";
$trans["displayLettersXmlErr"]      = "\$text = 'Fout opgetreden bij genereren xml-rapport.  Error = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Zoekcriteria (optioneel)';";
$trans["reportCriteriaHead2"]      = "\$text = 'Sorteervolgorde (optioneel)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Uitvoertype';";
$trans["reportCriteriaCrit1"]      = "\$text = 'Criteria 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = 'Criteria 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = 'Criteria 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = 'Criteria 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'niet =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt or =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt or =';";
$trans["reportCriteriaBT"]         = "\$text = 'tussen';";
$trans["reportCriteriaAnd"]        = "\$text = 'en';";
$trans["reportCriteriaRunReport"]  = "\$text = 'Maak rapport';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Sort 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Sort 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Sort 3:';";
$trans["reportCriteriaAscending"]  = "\$text = 'oplopend';";
$trans["reportCriteriaDescending"] = "\$text = 'aflopend';";
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Start printen bij etiket:';";
$trans["reportCriteriaOutput"]     = "\$text = 'Uitvoer Type:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'selectiecriteria';";
$trans["runReportReturnLink2"]     = "\$text = 'rapportenlijst';";
$trans["runReportTotal"]           = "\$text = 'Totaal aantal rijen:';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'Veld moet een getal zijn.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Fout opgetreden bij genereren xml-rapport.  Error = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'Kan etikettenbestand niet lezen: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'U mag de rapportenpagina niet gebruiken.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Lijst van reserveringen met contactinformatie van de leden';";
$trans["reportCheckouts"]          = "\$text = 'Lijst uitgeleende objecten';";
$trans["overdueLetters"]           = "\$text = 'Te laat brieven';";
$trans["reportLabels"]             = "\$text = 'Etiketten printen';";
$trans["popularBiblios"]           = "\$text = 'Lijst van de meest populaire objecten';";
$trans["overdueList"]              = "\$text = 'Lijst van Leden met te laat ingeleverde objecten';";
$trans["balanceDueList"]           = "\$text = 'Lijst van leden met openstaande bedragen';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = 'Uitgebreid etiketvoorbeeld';";
$trans["labelsSimple"]             = "\$text = 'Eenvoudig etiketvoorbeeld';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = 'Biblio ID';";
$trans["biblio.create_dt"]         = "\$text = 'Datum toegevoegd';";
$trans["biblio.last_change_dt"]    = "\$text = 'Laatst gewijzigd';";
$trans["biblio.material_cd"]       = "\$text = 'Material Cd';";
$trans["biblio.collection_cd"]     = "\$text = 'Collectie';";
$trans["biblio.call_nmbr1"]        = "\$text = 'Call 1';";
$trans["biblio.call_nmbr2"]        = "\$text = 'Call 2';";
$trans["biblio.call_nmbr3"]        = "\$text = 'Call 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Titel tip';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Stmt of Resp';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC Flag';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Barcode';";
$trans["biblio.title"]             = "\$text = 'Titel';";
$trans["biblio.author"]            = "\$text = 'Auteur';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Status Begin Datum';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Uitleentermijn Datum';";
$trans["member.mbrid"]             = "\$text = 'Lid ID';";
$trans["member.barcode_nmbr"]      = "\$text = 'Lid barcode/nummer';";
$trans["member.last_name"]         = "\$text = 'Achternaam';";
$trans["member.first_name"]        = "\$text = 'Voornaam';";
$trans["member.address1"]          = "\$text = 'Adres1';";
$trans["member.address2"]          = "\$text = 'Adres2';";
$trans["member.city"]              = "\$text = 'Woonplaats';";
$trans["member.state"]             = "\$text = 'Provincie';";
$trans["member.zip"]               = "\$text = 'Postcode';";
$trans["member.zip_ext"]           = "\$text = 'Postcode extentie';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Reservering begindatum';";
$trans["member.home_phone"]        = "\$text = 'Tel thuis';";
$trans["member.work_phone"]        = "\$text = 'Tel werk/mobiel';";
$trans["member.email"]             = "\$text = 'E-mail';";
$trans["member.school_grade"]      = "\$text = 'Jaar';";
$trans["biblio_status_dm.description"] = "\$text = 'Status';";
$trans["settings.library_name"]    = "\$text = 'Bibliotheeknaam';";
$trans["settings.library_hours"]   = "\$text = 'Openingstijden';";
$trans["settings.library_phone"]   = "\$text = 'Tel.';";
$trans["days_late"]                = "\$text = 'Boete';";
$trans["title"]                    = "\$text = 'Titel';";
$trans["author"]                   = "\$text = 'Auteur';";
$trans["due_back_dt"]              = "\$text = 'Uitleentermijn';";
$trans["checkoutCount"]            = "\$text = 'Uitleenaantal';";

?>
