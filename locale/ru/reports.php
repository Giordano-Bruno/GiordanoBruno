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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'Отмена';"; # Cancel

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Отчеты';"; # Reports
$trans["indexDesc"]                = "\$text = 'Для создания отчетов или распечаток используйте список на панели слева.';"; # Use the report or label list located in the left hand navigation area to produce reports or labels

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'Виды отчетов';"; # Report List
$trans["reportListDesc"]           = "\$text = 'Выберите вид отчета и нажмите на ссылку.';"; # Choose from one of the following links to run a report
$trans["reportListXmlErr"]         = "\$text = 'Error occurred parsing report definition xml.';"; # !!!
$trans["reportListCannotRead"]     = "\$text = 'Проблемы с открытием файла распечатки %fileName%';"; # Cannot read label file: %fileName%

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Виды распечаток';"; # Label List
$trans["labelListDesc"]            = "\$text = 'Выберите тип распечатки и нажмите ссылку для создания файла pdf.';"; # Choose from one of the following links to produce labels in pdf format
$trans["displayLabelsXmlErr"]      = "\$text = 'Error occurred parsing report definition xml.  Error = ';"; # !!!

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Список букв';"; # !!!
$trans["letterListDesc"]           = "\$text = 'Выберите одну и следующих ссылок для перевода букв в формат pdf.';"; #Choose from one of the following links to produce letters in pdf format.';"; # !!!
$trans["displayLettersXmlErr"]      = "\$text = 'Error occurred parsing report definition xml.  Error = ';"; # !!!

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Критерии формирования отчета (не обязательно)';"; # Report Search Criteria (optional)
$trans["reportCriteriaHead2"]      = "\$text = 'Ключ сортировки (не обязательно)';"; # Report Sort Order (optional)
$trans["reportCriteriaHead3"]      = "\$text = 'Тип выходного отчета';"; # !!!
$trans["reportCriteriaCrit1"]      = "\$text = '1-й критерий:';"; # Criteria 1
$trans["reportCriteriaCrit2"]      = "\$text = '2-й критерий:';"; # Criteria 2
$trans["reportCriteriaCrit3"]      = "\$text = '3-й критерий:';"; # Criteria 3
$trans["reportCriteriaCrit4"]      = "\$text = '4-й критерий:';"; # Criteria 4
$trans["reportCriteriaEQ"]         = "\$text = '=';"; # !!!
$trans["reportCriteriaNE"]         = "\$text = 'не =';"; # !!! 
$trans["reportCriteriaLT"]         = "\$text = '&lt;';"; # !!!
$trans["reportCriteriaGT"]         = "\$text = '&gt;';"; # !!!
$trans["reportCriteriaLE"]         = "\$text = '&lt или =';"; # !!! 
$trans["reportCriteriaGE"]         = "\$text = '&gt или =';"; # !!!
$trans["reportCriteriaBT"]         = "\$text = 'между';"; # !!!
$trans["reportCriteriaAnd"]        = "\$text = 'и';"; # !!!
$trans["reportCriteriaRunReport"]  = "\$text = 'Сформировать отчет';"; # Run Report
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Тип 1:';"; # !!!
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Тип 2:';"; # !!!
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Тип 3:';"; # !!!
$trans["reportCriteriaAscending"]  = "\$text = 'возрастание';"; # !!!
$trans["reportCriteriaDescending"] = "\$text = 'убывание';"; # !!!
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Начать печатать на метке:';"; # !!!
$trans["reportCriteriaOutput"]     = "\$text = 'Выходной тип:';"; # !!!
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';"; # !!!
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';"; # !!!

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'критерии формирования отчетов';"; # report selection criteria
$trans["runReportReturnLink2"]     = "\$text = 'виды отчетов';"; # report list
$trans["runReportTotal"]           = "\$text = 'Совокупность рядов:';"; # !!!

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'В полях могут быть только цифры.';"; # Field must be numeric
$trans["displayLabelsXmlErr"]      = "\$text = 'Error occurred parsing report definition xml.  Error = ';"; # !!!
$trans["displayLabelsCannotRead"]  = "\$text = 'Невозможно прочесть метку файла: %fileName%';";# Cannot read label file: %fileName%';"; # !!!

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'Вы не авторизованы для использования инструментов формирования отчетов.';";# You are not authorized to use the Reports tab.';"; # !!!

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Запрос контактной информации удерживающих членов';"; #Hold Requests Containing Member Contact Info';"; # !!!
$trans["reportCheckouts"]          = "\$text = 'Проверка списка Библиографии';";#Bibliography Checkout Listing';"; # !!!
$trans["Over Due Letters"]           = "\$text = 'Письма должникам';"; # Over Due Letters
$trans["reportLabels"]             = "\$text = 'Запрос печати меток (используется по меткам)';"; # !!!
$trans["popularBiblios"]           = "\$text = 'Наиболее популярные материалы';"; # Most Popular Bibliographies
$trans["overdueList"]              = "\$text = 'Список должников';"; # Over Due Member List
$trans["balanceDueList"]           = "\$text = 'Баланс должников';"; # !!!

$trans["Holding info"]						= "Записи о хранении";
$trans["deploy usmarc holding tags"]   		= "Выгрузить usMARC теги хранения из библиографических записей"; # !!!
$trans["show biblios usmarc holding tags"]  = "Показать usMARC теги хранения в библиографических записях"; # !!!

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = 'Пример составной метки';"; # !!!
$trans["labelsSimple"]             = "\$text = 'Пример простой метки';"; # !!!

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = 'Biblio ID';"; # !!!
$trans["biblio.create_dt"]         = "\$text = 'Дата добавления';"; # !!!
$trans["biblio.last_change_dt"]    = "\$text = 'Последнее изменение';"; # !!!
$trans["biblio.material_cd"]       = "\$text = 'Материал Cd';"; # !!!
$trans["biblio.collection_cd"]     = "\$text = 'Коллекция';"; # !!!
$trans["biblio.call_nmbr1"]        = "\$text = 'Вызов 1';"; # !!!
$trans["biblio.call_nmbr2"]        = "\$text = 'Вызов 2';"; # !!!
$trans["biblio.call_nmbr3"]        = "\$text = 'Вызов 3';"; # !!!
$trans["biblio.title_remainder"]   = "\$text = 'Заголовок остатка';"; # !!!
$trans["biblio.responsibility_stmt"] = "\$text = 'Ответственное лицо';";#Stmt of Resp';"; # !!!
$trans["biblio.opac_flg"]          = "\$text = 'Флаг OPAC';"; # !!!

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Barcode';"; # !!!
$trans["biblio.title"]             = "\$text = 'Заголовок';"; # !!!
$trans["biblio.author"]            = "\$text = 'Автор';"; # !!!
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Дата начала статуса';"; # !!!
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Дата возврата';"; # !!!
$trans["member.mbrid"]             = "\$text = 'ID члена';"; # !!!
$trans["member.barcode_nmbr"]      = "\$text = 'Barcode члена';"; # !!!
$trans["member.last_name"]         = "\$text = 'Фамилия';"; # !!!
$trans["member.first_name"]        = "\$text = 'Имя';"; # !!!
$trans["member.address"]          = "\$text = 'Адрес';"; # !!!
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Дата начала удержания';"; # !!!
$trans["member.home_phone"]        = "\$text = 'Домашний телефон';"; # !!!
$trans["member.work_phone"]        = "\$text = 'Рабочий телефон';"; # !!!
$trans["member.email"]             = "\$text = 'Email';"; # !!!
$trans["biblio_status_dm.description"] = "\$text = 'Статус';"; # !!!
$trans["settings.library_name"]    = "\$text = 'Имя библиотеки';"; # !!!
$trans["settings.library_hours"]   = "\$text = 'Часы работы библиотеки';"; # !!!
$trans["settings.library_phone"]   = "\$text = 'Телефон библиотеки';"; # !!!
$trans["days_late"]                = "\$text = 'Осталось дней';"; # !!!
$trans["title"]                    = "\$text = 'Заголовок';"; # !!!
$trans["author"]                   = "\$text = 'Авьло';"; # !!!
$trans["due_back_dt"]              = "\$text = 'Возврат';"; # !!!
$trans["checkoutCount"]            = "\$text = 'Проверка количества';"; # !!!

?>
