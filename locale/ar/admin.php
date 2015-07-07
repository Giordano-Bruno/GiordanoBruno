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
 *     $trans["homeWelcome"]       = "\$text='مرحبا بكم في أوبنبيبليو';";
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
$trans["adminSubmit"]              = "\$text = 'أرسل';";
$trans["adminCancel"]              = "\$text = 'إلغ';";
$trans["adminDelete"]              = "\$text = 'احذف';";
$trans["adminUpdate"]              = "\$text = 'حدّث';";
$trans["adminFootnote"]            = "\$text = ' الحقول التي عليها علامة %symbol% إجبارية.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Admin';";
$trans["indexDesc"]                = "\$text = 'إستخدم الإجراءات الموجودة على قائمة التصفح على اليسار لإدارة سجلات طاقم المكتبة والسجلات الإدارية.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'عُد إلى قائمة المجموعات';";
$trans["adminCollections_delStart"]                 = "\$text = 'مجموعة، ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = '، تم حذفه.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'أمتأكدون من أنكم ترغبون بحذف هذه المجموعة, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = '، تم تحديثه.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'عدّل المجموعة:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'الوصف:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'عدد أيام الإعارة:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'رسوم التأخير اليومية:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*ملاحظة:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'تحديد عدد أيام الإعارة بصفر سيجعل كامل المجموعة غير قابلة للإعارة.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'أضف مجموعة جديدة';";
$trans["adminCollections_listCollections"]                 = "\$text = 'المجموعات:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'المهام والإجراءات';";
$trans["adminCollections_listDescription"]                 = "\$text = 'الوصف';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'أيام<br>الإعارة';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'رسوم<br>التأخير اليومي';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'عدد<br>البيبلوغرافيا';";
$trans["adminCollections_listEdit"]                 = "\$text = 'حرر';";
$trans["adminCollections_listDel"]                 = "\$text = 'إمسح';";
$trans["adminCollections_ListNote"]                 = "\$text = '*ملاحظة:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 'The delete function is only available on collections that have a bibliography count of zero.<br>If you wish to delete a collection with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = '، تمت إضافته.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'أضف مجموعة:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'الوصف:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'أيام الإعارة:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'رسوم التأخير اليومي:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*ملاحظة:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'تحديد عدد أيام الإعارة بصفر سيجعل كامل المجموعة غير قابلة للإعارة.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Material type, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = '، تم مسحها.';";
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
$trans["admin_materials_editEnd"]                 = "\$text = '، تم تحديثه.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Add New Material Type';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Material Types:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Function';";
$trans["admin_materials_listDescription"]                 = "\$text = 'Description';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limits';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'إعارة';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'تجديد';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'Image<br>File';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Bibliography<br>Count';";
$trans["admin_materials_listEdit"]                 = "\$text = 'edit';";
$trans["admin_materials_listDel"]                 = "\$text = 'del';";
$trans["admin_materials_listNote"]                 = "\$text = '*ملاحظة:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'The delete function is only available on material types that have a bibliography count of zero.  If you wish to delete a material type with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', تمت إضافته.';";

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
$trans["admin_settingsUpdated"]                 = "\$text = 'تم تحديث البيانات.';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'عدّل إعدادات المكتبة:';";
$trans["admin_settingsLibName"]                 = "\$text = 'إسم المكتبة:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Library Image URL:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Only Show Image in Header:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'ساعات المكتبة:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'هاتف المكتبة:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Library URL:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Session Timeout:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'دقائق';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'نتائج البحث:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'نتيجة في الصفحة';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Purge Bibliography History After:';";
$trans["admin_settingsmonths"]                 = "\$text = 'شهر';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Block Checkouts When Fines Due:';";
$trans["admin_settingsLocale"]                 = "\$text = 'Locale:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML Charset:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'عضو طاقم،';";
$trans["adminStaff_Return"]                 = "\$text = 'إرجع لقائمة الطاقم';";
$trans["adminStaff_Yes"]                 = "\$text = 'نعم';";
$trans["adminStaff_No"]                 = "\$text = 'لا';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', تم مسحه.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'هل أنت متأكد أنك ترغب في مسح عضو الطاقم، ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = '، تم تحديثه.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'عدّل بيانات عضو طاقم:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'إسم العائلة:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'الإسم الأول:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = ' إسم المستخدم:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'تصاريح:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Circ';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'حدّث العضو';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'فهرس';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Admin';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'التقارير';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Suspended:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'أضف عضوا جديدا للطاقم';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' أعضاء الطاقم:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'المهام والإجراءات';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'عدّل';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'كلمة السر';";
$trans["adminStaff_list_Del"]                 = "\$text = 'إمسح';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = '، تم إضافته.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'أضف عضوا جديدا للطاقم:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'كلمة السرّ:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'أعد إدخال كلمة السرّ:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'تم إعادة تعيين كلمة السر.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'أعد تعيين كلمة سر عضو طاقم:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'عُد إلى قائمة التيمات';";
$trans["adminTheme_Theme"]                 = "\$text = 'التيمة, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = '، تم حذفه.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'هل أنت متأكد من أنك ترغب في حذف التيمة، ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = '، تم تحديثه.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'عاين التغييرات في التيمة';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'غيّر التيمة المستخدمة:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'إختر تيمة جديدة:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'أضف تيمة جديدة';";
$trans["adminTheme_themes"]                 = "\$text = 'التيمات:';";
$trans["adminTheme_function"]                 = "\$text = 'الإجراءات';";
$trans["adminTheme_Themename"]                 = "\$text = 'إسم التيمة';";
$trans["adminTheme_Usage"]                 = "\$text = 'الإستخدام';";
$trans["adminTheme_Edit"]                 = "\$text = 'حرر';";
$trans["adminTheme_Copy"]                 = "\$text = 'إنسخ';";
$trans["adminTheme_Del"]                 = "\$text = 'حذف';";
$trans["adminTheme_Inuse"]                 = "\$text = 'مستخدم';";
$trans["adminTheme_Note"]                 = "\$text = '*ملاحظة:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'إجراء حذف التيمة  أثناء كونها المستخدمة غير ممكن.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'التيمة:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'لون حدود الجدول:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Error Color:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'عرض حدود الجدول:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Table Cell Padding:';";
$trans["adminTheme_Title"]                 = "\$text = 'العنوان';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'المتن الرئيسي';";
$trans["adminTheme_Navigation"]                 = "\$text = 'Navigation';";
$trans["adminTheme_Tabs"]                 = "\$text = 'Tabs';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'لون الخلفية:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Font Face:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'حجم الخط:';";
$trans["adminTheme_Bold"]                 = "\$text = 'عريض';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'لون الخط:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'لون الوصلة:';";
$trans["adminTheme_Align"]                 = "\$text = 'حاذِ:';";
$trans["adminTheme_Right"]                 = "\$text = 'يمين';";
$trans["adminTheme_Left"]                 = "\$text = 'يسار';";
$trans["adminTheme_Center"]                 = "\$text = 'توسيط';";

$trans["adminTheme_HeaderWording"]                 = "\$text = 'حرر';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = '، تم إضافته.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'معاينة التيمة';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'إسم المكتبة';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'أغلق النافذة';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'الرئيسية';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'الإعارة';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'الفهرسة';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'إدارة';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Sample Link';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'This is a preview of the ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'التيمة.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Sample List:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'ترويسة جدول';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Sample data row 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Sample data row 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Sample data row 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'مثال لوصلة';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'sample error';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Sample Input';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'مثال لزر';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
