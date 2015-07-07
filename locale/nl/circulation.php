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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["circCancel"]              = "\$text = 'Annuleren';";
$trans["circDelete"]              = "\$text = 'Verwijderen';";
$trans["circLogout"]              = "\$text = 'Afmelden';";
$trans["circAdd"]                 = "\$text = 'Toevoegen';";
$trans["mbrDupBarcode"]           = "\$text = 'Deze barcode/nummer, %barcode%, is al in gebruik.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]                = "\$text = 'Terugnemen/Uitlenen: lid zoeken';";
$trans["indexCardHdr"]                = "\$text = 'Zoeken op kaartnummer:';";
$trans["indexCard"]                   = "\$text = 'Kaartnummer:';";
$trans["indexSearch"]                 = "\$text = 'Zoeken';";
$trans["indexNameHdr"]                = "\$text = 'Zoeken op achternaam:';";
$trans["indexName"]                   = "\$text = 'Achternaam begint met:';";
//$trans["indexCheckIn"]              = "\$text = 'Check In';";   // EN
$trans["indexCheckIn"]                = "\$text = 'Objecten terugnemen';";
$trans["index_shortcutListNote"]      = "\$text = '*Opmerking:';";

#****************************************************************************
#*  Translation text for pages mbr_search.php, mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Postadres:';";
$trans["mbrNewForm"]              = "\$text = 'Nieuw toevoegen';";
$trans["mbrEditForm"]             = "\$text = 'Bewerken';";
$trans["mbrFldsHeader"]           = "\$text = 'Lid:';";
$trans["mbrFldsCardNmbr"]         = "\$text = 'Kaartnummer:';";
$trans["mbrFldsLastName"]         = "\$text = 'Achternaam:';";
$trans["mbrFldsFirstName"]        = "\$text = 'Voornaam:';";
$trans["mbrFldsAddr1"]            = "\$text = 'Adres:';";
$trans["mbrFldsAddr2"]            = "\$text = 'Adres regel 2:';";
$trans["mbrFldsPostcode"]         = "\$text = 'Postcode:';";
$trans["mbrFldsCity"]             = "\$text = 'Woonplaats:';";
$trans["mbrFldsEditCity"]         = "\$text = 'aanpassen';";
$trans["mbrFldsStateZip"]         = "\$text = 'State, Zip:';";
$trans["mbrFldsHomePhone"]        = "\$text = 'Telefoon thuis:';";
$trans["mbrFldsWorkPhone"]        = "\$text = 'Telefoon werk/mobiel:';";
$trans["mbrFldsEmail"]            = "\$text = 'E-mailadres:';";
$trans["mbrFldsClassify"]         = "\$text = 'Abonnementstype:';";
$trans["mbrFldsGrade"]            = "\$text = 'Schoolniveau:';";
$trans["mbrFldsTeacher"]          = "\$text = 'School docent:';";
$trans["mbrFldsSubmit"]           = "\$text = 'Bevestig';";
$trans["mbrFldsCancel"]           = "\$text = 'Annuleren';";
$trans["mbrsearchResult"]         = "\$text = 'Resultaten: ';";
$trans["mbrsearchprev"]           = "\$text = 'vorige';";
$trans["mbrsearchnext"]           = "\$text = 'volgende';";
$trans["mbrsearchNoResults"]      = "\$text = 'Geen resultaten gevonden.';";
$trans["mbrsearchFoundResults"]   = "\$text = ' resultaten gevonden.';";
$trans["mbrsearchSearchResults"]  = "\$text = 'Zoek Resultaten:';";
$trans["mbrsearchCardNumber"]     = "\$text = 'Kaartnummer:';";
$trans["mbrsearchClassification"] = "\$text = 'Abonnementstype:';";
$trans["shortcutToCheckIn"]       = "\$text = 'i';";   #Mag maar 1 karakter zijn;  Must be 1 character
$trans["shortcutToSearchMembers"] = "\$text = 'z';";   #Mag maar 1 karakter zijn;  Must be 1 character
$trans["shortcutToMember"]        = "\$text = 'n';";   #Mag maar 1 karakter zijn;  Must be 1 character

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text = 'Lid is met succes toegevoegd.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text = 'Lid is met succes bijgewerkt.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text = 'Leden Informatie:';";
$trans["mbrViewName"]             = "\$text = 'Naam:';";
$trans["mbrViewAddr"]             = "\$text = 'Adres:';";
$trans["mbrViewCardNmbr"]         = "\$text = 'Kaartnummer:';";
$trans["mbrViewClassify"]         = "\$text = 'Abonnementstype:';";
$trans["mbrViewPhone"]            = "\$text = 'Telefoon:';";
$trans["mbrViewPhoneHome"]        = "\$text = 'H:';";
$trans["mbrViewPhoneWork"]        = "\$text = 'W:';";
$trans["mbrViewEmail"]            = "\$text = 'E-mailadres:';";
$trans["mbrViewGrade"]            = "\$text = 'Schoolniveau:';";
$trans["mbrViewTeacher"]          = "\$text = 'School docent:';";
$trans["mbrViewHead2"]            = "\$text = 'Uitleenstatistieken:';";
$trans["mbrViewStatColHdr1"]      = "\$text = 'Materiaal';";
$trans["mbrViewStatColHdr2"]      = "\$text = 'Aantal';";
$trans["mbrViewStatColHdr3"]      = "\$text = 'Limiet';";
$trans["mbrViewStatColHdr4"]      = "\$text = 'Ontleningen';";
$trans["mbrViewStatColHdr5"]      = "\$text = 'Hernieuwingen';";
$trans["mbrViewHead3"]            = "\$text = 'Object uitlenen:';";
$trans["mbrViewBarcode"]          = "\$text = 'Barcode:';";
$trans["mbrViewCheckOut"]         = "\$text = 'Uitlenen';";
$trans["mbrViewHead4"]            = "\$text = 'Objecten nu uitgeleend:';";
$trans["mbrViewOutHdr1"]          = "\$text = 'Uitgeleend';";
$trans["mbrViewOutHdr2"]          = "\$text = 'Materiaal';";
$trans["mbrViewOutHdr3"]          = "\$text = 'Barcode';";
$trans["mbrViewOutHdr4"]          = "\$text = 'Titel';";
$trans["mbrViewOutHdr5"]          = "\$text = 'Auteur';";
$trans["mbrViewOutHdr6"]          = "\$text = 'Uitleentermijn';";
$trans["mbrViewOutHdr7"]          = "\$text = 'Uitgeleend<br>[dagen]';";
$trans["mbrViewOutHdr8"]          = "\$text = 'Hernieuwing';";
$trans["mbrViewOutHdr9"]          = "\$text = 'Aantal keer';";
$trans["mbrViewNoCheckouts"]      = "\$text = 'Er zijn nu geen objecten uitgeleend.';";
$trans["mbrViewHead5"]            = "\$text = 'Reserveren:';";
$trans["mbrViewHead6"]            = "\$text = 'Gereserveerde objecten:';";
$trans["mbrViewPlaceHold"]        = "\$text = 'Reserveren';";
$trans["mbrViewHoldHdr1"]         = "\$text = 'Functie';";
$trans["mbrViewHoldHdr2"]         = "\$text = 'Gereserveerd';";
$trans["mbrViewHoldHdr3"]         = "\$text = 'Materiaal';";
$trans["mbrViewHoldHdr4"]         = "\$text = 'Barcode';";
$trans["mbrViewHoldHdr5"]         = "\$text = 'Titel';";
$trans["mbrViewHoldHdr6"]         = "\$text = 'Auteur';";
$trans["mbrViewHoldHdr7"]         = "\$text = 'Status';";
$trans["mbrViewHoldHdr8"]         = "\$text = 'Uitleentermijn';";
$trans["mbrViewNoHolds"]          = "\$text = 'Er zijn nu geen objecten gereserveerd.';";
$trans["mbrViewBalMsg"]           = "\$text = 'Opmerking: Lid heeft nog een openstaande boete van %bal%';";
$trans["mbrPrintCheckouts"]	  = "\$text = 'Druk een lijstje met uitgeleende objecten af';";
$trans["mbrViewDel"]              = "\$text = 'verwijder';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text = 'Lid moet de boete betalen voordat u kunt uitlenen.';";
$trans["checkoutErr1"]            = "\$text = 'Barcode/nummer moet alfanumeriek zijn.';";
$trans["checkoutErr2"]            = "\$text = 'Geen objecten met deze barcode/nummer gevonden.';";
$trans["checkoutErr3"]            = "\$text = 'Object met barcode/nummer %barcode% is al uitgeleend.';";
$trans["checkoutErr4"]            = "\$text = 'Object met barcode/nummer %barcode% is niet voor uitlenen beschikbaar.';";
$trans["checkoutErr5"]            = "\$text = 'Object met barcode/nummer %barcode% is momenteel gereserveerd voor een ander lid.';";
$trans["checkoutErr6"]            = "\$text = 'Object kan niet uitgeleend worden:<br>Lid heeft de uitleenlimiet voor dit materiaaltype bereikt.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text = 'Barcode/nummer moet alfanumeriek zijn.';";
$trans["shelvingCartErr2"]        = "\$text = 'Geen object met deze barcode/nummer gevonden.';";
$trans["shelvingCartTrans"]       = "\$text = 'Boete (barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHeading"]      = "\$text = 'Terugnemen/Uitlenen: Objecten terugnemen';";
$trans["checkinFormHdr1"]         = "\$text = 'Terugnemen:';";
$trans["checkinFormBarcode"]      = "\$text = 'Barcode/nummer:';";
$trans["checkinFormShelveButton"] = "\$text = 'Op de kar';";
$trans["checkinFormCheckinLink1"] = "\$text = 'Geselecteerde items terug op hun plaats';";
$trans["checkinFormCheckinLink2"] = "\$text = 'Alle items terug op hun plaats';";
$trans["checkinFormHdr2"]         = "\$text = 'Op dit moment op de kar:';";
$trans["checkinFormColHdr1"]      = "\$text = 'Datum teruggenomen';";
$trans["checkinFormColHdr2"]      = "\$text = 'Barcode';";
$trans["checkinFormColHdr3"]      = "\$text = 'Titel';";
$trans["checkinFormColHdr4"]      = "\$text = 'Auteur';";
$trans["checkinFormEmptyCart"]    = "\$text = 'Er ligt nu niets op de kar.';";
#$trans["checkinBackToMembers"]   = "\$text = 'Member Search';";  #EN
$trans["checkinBackToMembers"]    = "\$text = 'Lid zoeken';";
#$trans["checkinToMember"]        = "\$text = 'To this Member';";  #EN
$trans["checkinToMember"]         = "\$text = 'naar dit lid';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text = 'Er zijn geen items geselecteerd.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text = 'Object is gereserveerd!';";
$trans["holdMessageMsg1"]         = "\$text = 'Het zojuist teruggenomen object met barcode/nummer <b>%barcode%</b> heeft één of meer reserveringen.<br><b>Hou dit object aub. apart.<br>Leg het niet op de kar.</b><br>De status voor dit object is nu: gereserveerd.';";
$trans["holdMessageMsg2"]         = "\$text = 'Terug naar object terugnemen.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text = 'Barcode/nummer moet een getal zijn.';";
$trans["placeHoldErr2"]           = "\$text = 'Barcode/nummer bestaat niet.';";
$trans["placeHoldErr3"]           = "\$text = 'Dit item is al uitgeleend aan dit Lid.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Lid, %name%, heeft %checkoutCount% items geleend en %holdCount% reservering(en).  Alle uitgeleende materialen moeten ingeleverd zijn en alle reserveringen moeten verwijderd zijn voor u dit Lid kunt verwijderen.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'terug naar leden informatie';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Weet u zeker dat u Lid, %name% wilt verwijderen?  De uitleen-historie van dit Lid wordt eveneens verwijderd.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text = 'Lid, %name%, is verwijderd.';";
$trans["mbrDelReturn"]            = "\$text = 'terug naar Lid zoeken';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text = 'Leden uitleen geschiedenis:';";
$trans["mbrHistoryNoHist"]        = "\$text = 'Geen geschiedenis gevonden.';";
$trans["mbrHistoryHdr1"]          = "\$text = 'Barcode';";
$trans["mbrHistoryHdr2"]          = "\$text = 'Titel';";
$trans["mbrHistoryHdr3"]          = "\$text = 'Auteur';";
$trans["mbrHistoryHdr4"]          = "\$text = 'Nieuwe status';";
$trans["mbrHistoryHdr5"]          = "\$text = 'Datum van statuswijziging';";
$trans["mbrHistoryHdr6"]          = "\$text = 'Uitleentermijn datum';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text = 'Voeg een transactie toe:';";
$trans["mbrAccountTransTyp"]      = "\$text = 'Transaction Type:';";
$trans["mbrAccountAmount"]        = "\$text = 'Bedrag (in €):';";
$trans["mbrAccountDesc"]          = "\$text = 'Omschrijving:';";
$trans["mbrAccountHead1"]         = "\$text = 'Leden transacties:';";
$trans["mbrAccountNoTrans"]       = "\$text = 'Geen transacties gevonden.';";
$trans["mbrAccountOpenBal"]       = "\$text = 'Startbedrag';";
$trans["mbrAccountDel"]           = "\$text = 'verwijder';";
$trans["mbrAccountHdr1"]          = "\$text = 'Functie';";
$trans["mbrAccountHdr2"]          = "\$text = 'Datum';";
$trans["mbrAccountHdr3"]          = "\$text = 'Trans Type';";
$trans["mbrAccountHdr4"]          = "\$text = 'Omschrijving';";
$trans["mbrAccountHdr5"]          = "\$text = 'Bedrag (€)';";
$trans["mbrAccountHdr6"]          = "\$text = 'Bedrag (€)';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text = 'Transactie met succes voltooid.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text = 'Weet u zeker dat u deze transactie wilt verwijderen?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text = 'Transactie met succes verwijderd.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text = 'Uitgeleend aan: %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text = 'Vandaag:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text = 'Lid:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text = 'Kaartnummer:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text = 'Abonnementstype:';";
$trans["mbrPrintCloseWindow"]     = "\$text = 'Sluit venster';";

#****************************************************************************
#*  Translation text for page objectsearch.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Zoeken';";
$trans["indexBarcodeHdr"]          = "\$text = 'Zoek object op Barcode';";
$trans["indexBarcodeField"]        = "\$text = 'Barcode/nummer';";
$trans["indexSearchHdr"]           = "\$text = 'Zoek object op tekst';";
$trans["indexTitle"]               = "\$text = 'Titel';";
$trans["indexAuthor"]              = "\$text = 'Auteur';";
$trans["indexSubject"]             = "\$text = 'Onderwerp';";
$trans["indexBarcode"]             = "\$text = 'Barcode';";
$trans["indexButton"]              = "\$text = 'Zoeken';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'U bent niet gemachtigd deze functie te gebruiken.';";

?>
