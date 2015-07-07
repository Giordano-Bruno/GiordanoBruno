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
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='Welkom bij OpenBiblio';";
$trans["indexIntro"]         = "\$text=
  'Gebruik de bovenstaande tabbladen om toegang te krijgen tot de verschillende programma onderdelen.<br>
   De toegang tot de verschillende programma onderdelen is afhankelijk van de toegekende rechten.';";
$trans["indexTab"]           = "\$text='Tab';";
$trans["indexDesc"]          = "\$text='Omschrijving';";
$trans["indexCirc"]          = "\$text='Terugnemen/Uitlenen';";
$trans["indexCircDesc1"]     = "\$text='Ledenadministratie';";
$trans["indexCircDesc2"]     = "\$text='Ledenadministratie (nieuw, zoeken, bewerken, verwijderen)';";
$trans["indexCircDesc3"]     = "\$text='Uitleenadministratie (Transacties, reserveringen, schulden en geschiedenis';";
$trans["indexCircDesc4"]     = "\$text='Terugnemen van objecten';";
//$trans["indexCircDesc5"]     = "\$text='Member late fee payment';";
$trans["indexCat"]           = "\$text='Catalogus';";
$trans["indexCatDesc1"]      = "\$text='Catalogus beheer';";
$trans["indexCatDesc2"]      = "\$text='Uitleen-objectadministratie (nieuw, zoeken, bewerken, verwijderen)';";
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';";
$trans["indexAdmin"]         = "\$text='Beheer';";
$trans["indexAdminDesc1"]    = "\$text='Toegangsbeheer en systeeminstellingen';";
$trans["indexAdminDesc2"]    = "\$text='Toegangsbeheer (nieuw, bewerken, wachtwoord, verwijderen)';";
$trans["indexAdminDesc3"]    = "\$text='Algemene instellingen';";
$trans["indexAdminDesc5"]    = "\$text='Uitleenmateriaal';";
$trans["indexAdminDesc4"]    = "\$text='Collecties';";
$trans["indexAdminDesc6"]    = "\$text='Lettertype en kleuren (Thema\'s)';";
$trans["indexReports"]       = "\$text='Rapporten';";
$trans["indexReportsDesc1"]  = "\$text='Rapporten printen';";
$trans["indexReportsDesc2"]  = "\$text='Overzichtslijsten';";
$trans["indexReportsDesc3"]  = "\$text='Etiketten';";
$trans["indexReportsDesc4"]  = "\$text='Brieven';";

?>
