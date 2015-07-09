<?php
#
# Dutch Translation by Koen Roggemans, based on the work of M. de Vogel
#
/**********************************************************************************
 *   Copyright(C) 2002-2004 David Stevens
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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]                = "\$text = 'Annuleren';";
$trans["sharedDelete"]                = "\$text = 'Verwijderen';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]          = "\$text = 'Objectinformatie';";
$trans["biblioViewMaterialType"]      = "\$text = 'Uitleenmateriaal';";
$trans["biblioViewCollection"]        = "\$text = 'Collectie';";
$trans["biblioViewCallNmbr"]          = "\$text = 'Ruglabel';";
$trans["biblioViewTble2Hdr"]          = "\$text = 'Informatie over dit exemplaar';";
$trans["biblioViewTble2Col1"]         = "\$text = 'Barcode';";
$trans["biblioViewTble2Col2"]         = "\$text = 'Beschrijving';";
$trans["biblioViewTble2Col3"]         = "\$text = 'Status';";
$trans["biblioViewTble2Col4"]         = "\$text = 'Ingevoerd op';";
$trans["biblioViewTble2Col5"]         = "\$text = 'Uitleentermijn [dagen]';";
$trans["biblioViewTble2ColFunc"]      = "\$text = 'Functie';";
$trans["biblioViewTble2Coldel"]       = "\$text = 'verwijder';";
$trans["biblioViewTble2Coledit"]      = "\$text = 'wijzig';";
$trans["biblioViewTble3Hdr"]          = "\$text = 'Aanvullende informatie over dit object';";
$trans["biblioViewNoAddInfo"]         = "\$text = 'Geen aanvullende object informatie beschikbaar.';";
$trans["biblioViewNoCopies"]          = "\$text = 'Geen exemplaren aangemaakt.';";
$trans["biblioViewOpacFlg"]           = "\$text = 'Tonen in OPAC';";
$trans["biblioViewNewCopy"]           = "\$text = 'Toevoegen nieuw exemplaar';";
$trans["biblioViewNeweCopy"]          = "\$text = 'Toevoegen nieuw electronisch exemplaar';";
$trans["biblioViewYes"]               = "\$text = 'ja';";
$trans["biblioViewNo"]                = "\$text = 'nee';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]         = "\$text = 'Geen resultaten gevonden.';";
$trans["biblioNoSearchText"]            = "\$text = 'Geef Zoektekst op!';";
$trans["biblioSearchResults"]           = "\$text = 'Zoek resultaten';";
$trans["biblioSearchResultPages"]       = "\$text = 'Resultaten Pagina\'s';";
$trans["biblioSearchPrev"]              = "\$text = 'vorige';";
$trans["biblioSearchNext"]              = "\$text = 'volgende';";
$trans["biblioSearchResultTxt"]         = "if (%items% == 1) {
                                             \$text = '%items% resultaat gevonden.';
                                           } else {
                                             \$text = '%items% resultaten gevonden.';
                                           }";
$trans["biblioSearchauthor"]            = "\$text = ' gesorteerd op auteur';";
$trans["biblioSearchtitle"]             = "\$text = ' gesorteerd op titel';";
$trans["biblioSearchSortByAuthor"]      = "\$text = 'sorteer op auteur';";
$trans["biblioSearchSortByTitle"]       = "\$text = 'sorteer op titel';";
$trans["biblioSearchTitle"]             = "\$text = 'Titel';";
$trans["biblioSearchAuthor"]            = "\$text = 'Auteur';";
$trans["biblioSearchMaterial"]          = "\$text = 'Materiaal';";
$trans["biblioSearchCollection"]        = "\$text = 'Collectie';";
$trans["biblioSearchCall"]              = "\$text = 'Ruglabel';";
$trans["biblioSearchCopyBCode"]         = "\$text = 'Exemplaar Barcode';";
$trans["biblioSearchCopyStatus"]        = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]          = "\$text = 'Geen exemplaren beschikbaar.';";
$trans["biblioSearchHold"]         = "\$text = 'reserveer';";
$trans["biblioSearchOutIn"]        = "\$text = 'terugnemen/uitlenen';";
$trans["biblioSearchDetail"]       = "\$text = 'Toon gedetailleerde informatie';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Terugname/uitlenen-formulier via barcode';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Reservatieformulier via barcode';";


#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Aanmelden medewerker';";
$trans["loginFormUsername"]        = "\$text = 'Gebruikersnaam';";
$trans["loginFormPassword"]        = "\$text = 'Wachtwoord';";
$trans["loginFormLogin"]           = "\$text = 'Aanmelden';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
#$trans["loginUsernameEmpty"]       = "\$text = 'Username is required.';";
$trans["loginUsernameEmpty"]       = "\$text = 'Type gebruikersnaam.';";
#$trans["loginPasswordEmpty"]       = "\$text = 'Password is required.';";
$trans["loginPasswordEmpty"]       = "\$text = 'Type wachtwoord.';";
#$trans["loginPasswordInvalid"]     = "\$text = 'Invalid signon.';";
$trans["loginPasswordInvalid"]     = "\$text = 'Wachtwoord is onjuist.';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Weet u zeker dat u deze reservering wilt verwijderen?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Reservering met succes verwijderd.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='OpenBiblio Help';";
$trans["helpHeaderCloseWin"]       = "\$text='Sluit venster';";
$trans["helpHeaderContents"]       = "\$text='Inhoud';";
$trans["helpHeaderPrint"]          = "\$text='Printen';";

$trans["catalogResults"]           = "\$text='Zoekresultaten';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Vandaag:';";
$trans["headerDateFormat"]         = "\$text='d M Y';";      # NIET in gebruik vastgelegd in shared/header_top.php
$trans["headerLibraryAddress"]     = "\$text='Adres:';";
$trans["headerLibraryCity"]        = "\$text='Plaats:';";
$trans["headerLibraryHours"]       = "\$text='Openingstijden:';";
$trans["headerLibraryPhone"]       = "\$text='Tel:';";
$trans["headerHome"]               = "\$text='Start';";
$trans["headerCirculation"]        = "\$text='Terugnemen/Uitlenen';";
$trans["headerCataloging"]         = "\$text='Catalogus';";
$trans["headerAdmin"]              = "\$text='Beheer';";
$trans["headerReports"]            = "\$text='Rapporten';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Library Home';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='Help';";
$trans["footerPoweredBy"]          = "\$text='OpenBiblio versie';";
$trans["footerDatabaseVersion"]    = "\$text='database versie';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='onder de';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>
