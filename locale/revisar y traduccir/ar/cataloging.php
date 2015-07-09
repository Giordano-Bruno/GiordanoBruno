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
$trans["catalogSubmit"]            = "\$text = 'Submit';";
$trans["catalogCancel"]            = "\$text = 'إلغ';";
$trans["catalogRefresh"]           = "\$text = 'Refresh';";
$trans["catalogDelete"]            = "\$text = 'إحذف';";
$trans["catalogFootnote"]          = "\$text = 'الحقول المعلمة ب %symbol% إجبارية.';";
$trans["AnswerYes"]                = "\$text = 'نعم';";
$trans["AnswerNo"]                 = "\$text = 'لا';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'الفهرسة';";
$trans["indexBarcodeHdr"]          = "\$text = 'Search Bibliography by Barcode Number';";
$trans["indexBarcodeField"]        = "\$text = 'Barcode Number';";
$trans["indexSearchHdr"]           = "\$text = 'Search Bibliography by Search Phrase';";
$trans["indexKeyword"]             = "\$text = 'كلمة مفتاحية';";
$trans["indexTitle"]               = "\$text = 'العنوان';";
$trans["indexAuthor"]              = "\$text = 'المؤلف';";
$trans["indexSubject"]             = "\$text = 'الموضوع';";
$trans["indexButton"]              = "\$text = 'إبحث';";

#****************************************************************************
#*  Translation text for page library_fields.php
#****************************************************************************
$trans["LibraryFieldsLabel"]	= "\$text = 'مكتبة';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Bibliography';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Type of Material';";
$trans["biblioFieldsLocation"]  = "\$text = 'Library/Location';";
$trans["biblioFieldsCollection"]   = "\$text = 'مجموعة';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Call Number';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'USMarc Fields';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'أظهر في OPAC';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'إدخال جديد';";
$trans["biblioNewSuccess"]         = "\$text = 'تم إنشاء البيبليوغرافيا الآتية. لإضافة نسخة، اختر \"نسخة جديدة\" من قائمة التصفح على اليسار أو \"أضف نسخة جديدة\" من بيانات النسخة أدناه.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Bibliography successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'أضف نسخة جديدة';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Barcode Number';";
$trans["biblioCopyNewDesc"]        = "\$text = 'الوصف';";
$trans["biblioCopyNewAuto"]        = "\$text = 'ولّد تلقائيا';";
$trans["biblioCopyNewValidBarco"]  = "\$text = 'Validate for printing';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'عدّل النسخة';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'الحالة';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'تم إنشاء النسخة بنجاح.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'تم تحديث النسخة بنجاح.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Could not delete copy.  A copy must be checked in before it can be deleted.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the copy with barcode %barcodeNmbr%?  This will also delete all status change history for this copy.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Copy with barcode %barcode% was successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Add New MARC Field';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC Field Information';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Function';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'وسم';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Tag Description';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Subfield Description';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Field Data';";
$trans["biblioMarcListNoRows"]     = "\$text = 'No MARC fields found.';";
$trans["biblioMarcListEdit"]       = "\$text = 'حرر';";
$trans["biblioMarcListDel"]        = "\$text = 'إمسح';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';";
$trans["usmarcSelectInst"]         = "\$text = 'Select a field type';";
$trans["usmarcSelectNoTags"]       = "\$text = 'No tags found.';";
$trans["usmarcSelectUse"]          = "\$text = 'use';";
$trans["usmarcCloseWindow"]        = "\$text = 'أغلق النافذة';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Add New Marc Field';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subfield';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Field Data';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Select';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc field successfully added.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Edit Marc Field';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc field successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the field with tag %tag% and subfield %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc field successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'This bibliography has %copyCount% copy(ies) and %holdCount% hold request(s).  Please delete these copies and/or hold requests before deleting this bibliography.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'return to bibliography information';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Are you sure you want to delete the bibliography with title %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Bibliography, %title%, has been deleted.';";
$trans["biblioDelReturn"]          = "\$text = 'إرجع إلى بحث البيبليوغرافيا';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Bibliography Hold Requests:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'No bibliography copies are currently on hold.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Function';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Copy';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Placed On Hold';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Member';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Status';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Due Back';";
$trans["biblioHoldListdel"]        = "\$text = 'Del';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'You are not authorized to use the Cataloging tab';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'تحميل تجريبي';";
$trans["MarcUploadTestTrue"]        = "\$text = 'نعم';";
$trans["MarcUploadTestFalse"]       = "\$text = 'لا';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc Input File';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Records Uploaded';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Record';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Data';";
$trans["MarcUploadRawData"]         = "\$text = 'Raw Data:';";
$trans["UploadFile"]                = "\$text = 'إرفع ملف';";
#****************************************************************************
#*  Translation text for page upload_csv(_form).php
#****************************************************************************
$trans["CSVloadTest"]            = "\$text = 'رفع تجريبي';";
$trans["CSVloadTestTrue"]        = "\$text = 'نعم';";
$trans["CSVloadTestFalse"]       = "\$text = 'لا';";
$trans["CSVloadTestFileUpload"]  = "\$text = 'ملف CSV المراد رفعه';";
$trans["CSVloadRecordsUploaded"] = "\$text = 'مدخلة تم رفعها';";
$trans["CSVloadMarcRecord"]      = "\$text = 'مدخلة CSV';";
$trans["CSVloadTag"]             = "\$text = 'وسم';";
$trans["CSVloadSubfield"]        = "\$text = 'فرعي';";
$trans["CSVloadData"]            = "\$text = 'Data';";
$trans["CSVRecordsRead"]         = "\$text = 'تم قراءة  %total% من';";
$trans["CSVHeadings"]            = "\$text = 'Doelen uit de kollomkoppen geïdentificeerd';";
$trans["CSVTargets"]             = "\$text = 'الهدف';";
$trans["CSVComments"]            = "\$text = 'وصف';";
$trans["CSVunknownIgnored"]      = "\$text = 'غير معروف (أُهمل)';";
$trans["CSVMaterialUnknown"]     = "\$text = 'المادة &quot;%mType%&quot; غير معروفة، سيتم إفتراض القيمة المبدئية';";
$trans["CSVCollUnknown"]         = "\$text = 'المادة &quot;%collType%&quot; غير معروفة، سيتم إفتراض القيمة المبدئية';";
$trans["CSVadded"]               = "\$text = 'أضيفت';";
$trans["CSVerrorAtRecord"]       = "\$text = 'خطأ في المدخلة';";
$trans["CSVerrors"]              = "\$text = 'أخطاء';";
$trans["CSVerror"]               = "\$text = 'خطأ';";
$trans["CSVwarning"]             = "\$text = 'تحذير';";
$trans["UploadFile"]             = "\$text = 'إرفع الملف';";
$trans["Defaults"]               = "\$text = 'مبدئي';";
$trans["CSVshowAllFiles"]        = "\$text = 'أظهر كل المدخلات (غير محبذ للملفات الكبيرة)';";
$trans["CSVcopyDescription"]     = "\$text = 'نص لوصف النسخ';";
$trans["CSVinputDescr"]          = "\$text = 'الملف المدخل يجب أن يكون ملف نصوصي بياناته مفصولة بtab (بلا علامات تنصيص &quot;&quot;) وبأسماء خانات الهدف متماشية تماما مع الترويسة .';";
$trans["CSVimportAdvise"]        = "\$text = '<b><u>ينصح بشدة</u></b> إستخدام الرفع التجريبي أولا، وأخذ نسخة إحتياطية من قاعدة البيانات قبل الرفع!';";
$trans["CSVimportMoreMARC"]      = "\$text = 'كل خانات  MARC الأخرى يمكن إستيرادها أيضا بإستخدام وسوم MARC (مثال 020\$a لرقم ردمك/ISBN).';";
$trans["CSVcolumnHeading"]       = "\$text = 'ترويسة الأعمدة';";
$trans["CSVcolumnDescription"]   = "\$text = 'وصف';";
$trans["CSVcolumnComment"]       = "\$text = 'تعليق';";
$trans["CSVbarCoDescription"]    = "\$text = 'إختياري. Can be used for an initial copy entry in case of migration.';";
$trans["CSVCallNumber"]          = "\$text = 'Call Number';";
$trans["CSVCallNrDescription"]   = "\$text = 'إجباري، إلا أن Call2 و Call3 إختياريان.';";
$trans["Mandatory"]              = "\$text = 'إجباري';";
$trans["CSVoptionalDefault"]     = "\$text = 'إختياري. Overschrijft de standaardwaarden uit het formulier.';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Search Results';";



?>
