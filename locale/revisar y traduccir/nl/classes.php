<?php
#
# Dutch Translation by Koen Roggemans, based on the work of M. de Vogel
#
/**********************************************************************************
 *   Copyright(C) 2002, 2003, 2004 David Stevens
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





#   !!!!!!!!!!!!!!!!!    READ THIS    !!!!!!!!!!!!!!!!!
# NL translation is active, EN translation is deactivated by #
#


#****************************************************************************
#*  Translation text for ALL classes
#****************************************************************************
#$trans["GoBack"]                 = "\$text = 'back';";
$trans["GoBack"]                  = "\$text = 'terug';";
# $trans["InsertError1"]          = "\$text = 'Can only insert rows on table:';";
$trans["InsertError1"]            = "\$text = 'Er kunnen alleen gegevens toegevoegd worden aan tabel:';";
# $trans["InsertError2"]          = "\$text = 'Error inserting into';";
$trans["InsertError2"]            = "\$text = 'Er is een fout opgetreden bij het toevoegen van gegevens aan tabel:';";
#$trans["UpdateError"]            = "\$text = 'Error updating';";
$trans["UpdateError"]             = "\$text = 'Er is een fout opgetreden bij het bijwerken van gegevens van tabel:';";
#$trans["DeleteError"]            = "\$text = 'Error deleting';";
$trans["DeleteError"]             = "\$text = 'Er is een fout opgetreden bij het verwijderen van gegevens van tabel:';";
# $trans["AccessError"]           = "\$text = 'Error accessing information from table:';";
$trans["AccessError"]             = "\$text = 'Er is een fout opgetreden bij het verwerken van gegevens van tabel:';";
# $trans["AccessError2"]           = "\$text = 'Error accessing library member information.';";
$trans["AccessError2"]             = "\$text = 'Er is een fout opgetreden bij het verwerken van de ledengegevens.';";
# $trans["InsertError3"]          = "\$text = 'Can only insert rows on collections and material types.';";
$trans["InsertError3"]            = "\$text = 'Er kunnen alleen gegevens toegevoegd worden aan collecties en materiaaltypes';";


#****************************************************************************
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Ruglabel is verplicht.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Veld is verplicht.';";
$trans["biblioFieldError2"]       = "\$text = 'Tag moet een getal zijn.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Fout bij verwerken object informatie.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Fout bij verwerken object-veld informatie.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Fout bij toevoegen nieuwe object informatie.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Fout bij toevoegen nieuw object-veld informatie.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Fout bij bijwerken object informatie.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Fout bij wissen object-veld informatie voor update.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Fout bij verwijderen object informatie.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Fout bij zoeken object zoek-resultaten.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Fout bij zoeken object informatie.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Fout bij lezen object informatie.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Barcode/number is verplicht.';";
$trans["biblioCopyError2"]        = "\$text = 'Barcode/number bevat ongeldige tekens.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Fout bij controleren dubbele barcode.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'Barcode/nummer %barcodeNmbr% is al in gebruik.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Fout bij toevoegen nieuwe obect-exemplaar informatie.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Fout bij verwerking obect-exemplaar informatie.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Fout bij bijwerken obect-exemplaar informatie.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Fout bij verwijderen obect-exemplaar informatie.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Fout bij verwerking object informatie om collectie code te verkrijgen.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Fout bij verwerking collectie-informatie om uitleentermijn te controleren.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Fout opgetreden bij innemen exemplaren';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Fout opgetreden bij controleren uitleentermijnen';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Fout bij lezen object-veld.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Fout bij lezen object-velden.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Fout bij toevoegen nieuw object-veld.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Fout bij bijwerken object-veld.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Fout bij verwijderen object-veld.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Fout bij verwerken van de block data.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Fout bij verwerken van de marc tag data.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Fout bij verwerken van de marc subveld data.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Fout bij verwerken van reserveringen bij object id.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Fout bij verwerken  reserveringen van lid id.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Fout bij opvragen van bibid en copyid voor te plaatsen reservering.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Fout bij invoeren van reservering.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Fout bij verwijderen van reservering.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Fout bij opvragen van eerste reservering van een exemplaar.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Fout bij uitvoeren van een rapport.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Niet numerieke waarde is niet geldig bij een numerieke kolom.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Ongeldig datetime format.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Ongeldig datum format.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Ongeldig lettertype gekozen in etiketten-definitie etiketten xml.  Geldige lettertypes zijn: Courier, Helvetica, en Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Ongeldige grootte lettertype gekozen in etiketten-definitie xml.  Grootte Lettertype moet numeriek zijn.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Ongeldige grootte lettertype gekozen in etiketten-definitie xml.  Grootte lettertype moet groter dan 0 zijn.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Ongeldige linker marge gekozen in etiketten-definitie xml.  Linker marge moet numeriek zijn.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Ongeldige linker marge gekozen in etiketten-definitie xml.  Linker marge moet groter dan 0 zijn.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Ongeldige rechter marge gekozen in etiketten-definitie xml.  Rechter marge moet numeriek zijn.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Ongeldige rechter marge gekozen in etiketten-definitie xml.  Rechter marge moet groter dan 0 zijn.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Ongeldige boven marge gekozen in etiketten-definitie xml.  Boven marge moet numeriek zijn.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Ongeldige boven marge gekozen in etiketten-definitie xml.  Boven marge moet groter dan 0 zijn.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Ongeldige onder marge gekozen in etiketten-definitie xml.  Onder marge moet numeriek zijn.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Ongeldige onder marge gekozen in etiketten-definitie xml.  Onder marge moet groter dan 0 zijn.';";
$trans["labelFormatColErr"]       = "\$text = 'Ongeldige kolommen gekozen in etiketten-definitie xml.  Kolommen moeten numeriek zijn.';";
$trans["labelFormatColErr2"]      = "\$text = 'Ongeldige kolommen gekozen in etiketten-definitie xml.  Kolommen moeten groter dan 0 zijn.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Ongeldige breedte gekozen in etiketten-definitie xml.  Breedte moet numeriek zijn.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Ongeldige breedte gekozen in etiketten-definitie xml.  Breedte moet groter dan 0 zijn.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Ongeldige hoogte gekozen in etiketten-definitie xml.  Hoogte moet numeriek zijn.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Ongeldige hoogte gekozen in etiketten-definitie xml.  Hoogte moet groter dan 0 zijn.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'ongeldige etiket-regels opgegeven in etiketten-definitie.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Fout bij opvragen historie object status op object ID.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Fout bij opvragen historie object status op Lid ID';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Fout bij invoegen historie object status';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Fout bij verwijderen historie object status op copy id';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Fout bij verwijderen historie object stauts op member id';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Bedrag is verplicht.';";
$trans["memberAccountTransError2"]  = "\$text = 'Bedrag moet een getal zijn.';";
$trans["memberAccountTransError3"]  = "\$text = 'Omschrijving is verplicht.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Fout bij verwerken Lidgegevens informatie.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Fout bij toevoegen Lidgegevens informatie.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Fout bij verwijderen Lidgegevens informatie.';";


#****************************************************************************
#*  Translation text for class Author
#****************************************************************************
#  $trans["AuthorsAbbreviationError1"]     = "\$text = 'Abbreviation is required.';";
  $trans["AuthorsAbbreviationError1"]      = "\$text = 'Afkorting is verplicht.';";
#  $trans["AuthorsAbbreviationError2"]     = "\$text = 'Length Abbreviation must be 4.';";
  $trans["AuthorsAbbreviationError2"]      = "\$text = 'Lengte Afkorting moet 4 zijn.';";
#  $trans["AuthorsLastNameError"]          = "\$text = 'Lastname is required.';";
  $trans["AuthorsLastNameError"]           = "\$text = 'Achternaam is verplicht.';";

#****************************************************************************
#*  Translation text for class DM
#****************************************************************************
#  $trans["DMDescriptionError"]             = "\$text = 'Description is required.';";
  $trans["DMDescriptionError"]              = "\$text = 'Omschrijving is verplicht.';";
#  $trans["DMDaysDueBackError1"]            = "\$text = 'Days due back must be numeric.';";
  $trans["DMDaysDueBackError1"]             = "\$text = 'Uitleentermijn moet een getal zijn.';";
#  $trans["DMDaysDueBackError2"]            = "\$text = 'Days due back can not be less than zero.';";
  $trans["DMDaysDueBackError2"]             = "\$text = 'Uitleentermijn moet groter dan 0 zijn.';";
#  $trans["DMDailysLateFeeError1"]          = "\$text = 'Daily late fee must be numeric.';";
  $trans["DMDailysLateFeeError1"]           = "\$text = 'Boetebedrag met een getal zijn.';";
#  $trans["DMDailysLateFeeError2"]          = "\$text = 'Daily late fee can not be less than zero.';";
  $trans["DMDailysLateFeeError2"]           = "\$text = 'Boetebedrag moet groter dan 0 zijn.';";
#  $trans["DMGroupCheckoutLimitError1"]     = "\$text = 'Group checkout limit must be numeric.';";
  $trans["DMGroupCheckoutLimitError1"]      = "\$text = 'Uitleenlimiet Groep moet een getal zijn.';";
#  $trans["DMGroupCheckoutLimitError2"]     = "\$text = 'Group checkout limit can not be less than zero.';";
  $trans["DMGroupCheckoutLimitError2"]      = "\$text = 'Uitleenlimiet Groep moet groter dan 0 zijn.';";

#****************************************************************************
#*  Translation text for class Member
#****************************************************************************
#  $trans["mbrCardNumberError1"]            = "\$text = 'Card number is required.';";
  $trans["mbrCardNumberError1"]             = "\$text = 'Kaartnummer is verplicht.';";
#  $trans["mbrCardNumberError2"]            = "\$text = '"Card number must be all alphabetic and numeric characters."';";
  $trans["mbrCardNumberError2"]             = "\$text = 'Kaartnummer moet alfanumeriek zijn.';";
#  $trans["mbrLastNameError"]               = "\$text = 'Last name is required.';";
  $trans["mbrLastNameError"]                = "\$text = 'Achternaam is verplicht.';";
#  $trans["mbrFirstNameError"]              = "\$text = 'First name is required.';";
  $trans["mbrFirstNameError"]               = "\$text = 'Voornaam is verplicht.';";
#  $trans["mbrCityError"]                   = "\$text = 'City is required.';";
  $trans["mbrCityError"]                    = "\$text = 'Woonplaats is verplicht.';";
#  $trans["mbrZipCodeError1"]               = "\$text = 'Zip code number must be numeric.';";
  $trans["mbrZipCodeError1"]                = "\$text = 'Postcode moet een getal zijn.';";
#  $trans["mbrZipCodeError2"]               = "\$text = 'Zip code number must not contain a decimal point.';";
  $trans["mbrZipCodeError2"]                = "\$text = 'Postcode mag geen decimaal-punt bevatten.';";
#  $trans["mbrZipCodeError1"]               = "\$text = 'Zip code extension must be numeric.';";
  $trans["mbrZipCodeError1"]                = "\$text = 'Postcodeextensie moet een getal zijn.';";
#  $trans["mbrZipCodeExtError2"]            = "\$text = 'Zip code extension must not contain a decimal point.';";
  $trans["mbrZipCodeExtError2"]             = "\$text = 'Postcode mag geen decimaal-punt bevatten.';";
#  $trans["mbrSchoolGradeError1"]           = "\$text = 'School Grade must be numeric.';";
  $trans["mbrSchoolGradeError1"]            = "\$text = 'Niveau moet een getal zijn.';";
#  $trans["mbrSchoolGradeError2"]           = "\$text = 'SchoolGrade must not contain a decimal point.';";
  $trans["mbrSchoolGradeError2"]            = "\$text = 'Niveau mag geen decimaal-punt bevatten.';";

#****************************************************************************
#*  Translation text for class Staff
#****************************************************************************
#  $trans["staffLastNameError"]                = "\$text = 'Last name is required.';";
  $trans["staffLastNameError"]                 = "\$text = 'Achternaam is verplicht.';";
#  $trans["staffUserNameError1"]               = "\$text = 'Username must be at least 4 characters.';";
  $trans["staffUserNameError1"]                = "\$text = 'Gebruikersnaam moet minimaal 4 karakters zijn.';";
#  $trans["staffUserNameError2"]               = "\$text = 'Username must not contain any spaces.';";
  $trans["staffUserNameError2"]                = "\$text = 'Gebruikersnaam mag geen spaties bevatten.';";
#  $trans["staffPasswordError1"]               = "\$text = 'Password must be at least 4 characters.';";
  $trans["staffPasswordError1"]                = "\$text = 'Wachtwoord moet minimaal 4 karakters zijn.';";
#  $trans["staffPasswordError2"]               = "\$text = 'Password must not contain any spaces.';";
  $trans["staffPasswordError2"]                = "\$text = 'Wachtwoord mag geen spaties bevatten.';";
#  $trans["staffPasswordError3"]               = "\$text = 'Passwords do not match.';";
  $trans["staffPasswordError3"]                = "\$text = 'Wachtwoorden zijn niet gelijk.';";

#****************************************************************************
#*  Translation text for class Theme
#****************************************************************************
#  $trans["themeNameError"]                    = "\$text = 'Theme name is required.';";
  $trans["themeNameError"]                     = "\$text = 'Themanaam is verplicht.';";
#  $trans["themeTitleBGColorError"]            = "\$text = 'Title background color is required.';";
  $trans["themeTitleBGColorError"]             = "\$text = 'Titel achtergrondkleur is verplicht.';";
#  $trans["themeTitleFontError"]               = "\$text = 'Title font face is required.';";
  $trans["themeTitleFontError"]                = "\$text = 'Titel lettertype is verplicht.';";
#  $trans["themeTitleFontColorError"]          = "\$text = 'Title font color is required.';";
  $trans["themeTitleFontColorError"]           = "\$text = 'Titel letter-kleur is verplicht.';";
#  $trans["themeMainBGColorError"]             = "\$text = 'Main body background color is required.';";
  $trans["themeMainBGColorError"]              = "\$text = 'Pagina achtergrondkleur is verplicht.';";
#  $trans["themeMainFontfaceError"]            = "\$text = 'Main bofy font face is required.';";
  $trans["themeMainFontfaceError"]             = "\$text = 'Pagina lettertype is verplicht.';";
#  $trans["themeMainFontColorError"]           = "\$text = 'Main body font color is required.';";
  $trans["themeMainFontColorError"]            = "\$text = 'Pagina letter-kleur is verplicht.';";
#  $trans["themeNavBGColorError"]              = "\$text = 'Navigation background color is required.';";
  $trans["themeNavBGColorError"]               = "\$text = 'Navigatie achtergrondkleur is verplicht.';";
#  $trans["themeTabBGColorError"]              = "\$text = 'Tab background color is required.';";
  $trans["themeTabBGColorError"]               = "\$text = 'Tab achtergrondkleur is verplicht.';";
#  $trans["themeNavFontfaceError"]             = "\$text = 'Navigation font face is required.';";
  $trans["themeNavFontfaceError"]              = "\$text = 'Navigatie lettertype is verplicht.';";
#  $trans["themeTabFontfaceError"]             = "\$text = 'Tab font face is required.';";
  $trans["themeTabFontfaceError"]              = "\$text = 'Tab lettertype is verplicht.';";
#  $trans["themeNavFontColorError"]            = "\$text = 'Navigation font color is required.';";
  $trans["themenavFontColorError"]             = "\$text = 'Navigatie letter-kleur is verplicht.';";
#  $trans["themeTabFontColorError"]            = "\$text = 'Tab font color is required.';";
  $trans["themeTabFontColorError"]             = "\$text = 'Tab letter-kleur is verplicht.';";
#  $trans["themeMainLinkColorError"]           = "\$text = 'Main body link color is required.';";
  $trans["themeMainLinkColorError"]            = "\$text = 'Pagina link-kleur is verplicht.';";
#  $trans["themeMainErrorColorError"]          = "\$text = 'Main body error color is required.';";
  $trans["themeMainErrorColorError"]           = "\$text = 'Pagina fout-kleur is verplicht.';";
#  $trans["themeNavLinkColorError"]            = "\$text = 'Navigation link color is required.';";
  $trans["themeNavLinkColorError"]             = "\$text = 'Navigatie link-kleur is verplicht.';";
#  $trans["themeTabLinkColorError"]            = "\$text = 'Tab link color is required.';";
  $trans["themeTabLinkColorError"]             = "\$text = 'Tab link-kleur is verplicht.';";
#  $trans["themeBorderColorError"]             = "\$text = 'Border color is required.';";
  $trans["themeBorderColorError"]              = "\$text = 'Rand-kleur is verplicht.';";
#  $trans["themeTitleFontSizeError1"]          = "\$text = 'Title font size must be numeric.';";
  $trans["themeTitleFontSizeError1"]           = "\$text = 'Grootte lettertype Titel moet een getal zijn.';";
#  $trans["themeMainFontSizeError1"]           = "\$text = 'Main body font size must be numeric.';";
  $trans["themeMainFontSizeError1"]            = "\$text = 'Grootte lettertype Pagina moet een getal zijn.';";
#  $trans["themeNavFontSizeError1"]            = "\$text = 'Navigation font size must be numeric.';";
  $trans["themeNavFontSizeError1"]             = "\$text = 'Grootte lettertype Navigatie moet een getal zijn.';";
#  $trans["themeTabFontSizeError1"]            = "\$text = 'Tab font size must be numeric.';";
  $trans["themeTabFontSizeError1"]             = "\$text = 'Grootte lettertype Tab moet een getal zijn.';";
#  $trans["themeBorderWidthError1"]            = "\$text = 'Border width must be numeric.';";
  $trans["themeBorderWidthError1"]             = "\$text = 'Breedte Rand moet een getal zijn.';";
#  $trans["themeTablePaddingError1"]           = "\$text = 'Table padding must be numeric.';";
  $trans["themeTablePaddingError1"]            = "\$text = 'Tabel tussenruimte moet een getal zijn.';";
#  $trans["themeTablePaddingError2"]           = "\$text = 'Table padding must not contain a decimal point.';";
  $trans["themeTablePaddingError2"]            = "\$text = 'Tabel tussenruimte mag geen decimaal-punt bevatten.';";
#  $trans["themeBorderWidthError2"]            = "\$text = 'Border width must not contain a decimal point.';";
  $trans["themeBorderWidthError2"]             = "\$text = 'Breedte Rand mag geen decimaal-punt bevatten.';";
#  $trans["themeNavFontSizeError2"]            = "\$text = 'Navigation font size must not contain a decimal point.';";
  $trans["themeNavFontSizeError2"]             = "\$text = 'Grootte lettertype Navigatie mag geen decimaal-punt bevatten.';";
#  $trans["themeTabFontSizeError2"]            = "\$text = 'Tab font size must not contain a decimal point.';";
  $trans["themeTabFontSizeError2"]             = "\$text = 'Grootte lettertype Tab mag geen decimaal-punt bevatten.';";
#  $trans["themeTitleFontSizeError2"]          = "\$text = 'Title font size must not contain a decimal point.';";            
  $trans["themeTitleFontSizeError2"]           = "\$text = 'Grootte lettertype Titel mag geen decimaal-punt bevatten.';";
#  $trans["themeMainFontSizeError2"]           = "\$text = 'Main body font size must not contain a decimal point.';";            
  $trans["themeMainFontSizeError2"]            = "\$text = 'Grootte lettertype Pagina mag geen decimaal-punt bevatten.';";
#  $trans["themeMainFontSizeError3"]           = "\$text = 'Main body font size must be greater than zero.';";            
  $trans["themeMainFontSizeError3"]            = "\$text = 'Grootte lettertype Pagina moet groter dan 0 zijn.';";
#  $trans["themeTitleFontSizeError3"]          = "\$text = 'Title font size must be greater than zero.';";            
  $trans["themeTitleFontSizeError3"]           = "\$text = 'Grootte lettertype Titel moet groter dan 0 zijn.';";
#  $trans["themeNavFontSizeError3"]            = "\$text = 'Navigation font size must be greater than zero.';";            
  $trans["themeNavFontSizeError3"]             = "\$text = 'Grootte lettertype Navigatie moet groter dan 0 zijn.';";
#  $trans["themeTabFontSizeError3"]            = "\$text = 'Tab font size must be greater than zero.';";            
  $trans["themeTabFontSizeError3"]             = "\$text = 'Grootte lettertype Tab moet groter dan 0 zijn.';";
#  $trans["themeBorderWidthError3"]            = "\$text = 'Border width must be greater than zero.';";
  $trans["themeBorderWidthError3"]             = "\$text = 'Breedte Rand moet groter dan 0 zijn.';";
#  $trans["themeTablePaddingError3"]           = "\$text = 'Table padding must be greater than zero.';";
  $trans["themeTablePaddingError3"]            = "\$text = 'Tabel tussenruimte moet groter dan 0 zijn.';";

#****************************************************************************
#*  Translation text for class MbrClassify
#****************************************************************************
#  $trans["MbrClassifyCodeError"]                  = "\$text = 'Type is required.';";
  $trans["MbrClassifyCodeError"]                   = "\$text = 'Code is verplicht.';";
#  $trans["MbrClassifyDescriptionError"]           = "\$text = 'Description is required.';";
  $trans["MbrClassifyDescriptionError"]            = "\$text = 'Omschrijving is verplicht.';";
#  $trans["MbrClassifyFeeError"]                   = "\$text = 'Fee subscription is required.';";
  $trans["MbrClassifyFeeError"]                    = "\$text = 'Bedrag abonnement is verplicht.';";
#  $trans["MbrClassifyBookcountError"]             = "\$text = 'Bookcount subscription is required.';";
  $trans["MbrClassifyBookcountError"]              = "\$text = 'Aantal boeken abonnement is verplcht.';";


?>
