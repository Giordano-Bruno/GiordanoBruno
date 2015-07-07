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
$trans["direction"]        = "\$text='rtl';";
$trans["opac_Header"]        = "\$text='سجل المحتويات العمومي على الويب (OPAC)';";
$trans["opac_WelcomeMsg"]    = "\$text=
  'مرحبا بك في الفهرس العمومي لمكتبتنا. إبحث في فهرسنا 
   لإستعراض بيانات المراجع للمقتنيات التي لدينا في المكتبة.';";
$trans["opac_SearchTitle"]   = "\$text='إبحث في البيبليوغرافيا:';";
$trans["opac_Keyword"]       = "\$text='كلمة مفتاحية';";
$trans["opac_Title"]         = "\$text='العنوان';";
$trans["opac_Author"]        = "\$text='المؤلف';";
$trans["opac_Location"]        = "\$text='الموضع';";
$trans["opac_Subject"]       = "\$text='الموضوع';";
$trans["opac_Callno"]        = "\$text='رقم التسجيل';";
$trans["opac_Search"]        = "\$text='إبحث';";

?>
