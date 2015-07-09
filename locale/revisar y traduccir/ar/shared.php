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
$trans["sharedCancel"]             = "\$text = 'إلغ';";
$trans["sharedDelete"]             = "\$text = 'حذف';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'بيانات البيبليوغرافيا';";
$trans["biblioViewMaterialType"]   = "\$text = 'نوع المادة';";
$trans["biblioViewCollection"]     = "\$text = 'مجموعة';";
$trans["biblioViewCallNmbr"]       = "\$text = 'رقم التسجيل';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'بيانات نسخة البيبليوغرافيا';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Barcode #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'الوصف';";
$trans["biblioViewTble2Col3"]      = "\$text = 'الحالة';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Status Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'إرجاع قبل';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Function';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'إمسح';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'حرر';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'معلومات بيبليوغرافية إضافية';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'لا تتوفر معلومات بيبليوغرافية إضافية.';";
$trans["biblioViewNoCopies"]       = "\$text = 'لم يتم إنشاء نسخ.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Show in OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'أضف نسخة جديدة';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Add New Electronic Copy';";
$trans["biblioViewYes"]            = "\$text = 'نعم';";
$trans["biblioViewNo"]             = "\$text = 'لا';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'تعذر إيجاد أية نتائج.';";
$trans["biblioSearchResults"]      = "\$text = 'نتائج البحث';";
$trans["biblioSearchResultPages"]  = "\$text = 'صفحات النتائج';";
$trans["biblioSearchPrev"]         = "\$text = 'السابق';";
$trans["biblioSearchNext"]         = "\$text = 'التالي';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = 'تم العثور على نتيجة واحدة.';
                                      } else {
                                        \$text = 'تم العثور على %items% نتيجة';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' رتبت بحسب المؤلف';";
$trans["biblioSearchtitle"]        = "\$text = ' رتبت بحسب العنوان';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'رتّب بحسب المؤلف';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'رتّب بحسب العنوان';";
$trans["biblioSearchTitle"]        = "\$text = 'العنوان';";
$trans["biblioSearchAuthor"]       = "\$text = 'المؤلف';";
$trans["biblioSearchMaterial"]     = "\$text = 'نوع المادة';";
$trans["biblioSearchCollection"]   = "\$text = 'مجموعة';";
$trans["biblioSearchCall"]         = "\$text = 'رقم التسجيل';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Copy Barcode';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'الحالي';";
$trans["biblioSearchNoCopies"]     = "\$text = 'لا تتوفر أي نسخ.';";
$trans["biblioSearchHold"]         = "\$text = 'hold';";
$trans["biblioSearchOutIn"]        = "\$text = 'إستعارة/إرجاع';";
$trans["biblioSearchDetail"]       = "\$text = 'Show detailed Bibliography information';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Barcode to Check Out or Check In Form';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Barcode to Hold Form';";
$trans["biblioSearchLocation"]     = "\$text='الموضع';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'ولوج طاقم المكتبة';";
$trans["loginFormUsername"]        = "\$text = 'إسم المستخدم';";
$trans["loginFormPassword"]        = "\$text = 'كلمة السرّ';";
$trans["loginFormLogin"]           = "\$text = 'ولوج';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Are you sure you want to delete this hold request?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Hold request was successfully deleted.';";

#****************************************************************************	
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='مساعدة في أوبنبيبليو';";
$trans["helpHeaderCloseWin"]       = "\$text='أغلق النافذة';";
$trans["helpHeaderContents"]       = "\$text='المحتويات';";
$trans["helpHeaderPrint"]          = "\$text='إطبع';";

$trans["catalogResults"]           = "\$text='نتائج البحث';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='تاريخ اليوم:';";
$trans["headerDateFormat"]         = "\$text='ش ي، س';";
$trans["headerLibraryHours"]       = "\$text='ساعات العمل:';";
$trans["headerLibraryPhone"]       = "\$text='هاتف المكتبة:';";
$trans["headerHome"]               = "\$text='الرئيسية';";
$trans["headerCirculation"]        = "\$text='الإعارة';";
$trans["headerCataloging"]         = "\$text='الفهرسة';";
$trans["headerAdmin"]              = "\$text='إدارة';";
$trans["headerReports"]            = "\$text='التقارير';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='صفحة الرئيسية للمكتبة';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='مساعدة';";
$trans["footerPoweredBy"]          = "\$text='Powered by OpenBiblio version';";
$trans["footerDatabaseVersion"]    = "\$text='database version';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='under the';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";
$trans["direction"]       	   = "\$text='rtl';";

w?>
