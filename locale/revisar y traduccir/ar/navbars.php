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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'ولوج';";
$trans["logout"]                   = "\$text = 'خروج';";
$trans["help"]                     = "\$text = 'مساعدة';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'الرئيسية';";
$trans["homeLicenseLink"]          = "\$text = 'الرخصة';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Admin Summary';";
$trans["adminStaff"]               = "\$text = 'إدارة الطاقم';";
$trans["adminSettings"]            = "\$text = 'إعدادات المكتبة';";
$trans["adminMaterialTypes"]       = "\$text = 'Material Types';";
$trans["adminCollections"]         = "\$text = 'المجموعات';";
$trans["adminThemes"]              = "\$text = 'التيمات';";
$trans["adminTranslation"]         = "\$text = 'ترجمة';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'ملخص الفهرس';";
$trans["catalogSearch1"]           = "\$text = 'Biblio Search';";
$trans["catalogSearch2"]           = "\$text = 'Bibliography Search';";
$trans["catalogResults"]           = "\$text = 'نتائج البحث';";
$trans["catalogBibInfo"]           = "\$text = 'Biblio Info';";
$trans["catalogBibEdit"]           = "\$text = 'Edit-Basic';";
$trans["catalogBibEditMarc"]       = "\$text = 'Edit-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'New MARC Field';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'New MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Edit MARC Fld';";
$trans["catalogCopyNew"]           = "\$text = 'إضافة نسخة';";
$trans["catalogCopyEdit"]          = "\$text = 'تعديل ';";
$trans["catalogHolds"]             = "\$text = 'Hold Requests';";
$trans["catalogDelete"]            = "\$text = 'Delete';";
$trans["catalogBibNewLike"]        = "\$text = 'New Like';";
$trans["catalogBibNew"]            = "\$text = 'New Bibliography';";
$trans["Upload Marc Data"]         = "\$text = 'Upload Marc Data';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'ملخص التقارير';";
$trans["reportsReportListLink"]    = "\$text = 'قائمة التقارير';";
$trans["reportsLabelsLink"]        = "\$text = 'Print Labels';";
$trans["reportsLettersLink"]        = "\$text = 'Print Letters';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'بحث';";
$trans["catalogSearch2"]           = "\$text = 'بحث بيبليوغرافيا';";
$trans["catalogResults"]           = "\$text = 'نتائج البحث';";
$trans["catalogBibInfo"]           = "\$text = 'البيانات البيبليوغرافية';";
#Added

$trans["memberInfo"]="\$text = 'بيانات العضو/المشترك';";
$trans["memberSearch"]="\$text = 'بحث الأعضاء/المشتركون';";
$trans["editInfo"]="\$text = 'عدّل البيانات';";
$trans["checkoutHistory"]= "\$text = 'تاريخ الإستعارات';";
$trans["account"]="\$text = 'حساب';";
$trans["checkIn"]="\$text = 'إرجاع';";
$trans["memberSearch"]= "\$text = 'بحث الأعضاء/المشتركون';";
$trans["newMember"]= "\$text = 'عضو/مشترك جديد';";
//$trans["account"]        	= "\$text = 'Account';";
?>
