	<?php
/* Перевод выполнен Андреем Заводчиковым (zav34@ya.ru). Число рядом с переводом означает строчку в файле. This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *   Проблемы с переводом: таблица работников библиотеки слишком широкая.
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
$trans["adminSubmit"]              = "\$text = 'Отправить';";
$trans["adminCancel"]              = "\$text = 'Отмена';";
$trans["adminDelete"]              = "\$text = 'Удалить';";
$trans["adminUpdate"]              = "\$text = 'Обновить';";
$trans["adminFootnote"]            = "\$text = 'Поля, отмеченные %symbol%, обязательны к заполнению.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Администрирование';";
$trans["indexDesc"]                = "\$text = 'Используйте левую панель для управления персоналом библиотеки и записями.';"; #Use the functions located in the left hand navigation area to manage your library\'s staff and administrative records

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'Вернуться к списку коллекций';"; #return to collection list
$trans["adminCollections_delStart"]                 = "\$text = ', Коллекция';"; #Collection
 
#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', была удалена.';"; #has been deleted

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = ', Вы уверены, что хотите удалить коллекцию';"; # Are you sure you want to delete collection

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', была изменена.';"; #has been updated

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Редактировать коллекцию:';"; #Edit Collection
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Описание:';"; #Description
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'На сколько дней выдвется:';"; # Days Due Back
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Штраф за просроченный день:';"; # Daily Late Fee
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Важно:';"; # Note
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'Если установить срок, на который выдаются единицы равным 0, то вся коллекция становиться недоступной для заказа.';"; #Setting the days due back to zero makes the entire collection unavailable for checkout

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Добавить новую коллекцию';"; # Add New Collection
$trans["adminCollections_listCollections"]                 = "\$text = 'Коллекции:';"; # Collections
$trans["adminCollections_listFunction"]                 = "\$text = 'Функции';"; # Function
$trans["adminCollections_listDescription"]                 = "\$text = 'Описание';"; # Description
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'На сколько дней выдается';"; #Days<br>Due Back
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'Штраф за просроченный день';"; # Daily<br>Late Fee
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Всего единиц в коллекции';"; # Bibliography<br>Count
$trans["adminCollections_listEdit"]                 = "\$text = 'Ред.';"; # Edit
$trans["adminCollections_listDel"]                 = "\$text = 'Удал.';"; # del
$trans["adminCollections_ListNote"]                 = "\$text = '*Важно:';"; # Note
$trans["adminCollections_ListNoteText"]                 = "\$text = 'Удалить можно только те коллекции, в которых нет единиц хранения, чтобы удалить коллекцию, в которой есть материалы, нужно сперва приписать все материалы к другой коллекции.';"; # The delete function is only available on collections that have a bibliography count of zero.<br>If you wish to delete a collection with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type
$trans["del"]                 = "\$text = 'Удал.';"; # Note
#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', была добавлена.';"; # has been added

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Добавить новую коллекцию:';"; # Add New Collection
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Описание:';"; # Description
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'На сколько дней выдается:';";# Days Due Back
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Штраф за просроченный день:';"; # Daily Late Fee
$trans["adminCollections_new_formNote"]                 = "\$text = '*Важно:';"; # Note
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Если материалы коллекции выдаются на 0 дней, то они вообще не выдаются.';"; # Setting the days due back to zero makes the entire collection unavailable for checkout

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Тип материала, ';"; # Material type
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', была удалена.';"; # has been deleted
$trans["admin_materials_Return"]                 = "\$text = 'перйти к перечню типов материалов';"; # return to material type list

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Вы уверены, что хотите удалить тип материала, ';"; # Are you sure you want to delete material type

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Редактировать тип материала:';"; # Edit Material Type
$trans["admin_materials_delDescription"]                 = "\$text = 'Описание:';"; # Description
$trans["admin_materials_delunlimited"]                 = "\$text = '(если 0, то неограниченно)';"; # enter 0 for unlimited
$trans["admin_materials_delImagefile"]                 = "\$text = 'Изображение:';"; # Image File
$trans["admin_materials_delNote"]                 = "\$text = '*Важно:';"; # Note
$trans["admin_materials_delNoteText"]                 = "\$text = 'Файла изображений должны быть в папке /images.';"; # Image files must be located in the openbiblio/images directory

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', была обновлена138.';"; # has been updated

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Добавить новый тип материала';"; # Add New Material Type
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Типы материалов:';"; # Material Types
$trans["admin_materials_listFunction"]                 = "\$text = 'Функции';"; # Function
$trans["admin_materials_listDescription"]                 = "\$text = 'Описание';"; # Description
$trans["admin_materials_listLimits"]                 = "\$text = 'Ограничения147';"; # Limits
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'Выдача148';"; # Checkout
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Обновление149';"; # Renewal
$trans["admin_materials_listImageFile"]                 = "\$text = 'Изображение';"; # Image<br>File
$trans["admin_materials_listBibcount"]                 = "\$text = 'Всего единиц';"; # Bibliography<br>Count
$trans["admin_materials_listEdit"]                 = "\$text = 'ред.';"; # edit
$trans["admin_materials_listDel"]                 = "\$text = 'удал.';"; # del
$trans["admin_materials_listNote"]                 = "\$text = '*Важно:';"; # Note
$trans["admin_materials_listNoteText"]                 = "\$text = 'Удалить можно только те типы, которым не принадлежит ни один материал, если вы хотите удалить тип, которому принадлежит хоть один материал, вам нужно сперва изменить тип этих материалов.';"; # The delete function is only available on material types that have a bibliography count of zero.  If you wish to delete a material type with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', была добавлена160.';"; # has been added

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Файл изображения должен находиться в папке /images.';"; # Image files must be located in the openbiblio/images directory

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'У вас нет полномочий для администрирования библиотеки.';"; # You are not authorized to use the Admin tab

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = 'Информация была изменена.';"; # Data has been updated
$trans["admin_settingsEditsettings"]                 = "\$text = 'Изменить данные библиотеки:';"; # Edit Library Settings
$trans["admin_settingsLibName"]                 = "\$text = 'Название библиотеки:';"; # Library Name
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Логотип библиотеки:';"; # Library Image URL
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Только логотип в заголовке:';"; # Only Show Image in Header
$trans["admin_settingsLibhours"]                 = "\$text = 'Часы работы:';"; # Library Hours
$trans["admin_settingsLibphone"]                 = "\$text = 'Телефон:';"; # Library Phone
$trans["admin_settingsLibURL"]                 = "\$text = 'Адрес библиотеки (URL):';"; # Library URL
$trans["admin_settingsOPACURL"]                 = "\$text = 'Адрес электронного каталога (URL):';"; # OPAC URL
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Продолжительность сессии:';"; # Session Timeout
$trans["admin_settingsMinutes"]                 = "\$text = 'мин.';"; # minutes
$trans["admin_settingsSearchResults"]                 = "\$text = 'Результаты поиска:';"; # Search Results
$trans["admin_settingsItemsperpage"]                 = "\$text = 'результатов на странице';"; # items per page
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Удалять историю после 192:';"; # Purge Bibliography History After
$trans["admin_settingsmonths"]                 = "\$text = 'мес.';"; # months
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Не выдавать книги, если есть задолженность:';"; #Block Checkouts When Fines Due
$trans["admin_settingsLocale"]                 = "\$text = 'Язык:';"; # Locale
$trans["admin_settingsHTMLChar"]                 = "\$text = 'Кодировка:';"; # HTML Charset
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute197:';"; #
$trans["Max. hold length:"]                 = "\$text = 'Максимальное время пользования';"; 
$trans["days"]                 = "\$text = 'дней';"; 
#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Работник библиотеки,';"; # Staff member
$trans["adminStaff_Return"]                 = "\$text = 'к списку персонала';"; # return to staff list
$trans["adminStaff_Yes"]                 = "\$text = 'Да';"; # Yes
$trans["adminStaff_No"]                 = "\$text = 'Нет';"; # No


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', был удален211.';"; # has been deleted

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Вы уверены, что хотите удалить этого работника, ';"; # Are you sure you want to delete staff member

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', был обновлен221.';"; # has been updated

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Редактировать информацию о работнике:';"; # Edit Staff Member Information
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Фимилия:';"; # Last Name
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'Имя:';"; # First Name
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Логин:';"; # Login Username
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Доступ к:';"; # Authorization
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Читателям';"; # Circ
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Изменению пользователей';"; # Update Member
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Каталогу';"; # Catalog
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Администрированию';"; # Admin
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Отчетам';"; # Reports
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Блокировать:';"; # Suspended

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Добавить нового работника';"; # Add New Staff Member
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Работники библиотеки:';"; # Staff Members
$trans["adminStaff_list_Function"]                 = "\$text = 'Функции';"; # Function
$trans["adminStaff_list_Edit"]                 = "\$text = 'ред. ';"; # edit
$trans["adminStaff_list_Pwd"]                 = "\$text = 'пароль';"; # pwd
$trans["adminStaff_list_Del"]                 = "\$text = 'удал.';"; # del

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', был добавлен.';"; # has been added

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Добавить нового работника:';"; # Add New Staff Member
$trans["adminStaff_new_form_Password"]          = "\$text = 'Пароль:';"; # Password
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Повторите пароль:';"; # Re-enter Password

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'Пароль был изменен.';"; # Password has been reset

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Изменить пароль работника:';"; # Reset Staff Member Password

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'вернуться к списку тем';"; # return to theme list
$trans["adminTheme_Theme"]                 = "\$text = 'Тема, ';"; # Theme

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', была удалена279.';"; # has been deleted
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Вы уверены, что хотите удалить тему, ';"; # Are you sure you want to delete theme
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', была изменена287.';"; # has been updated

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Предпросмотр изменений';"; # Preview Theme Changes

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Изменить тему:';"; # Change Theme In Use
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Выбрать новую тему:';"; # Choose a New Theme
$trans["adminTheme_Addnew"]                 = "\$text = 'Добавить новую тему';"; # Add New Theme
$trans["adminTheme_themes"]                 = "\$text = 'Темы:';"; # Themes
$trans["adminTheme_function"]                 = "\$text = 'Функции';"; # Function
$trans["adminTheme_Themename"]                 = "\$text = 'Название темы';"; # Theme Name
$trans["adminTheme_Usage"]                 = "\$text = 'Использование';"; # Usage
$trans["adminTheme_Edit"]                 = "\$text = 'ред.';"; # edit
$trans["adminTheme_Copy"]                 = "\$text = 'копировать';"; # copy
$trans["adminTheme_Del"]                 = "\$text = 'удал.';"; # del
$trans["adminTheme_Inuse"]                 = "\$text = 'используется';"; # in use
$trans["adminTheme_Note"]                 = "\$text = '*Важно:';"; # Note
$trans["adminTheme_Notetext"]                 = "\$text = 'Нельзя удалить тему, которая используется в данный момент.';"; # The delete function is not available on the theme that is currently in use

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'Тема:';"; # Theme
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Цвет рамки таблицы:';"; # Table Border Color
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Цвет ошибки:';"; # Error Color
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Ширина рамки таблицы:';"; # Table Border Width
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Ширина внутреннего отступа в ячейке:';"; # Table Cell Padding
$trans["adminTheme_Title"]                 = "\$text = 'Название';"; # Title
$trans["adminTheme_Mainbody"]                 = "\$text = 'Основное содержание320';"; # Main Body
$trans["adminTheme_Navigation"]                 = "\$text = 'Панель навигации321';"; # Navigation
$trans["adminTheme_Tabs"]                 = "\$text = 'Вкладки';"; # Tabs
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Цвет фона:';"; # Background Color
$trans["adminTheme_Fontface"]                 = "\$text = 'Шрифт:';"; # Font Face
$trans["adminTheme_Fontsize"]                 = "\$text = 'Размер шрифта:';"; # Font Size
$trans["adminTheme_Bold"]                 = "\$text = 'полужирный';"; # bold
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Цвет шрифта:';"; # Font Color
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Цвет ссылок:';"; # Link Color
$trans["adminTheme_Align"]                 = "\$text = 'Выравнивание:';"; # Align
$trans["adminTheme_Right"]                 = "\$text = 'По левому краю';"; # Right
$trans["adminTheme_Left"]                 = "\$text = 'По правому краю';"; # Left
$trans["adminTheme_Center"]                 = "\$text = 'По центру';"; # Center

$trans["adminTheme_HeaderWording"]                 = "\$text = 'ред.334';"; # Edit


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', была добавлена340.';"; # has been added

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Предпросмотр темы';"; # Theme Preview
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Название библиотеки';"; # Library Title
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Закрыть окно';"; # Close Window
$trans["adminTheme_preview_Home"]                 = "\$text = 'Главная';"; # Home
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Читатели';"; # Circulation
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Каталог';"; # Cataloging
$trans["adminTheme_preview_Admin"]         = "\$text = 'Администрирование';"; # Admin
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Просто ссылка356';"; # Sample Link
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Это проедпросмотр357 ';"; # This is a preview of the
$trans["adminTheme_preview_Thisend"]       = "\$text = 'тема358.';"; # theme
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Образец списка:';"; # Sample List
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Заглавие таблицы';"; # Table Heading
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = '1-й образец столбца';"; # Sample data row 1
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = '2-й образец столбца';"; # Sample data row 2
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = '3-й образец столбца';"; # Sample data row 3
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'образец ссылки';"; # sample link
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'образец ошибки';"; # sample error
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Образец поля';"; # Sample Input
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Образец кнопки';"; # Sample Button
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Создана на движке OpenBiblio';"; # Powered by OpenBiblio
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2012 Dave Stevens';"; #
$trans["adminTheme_preview_underthe"]      = "\$text = 'лицензия';"; # under the
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';"; #

#Chekout Priveleges
$trans["Edit Checkout Privileges"]           = "\$text = 'Редактирование карточки привилегий';"; 
$trans["Material Type:"]           = "\$text = 'Тип материала';"; 
$trans["Member Classification:"]           = "\$text = 'Тип читателя';"; 
$trans["Checkout Limit:"]           = "\$text = 'Лимит (на руках)';"; 
$trans["Renewal Limit:"]           = "\$text = 'Ограничение возобновления';";
#Checkout Priveleges list
$trans["Checkout Privileges"]           = "\$text = 'Лист созданных привилегий';"; 
$trans["Material Type"]           = "\$text = 'Тип материала';"; 
$trans["Member Classification"]           = "\$text = 'Тип читателя';"; 
$trans["Checkout Limit"]           = "\$text = 'Лимит(на руках)';"; 
$trans["Renewal Limit"]           = "\$text = 'Ограничение возобновления';"; 
$trans["edit"]           = "\$text = 'Редактировать';"; 
#****************************************************************************
#*  Translation text for page mbr_classify_list.php
#****************************************************************************
$trans["Add new member classification"]           = "\$text = 'Добавить новый тип читателя';";
$trans["Member Classifications List"]           = "\$text = 'Таблица типов читателей';"; 
$trans["function"]           = "\$text = 'функции';"; 
$trans["Description"]           = "\$text = 'Примечание';"; 
$trans["Max. Fines"]           = "\$text = 'Макс. пений, штраф';"; 
$trans["Members"]           = "\$text = 'Количество читателей';"; 
$trans["*Note:"]           = "\$text = '*На заметку:';"; 
$trans["The delete function is only available on classifications that have a member count of zero.  If you wish to delete a classification with a member count greater than zero you will first need to change those members to another classification."]           = "\$text = 'Функция удаления классификатора будет доступна, если только количество читателей в типе будет равняться нулю. Если вы хотите удалть тип читателя, в котором присутствуют читатели, для этого необходимо перенести их в другой тип или удалить.';"; 
#****************************************************************************
#*  Translation text for page member_fields_list.php
#****************************************************************************
$trans["Custom Member Fields"]           = "\$text = 'Список дополнительный полей читателей';"; 
$trans["Code"]           = "\$text = 'Код';"; 
$trans["Add new custom field"]           = "\$text = 'Добавить новое поле';"; 
#****************************************************************************
#*  Translation text for page member_fields_edit.php
#****************************************************************************
$trans["Member field, %desc%, has been updated."]           = "\$text = 'Дополнительное поле,%desc%, было обновлено.';"; 
$trans["return to member field list"]           = "\$text = 'Вернуться к списку дополнительных полей';"; 
#****************************************************************************
#*  Translation text for page member_fields_new_form.php
#****************************************************************************
$trans["Add custom member field"]           = "\$text = 'Добавить новое дополнительное поле читателя';"; 
$trans["Code:"]           = "\$text = 'Код';"; 
$trans["Description:"]           = "\$text = 'Примечание';"; 
#****************************************************************************
#*  Translation text for page member_fields_del_confirm.php
#****************************************************************************
$trans["Are you sure you want to delete field '%desc%'?"]           = "\$text = 'Вы уверены что хотите удалить поле %desc%?';"; 
#****************************************************************************
#*  Translation text for page member_fields_del.php
#****************************************************************************
$trans["Member field, %desc%, has been deleted."]           = "\$text = 'Дополнительное поле, %desc%, успешно удалено.';"; 
#****************************************************************************
#*  Translation text for page member_fields_new.php
#****************************************************************************
$trans["Member field, %desc%, has been added."]           = "\$text = 'Дополнительное поле, %desc%, успешно добавлено.';"; 
$trans["return to member fields list"]           = "\$text = 'вернуться к списку дополнительных полей';"; 
#****************************************************************************
#*  Translation text for page copy_fields_list.php
#****************************************************************************
$trans["Custom Copy Fields"]           = "\$text = 'Список специальных тегов экземпляров';"; 
#****************************************************************************
#*  Translation text for  all pages like copy_fields_*.php
#****************************************************************************
$trans["Copy field, %desc%, has been deleted."]           = "\$text = 'Копируемое поле, %desc%, успешно удалено.';"; 
$trans["return to copy field list"]           = "\$text = 'вернуться к списку копируемых полей';"; 
$trans["return to copy fields list"]           = "\$text = 'вернуться к списку копируемых полей';"; 
$trans["Copy field, %desc%, has been updated."]           = "\$text = 'Копируемео поле, %desc%, успешное обновлено.';"; 
$trans["Edit Copy Field"]           = "\$text = 'Редактирование копируемого поля';"; 
$trans["Copy field, %desc%, has been added."]           = "\$text = 'Копируемое поле, %desc%, успешно добавлено.';"; 
$trans["Code"]           = "\$text = 'Код';"; 
#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
