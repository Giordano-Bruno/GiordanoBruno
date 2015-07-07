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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["adminSubmit"]              = "\$text = 'Submit';";
$trans["adminCancel"]              = "\$text = 'Cancel';";
$trans["adminDelete"]              = "\$text = 'Delete';";
$trans["adminUpdate"]              = "\$text = 'Update';";
$trans["adminFootnote"]            = "\$text = 'Fields marked with %symbol% are required.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Admin';";
$trans["indexDesc"]                = "\$text = 'Use the functions located in the left hand navigation area to manage your library\'s staff and administrative records.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'return to collection list';";
$trans["adminCollections_delStart"]                 = "\$text = 'Collection, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', has been deleted.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'Are you sure you want to delete collection, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', has been updated.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Edit Collection:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Description:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'Days Due Back:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Daily Late Fee:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Note:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'Setting the days due back to zero makes the entire collection unavailable for checkout.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Add New Collection';";
$trans["adminCollections_listCollections"]                 = "\$text = 'Collections:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'Function';";
$trans["adminCollections_listDescription"]                 = "\$text = 'Description';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'Days<br>Due Back';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'Daily<br>Late Fee';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Bibliography<br>Count';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Edit';";
$trans["adminCollections_listDel"]                 = "\$text = 'del';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Note:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 'The delete function is only available on collections that have a bibliography count of zero.<br>If you wish to delete a collection with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', has been added.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Add New Collection:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Description:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'Days Due Back:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Daily Late Fee:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*Note:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Setting the days due back to zero makes the entire collection unavailable for checkout.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Material type, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', has been deleted.';";
$trans["admin_materials_Return"]                 = "\$text = 'return to material type list';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Are you sure you want to delete material type, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Edit Material Type:';";
$trans["admin_materials_delDescription"]                 = "\$text = 'Description:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(enter 0 for unlimited)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'Image File:';";
$trans["admin_materials_delNote"]                 = "\$text = '*Note:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'Image files must be located in the openbiblio/images directory.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', has been updated.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Add New Material Type';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Material Types:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Function';";
$trans["admin_materials_listDescription"]                 = "\$text = 'Description';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limits';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'Checkout';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Renewal';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'Image<br>File';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Bibliography<br>Count';";
$trans["admin_materials_listEdit"]                 = "\$text = 'edit';";
$trans["admin_materials_listDel"]                 = "\$text = 'del';";
$trans["admin_materials_listNote"]                 = "\$text = '*Note:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'The delete function is only available on material types that have a bibliography count of zero.  If you wish to delete a material type with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";
$trans["No fields found!"]                 = "\$text = 'No fields found!';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', has been added.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Image files must be located in the openbiblio/images directory.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'You are not authorized to use the Admin tab.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = 'Data has been updated.';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'Edit Library Settings:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Library Name:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Library Image URL:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Only Show Image in Header:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'Library Hours:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'Library Phone:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Library URL:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Session Timeout:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'minutes';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'Search Results:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'items per page';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Purge Bibliography History After:';";
$trans["admin_settingsmonths"]                 = "\$text = 'months';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Block Checkouts When Fines Due:';";
$trans["Max. hold length:"]                 = "\$text = 'Max. hold length:';";
$trans["days"]                              = "\$text = 'days';";
$trans["admin_settingsLocale"]                 = "\$text = 'Locale:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML Charset:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";
$trans["If the month value for purging history is higher than zero, values in statistics reports shift over time.<br>Data from statistics reports should be saved outside OpenBiblio for future reference."]                 = "\$text = 'If the month value for purging history is higher than zero, values in statistics reports shift over time.<br>Data from statistics reports should be saved outside OpenBiblio for future reference.';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Staff member,';";
$trans["adminStaff_Return"]                 = "\$text = 'return to staff list';";
$trans["adminStaff_Yes"]                 = "\$text = 'Yes';";
$trans["adminStaff_No"]                 = "\$text = 'No';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', has been deleted.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Are you sure you want to delete staff member, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', has been updated.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Edit Staff Member Information:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Last Name:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'First Name:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Login Username:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Authorization:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Circ';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Update Member';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Catalog';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Admin';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Reports';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Suspended:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Add New Staff Member';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Staff Members:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'Function';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'edit';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'pwd';";
$trans["adminStaff_list_Del"]                 = "\$text = 'del';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', has been added.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Add New Staff Member:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Password:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Re-enter Password:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'Password has been reset.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Reset Staff Member Password:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'return to theme list';";
$trans["adminTheme_Theme"]                 = "\$text = 'Theme, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', has been deleted.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Are you sure you want to delete theme, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', has been updated.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Preview Theme Changes';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Change Theme In Use:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Choose a New Theme:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'Add New Theme';";
$trans["adminTheme_themes"]                 = "\$text = 'Themes:';";
$trans["adminTheme_function"]                 = "\$text = 'Function';";
$trans["adminTheme_Themename"]                 = "\$text = 'Theme Name';";
$trans["adminTheme_Usage"]                 = "\$text = 'Usage';";
$trans["adminTheme_Edit"]                 = "\$text = 'edit';";
$trans["adminTheme_Copy"]                 = "\$text = 'copy';";
$trans["adminTheme_Del"]                 = "\$text = 'del';";
$trans["adminTheme_Inuse"]                 = "\$text = 'in use';";
$trans["adminTheme_Note"]                 = "\$text = '*Note:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'The delete function is not available on the theme that is currently in use.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'Theme:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Table Border Color:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Error Color:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Table Border Width:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Table Cell Padding:';";
$trans["adminTheme_Title"]                 = "\$text = 'Title';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'Main Body';";
$trans["adminTheme_Navigation"]                 = "\$text = 'Navigation';";
$trans["adminTheme_Tabs"]                 = "\$text = 'Tabs';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Background Color:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Font Face:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'Font Size:';";
$trans["adminTheme_Bold"]                 = "\$text = 'bold';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Font Color:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Link Color:';";
$trans["adminTheme_Align"]                 = "\$text = 'Align:';";
$trans["adminTheme_Right"]                 = "\$text = 'Right';";
$trans["adminTheme_Left"]                 = "\$text = 'Left';";
$trans["adminTheme_Center"]                 = "\$text = 'Center';";

$trans["adminTheme_HeaderWording"]                 = "\$text = 'Edit';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', has been added.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Theme Preview';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Library Title';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Close Window';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'Home';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Circulation';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Cataloging';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Admin';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Sample Link';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'This is a preview of the ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'theme.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Sample List:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Table Heading';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Sample data row 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Sample data row 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Sample data row 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'sample link';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'sample error';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Sample Input';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Sample Button';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#****************************************************************************
#*  Translation text for Checkout Privs
#****************************************************************************
$trans["Privileges updated"]               = "\$text = 'Privileges updated';";
$trans["Edit Checkout Privileges"]         = "\$text = 'Edit Checkout Privileges';";
$trans["Material Type:"]                   = "\$text = 'Material Type:';";
$trans["Member Classification:"]           = "\$text = 'Member Classification:';";
$trans["Checkout Limit:"]                  = "\$text = 'Checkout Limit:';";
$trans["Renewal Limit:"]                   = "\$text = 'Renewal Limit:';";
$trans["Checkout Privileges"]              = "\$text = 'Checkout Privileges';";
$trans["function"]                         = "\$text = 'function';";
$trans["Material Type"]                    = "\$text = 'Material Type';";
$trans["Member Classification"]            = "\$text = 'Member Classification';";
$trans["Checkout Limit"]                   = "\$text = 'Checkout Limit';";
$trans["Renewal Limit"]                    = "\$text = 'Renewal Limit';";
$trans["edit"]                             = "\$text = 'edit';";

#****************************************************************************
#*  Translation text for Copy Fields 
#****************************************************************************

$trans["Copy field, %desc%, has been deleted."] = "\$text = 'Copy field, %desc%, has been deleted.';";
$trans["return to copy field list"]             = "\$text = 'return to copy field list';";
$trans["return to copy fields list"]             = "\$text = 'return to copy field list';";
$trans["Are you sure you want to delete field '%desc%'?"] = "\$text = 'Are you sure you want to delete field \'%desc%\'?';";
$trans["Copy field, %desc%, has been updated."] = "\$text = 'Copy field, %desc%, has been updated.';";
$trans["Edit Copy Field"]                       = "\$text = 'Edit Copy Field';";
$trans["Code:"]                                 = "\$text = 'Code:';";
$trans["Description:"]                          = "\$text = 'Description:';";
$trans["Add new custom field"]                  = "\$text = 'Add new custom field';";
$trans["Custom Copy Fields"]                    = "\$text = 'Custom Copy Fields';";
$trans["function"]                              = "\$text = 'function';";
$trans["Code"]                                  = "\$text = 'Code';";
$trans["Description"]                           = "\$text = 'Description';";
$trans["del"]                                   = "\$text = 'del';";
$trans["Copy field, %desc%, has been added."]   = "\$text = 'Copy field, %desc%, has been added.';";
$trans["Add custom copy field"]                 = "\$text = 'Add custom copy field';";

#****************************************************************************
#*  Translation text for Member Classify 
#****************************************************************************

$trans["Classification type, %desc%, has been deleted."] = "\$text = 'Classification type, %desc%, has been deleted.';";
$trans["return to member classification list"]           = "\$text = 'return to member classification list';";
$trans["Are you sure you want to delete classification '%desc%'?"] = "\$text = 'Are you sure you want to delete classification \'%desc%\'?';";
$trans["Classification type, %desc%, has been updated."] = "\$text = 'Classification type, %desc%, has been updated.';";
$trans["Edit Classification Type"]                       = "\$text = 'Edit Classification Type';";
$trans["Max. Fines:"]                                    = "\$text = 'Max. Fines:';";
$trans["Add new member classification"]                  = "\$text = 'Add new member classification';";
$trans["Member Classifications List"]                    = "\$text = 'Member Classifications List';";
$trans["Max. Fines"]                                     = "\$text = 'Max. Fines';";
$trans["Members"]                                        = "\$text = 'Members';";
$trans["*Note:"]                                         = "\$text = '*Note:';";
$trans["The delete function is only available on classifications that have a member count of zero.  If you wish to delete a classification with a member count greater than zero you will first need to change those members to another classification."]     = "\$text = 'The delete function is only available on classifications that have a member count of zero.  If you wish to delete a classification with a member count greater than zero you will first need to change those members to another classification.';";
$trans["Classification type, %desc%, has been added."]   = "\$text = 'Classification type, %desc%, has been added.';";
$trans["Add new classification type"]                    = "\$text = 'Add new classification type';";

#****************************************************************************
#*  Translation text for Member Fields
#****************************************************************************

$trans["Member field, %desc%, has been deleted."] = "\$text = 'Member field, %desc%, has been deleted.';";
$trans["return to member field list"]             = "\$text = 'return to member field list';";
$trans["return to member fields list"]             = "\$text = 'return to member field list';";
$trans["Member field, %desc%, has been updated."] = "\$text = 'Member field, %desc%, has been updated.';";
$trans["Edit Member Field"]                       = "\$text = 'Edit Member Field';";
$trans["Custom Member Fields"]                    = "\$text = 'Custom Member Fields';";
$trans["Member field, %desc%, has been added."]   = "\$text = 'Member field, %desc%, has been added.';";
$trans["Add custom member field"]                 = "\$text = 'Add custom member field';";

//----------------------------------------------------------------

$trans["Add_New_Host"]			= "\$text='Add New Host';";
$trans["Add new custom field list"]			= "\$text='Add new custom field list';";

$trans["Add new member classificaiton"]			= "\$text='Add new member classificaiton';";
$trans["Add new z39.50 server"]			= "\$text='Add new z39.50 server';";

$trans["Are you sure you want to delete field %desc% ?"]			= "\$text='Are you sure you want to delete field %desc% ?';";
$trans["Character set"]			= "\$text='Character set';";
$trans["Checkout Limit"]			= "\$text='Checkout Limit';";
$trans["Checkout Privileges"]			= "\$text='Checkout Privileges';";
$trans["Clave"]			= "\$text='Clave';";
$trans["Code"]			= "\$text='Code';";
$trans["Code:"]			= "\$text='Code';";
$trans["Copy field, %desc%, has been added."]			= "\$text='Copy field, %desc%, has been added.';";
$trans["Custom Copy Fields"]			= "\$text='Custom Copy Fields';";
$trans["Custom Member Fields"]			= "\$text='Custom Member Fields:';";
$trans["Days must be numeric."]			= "\$text='Days must be numeric.';";
$trans["Description"]			= "\$text='Description';";
$trans["Description:"]			= "\$text='Description:';";
$trans["Edit Checkout Privileges"]			= "\$text='Edit Checkout Privileges';";
$trans["Edit Classification Type"]			= "\$text='Edit Classification Type';";
$trans["Edit Member Field"]			= "\$text='Edit Member Field';";
$trans["Edit cover lookup options (Amazon AWS)"]			= "\$text='Edit cover lookup options (Amazon AWS)';";
$trans["English"]			= "\$text='English';";
$trans["FALSE"]			= "\$text='FALSE';";
$trans["Field"]			= "\$text='Field';";
$trans["Field Successfully Deleted"]			= "\$text='Field Successfully Deleted';";
$trans["Function"]			= "\$text='Function';";
$trans["Import"]			= "\$text='Import';";
$trans["Items per page must be greater than 0."]			= "\$text='Items per page must be greater than 0.';";
$trans["Items per page must be numeric."]			= "\$text='Items per page must be numeric.';";
$trans["MARC Fields"]			= "\$text='MARC Fields';";
$trans["Material Type"]			= "\$text='Material Type';";
$trans["Material Type:"]			= "\$text='Material Type:';";
$trans["Max. Fines"]			= "\$text='Max. Fines';";
$trans["Max. Fines:"]			= "\$text='Max. Fines:';";
$trans["Max. hold length:"]			= "\$text='Max. hold length:';";
$trans["Medienstatus"]			= "\$text='Medien status';";
$trans["Member Classification"]			= "\$text='Member Classification';";
$trans["Member Classification:"]			= "\$text='Member Classification:';";
$trans["Member Classifications List"]			= "\$text='Grupos de usuarios:';";
$trans["Members"]			= "\$text='Usuarios';";
$trans["Months must be numeric."]			= "\$text='Meses debe ser numérico.';";
$trans["New Field Added Successfully"]			= "\$text='Nuevo campo agregado con éxito';";
$trans["Note-1-admin"]			= "\$text='Si el valor del mes de la historia de la purga es mayor que cero, los valores en las estadísticas de informes de cambio en el tiempo.Los datos de los informes de las estadísticas deben ser guardados fuera de Espabiblio para referencia futura.';";
$trans["Renewal Limit"]			= "\$text='Límite de renovación';";
$trans["Required?"]			= "\$text='Requerido?';";
$trans["Select"]			= "\$text='Seleccionar';";
$trans["Session timeout must be greater than 0."]			= "\$text='Tiempo de espera de sesión debe ser mayor que 0.';";
$trans["Session timeout must be numeric."]			= "\$text='Tiempo de espera de sesión debe ser numérico [timeout].';";
$trans["Subfield Code"]			= "\$text='Código de subcampo';";
$trans["TRUE"]			= "\$text='Verdadero';";
$trans["Tag"]			= "\$text='etiqueta [Tag]';";
$trans["Text Area"]			= "\$text='Área de texto';";
$trans["Text Field"]			= "\$text='Campo de texto';";
$trans["Value"]			= "\$text='Valor';";
$trans["admin-Translate"]			= "\$text='Administrador de Traducciones';";
$trans["admin-transAdver"]			= "\$text='Respalde sus archivos de la carpeta locale';";
$trans["admin-transDel"]			= "\$text='Eliminar';";
$trans["admin-transNewEntry"]			= "\$text='Agregar nueva entrada';";
$trans["admin-transPrev"]			= "\$text='Función de prueba observaciones o fallos favor de comunicar a joanlanga@hotmail';";
$trans["admin-transSubmit"]			= "\$text='Enviar';";
$trans["adminAWSNote"]			= "\$text='Puedes crear tu cuenta AWS desde <a href = \';";
$trans["adminCancel"]			= "\$text='Cancelar';";
$trans["adminCollections_ListNote"]			= "\$text='*Nota:';";
$trans["adminCollections_ListNoteText"]			= "\$text='La función de borrado sólo está disponible en colecciones que tengan una cuenta bibliográfica de cero.<br>Si deseas eliminar una colección con una cuenta bibliográfica mayor de cero primero tendrás que cambiar el tipo de material de esas bibliografías a otro tipo de material.';";
$trans["adminCollections_delEnd"]			= "\$text=', ha sido borrado.';";
$trans["adminCollections_delReturn"]			= "\$text='Volver a la lista de colecciones';";
$trans["adminCollections_delStart"]			= "\$text='Colecciones,';";
$trans["adminCollections_del_confirmText"]			= "\$text='¿Estás seguro de que quieres eliminar la colección de?:';";
$trans["adminCollections_editEnd"]			= "\$text=', ha sido actualizada.';";
$trans["adminCollections_edit_formDailyLateFee"]			= "\$text='Multa diaria por retraso:';";
$trans["adminCollections_edit_formDaysdueback"]			= "\$text='Días para la devolución:';";
$trans["adminCollections_edit_formDescription"]			= "\$text='Descripción:';";
$trans["adminCollections_edit_formEditcollection"]			= "\$text='Editar colección:';";
$trans["adminCollections_edit_formNote"]			= "\$text='*Notas:';";
$trans["adminCollections_edit_formNoteText"]			= "\$text='Si pones los días de devolución en 0, ningún libro de esta colección se podrá prestar.';";
$trans["adminCollections_listAddNewCollection"]			= "\$text='Añadir nueva colección';";
$trans["adminCollections_listBibliographycount"]			= "\$text='Número<br>libros';";
$trans["adminCollections_listCollections"]			= "\$text='Colecciones:';";
$trans["adminCollections_listDailylatefee"]			= "\$text='Diariamente<br>Multa por retraso';";
$trans["adminCollections_listDaysdueback"]			= "\$text='Días<br>préstamo';";
$trans["adminCollections_listDel"]			= "\$text='eliminar';";
$trans["adminCollections_listDescription"]			= "\$text='Descripción';";
$trans["adminCollections_listEdit"]			= "\$text='Editar';";
$trans["adminCollections_listFunction"]			= "\$text='Función';";
$trans["adminCollections_newAdded"]			= "\$text=', ha sido añadida.';";
$trans["adminCollections_new_formAddnewcollection"]			= "\$text='Añadir nueva colección:';";
$trans["adminCollections_new_formDailylatefee"]			= "\$text='Multa diaria por retraso:';";
$trans["adminCollections_new_formDaysdueback"]			= "\$text='Día en que debe ser devuelto:';";
$trans["adminCollections_new_formDescription"]			= "\$text='Descripción:';";
$trans["adminCollections_new_formNote"]			= "\$text='*Nota:';";
$trans["adminCollections_new_formNoteText"]			= "\$text=' Si se pone a cero la fecha de devolución la colección entera queda indisponible para préstamo.';";
$trans["adminDelete"]			= "\$text='Eliminar';";
$trans["adminExport"]			= "\$text='Exportar';";
$trans["adminFootnote"]			= "\$text='Los campos marcados con %symbol% son requeridos.';";
$trans["adminFormNote"]			= "\$text='*Nota:';";
$trans["adminImport"]			= "\$text='Importar';";
$trans["adminMbrListNote"]			= "\$text='La función de eliminación sólo está disponible en las clasificaciones que tienen un recuento de los miembros de cero. Si desea eliminar una clasificación con un número de miembros superior a cero por primera vez tendrá que cambiar a los miembros de otra clasificación.';";
$trans["adminStaff_No"]			= "\$text='No';";
$trans["adminStaff_Return"]			= "\$text='volver al listado de bibliotecarios';";
$trans["adminStaff_Staffmember"]			= "\$text='Personal de la Biblioteca,';";
$trans["adminStaff_Yes"]			= "\$text='Sí';";
$trans["adminStaff_delDeleted"]			= "\$text=', ha sido borrado.';";
$trans["adminStaff_del_confirmConfirmText"]			= "\$text='estás seguro de querer eliminar a un miembro del personal,';";
$trans["adminStaff_editUpdated"]			= "\$text=', ha sido actualizado';";
$trans["adminStaff_edit_formAdmin"]			= "\$text='Administración';";
$trans["adminStaff_edit_formAuth"]			= "\$text='Permisos:';";
$trans["adminStaff_edit_formCatalog"]			= "\$text='Catalogar';";
$trans["adminStaff_edit_formCirc"]			= "\$text='Prestamos o Circulación';";
$trans["adminStaff_edit_formFirstname"]			= "\$text='Nombre:';";
$trans["adminStaff_edit_formHeader"]			= "\$text='Editar información del bibliotecario:';";
$trans["adminStaff_edit_formLastname"]			= "\$text='Apellido:';";
$trans["adminStaff_edit_formLogin"]			= "\$text='Usuario:';";
$trans["adminStaff_edit_formReports"]			= "\$text='Reportes';";
$trans["adminStaff_edit_formSuspended"]			= "\$text='Suspendido:';";
$trans["adminStaff_edit_formUpdatemember"]			= "\$text='Actualizar usuario';";
$trans["adminStaff_list_Columnheader"]			= "\$text='Listado de bibliotecarios:';";
$trans["adminStaff_list_Del"]			= "\$text='eliminar';";
$trans["adminStaff_list_Edit"]			= "\$text='editar';";
$trans["adminStaff_list_Function"]			= "\$text='Funciones';";
$trans["adminStaff_list_Pwd"]			= "\$text='contraseña';";
$trans["adminStaff_list_formHeader"]			= "\$text='Añadir nuevo bibliotecario';";
$trans["adminStaff_new_Added"]			= "\$text=', ha sido añadido.';";
$trans["adminStaff_new_form_Header"]			= "\$text='Añadir nuevo miembro al personal:';";
$trans["adminStaff_new_form_Password"]			= "\$text='Contraseña:';";
$trans["adminStaff_new_form_Reenterpassword"]			= "\$text='Introduzca de nuevo la contraseña:';";
$trans["adminStaff_pwd_reset_Passwordreset"]			= "\$text='La contraseña ha sido cambiada correctamente.';";
$trans["adminStaff_pwd_reset_form_Resetheader"]			= "\$text='Cambiar contraseña de bibliotecario:';";
$trans["adminSubmit"]			= "\$text='Enviar';";
$trans["adminTheme_Addnew"]			= "\$text='Añadir nuevo diseño';";
$trans["adminTheme_Align"]			= "\$text='Alineación:';";
$trans["adminTheme_Backgroundcolor"]			= "\$text='Color de fondo:';";
$trans["adminTheme_Bold"]			= "\$text='negrita';";
$trans["adminTheme_Center"]			= "\$text='Centro';";
$trans["adminTheme_Changetheme"]			= "\$text='Cambiar el diseño actual:';";
$trans["adminTheme_Choosetheme"]			= "\$text='Elegir un nuevo diseño:';";
$trans["adminTheme_Copy"]			= "\$text='copiar';";
$trans["adminTheme_Del"]			= "\$text='eliminar';";
$trans["adminTheme_Deleteconfirm"]			= "\$text='¿Estás seguro de que quieres eliminar este tema?,';";
$trans["adminTheme_Deleted"]			= "\$text=', ha sido borrado.';";
$trans["adminTheme_Edit"]			= "\$text='editar';";
$trans["adminTheme_Errorcolor"]			= "\$text='Color para los errores:';";
$trans["adminTheme_Fontcolor"]			= "\$text='Color de fuente:';";
$trans["adminTheme_Fontface"]			= "\$text='Fuente:';";
$trans["adminTheme_Fontsize"]			= "\$text='Tamaño de fuente:';";
$trans["adminTheme_HeaderWording"]			= "\$text='Editar';";
$trans["adminTheme_Inuse"]			= "\$text='en uso';";
$trans["adminTheme_Left"]			= "\$text='Izquierda';";
$trans["adminTheme_Linkcolor"]			= "\$text='Color de los enlaces (links):';";
$trans["adminTheme_Mainbody"]			= "\$text='Cuerpo principal';";
$trans["adminTheme_Navigation"]			= "\$text='Barra Navegación';";
$trans["adminTheme_Note"]			= "\$text='*Nota:';";
$trans["adminTheme_Notetext"]			= "\$text='la función de borrado no está disponible porque el diseño seleccionado está en uso actualmente.';";
$trans["adminTheme_Preview"]			= "\$text='Vista previa los cambios del diseño';";
$trans["adminTheme_Return"]			= "\$text='volver a la lista de temas';";
$trans["adminTheme_Right"]			= "\$text='Derecha';";
$trans["adminTheme_Tablebordercolor"]			= "\$text='Color para el borde de tabla:';";
$trans["adminTheme_Tableborderwidth"]			= "\$text='Ancho del borde de tabla:';";
$trans["adminTheme_Tablecellpadding"]			= "\$text='Ancho de la celda:';";
$trans["adminTheme_Tabs"]			= "\$text='Pestañas';";
$trans["adminTheme_Theme"]			= "\$text='Tema,';";
$trans["adminTheme_Theme2"]			= "\$text='Diseño:';";
$trans["adminTheme_Themename"]			= "\$text='Nombre del Diseño';";
$trans["adminTheme_Title"]			= "\$text='Título';";
$trans["adminTheme_Updated"]			= "\$text=', ha sido actualizado.';";
$trans["adminTheme_Usage"]			= "\$text='Usar';";
$trans["adminTheme_function"]			= "\$text='Función';";
$trans["adminTheme_new_Added"]			= "\$text=', ha sido actualizada.';";
$trans["adminTheme_preview_Admin"]			= "\$text='Administración';";
$trans["adminTheme_preview_Cataloging"]			= "\$text='Catalogación';";
$trans["adminTheme_preview_Circulation"]			= "\$text='Circulación';";
$trans["adminTheme_preview_CloseWindow"]			= "\$text='Cerrar ventana';";
$trans["adminTheme_preview_Copyright"]			= "\$text='Copyright © 2002 Dave Stevens OpenBiblio - (EspaBiblio) Jorge Lara , traducción de la 7.1 y otras adecuaciones José A. Lara joanlaga@hotmail.com (ver sección de créditos y changelog.txt para mas detalles';";
$trans["adminTheme_preview_GNU"]			= "\$text='Licencia Pública General de la GNU';";
$trans["adminTheme_preview_Home"]			= "\$text='Página principal';";
$trans["adminTheme_preview_Librarytitle"]			= "\$text='Nombre de la biblioteca';";
$trans["adminTheme_preview_Poweredby"]			= "\$text='Basado en Openbiblio 7.1,';";
$trans["adminTheme_preview_Samplebutton"]			= "\$text='Botón de muestra';";
$trans["adminTheme_preview_Sampledatarow1"]			= "\$text='Datos de muestra de la fila 1';";
$trans["adminTheme_preview_Sampledatarow2"]			= "\$text='Datos de muestra de la fila 2';";
$trans["adminTheme_preview_Sampledatarow3"]			= "\$text='Datos de muestra de la fila 3';";
$trans["adminTheme_preview_Sampleerror"]			= "\$text='Error de muestra';";
$trans["adminTheme_preview_Sampleinput"]			= "\$text='Entrada de muestra';";
$trans["adminTheme_preview_Samplelink"]			= "\$text='Enlace de muestra';";
$trans["adminTheme_preview_Samplelist"]			= "\$text='Lista de muestra:';";
$trans["adminTheme_preview_Tableheading"]			= "\$text='Encabezado de la tabla';";
$trans["adminTheme_preview_Themepreview"]			= "\$text='Vista previa del Diseño';";
$trans["adminTheme_preview_Thisend"]			= "\$text='Diseño.';";
$trans["adminTheme_preview_Thisstart"]			= "\$text='Esta es una vista previa de';";
$trans["adminTheme_preview_underthe"]			= "\$text='bajo la';";
$trans["adminTheme_themes"]			= "\$text='Diseños:';";
$trans["adminUpdate"]			= "\$text='Actualizar';";
$trans["adminZ3950Note"]			= "\$text='\'%fiction_code%\' opción siempre se utiliza en \'%lookup_bulk%\' página, como predeterminado para elementos nuevos.';";
$trans["admin_materials_Abrev"]			= "\$text='Abrev.';";
$trans["admin_materials_Comment_end"]			= "\$text='Los marcados con * no son modificables';";
$trans["admin_materials_Return"]			= "\$text='volver a lista de materiales';";
$trans["admin_materials_delAreyousure"]			= "\$text='¿Estás seguro de que quieres eliminar este tipo de material?,';";
$trans["admin_materials_delDescription"]			= "\$text='Descripción:';";
$trans["admin_materials_delEditmaterialtype"]			= "\$text='Editar tipo de material:';";
$trans["admin_materials_delImagefile"]			= "\$text='Archivo de imagen:';";
$trans["admin_materials_delMaterialType"]			= "\$text='Tipo de material,';";
$trans["admin_materials_delMaterialdeleted"]			= "\$text=', ha sido borrado.';";
$trans["admin_materials_delNote"]			= "\$text='*Nota:';";
$trans["admin_materials_delNoteText"]			= "\$text='Los archivos de imagen deben estar en el directorio /images.';";
$trans["admin_materials_delunlimited"]			= "\$text='(0 significa ilimitado)';";
$trans["admin_materials_editEnd"]			= "\$text=', ha sido actualizado.';";
$trans["admin_materials_listAddmaterialstate"]			= "\$text='Agregar un Estado de Materiales';";
$trans["admin_materials_listAddmaterialtypes"]			= "\$text='Añadir nuevo tipo de material';";
$trans["admin_materials_listBibcount"]			= "\$text='Número<br>libros';";
$trans["admin_materials_listCheckoutlimit"]			= "\$text='Límite de préstamo';";
$trans["admin_materials_listDel"]			= "\$text='Eliminar';";
$trans["admin_materials_listDescription"]			= "\$text='Descripción';";
$trans["admin_materials_listEdit"]			= "\$text='Editar';";
$trans["admin_materials_listFunction"]			= "\$text='Función';";
$trans["admin_materials_listImageFile"]			= "\$text='Archivo<br>Imagen';";
$trans["admin_materials_listLimits"]			= "\$text='Límites';";
$trans["admin_materials_listMaterialstate"]			= "\$text='Estado de Materiales';";
$trans["admin_materials_listMaterialtypes"]			= "\$text='Tipos de material:';";
$trans["admin_materials_listNewadded"]			= "\$text=', ha sido añadido.';";
$trans["admin_materials_listNote"]			= "\$text='*Nota:';";
$trans["admin_materials_listNoteText"]			= "\$text='La función de borrado sólo está disponible en colecciones que tienen una cuenta bibliográfica de cero <br> si deseas eliminar una colección con una cuenta bibliográfica mayor de cero primero tendrás que cambiar el tipo de material en esas bibliografías a otro tipo de material.';";
$trans["admin_materials_listRenewallimit"]			= "\$text='Renovación';";
$trans["admin_materials_new_formNoteText"]			= "\$text='los archivos de imagen deben localizarse en el directorio /images.';";
$trans["admin_noauth"]			= "\$text='No estás autorizado a utilizar el Funciones de Administración, Consulte con el Encargado del sistema.';";
$trans["admin_settingsBlockCheckouts"]			= "\$text='Bloquear préstamos cuando haya pendiente una multa:';";
$trans["admin_settingsEditsettings"]			= "\$text='Editar las propiedades de la biblioteca:';";
$trans["admin_settingsFontNormal"]			= "\$text='Tipo de fuente:';";
$trans["admin_settingsFontSize"]			= "\$text='Tamaño de la fuente:';";
$trans["admin_settingsHTMLChar"]			= "\$text='Juego de caracteres HTML:';";
$trans["admin_settingsHTMLTagLangAttr"]			= "\$text='Atributos de etiquetas de lenguaje HTML:';";
$trans["admin_settingsHoldMaxDays"]			= "\$text='Máximo de días de antigüedad:';";
$trans["admin_settingsInactiveDays"]			= "\$text='Auto-actualizar usuarios inactivos en:';";
$trans["admin_settingsItemsperpage"]			= "\$text='artículos por página';";
$trans["admin_settingsLibName"]			= "\$text='Nombre de la biblioteca:';";
$trans["admin_settingsLibURL"]			= "\$text='URL de la biblioteca:';";
$trans["admin_settingsLibaders"]			= "\$text='Dirección de la biblioteca:';";
$trans["admin_settingsLibhours"]			= "\$text='Horario de la biblioteca:';";
$trans["admin_settingsLibimageurl"]			= "\$text='URL del logotipo de la biblioteca:';";
$trans["admin_settingsLibphone"]			= "\$text='Teléfono de la biblioteca:';";
$trans["admin_settingsLocale"]			= "\$text='Idioma:';";
$trans["admin_settingsMinutes"]			= "\$text='minutos';";
$trans["admin_settingsOPACURL"]			= "\$text='URL del OPAC:';";
$trans["admin_settingsOnlyshowimginheader"]			= "\$text='Mostrar sólo el logotipo en el encabezado:';";
$trans["admin_settingsPurgebibhistory"]			= "\$text='Limpiar el historial de la bibliografía:';";
$trans["admin_settingsSearchResults"]			= "\$text='Resultados de la búsqueda:';";
$trans["admin_settingsSessionTimeout"]			= "\$text='Duración de la sesión:';";
$trans["admin_settingsUpdated"]			= "\$text='los datos han sido actualizados.';";
$trans["admin_settingsViewlist"]			= "\$text='Mostrar listado general (ralentiza el servidor):';";
$trans["admin_settingsmonths"]			= "\$text='meses';";
$trans["cntrltype"]			= "\$text='Tipo de control';";
$trans["days"]			= "\$text='días';";
$trans["del"]			= "\$text='eliminar';";
$trans["edit"]			= "\$text='Editar';";
$trans["export_library_data_csv"]			= "\$text='Exportar todos los datos de la biblioteca a un archivo CSV';";
$trans["function"]			= "\$text='Función';";
$trans["import_bibliography_csv"]			= "\$text='Importar lista bibliográfica desde un archivo CSV';";
$trans["import_bibliography_marc"]			= "\$text='Importar lista bibliográfica desde un archivo MARC';";
$trans["import_member_csv"]			= "\$text='Importar lista de usuarios desde un archivo CSV';";
$trans["indexDesc"]			= "\$text='Utiliza las funciones de la zona de la izquierda para administrar los bibliotecarios y los datos administrativos.';";
$trans["indexHdr"]			= "\$text='Administración';";
$trans["lang"]			= "\$text='Español';";
$trans["lookup_DefaultCharset"]			= "\$text='por defecto: dejar en blanco';";
$trans["lookup_callNmbrType"]			= "\$text='Su numero de tipo de llamado no es valido!';";
$trans["lookup_hosts"]			= "\$text='Servidores de Búsqueda Z39.50 .';";
$trans["lookup_hostsActive"]			= "\$text='Usar:';";
$trans["lookup_hostsCharset"]			= "\$text='codificacion de caracteres';";
$trans["lookup_hostsConfirmDelete"]			= "\$text='¿Está seguro que desea eliminar este Servidor Z39.50 ?';";
$trans["lookup_hostsContext"]			= "\$text='contexto:';";
$trans["lookup_hostsDb"]			= "\$text='Base de Datos:';";
$trans["lookup_hostsEditHeader"]			= "\$text='Editar propiedades del servidor Z39.50 :';";
$trans["lookup_hostsFunc"]			= "\$text='Funcion';";
$trans["lookup_hostsHost"]			= "\$text='URL:puerto';";
$trans["lookup_hostsListFunction"]			= "\$text='Función:';";
$trans["lookup_hostsListHeader"]			= "\$text='Lista de servidores para búsquedas Z39.50 :';";
$trans["lookup_hostsName"]			= "\$text='Nombre:';";
$trans["lookup_hostsNewHeader"]			= "\$text='Configurar propiedades del nuevo servidor Z39.50 :';";
$trans["lookup_hostsPw"]			= "\$text='Contraseña';";
$trans["lookup_hostsSchema"]			= "\$text='Esquema:';";
$trans["lookup_hostsSeqNo"]			= "\$text='Orden:';";
$trans["lookup_hostsUpdated"]			= "\$text='Configuración de búsqueda ha sido actualizada.';";
$trans["lookup_hostsUpdtBtn"]			= "\$text='Actualizar';";
$trans["lookup_hostsUser"]			= "\$text='Numero de Usuario:';";
$trans["lookup_opts"]			= "\$text='Opciones Z39.50.';";
$trans["lookup_optsAutoCollection"]			= "\$text='Usar auto colecciona:';";
$trans["lookup_optsAutoCutter"]			= "\$text='Generar Cutter-Sanborn si no hay:';";
$trans["lookup_optsAutoDewey"]			= "\$text='Usar Dewey por defecto:';";
$trans["lookup_optsCallNmbrType"]			= "\$text='Tipo de número de llamada:';";
$trans["lookup_optsCutterType"]			= "\$text='Tipo de Cutter-Sanborn para generar:';";
$trans["lookup_optsCutterWord"]			= "\$text='Numero de Palabras Dewey Cutter-Sanborn:';";
$trans["lookup_optsDefaultDewey"]			= "\$text=':';";
$trans["lookup_optsDewFictionCodes"]			= "\$text='lookup_optsDewFictionCodes	:';";
$trans["lookup_optsFictionCode"]			= "\$text='lookup_optsFictionCode	:';";
$trans["lookup_optsFictionName"]			= "\$text='lookup_optsFictionName:';";
$trans["lookup_optsKeepDashes"]			= "\$text='lookup_optsKeepDashes	:';";
$trans["lookup_optsLocFictionCodes"]			= "\$text='lookup_optsLocFictionCodes	';";
$trans["lookup_optsMaxHits"]			= "\$text='lookup_optsMaxHits	:';";
$trans["lookup_optsProtocol"]			= "\$text='lookup_optsProtocol:';";
$trans["lookup_optsSettings"]			= "\$text='lookup_optsSettings';";
$trans["lookup_optsUpdated"]			= "\$text='lookup_optsUpdated	';";
$trans["lookup_optsUpdtBtn"]			= "\$text='lookup_optsUpdtBtn	';";
$trans["lookup_rqdNote"]			= "\$text='lookup_rqdNote	';";
$trans["materialAddCustomMarc"]			= "\$text='materialAddCustomMarc';";
$trans["memberFieldDelConfirm"]			= "\$text='¿member Field Del Confirm \'%desc%\'?';";
$trans["return to copy fields list"]			= "\$text='Return to copy fields list	';";

