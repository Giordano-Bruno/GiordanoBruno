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
$trans["opac_Header"]        = "\$text='Online Publieks Catalogus (OPAC)';";
$trans["opac_WelcomeMsg"]    = "\$text=
  'Welkom bij de online publieks catalogus van onze bibliotheek.  Zoek in onze catalogus
   naar informatie van de objecten in onze bibliotheek.';";
$trans["opac_SearchTitle"]   = "\$text='Zoek object op tekst:';";
$trans["opac_Keyword"]       = "\$text='Trefwoord';";
$trans["opac_Title"]         = "\$text='Titel';";
$trans["opac_Author"]        = "\$text='Auteur';";
$trans["opac_Subject"]       = "\$text='Onderwerp';";
$trans["opac_Callno"]        = "\$text='Rugnummer';";
$trans["opac_Barcode"]       = "\$text='Barcode';";
$trans["opac_Search"]        = "\$text='Zoeken';";

#****************************************************************************
#*  Translation text for page info.php
#****************************************************************************
$trans["opac_MbrClassifyTitle"]        = "\$text = 'Info Abonnementen';";
$trans["opac_MbrClassifyDescription"]  = "\$text = 'Omschrijving';";
$trans["opac_MbrClassifyDefault_flg"]  = "\$text = 'Voorkeur';";
$trans["opac_MbrClassifyFee"]          = "\$text = 'Bedrag (per jaar)<br>in €';";
$trans["opac_MbrClassifyLimit"]        = "\$text = 'Uitleen limiet';";
$trans["opac_MbrClassifyVarious"]      = "\$text = 'Overig';";
$trans["opac_MbrClassifyFunction"]     = "\$text = 'Funktie';";
$trans["opac_MbrClassifyEdit"]         = "\$text = 'bewerken';";
$trans["opac_MbrClassifyDel"]          = "\$text = 'verwijderen';";
$trans["opac_MbrClassifyNew"]          = "\$text = 'Nieuwe abonnementsvorm toevoegen';";

?>
