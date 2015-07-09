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
$trans["catalogSubmit"]            = "\$text = 'Bevestig';";
$trans["catalogCancel"]            = "\$text = 'Annuleren';";
$trans["catalogRefresh"]           = "\$text = 'Vernieuwen';";
$trans["catalogDelete"]            = "\$text = 'Verwijder';";
$trans["catalogFootnote"]          = "\$text = 'Velden gemarkeerd met %symbol% zijn verplicht.';";
$trans["AnswerYes"]                = "\$text = 'Ja';";
$trans["AnswerNo"]                 = "\$text = 'Nee';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Catalogus';";
$trans["indexBarcodeHdr"]          = "\$text = 'Zoek object op Barcode';";
$trans["indexBarcodeField"]        = "\$text = 'Barcode/nummer';";
$trans["indexSearchHdr"]           = "\$text = 'Zoek object op tekst';";
$trans["indexKeyword"]             = "\$text = 'Trefwoord';";
$trans["indexTitle"]               = "\$text = 'Titel';";
$trans["indexAuthor"]              = "\$text = 'Auteur';";
$trans["indexSubject"]             = "\$text = 'Onderwerp';";
$trans["indexBarcode"]             = "\$text = 'Barcode';";
$trans["indexButton"]              = "\$text = 'Zoeken';";

#****************************************************************************
#*  Translation text for page biblio_new_form.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Nieuw toevoegen';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Object';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Uitleenmateriaal';";
$trans["biblioFieldsCollection"]   = "\$text = 'Collectie';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Ruglabel';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'USMarc-velden';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Tonen in OPAC';";
$trans["biblioFieldsAddAuthor"]    = "\$text = 'nieuwe auteur';";
$trans["biblioFieldsEditAuthor"]   = "\$text = 'wijzig auteur';";
$trans["biblioFielsAuthor"]        = "\$text = 'Auteur';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewSuccess"]         = "\$text = 'Het onderstaande nieuwe object is aangemaakt.  Om een exemplaar toe te voegen, kies \"Nieuw Exemplaar\" in de linker navigatiebalk of \"Toevoegen nieuw exemplaar\" hieronder.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Object is met succes bijgewerkt.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]          = "\$text = 'Toevoegen nieuw exemplaar';";
$trans["biblioCopyNewBarcode"]            = "\$text = 'Barcode/nummer';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Barcode automatisch genereren';";
$trans["biblioCopyNewValidBarco"]         = "\$text = 'Valideer voor afdruk';";
$trans["biblioCopyNewDesc"]               = "\$text = 'Omschrijving';";
$trans["biblioCopyEditFormLabel"]         = "\$text = 'Bewerk exemplaar';";
$trans["biblioCopyEditFormStatus"]        = "\$text = 'Status';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Exemplaar met succes aangemaakt.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Exemplaar met succes bijgewerkt.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Exemplaar kan niet worden verwijderd.  Een exemplaar moet ingenomen zijn voordat het kan worden verwijderd.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Weet u zeker dat u exemplaar met barcode %barcodeNmbr% wilt verwijderen?  De uitleengeschiedenis van dit exemplaar wordt eveneens verwijderd.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Exemplaar met barcode %barcode% is met succes verwijderd.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Nieuw MARC Veld toevoegen';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC Veld Informatie';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Functie';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Label';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Labelomschrijving';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Subfield omschrijving';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Veld Data';";
$trans["biblioMarcListNoRows"]     = "\$text = 'Geen MARC velden gevonden.';";
$trans["biblioMarcListEdit"]       = "\$text = 'bewerk';";
$trans["biblioMarcListDel"]        = "\$text = 'verwijder';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';";
$trans["usmarcSelectInst"]         = "\$text = 'Kies een veld type';";
$trans["usmarcSelectNoTags"]       = "\$text = 'Geen tags gevonden.';";
$trans["usmarcSelectUse"]          = "\$text = 'gebruik';";
$trans["usmarcCloseWindow"]        = "\$text = 'Sluit venster';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Toevoegen Nieuw Marc Veld';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subfield';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Field Data';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Kies';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc veld met succes toegevoegd.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Wijzig Marc Veld';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc veld met succes bijgewerkt.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Weet u zeker dat u veld met tag %tag% en subveld %subfieldCd% wilt verwijderen?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc veld met succes verwijderd.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'Dit object heeft %copyCount% exemplaar(aren) en %holdCount% reservering(en).  Verwijder de exemplaren en/of reserveringen voor u dit object verwijdert.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'terug naar object informatie';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Weet u zeker dat u object met titel %title% wilt verwijderen?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Object, %title%, is verwijderd.';";
$trans["biblioDelReturn"]          = "\$text = 'terug naar object zoeken';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Reservaties:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'Er zijn momenteel geen object exemplaren gereserveerd.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Functie';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Exemplaar';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Gereserveerd';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Lid';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Status';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Uitleentermijn';";
$trans["biblioHoldListdel"]        = "\$text = 'Verwijder';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'U mag de catalogus niet gebruiken.';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Test Load';";
$trans["MarcUploadTestTrue"]        = "\$text = 'True';";
$trans["MarcUploadTestFalse"]       = "\$text = 'False';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc Input File';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Records Uploaded';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Record';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Data';";
$trans["MarcUploadRawData"]         = "\$text = 'Raw Data:';";
$trans["UploadFile"]                = "\$text = 'Upload File';";


#****************************************************************************
#*  Translation text for page upload_csv(_form).php
#****************************************************************************
$trans["CSVloadTest"]            = "\$text = 'Testupload';";
$trans["CSVloadTestTrue"]        = "\$text = 'Ja';";
$trans["CSVloadTestFalse"]       = "\$text = 'Nee';";
$trans["CSVloadTestFileUpload"]  = "\$text = 'CSV-inputbestand';";
$trans["CSVloadRecordsUploaded"] = "\$text = 'Aantal records geüpload';";
$trans["CSVloadMarcRecord"]      = "\$text = 'CSV-record';";
$trans["CSVloadTag"]             = "\$text = 'Label';";
$trans["CSVloadSubfield"]        = "\$text = 'Sub';";
$trans["CSVloadData"]            = "\$text = 'Data';";
$trans["CSVRecordsRead"]         = "\$text = 'uit %total% records gelezen';";
$trans["CSVHeadings"]            = "\$text = 'Doelen uit de kollomkoppen geïdentificeerd';";
$trans["CSVTargets"]             = "\$text = 'Doel';";
$trans["CSVComments"]            = "\$text = 'Commentaar';";
$trans["CSVunknownIgnored"]      = "\$text = 'ONBEKEND (genegeerd)';";
$trans["CSVMaterialUnknown"]     = "\$text = 'Materiaal &quot;%mType%&quot; onbekend, de standaardinstelling wordt gebruikt';";
$trans["CSVCollUnknown"]         = "\$text = 'Materiaal &quot;%collType%&quot; onbekend, de standaardinstelling wordt gebruikt';";
$trans["CSVadded"]               = "\$text = 'Toegevoegd';";
$trans["CSVerrorAtRecord"]       = "\$text = 'Fout in record';";
$trans["CSVerrors"]              = "\$text = 'fouten';";
$trans["CSVerror"]               = "\$text = 'FOUT';";
$trans["CSVwarning"]             = "\$text = 'Waarschuwing';";
$trans["UploadFile"]             = "\$text = 'Upload bestand';";
$trans["Defaults"]               = "\$text = 'Standaardinstellingen';";
$trans["CSVshowAllFiles"]        = "\$text = 'Toon alle records (uitschakelen voor grote bestanden)';";
$trans["CSVcopyDescription"]     = "\$text = 'Beschrijvingstekst van verschillende kopieën van items';";
$trans["CSVinputDescr"]          = "\$text = 'Het inputbestand moet een tabgescheiden tekstbestand zijn (geen aanhalingstekens rond tekstvelden, geen &quot;&quot;) met de juiste doelnamen in de eerste rij.';";
$trans["CSVimportAdvise"]        = "\$text = 'Het wordt <b><u>sterk aangeraden</u></b> eerst in testmodus te werken en om een backup van je databank te maken!';";
$trans["CSVimportMoreMARC"]      = "\$text = 'Alle andere MARC-gegevens kunnen ook geïmporteerd worden door het MARC-label te gebruiken (vb. 020\$a voor ISBN).';";
$trans["CSVcolumnHeading"]       = "\$text = 'Kollomkop';";
$trans["CSVcolumnDescription"]   = "\$text = 'Beschrijving';";
$trans["CSVcolumnComment"]       = "\$text = 'Commentaar';";
$trans["CSVbarCoDescription"]    = "\$text = 'Optioneel. Kan gebruikt worden voor een initiële kopie bij migratie.';";
$trans["CSVCallNumber"]          = "\$text = 'Ruglabel';";
$trans["CSVCallNrDescription"]   = "\$text = 'Verplicht veld. Call2 and Call3 zijn optioneel.';";
$trans["Mandatory"]              = "\$text = 'Verplicht';";
$trans["CSVoptionalDefault"]     = "\$text = 'Optioneel. Overschrijft de standaardwaarden uit het formulier.';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Werkt met OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'onder de ';";
$trans["GNU"]                         = "\$text = 'GNU General Public License';";

$trans["catalogResults"]              = "\$text = 'Zoekresultaten';";

#****************************************************************************
#*  Translation text for page author_new_form.php
#****************************************************************************
$trans["AuthorAddNew"]                = "\$text = 'Toevoegen nieuwe auteur';";
$trans["AuthorAbbreviation"]          = "\$text = 'Afkorting';";
$trans["AuthorTitle"]                 = "\$text = 'Titel';";
$trans["AuthorFirstName"]             = "\$text = 'Voornaam, voorletters';";
$trans["AuthorLastName"]              = "\$text = 'Achternaam, voorvoegsels';";
$trans["AuthorCancelReturn"]          = "\$text = 'terug naar nieuw object';";
$trans["ExistingAbbreviations"]       = "\$text = 'Bestaande afkortingen';";

#****************************************************************************
#*  Translation text for page author_edit_form.php
#****************************************************************************
$trans["AuthorEdit"]                  = "\$text = 'Wijzigen auteur';";
$trans["AuthorChoice"]                = "\$text = 'Maak uw keuze';";
$trans["AuthorUpdateSuccess"]         = "\$text = 'Auteurgegevens zijn bijgewerkt';";



?>
