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
$trans["circCancel"]              = "\$text = 'Отмена';"; # Cancel
$trans["circDelete"]              = "\$text = 'Удалить';"; # Delete
$trans["circLogout"]              = "\$text = 'Выйти';"; # Logout
$trans["Logout"]	  	     	   = "\$text = 'Выйти';"; # Logout
$trans["circAdd"]                 = "\$text = 'Добавить';"; # Add
$trans["mbrDupBarcode"]           = "\$text = 'Штрих-код %barcode% сейчас используется.';"; # Barcode number, %barcode%, is currently in use

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Книгооборот';"; # Circulation
$trans["indexCardHdr"]            = "\$text='Искать читателя по номеру читательского билета:';"; # Search Member by Card Number
$trans["indexCard"]               = "\$text='Номер читательского билета:';"; # Card Number
$trans["indexSearch"]             = "\$text='Поиск';"; # Search
$trans["indexNameHdr"]            = "\$text='Искать читателя по фамилии:';"; # Search Member by Last Name
$trans["indexName"]               = "\$text='Фамилия начинается с:';"; # Last name start with

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Почтовый адрес:';"; # Mailing Address
$trans["mbrNewForm"]              = "\$text='Добавить нового';"; # Add New
$trans["mbrEditForm"]             = "\$text='Редактировать';"; # Edit
$trans["mbrFldsHeader"]           = "\$text='Читатель:';"; # Member
$trans["mbrFldsCardNmbr"]         = "\$text='Номер читательского:';"; # Card Number
$trans["mbrFldsLastName"]         = "\$text='Фамилия:';"; # Last Name
$trans["mbrFldsFirstName"]        = "\$text='Имя:';"; # First Name
$trans["mbrFldsAddr1"]            = "\$text='Адрес:';"; # Address Line 1
$trans["mbrFldsAddr2"]            = "\$text='Адрес 2:';"; # Address Line 2
$trans["mbrFldsCity"]             = "\$text='Город:';"; # City
$trans["mbrFldsStateZip"]         = "\$text='Почтовый индекс:';"; # 
$trans["mbrFldsHomePhone"]        = "\$text='Домашний телефон:';"; # Home Phone
$trans["mbrFldsWorkPhone"]        = "\$text='Рабочий телефон:';"; # Work Phone
$trans["mbrFldsEmail"]            = "\$text='E-mail:';"; # Email Address
$trans["mbrFldsClassify"]         = "\$text='Тип читателя:';"; # Classification
$trans["mbrFldsGrade"]            = "\$text='Курс:';"; # 
$trans["mbrFldsTeacher"]          = "\$text='Преподователь:';"; # 
$trans["mbrFldsSubmit"]           = "\$text='Отправить';"; # Submit
$trans["mbrFldsCancel"]           = "\$text='Отмена';"; # Cancel
$trans["mbrsearchResult"]         = "\$text='Страницы с результатами: ';"; # Result Pages
$trans["mbrsearchprev"]           = "\$text='пред.';"; # prev
$trans["mbrsearchnext"]           = "\$text='след.';"; # next
$trans["mbrsearchNoResults"]      = "\$text='Поиск не дал результатов.';"; # No results found
$trans["mbrsearchFoundResults"]   = "\$text=' результаты найдены.';"; # 
$trans["mbrsearchSearchResults"]  = "\$text='Результаты поиска:';"; # Search Results
$trans["mbrsearchCardNumber"]     = "\$text='Номер читательского:';"; # Card Number
$trans["mbrsearchClassification"] = "\$text='Тип читателя:';"; # Classification

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Читатель успешно добавлен.';"; # Member has been successfully added

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Профиль читателя изменен.';"; # Member has been successfully updated

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Информация о читателе:';"; # Member Information
$trans["mbrViewName"]             = "\$text='Имя:';"; # Name
$trans["mbrViewAddr"]             = "\$text='Адрес:';"; # Address
$trans["mbrViewCardNmbr"]         = "\$text='Номер читательского:';"; # Card Number
$trans["mbrViewClassify"]         = "\$text='Тип читателя:';"; # Classification
$trans["mbrViewPhone"]            = "\$text='Телефон:';"; # Phone
$trans["mbrViewPhoneHome"]        = "\$text='Д:';"; # H
$trans["mbrViewPhoneWork"]        = "\$text='Р:';"; # W
$trans["mbrViewEmail"]            = "\$text='E-mail:';"; # Email Address
$trans["mbrViewGrade"]            = "\$text='Школьник:';"; # School Grade
$trans["mbrViewTeacher"]          = "\$text='Учитель:';"; # School Teacher
$trans["mbrViewHead2"]            = "\$text='Статистика получения материалов:';"; # Checkout Stats
$trans["mbrViewStatColHdr1"]      = "\$text='Материал';"; # Material
$trans["mbrViewStatColHdr2"]      = "\$text='Всего';"; # Count
$trans["mbrViewStatColHdr3"]      = "\$text='Ограничения';"; # Limits ???
$trans["mbrViewStatColHdr4"]      = "\$text='Выдача';"; # Checkout
$trans["mbrViewStatColHdr5"]      = "\$text='Продление';"; # Renewal
$trans["mbrViewHead3"]            = "\$text='Выдача материалов:';"; # Bibliography Check Out
$trans["mbrViewBarcode"]          = "\$text='Штрих-код:';"; # Barcode Number
$trans["mbrViewCheckOut"]         = "\$text='Выдача';"; # Check Out
$trans["mbrViewHead4"]            = "\$text='Материалы, находящиеся сейчас на руках:';"; # Bibliographies Currently Checked Out
$trans["mbrViewOutHdr1"]          = "\$text='Выданые материалы';"; # Checked Out
$trans["mbrViewOutHdr2"]          = "\$text='Материал';"; # Material
$trans["mbrViewOutHdr3"]          = "\$text='Штрих-код';"; # Barcode
$trans["mbrViewOutHdr4"]          = "\$text='Наименование';"; # Title
$trans["mbrViewOutHdr5"]          = "\$text='Автор';"; # Author
$trans["mbrViewOutHdr6"]          = "\$text='Вернуть до';"; # Due Back
$trans["mbrViewOutHdr7"]          = "\$text='Просрочка, дн.';"; # Days Late
$trans["mbrViewOutHdr8"]          = "\$text='Продление';"; # Renewal
$trans["mbrViewOutHdr9"]          = "\$text='время/c';"; # 
$trans["mbrViewOutHdr10"]         = "Возвращено";//Check in
$trans["To Shelving Cart"]        = "К фондам";//To Shelving Cart
$trans["mbrViewNoCheckouts"]      = "\$text='В данный момент на руках ничего нет.';"; # No bibliographies are currently checked out
$trans["mbrViewHead5"]            = "\$text='Зарезервировать материал:';"; # Place Hold ???
$trans["mbrViewHead6"]            = "\$text='Зарезервированные материалы:';"; # Bibliographies Currently On Hold ???
$trans["mbrViewPlaceHold"]        = "\$text='Зарезервировать';"; # Place Hold ???
$trans["mbrViewHoldHdr1"]         = "\$text='Функции';"; # Function
$trans["mbrViewHoldHdr2"]         = "\$text='Когда зарервирован';"; # Placed On Hold
$trans["mbrViewHoldHdr3"]         = "\$text='Тип материала';"; # Material
$trans["mbrViewHoldHdr4"]         = "\$text='Штрих-код';"; # Barcode
$trans["mbrViewHoldHdr5"]         = "\$text='Наименование';"; # Title
$trans["mbrViewHoldHdr6"]         = "\$text='Автор';"; # Author
$trans["mbrViewHoldHdr7"]         = "\$text='Статус';"; # Status
$trans["mbrViewHoldHdr8"]         = "\$text='Вернуть до';"; # Due Back
$trans["mbrViewNoHolds"]          = "\$text='Ничего не заказано.';"; # No bibliographies are currently on hold
$trans["mbrViewBalMsg"]           = "\$text='Внимание: Читатель имеет задолженность в размере %bal%.';"; # Note: Member has an outstanding account balance of %bal%
$trans["mbrPrintCheckouts"]	  = "\$text='распечатка истории выдачи';"; # print checkouts
$trans["mbrViewDel"]              = "\$text='удал.';"; # del

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Читатель должен выплатить задолженность прежде чем брать материалы.';"; # Member must pay outstanding account balance before checking out
$trans["checkoutErr1"]            = "\$text='Штрих-код должен состоять из цифр и букв.';"; # Barcode number must be all alphanumeric
$trans["checkoutErr2"]            = "\$text='Нет записей с таким штрих-кодом.';"; # No bibliography was found with that barcode number
$trans["checkoutErr3"]            = "\$text='Материал с штрих-кодом %barcode% уже выдан.';"; # Bibliography with barcode number %barcode% is already checked out
$trans["checkoutErr4"]            = "\$text='Материал с штрих-кодом %barcode% не выдается.';"; # Bibliography with barcode number %barcode% is not available for checkout
$trans["checkoutErr5"]            = "\$text='Материал с штрих-кодом %barcode% заказан другим читателем.';"; # Bibliography with barcode number %barcode% is currently on hold for another member
$trans["checkoutErr6"]            = "\$text='Читатель достиг лиммита выдачи для данного типа материалов.';"; # Member has reached the checkout limit for the specified bibliography\'s material type
$trans["checkoutErr7"]            = "\$text='Читателю больше нельзя продлевать материал с штрих-кодом %barcode%.';"; # Bibliography with barcode number %barcode% has reached the member\'s renewal limit
$trans["checkoutErr8"]            = "\$text='Материал с штрих-кодом %barcode% нельзя продлить, так как он просрочен.';"; # Bibliography with barcode number %barcode% can not be renew as it is already late

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Штрих-код должен состоять из цифр и букв.';"; # Barcode number must be all alphanumeric
$trans["shelvingCartErr2"]        = "\$text='Нет записей с таким штрих-кодом.';"; # No bibliography was found with that barcode number
$trans["shelvingCartTrans"]       = "\$text='Штраф за просрочку (штрих-код: %barcode%)';"; # Late fee (barcode=%barcode%)

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Возврат материала:';"; # Bibliography Check In
$trans["checkinFormBarcode"]      = "\$text='Штрих-код:';"; # Barcode Number
$trans["checkinFormShelveButton"] = "\$text='Принять материал у читателя';"; # Add to Shelving Cart
$trans["checkinFormCheckinLink1"] = "\$text='Отмеченные материалы возвращены на полки';"; # Check in selected items
$trans["checkinFormCheckinLink2"] = "\$text='Все уже расставлено';"; # Check in all items
$trans["checkinFormHdr2"]         = "\$text='Нужно вернуть на полки:';"; # Current Shelving Cart List
$trans["checkinFormColHdr1"]      = "\$text='Дата сканирования';"; # Date Scanned ???
$trans["checkinFormColHdr2"]      = "\$text='Штрих-код';"; # Barcode
$trans["checkinFormColHdr3"]      = "\$text='Наименование';"; # Title
$trans["checkinFormColHdr4"]      = "\$text='Автор';"; # Author
$trans["checkinFormEmptyCart"]    = "\$text='Все книги возвращены на полки.';"; # No bibliographies are currently in shelving cart status

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Ничего не выбрано.';"; # No items have been selected

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Материал заказан!';"; # Bibliography Has Been Placed On Hold ???
$trans["holdMessageMsg1"]         = "\$text='The bibliography with barcode number %barcode% that you are attempting to check in has one or more hold requests placed on it.  <b>Please file this bibliography with your held items instead of placing it on your shelving cart.</b>  The status code for this bibliography has been set to hold.';"; # 
$trans["holdMessageMsg2"]         = "\$text='Перейти к возврату материалов.';"; # Return to bibliography check in

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Штрих-код должен быть цифровым.';"; # Barcode number must be numeric
$trans["placeHoldErr2"]           = "\$text='Такого штрих-кода не существует.';"; # Barcode does not exist
$trans["placeHoldErr3"]           = "\$text='This member already has that item checked out -- not placing hold.';"; # 

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Member, %name%, has %checkoutCount% checkout(s) and %holdCount% hold request(s).  All checked out materials must be checked in and all hold requests deleted before deleting this member.';"; # 
$trans["mbrDelConfirmReturn"]     = "\$text = 'вернуться к информации о читателе';"; # return to member information
$trans["mbrDelConfirmMsg"]        = "\$text = 'Вы уверены, что хотите удалить читателя %name% из базы данных? Это также удалит и историю выдачи кник этому читателю.';"; # Are you sure you want to delete the member, %name%?  This will also delete all checkout history for this member

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Читатель %name% был удален.';"; # Member, %name%, has been deleted
$trans["mbrDelReturn"]            = "\$text='вернуться к поиску читателей';"; # return to Member Search

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='История получения книг:';"; # Member Checkout History
$trans["mbrHistoryNoHist"]        = "\$text='Нет истории.';"; # No history was found
$trans["mbrHistoryHdr1"]          = "\$text='Штрих-код';"; # Barcode
$trans["mbrHistoryHdr2"]          = "\$text='Наименование';"; # Title
$trans["mbrHistoryHdr3"]          = "\$text='Автор';"; # Author
$trans["mbrHistoryHdr4"]          = "\$text='Новый статус';"; # New Status
$trans["mbrHistoryHdr5"]          = "\$text='Дата изменения статуса';"; # Date of Status Change
$trans["mbrHistoryHdr6"]          = "\$text='Возврат до';"; # Due Back Date

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Новая операция:';"; # Add a Transaction
$trans["mbrAccountTransTyp"]      = "\$text='Тип операции:';"; # Transaction Type
$trans["mbrAccountAmount"]        = "\$text='Размер, руб.:';"; # Amount
$trans["mbrAccountDesc"]          = "\$text='Описание:';"; # Description
$trans["mbrAccountHead1"]         = "\$text='Все операции читателя:';"; # Member Account Transactions
$trans["mbrAccountNoTrans"]       = "\$text='Никаких операций не производилось.';"; # No transactions found
$trans["mbrAccountOpenBal"]       = "\$text='Начальный балланс';"; # Opening Balance
$trans["mbrAccountDel"]           = "\$text='удал.';"; # del
$trans["mbrAccountHdr1"]          = "\$text='Функции';"; # Function
$trans["mbrAccountHdr2"]          = "\$text='Дата';"; # Date
$trans["mbrAccountHdr3"]          = "\$text='Тип операции';"; # Trans Type
$trans["mbrAccountHdr4"]          = "\$text='Описание';"; # Description
$trans["mbrAccountHdr5"]          = "\$text='Размер, руб.';"; # Amount
$trans["mbrAccountHdr6"]          = "\$text='Балланс';"; # Balance

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Транзакция успешно завершена.';"; # Transaction successfully completed

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Вы уверены, что хотите удалить транзакцию?';"; # Are you sure you want to delete this transaction?

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Транзакция удалена.';"; # Transaction successfully deleted

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Выдано %mbrName%';"; # Checkouts for %mbrName%
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Текущая дата:';"; # Current Date
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Читатель:';"; # Member
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Номер читательского:';"; # Card Number
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Тип читателя:';"; # Classification
$trans["mbrPrintCloseWindow"]     = "\$text='Закрыть окно';"; # Close Window
$trans["Upload Offline Circulation"]     = "\$text='Загрузить офлайн книгооборот';"; 
$trans["Offline Upload Successful"]     = "\$text='Офлайн книгооборот загружен успешно.';"; 
$trans["Command File"]     = "\$text='Выберите файл:';"; 
$trans["Date"]     = "\$text='Дата:';"; 
$trans["Upload"]     = "\$text='Загрузить';"; 
$trans["Command Sheet"]     = "\$text='Таблица кодов проверки';"; 
?>
