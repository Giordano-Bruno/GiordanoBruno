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
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='مرحبا بكم في أوبنبيبليو';";
$trans["indexIntro"]         = "\$text='إستخدم ألسنة التصفح على رأس كل صفحة للوصول للأقسام الإدارية التالية.';";
$trans["indexTab"]           = "\$text='Tab';";
$trans["indexDesc"]          = "\$text='الوصف';";
$trans["indexCirc"]          = "\$text='الإعارة';";
$trans["indexCircDesc1"]     = "\$text='إستخدم هذا اللسان لإدارة سجلات الأعضاء/المشتركين.';";
$trans["indexCircDesc2"]     = "\$text='إدارة المستخدمين (جديد، بحث، حرر، إمسح)';";
$trans["indexCircDesc3"]     = "\$text='Member bibliography checkout, holds, account, and history';";
$trans["indexCircDesc4"]     = "\$text='Bibliography checkin and shelving cart list';";
//$trans["indexCircDesc5"]     = "\$text='Member late fee payment';";
$trans["indexCat"]           = "\$text='الفهرسة';";
$trans["indexCatDesc1"]      = "\$text='إستخدم هذا اللسان لإدارة سجلات البيبليوغرافيا لديك.';";
$trans["indexCatDesc2"]      = "\$text='إدارة البيبليوغرافيا (جديد، بحث، تعديل، مسح)';";
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';";
$trans["indexAdmin"]         = "\$text='إدارة';";
$trans["indexAdminDesc1"]    = "\$text='إستخدم هذا اللسان لإدارة الطاقم والسجلات الإدارية.';";
$trans["indexAdminDesc2"]    = "\$text='إدارة الطاقم (إضافة، تعديل كلمات مرور، حذف))';";
$trans["indexAdminDesc3"]    = "\$text='الإعدادات العامّة للمكتبة';";
$trans["indexAdminDesc5"]    = "\$text='Library material type list';";
$trans["indexAdminDesc4"]    = "\$text='قائمة المجموعات في المكتبة';";
$trans["indexAdminDesc6"]    = "\$text='محرر تيمة المكتبة';";
$trans["indexReports"]       = "\$text='تقارير';";
$trans["indexReportsDesc1"]  = "\$text='إستخدم هذا اللسان لعمل تقارير عن بيانات مكتبتك.';";
$trans["indexReportsDesc2"]  = "\$text='تقرير.';";
$trans["indexReportsDesc3"]  = "\$text='Labels.';";

?>
