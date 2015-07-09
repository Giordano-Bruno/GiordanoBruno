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
$trans["catalogSubmit"]            = "\$text = 'Сохранить';"; # Submit
$trans["catalogCancel"]            = "\$text = 'Отмена';"; # Cancel
$trans["catalogRefresh"]           = "\$text = 'Обновить';"; # Refresh
$trans["catalogDelete"]            = "\$text = 'Удалить';"; # Delete
$trans["catalogFootnote"]          = "\$text = 'Поля, отмеченные %symbol%, обязательны к заполнению.';"; # Fields marked with %symbol% are required
$trans["AnswerYes"]                = "\$text = 'Да';"; # Yes
$trans["AnswerNo"]                 = "\$text = 'Нет';"; # No

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Каталогизация';"; # Cataloging
$trans["indexBarcodeHdr"]          = "\$text = 'Искать библиографическую запись по штрихкоду';"; # Search Bibliography by Barcode Number
$trans["indexBarcodeField"]        = "\$text = 'Штрихкод';"; # Barcode Number
$trans["indexSearchHdr"]           = "\$text = 'Искать библиографическую запись по ключевым словам';"; # Search Bibliography by Search Phrase
$trans["indexTitle"]               = "\$text = 'Наименование';"; # Title
$trans["indexAuthor"]              = "\$text = 'Автор';"; # Author
$trans["indexSubject"]             = "\$text = 'Тема';"; # Subject
$trans["indexButton"]              = "\$text = 'Поиск';"; # Search

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'библиографическую запись';"; # Bibliography
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'тип материала';"; # Type of Material
$trans["biblioFieldsCollection"]   = "\$text = 'коллекция';"; # Collection
$trans["biblioFieldsCallNmbr"]     = "\$text = 'полочный индекс';"; # Call Number
$trans["biblioFieldsUsmarcFields"] = "\$text = 'поля MARC';"; # USMarc Fields
$trans["biblioFieldsOpacFlg"]      = "\$text = 'отображать в электронном каталоге (OPAC)';"; # Show in OPAC

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Добавить';"; # Add New
$trans["biblioNewSuccess"]         = "\$text = 'Библиографическая запись была создана. Для добавления экземпляра выберете пункт НОВЫЙ ЭКЗЕМПЛЯР на левой панели, либо ДОБАВИТЬ ЭКЗЕМПЛЯР внизу.';"; # The following new bibliography has been created.  To add a copy, select \"New Copy\" from the left hand navigation or \"Add New Copy\" from the copy information below

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Библиографическая запись успешно обновлена.';"; # Bibliography successfully updated

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'Добавить копию';"; # Add New Copy
$trans["biblioCopyNewBarcode"]     = "\$text = 'Штрих-код';"; # Barcode Number
$trans["biblioCopyNewDesc"]        = "\$text = 'Описание';"; # Description
$trans["biblioCopyNewAuto"]        = "\$text = 'Autogenerate cataloging';"; # !!!
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Редактировать копию';"; # Edit Copy
$trans["biblioCopyEditFormStatus"] = "\$text = 'Статус';"; # Status

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Экземпляр добавлен.';"; # Copy successfully created

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Экземпляр изменен.';"; # Copy successfully updated

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Нельзя удалить экзепляр. Экземпляр должен быть возвращен в библиотеку.';"; # Could not delete copy.  A copy must be checked in before it can be deleted ???
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Вы уверены, что хотите удалить экземпляр с штрих-кодом %barcodeNmbr%? Это также приведет к удалению истории изменения статусов этого экземпляра.';"; # Are you sure you want to delete the copy with barcode %barcodeNmbr%?  This will also delete all status change history for this copy

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Экземпляр с штрих-кодом %barcode% был удален.';"; # Copy with barcode %barcode% was successfully deleted

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Добавить новое поле MARC';"; # Add New MARC Field
$trans["biblioMarcListHdr"]        = "\$text = 'Информация полей MARC';"; # MARC Field Information
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Функции';"; # Function
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Метка';"; # Tag
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Описание метки';"; # Tag Description
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Инд 1';"; # Ind 1
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Инд 2';"; # Ind 2
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Подполе';"; # Subfld
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Описание подполя';"; # Subfield Description
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Информация';"; # Field Data
$trans["biblioMarcListNoRows"]     = "\$text = 'Нет полей MARC.';"; # No MARC fields found
$trans["biblioMarcListEdit"]       = "\$text = 'ред.';"; # edit
$trans["biblioMarcListDel"]        = "\$text = 'удал.';"; # del

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';"; # !!!
$trans["usmarcSelectInst"]         = "\$text = 'Выберите тип поля';"; # !!!
$trans["usmarcSelectNoTags"]       = "\$text = 'Тэг не найден.';"; # !!!
$trans["usmarcSelectUse"]          = "\$text = 'добавить';"; # use
$trans["usmarcCloseWindow"]        = "\$text = 'Закрыть окно';"; # Close Window

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Добавить новое поле MARC';"; # Add New Marc Field
$trans["biblioMarcNewFormTag"]     = "\$text = 'Метка';"; # Tag
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Подполе';"; # Subfield
$trans["biblioMarcNewFormData"]    = "\$text = 'Информация';"; # Field Data
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Индикатор 1';"; # Indicator 1
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Индикатор 2';"; # Indicator 2
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Выбрать из списка';"; # Select

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Новое поле MARC добавлено.';"; # Marc field successfully added

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Редактировать поля MARC';"; # Edit Marc Field

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Поле MARC успешно изменено.';"; # Marc field successfully updated

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the field with tag %tag% and subfield %subfieldCd%?';"; # 

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Поле MARC удалено.';"; # Marc field successfully deleted

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'This bibliography has %copyCount% copy(ies) and %holdCount% hold request(s).  Please delete these copies and/or hold requests before deleting this bibliography.';"; # 
$trans["biblioDelConfirmReturn"]   = "\$text = 'перейти к информации о материале';"; # return to bibliography information
$trans["biblioDelConfirmMsg"]      = "\$text = 'Вы уверены, что хотите удалить материал под названием %title%?';"; # Are you sure you want to delete the bibliography with title %title%

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Материал (%title%) был удален.';"; # Bibliography, %title%, has been deleted
$trans["biblioDelReturn"]          = "\$text = 'перейти к результам поиска';"; # return to bibliography search

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Заказанные материалы:';"; # Bibliography Hold Requests
$trans["biblioHoldListNoHolds"]    = "\$text = 'Ничего не заказано.';"; # No bibliography copies are currently on hold
$trans["biblioHoldListHdr1"]       = "\$text = 'Функции';"; # Function
$trans["biblioHoldListHdr2"]       = "\$text = 'Экземпляр';"; # Copy
$trans["biblioHoldListHdr3"]       = "\$text = 'Материал заказан';"; # Placed On Hold
$trans["biblioHoldListHdr4"]       = "\$text = 'Читатель';"; # Member
$trans["biblioHoldListHdr5"]       = "\$text = 'Состояние';"; # Status
$trans["biblioHoldListHdr6"]       = "\$text = 'Вернуть до';"; # Due Back
$trans["biblioHoldListdel"]        = "\$text = 'удал.';"; # Del

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'У вас нет полномочий для каталогизации';"; # You are not authorized to use the Cataloging tab

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Пробная загрузка';"; # Test Load
$trans["MarcUploadTestTrue"]        = "\$text = 'Да';"; # True
$trans["MarcUploadTestFalse"]       = "\$text = 'Нет';"; # False
$trans["MarcUploadTestFileUpload"]  = "\$text = 'Файл USMarc';"; # USMarc Input File
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Запись загружена';"; # Records Uploaded
$trans["MarcUploadMarcRecord"]      = "\$text = 'Запись MARC';"; # MARC Record
$trans["MarcUploadTag"]             = "\$text = 'Тэг';"; # !!!
$trans["MarcUploadSubfield"]        = "\$text = 'Подполе';"; # Sub
$trans["MarcUploadData"]            = "\$text = 'Информация';"; # Data
$trans["MarcUploadRawData"]         = "\$text = 'Raw Data:';"; # !!!
$trans["UploadFile"]                = "\$text = 'Загрузить файл';"; # Upload File
$trans["MarcUploadCheckHoldings"]	= "Создавать экземпляры если присутствует информация о хранении";
$trans["MarcUploadHoldingsAutoBarode"]= "Новым экземплярам авто-генерировать штрих-код если отсутствует";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Работает на OpenBiblio';"; # Powered by OpenBiblio
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2012';"; # 
$trans["underthe"]                    = "\$text = 'По лицензии';"; # under the
$trans["GNU"]                 = "\$text = 'GNU General Public License';"; # 

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["catalogResults"]                 = "\$text = 'Результаты поиска';"; # Search Results
$trans["SearchResults"]                  = "Результаты поиска";
$trans["Search Catalog"]				 = "Поиск по каталогу";
$trans["Search"]				 		 = "Поиск";
$trans["More"]				 		     = "еще";
$trans["phraseSearchHelp"]				 = "используйте '%' для указания произвольной подстроки, если таких символов в поисковой фразе нет, она обрамляется % поумолчанию (типа %слово%)";



?>
