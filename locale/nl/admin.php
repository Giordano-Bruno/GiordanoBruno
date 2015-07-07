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
$trans["adminSubmit"]              = "\$text = 'Bevestigen';";
$trans["adminCancel"]              = "\$text = 'Annuleren';";
$trans["adminDelete"]              = "\$text = 'Verwijderen';";
$trans["adminUpdate"]              = "\$text = 'Bijwerken';";
$trans["adminSave"]                = "\$text = 'Opslaan';";
$trans["adminFootnote"]            = "\$text = 'Velden, gemarkeerd met %symbol% zijn verplicht.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Beheer';";
$trans["indexDesc"]                = "\$text = 'Gebruik het linkermenu om toegang te krijgen tot de verschillende beheersonderdelen.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                = "\$text = 'terug naar collectieoverzicht';";
$trans["adminCollections_delStart"]                 = "\$text = 'Collectie, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                   = "\$text = ', is verwijderd.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]          = "\$text = 'Wilt u volgende collectie echt verwijderen: ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                  = "\$text = ', is bijgewerkt.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]  = "\$text = 'Wijzig collectie:';";
$trans["adminCollections_edit_formDescription"]     = "\$text = 'Omschrijving:';";
$trans["adminCollections_edit_formDaysdueback"]     = "\$text = 'Uitleentermijn [dagen]:';";
$trans["adminCollections_edit_formDailyLateFee"]    = "\$text = 'Boete per dag:';";
$trans["adminCollections_edit_formNote"]            = "\$text = '*Opmerking:';";
$trans["adminCollections_edit_formNoteText"]        = "\$text = 'Als de uitleentermijn op 0 dagen wordt gezet, dan kan de gehele collectie niet uitgeleend worden.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]     = "\$text = 'Nieuwe collectie toevoegen';";
$trans["adminCollections_listCollections"]          = "\$text = 'Collecties:';";
$trans["adminCollections_listFunction"]             = "\$text = 'Functie';";
$trans["adminCollections_listDescription"]          = "\$text = 'Omschrijving';";
$trans["adminCollections_listDaysdueback"]          = "\$text = 'Uitleentermijn [dagen]';";
$trans["adminCollections_listDailylatefee"]         = "\$text = 'Boete per dag';";
$trans["adminCollections_listBibliographycount"]    = "\$text = 'Object aantal';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Wijzig';";
$trans["adminCollections_listDel"]                  = "\$text = 'Verwijder';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Opmerking:';";
$trans["adminCollections_ListNoteText"]             = "\$text = 'Je kunt alleen lege collecties verwijderen.<br>Als je deze collectie toch wil verwijderen, moet je eerst het materiaaltype van wat er in deze collectie zit veranderen.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', is toegevoegd.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"] = "\$text = 'Nieuwe collectie toevoegen:';";
$trans["adminCollections_new_formDescription"]      = "\$text = 'Omschrijving:';";
$trans["adminCollections_new_formColor"]            = "\$text = 'Kleur:';";
$trans["adminCollections_new_formGroupNumber"]      = "\$text = 'Nummer groep:';";
$trans["adminCollections_new_formPlace"]            = "\$text = 'Plaats:';";
$trans["adminCollections_new_formDaysdueback"]      = "\$text = 'Uitleentermijn [dagen]:';";
$trans["adminCollections_new_formDailylatefee"]     = "\$text = 'Boete per dag:';";
$trans["adminCollections_new_formNote"]             = "\$text = '*Opmerking:';";
$trans["adminCollections_new_formNoteText"]         = "\$text = 'Als de uitleentermijn op 0 dagen wordt gezet, dan kan de gehele collectie niet uitgeleend worden.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]       = "\$text = 'uitleenmateriaal, ';";
$trans["admin_materials_delMaterialdeleted"]    = "\$text = ', is verwijderd.';";
$trans["admin_materials_Return"]                = "\$text = 'terug naar materiaal overzicht';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]         = "\$text = 'Wilt u dit materiaaltype echt verwijderen, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]   = "\$text = 'Wijzig uitleenmateriaal:';";
$trans["admin_materials_delDescription"]        = "\$text = 'Omschrijving:';";
$trans["admin_materials_delunlimited"]          = "\$text = '(0 = onbeperkt)';";
$trans["admin_materials_delLimit"]              = "\$text = 'Uitleen Limiet:';";
$trans["admin_materials_delImagefile"]          = "\$text = 'Afbeelding-bestand:';";
$trans["admin_materials_delNote"]               = "\$text = '*Opmerking:';";
$trans["admin_materials_delNoteText"]           = "\$text = 'Afbeeldingsbestanden moeten aanwezig zijn in de openbiblio/images map.';";
$trans["admin_materials_CodeError"]             = "\$text = 'Code is noodzakelijk';";
$trans["admin_materials_DescriptionError"]      = "\$text = 'Omschrijving is noodzakelijk';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]               = "\$text = ', is bijgewerkt.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]  = "\$text = 'Toevoegen nieuw uitleenmateriaal';";
$trans["admin_materials_listMaterialtypes"]     = "\$text = 'Materiaalsoorten:';";
$trans["admin_materials_listFunction"]          = "\$text = 'Functie';";
$trans["admin_materials_listDescription"]       = "\$text = 'Omschrijving';";
$trans["admin_materials_listCheckoutlimit"]     = "\$text = 'Uitleenlimiet<br>per abonnementstype';";
$trans["admin_materials_listImageFile"]         = "\$text = 'Afbeelding<br>bestand';";
$trans["admin_materials_listBibcount"]          = "\$text = 'Object<br>Aantal';";
$trans["admin_materials_listEdit"]              = "\$text = 'wijzig';";
$trans["admin_materials_listDel"]               = "\$text = 'verwijder';";
$trans["admin_materials_listNote"]              = "\$text = '*Opmerking:';";
$trans["admin_materials_listNoteText"]          = "\$text = 'De verwijderfunctie is alleen beschikbaar bij uitleenmateriaal zonder bijbehorende objecten.<br>Als er nog objecten van dit materiaaltype zijn, dan moet het materiaaltype van die objecten eerst gewijzigd worden.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]          = "\$text = ', is toegevoegd.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_ListDescription"]       = "\$text = 'Groep';";
$trans["admin_materials_ListDefault_flg"]       = "\$text = 'Voorkeur';";
$trans["admin_materials_new_formNoteText"]      = "\$text = 'Afbeeldingsbestanden moeten aanwezig zijn in de openbiblio/images map.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                          = "\$text = 'U mag de beheerpagina niet gebruiken.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = 'Gegevens zijn bijgewerkt.';";
$trans["admin_settingsEditsettings"]            = "\$text = 'Wijzig algemene bibliotheekinstellingen:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Naam bibliotheek:';";
$trans["admin_settingsLibAddress"]              = "\$text = 'Adres:';";
$trans["admin_settingsLibCity"]                 = "\$text = 'Plaats:';";
$trans["admin_settingsLibimageurl"]             = "\$text = 'Logo (URL):';";
$trans["admin_settingsOnlyshowimginheader"]     = "\$text = 'Toon alleen logo in paginakop:';";
$trans["admin_settingsLibhours"]                = "\$text = 'Openingstijden:';";
$trans["admin_settingsLibphone"]                = "\$text = 'Telefoon:';";
$trans["admin_settingsLibURL"]                  = "\$text = 'Bibliotheek URL:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]          = "\$text = 'Sessie verloopt na:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'minuten';";
$trans["admin_settingsSearchResults"]           = "\$text = 'Zoek resultaten:';";
$trans["admin_settingsItemsperpage"]            = "\$text = 'items per pagina';";
$trans["admin_settingsPurgebibhistory"]         = "\$text = 'Wis objectgeschiedenis na:';";
$trans["admin_settingsmonths"]                  = "\$text = 'maanden';";
$trans["admin_settingsBlockCheckouts"]          = "\$text = 'Blokkeer uitlenen na bereiken maximum:';";
$trans["admin_settingsLocale"]                  = "\$text = 'Taal:';";
$trans["admin_settingsHTMLChar"]                = "\$text = 'HTML tekenset (vb UTF-8):';";
$trans["admin_settingsHTMLTagLangAttr"]         = "\$text = 'HTML label taalattribuut:';";
#$trans["admin_settingsUseShelvingCart"]       = "\$text = 'Use ShelvingCart after Check In:';";    # EN
$trans["admin_settingsUseShelvingCart"]         = "\$text = 'Gebruik kar na terugname:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                = "\$text = 'Medewerker,';";
$trans["adminStaff_Return"]                     = "\$text = 'terug naar overzicht medewerkers';";
$trans["adminStaff_Yes"]                        = "\$text = 'Ja';";
$trans["adminStaff_No"]                         = "\$text = 'Nee';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', is verwijderd.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]     = "\$text = 'Weet u zeker dat u Medewerker wilt verwijderen, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                = "\$text = ', is bijgewerkt.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]            = "\$text = 'Wijzig Medewerker:';";
$trans["adminStaff_edit_formLastname"]          = "\$text = 'Achternaam:';";
$trans["adminStaff_edit_formFirstname"]         = "\$text = 'Voornaam:';";
$trans["adminStaff_edit_formLogin"]             = "\$text = 'Gebruikersnaam:';";
$trans["adminStaff_edit_formAuth"]              = "\$text = 'Autorisatie:';";
$trans["adminStaff_edit_formCirc"]              = "\$text = 'Uitlenen';";
$trans["adminStaff_edit_formUpdatemember"]      = "\$text = 'Bijwerken Lid';";
$trans["adminStaff_edit_formCatalog"]           = "\$text = 'Catalogus';";
$trans["adminStaff_edit_formAdmin"]             = "\$text = 'Beheer';";
$trans["adminStaff_edit_formReports"]           = "\$text = 'Rapporten';";
$trans["adminStaff_edit_formSuspended"]         = "\$text = 'Geschorst:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]          = "\$text = 'Toevoegen nieuwe medewerker';";
$trans["adminStaff_list_Columnheader"]        = "\$text = ' Medewerkers:';";
$trans["adminStaff_list_Function"]            = "\$text = 'Functie';";
$trans["adminStaff_list_Edit"]                = "\$text = 'wijzig';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'ww';";
$trans["adminStaff_list_Del"]                 = "\$text = 'verwijder';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', is toegevoegd.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Toevoegen nieuwe medewerker:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Wachtwoord:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Wachtwoord nogmaals:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'Wachtwoord is gewijzigd.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Wijzigen wachtwoord medewerker:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                  = "\$text = 'terug naar thema overzicht';";
$trans["adminTheme_Theme"]                   = "\$text = 'Thema, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', is verwijderd.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Wilt u thema echt verwijderen??, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', is bijgewerkt.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Voorbeeld Thema wijzigingen';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]             = "\$text = 'Wijzig Thema In gebruik:';";
$trans["adminTheme_Choosetheme"]             = "\$text = 'Kies een nieuw thema:';";
$trans["adminTheme_Addnew"]                  = "\$text = 'Toevoegen nieuw Thema';";
$trans["adminTheme_themes"]                  = "\$text = 'Thema\'s:';";
$trans["adminTheme_function"]                = "\$text = 'Functie';";
$trans["adminTheme_Themename"]               = "\$text = 'Thema Naam';";
$trans["adminTheme_Usage"]                   = "\$text = 'Gebruik';";
$trans["adminTheme_Edit"]                    = "\$text = 'wijzig';";
$trans["adminTheme_Copy"]                    = "\$text = 'kopieer';";
$trans["adminTheme_Del"]                     = "\$text = 'verwijder';";
$trans["adminTheme_Inuse"]                   = "\$text = 'in gebruik';";
$trans["adminTheme_Note"]                    = "\$text = '*Opmerking:';";
$trans["adminTheme_Notetext"]                = "\$text = 'Het thema wat in gebruik is kan niet worden verwijderd.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                  = "\$text = 'Thema:';";
$trans["adminTheme_Tablebordercolor"]        = "\$text = 'Tabel rand kleur:';";
$trans["adminTheme_Errorcolor"]              = "\$text = 'Fout kleur:';";
$trans["adminTheme_Tableborderwidth"]        = "\$text = 'Tabel rand breedte:';";
$trans["adminTheme_Tablecellpadding"]        = "\$text = 'Tabel cel vulling:';";
$trans["adminTheme_Title"]                   = "\$text = 'Titel';";
$trans["adminTheme_Mainbody"]                = "\$text = 'Hoofdgroep';";
$trans["adminTheme_Navigation"]              = "\$text = 'Navigatie';";
$trans["adminTheme_Tabs"]                    = "\$text = 'Tabs';";
$trans["adminTheme_Backgroundcolor"]         = "\$text = 'Achtergrond Kleur:';";
$trans["adminTheme_Fontface"]                = "\$text = 'Lettertype naam:';";
$trans["adminTheme_Fontsize"]                = "\$text = 'Lettertype grootte:';";
$trans["adminTheme_Bold"]                    = "\$text = 'vet';";
$trans["adminTheme_Fontcolor"]               = "\$text = 'Lettertype Kleur:';";
$trans["adminTheme_Linkcolor"]               = "\$text = 'Link Kleur:';";
$trans["adminTheme_Align"]                   = "\$text = 'Uitlijning:';";
$trans["adminTheme_Right"]                   = "\$text = 'Rechts';";
$trans["adminTheme_Left"]                    = "\$text = 'Links';";
$trans["adminTheme_Center"]                  = "\$text = 'Centreer';";

$trans["adminTheme_HeaderWording"]           = "\$text = 'Wijzig';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]               = "\$text = ', is toegevoegd.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]  = "\$text = 'Thema Voorbeeld';";
$trans["adminTheme_preview_Librarytitle"]  = "\$text = 'Bibliotheek Titel';";
$trans["adminTheme_preview_CloseWindow"]   = "\$text = 'Sluit venster';";
$trans["adminTheme_preview_Home"]          = "\$text = 'Start';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Innemen/Uitlenen';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Catalogus';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Beheer';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Voorbeeld Link';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Dit is een voorbeeld van het ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'thema.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Voorbeeld Lijst:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Tabel Kop';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Voorbeeld data rij 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Voorbeeld data rij 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Voorbeeld data rij 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Voorbeeld link';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'Voorbeeld fout';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Voorbeeld Invoervak';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Voorbeeld Knop';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page groups_list.php
#****************************************************************************
#$trans["admin_groups_listAddGroup"]             = "\$text = 'Add New Group';";    #EN
$trans["admin_groups_listAddGroup"]               = "\$text = 'Toevoegen nieuwe Groep';";
#$trans["admin_groups_listGroups"]               = "\$text = 'Groups:';";  #EN
$trans["admin_groups_listGroups"]                 = "\$text = 'Groepen:';";
#$trans["admin_materials_listFunction"]          = "\$text = 'Function';";  #EN
$trans["admin_groups_listFunction"]               = "\$text = 'Bewerken';";
#$trans["admin_groups_listDescription"]          = "\$text = 'Description';";  # EN
$trans["admin_groups_listDescription"]            = "\$text = 'Omschrijving';";
#$trans["admin_materials_listCheckoutlimit"]       see above:   Translation text for page materials_list.php
#$trans["admin_materials_delunlimited"]            see above:   Translation text for page materials_edit_form.php


#$trans["admin_materials_listImageFile"]              = "\$text = 'Afbeelding<br>bestand';";
#$trans["admin_materials_listBibcount"]               = "\$text = 'Object<br>Aantal';";
#$trans["admin_groups_listEdit"]                      = "\$text = 'change';";  #EN
$trans["admin_groups_listEdit"]                        = "\$text = 'wijzig';";
#$trans["admin_groups_listDel"]                       = "\$text = 'del';";   #EN
$trans["admin_groups_listDel"]                         = "\$text = 'verwijder';";
#$trans["admin_groups_listNote"]                      = "\$text = '*Note:';";  #EN
$trans["admin_groups_listNote"]                        = "\$text = '*Opmerking:';";
#$trans["admin_groups_listNoteText"]                  = "\$text = 'The delete function is only available on material types that have a bibliography count of zero.<br>If you wish to delete a material type with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";   #EN
$trans["admin_groups_listNoteText"]                    = "\$text = 'De verwijder-funktie is alleen beschikbaar bij uitleenmateriaal zonder bijbehorende objecten.<br>Als er bijbehorende objecten van het te verwijderen materiaaltype zijn, is het noodzakelijk eerst het materiaaltype te wijzigen van de bijbehorende objecten te wijzigen.';";

#****************************************************************************
#*  Translation text for pages mbrclassify_new_form.php, mbrclassify_edit_form.php and mbrclassify_del_confirm.php
#****************************************************************************
$trans["opac_MbrClassifyTitle"]                        = "\$text = 'Info Abonnementen';";
$trans["opac_MbrClassifyCode"]                         = "\$text = 'Code';";
$trans["opac_MbrClassifyDescription"]                  = "\$text = 'Omschrijving';";
$trans["opac_MbrClassifyDefault_flg"]                  = "\$text = 'Voorkeur';";
$trans["opac_MbrClassifyFee"]                          = "\$text = 'Bedrag (per jaar)<br>in €';";
$trans["opac_MbrClassifyLimit"]                        = "\$text = 'Uitleen limiet';";
$trans["opac_MbrClassifyVarious"]                      = "\$text = 'Overig';";
$trans["opac_MbrClassifyFunction"]                     = "\$text = 'Funktie';";
$trans["opac_MbrClassifyEdit"]                         = "\$text = 'bewerken';";
$trans["opac_MbrClassifyDel"]                          = "\$text = 'verwijderen';";
$trans["opac_MbrClassifyNew"]                          = "\$text = 'Nieuwe abonnementsvorm toevoegen';";
$trans["opac_MbrClassifyTitleEdit"]                    = "\$text = 'Abonnementsvormen wijzigen';";
$trans["opac_MbrClassifyTitleNew"]                     = "\$text = 'Nieuwe Abonnementsvorm toevoegen';";
$trans["opac_MbrClassify_delAreyousure"]               = "\$text = 'Wilt u abonnementsvorm echt verwijderen, ';";
$trans["opac_delMbrClassifyDescription"]               = "\$text = 'Abonnementsvorm, ';";
$trans["opac_delMbrClassifydeleted"]                   = "\$text = ', is verwijderd.';";
$trans["opac_MbrClassify_Return"]                      = "\$text = 'Terug naar overzicht';";
$trans["admin_MbrClassifyCodeError"]                   = "\$text = 'Code is noodzakelijk';";
$trans["admin_MbrClassifyDescriptionError"]            = "\$text = 'Omschrijving is noodzakelijk';";

#****************************************************************************
#*  Translation text for page cities_form.php
#****************************************************************************
$trans["adminCitiesTitle"]                      = "\$text = 'Woonplaatsen';";
$trans["adminCityIDTitle"]                      = "\$text = 'Nr';";
$trans["adminCityNameTitle"]                    = "\$text = 'Plaatsnaam';";
$trans["adminCityEditTitle"]                    = "\$text = 'Bewerken';";
$trans["adminCityNew"]                          = "\$text = 'nieuw';";
$trans["adminCityEdit"]                         = "\$text = 'wijzig';";
$trans["adminCityDelete"]                       = "\$text = 'verwijder';";
$trans["adminCity_del_confirmText"]             = "\$text = 'Wilt u de volgende plaatsnaam echt verwijderen:  ';";

#****************************************************************************
#*  Translation text for page make_backup_form.php
#****************************************************************************
$trans["adminBackupTitle"]                      = "\$text = 'Backup maken';";
$trans["adminSaveBackupAs"]                     = "\$text = 'Backup opslaan als';";
$trans["adminSaveBackupDir"]                    = "\$text = 'Map voor Backup-bestanden';";
$trans["adminBackupSaved"]                      = "\$text = 'Een backup is opgeslagen:';";
$trans["adminMySQLProgramDir"]                  = "\$text = 'MySQL-Programma Map';";
$trans["adminBackupFileOpenError"]              = "\$text = 'Kan het bestand niet openen:';";
$trans["adminBackupFileWriteError"]             = "\$text = 'Kan niet schrijven naar bestand:';";
$trans["adminBackupFileName"]                   = "\$text = 'Naam';";
$trans["adminBackupFileSize"]                   = "\$text = 'Grootte';";
$trans["adminBackupFileChanged"]                = "\$text = 'Gewijzigd op';";
$trans["adminBackupFileDelete"]                 = "\$text = 'Verwijderen';";
$trans["adminBackup_del_confirmText"]           = "\$text = 'Wilt u het volgende bestand echt verwijderen';";
$trans["adminBackup_delText"]                   = "\$text = 'Bestand is verwijderd';";
$trans["adminBackup_delReturn"]                 = "\$text = 'Terug naar backup formulier';";
$trans["adminMySQLError"]                       = "\$text = 'Mysql werkt niet goed.<br>
                                                             Voeg de programmamap van mysqldump.exe toe aan de windows-omgevingsvariabele: path<br>
                                                             (mysqldump.exe moet direct vanuit de openbiblio/admin-map te benaderen zijn)';";
$trans["adminBackup_Gotodel"]                   = "\$text = 'Naar overzicht backups';";

?>
