insert into %prfx%usmarc_tag_dm values (0,010,'Library of congress control number','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (0,013,'Контрольные сведения о патенте','не определен','не определен','Y'); -- Patent control information
insert into %prfx%usmarc_tag_dm values (0,015,'Номер в национальной библиографии','не определен','не определен','Y'); -- National bibliography number
insert into %prfx%usmarc_tag_dm values (0,016,'Контрольный номер национального библиографического агентства','National bibliographic agency','не определен','Y'); -- National bibliographic agency control number
insert into %prfx%usmarc_tag_dm values (0,017,'Номер регистрации авторского права или обязательного экземпляра','не определен','не определен','Y'); -- Copyright or legal deposit number
insert into %prfx%usmarc_tag_dm values (0,018,'Copyright article-fee code','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (0,020,'Международный стандартный номер книги (ISBN)','не определен','не определен','Y'); -- International standard book number
insert into %prfx%usmarc_tag_dm values (0,022,'Международный стандартный номер сериального издания (ISSN)','уровень международного интереса','не определен','Y'); -- International standard serial number
insert into %prfx%usmarc_tag_dm values (0,024,'Прочие стандартные номера, индексы, шифры, коды','тип номера, индекса, шифра, кода','наличие различий','Y'); -- Other standard identifier
insert into %prfx%usmarc_tag_dm values (0,025,'Overseas acquisition number','не определен','не определен','Y');
-- 026	Фингерпринт
insert into %prfx%usmarc_tag_dm values (0,027,'Стандартный номер технического отчёта (STRN)','не определен','не определен','Y'); -- Standard technical report number
insert into %prfx%usmarc_tag_dm values (0,028,'Издательский номер','тип издательского номера','генерация примечания/добавочного поискового признака','Y'); -- Publisher number
insert into %prfx%usmarc_tag_dm values (0,030,'Coden designation','не определен','не определен','Y');
-- 031	Музыкальный инципит
insert into %prfx%usmarc_tag_dm values (0,032,'Postal registration number','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (0,033,'Date/time and place of an event','Type of date in subfield $a','Type of event','Y');
insert into %prfx%usmarc_tag_dm values (0,034,'Кодированные картографические математические данные','тип масштаба','тип кольца','Y'); -- Coded cartographic mathematical data
insert into %prfx%usmarc_tag_dm values (0,035,'Контрольный номер системы','не определен','не определен','Y'); -- System control number
insert into %prfx%usmarc_tag_dm values (0,036,'Исходный рабочий номер файлов компьютерных данных','не определен','не определен','N'); -- Original study number for computer data files
insert into %prfx%usmarc_tag_dm values (0,037,'Данные для комплектования','не определен','не определен','Y'); -- Source of acquisition
-- 038	Организация, давшая права интеллектуальной собственности на содержимое записи
insert into %prfx%usmarc_tag_dm values (0,040,'Организация-создатель записи','не определен','не определен','N'); -- Cataloging source
insert into %prfx%usmarc_tag_dm values (0,041,'Код языка','обозначение перевода','источник кода','Y'); -- Language code
insert into %prfx%usmarc_tag_dm values (0,042,'Authentication code','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (0,043,'Код географического региона','не определен','не определен','N'); -- Geographic area code
insert into %prfx%usmarc_tag_dm values (0,044,'Код страны публикации/изготовления','не определен','не определен','N'); -- Country of publishing/producing entity code
insert into %prfx%usmarc_tag_dm values (0,045,'Период времени, охватываемый содержанием документа','тип периода времени в подполе $b или $c','не определен','N'); -- Time period of content
insert into %prfx%usmarc_tag_dm values (0,046,'Special coded dates','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (0,047,'Код жанра (формы) музыкального произведения','не определен','не определен','N'); -- Form of musical composition code
insert into %prfx%usmarc_tag_dm values (0,048,'Средства исполнения','не определен','не определен','Y'); -- Number of musical instruments or voices code
insert into %prfx%usmarc_tag_dm values (0,050,'полочный индекс в Библиотеке Конгресса','Existence in LC collection','Source of call number','Y'); -- Library of congress call number
insert into %prfx%usmarc_tag_dm values (0,051,'Library of congress copy, issue, offprint statement','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (0,052,'Код географической классификации','источник кода','не определен','Y'); -- Geographic classification
insert into %prfx%usmarc_tag_dm values (0,055,'Classification numbers assigned in canada','Existence in NLC collection','Type, completeness, source of class/call number','Y');
insert into %prfx%usmarc_tag_dm values (0,060,'National library of medicine call number','Existence in NLM collection','Source of call number','Y');
insert into %prfx%usmarc_tag_dm values (0,061,'National library of medicine copy statement','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (0,066,'Наборы символов','не определен','не определен','N'); -- Character sets present
insert into %prfx%usmarc_tag_dm values (0,070,'National agricultural library call number','Existence in NAL collection','не определен','Y');
insert into %prfx%usmarc_tag_dm values (0,071,'National agricultural library copy statement','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (0,072,'Код предметной/тематической категории','не определен','источник кода','Y'); -- Subject category code
insert into %prfx%usmarc_tag_dm values (0,074,'Gpo item number','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (0,080,'Индекс Универсальной десятичной классификации','не определен','не определен','Y'); -- Universal decimal classification number
insert into %prfx%usmarc_tag_dm values (0,082,'Десятичная классификация Дьюи','Type of edition','Source of classification number','Y'); -- Dewey decimal classification number
insert into %prfx%usmarc_tag_dm values (0,084,'Индексы других классификаций/Индекс ББК','не определен','не определен','Y'); -- Other classification number
insert into %prfx%usmarc_tag_dm values (0,086,'Классификационный номер документа органа государственной власти','источник номера','не определен','Y'); -- Government document classification number
insert into %prfx%usmarc_tag_dm values (0,088,'Номер отчёта','не определен','не определен','Y'); -- Report number
insert into %prfx%usmarc_tag_dm values (1,100,'Имя лица как основной поисковый признак (заголовок, содержащий имя лица)','тип начального элемента ввода имени лица','не определен','N'); -- Main entry--personal name
insert into %prfx%usmarc_tag_dm values (1,110,'Наименование коллектива/постоянной организации как основной поисковый признак (заголовок, содержащий наименование коллектива/постоянной организации)','тип начального элемента ввода наименования коллектива','не определен','N'); -- Main entry--corporate name
insert into %prfx%usmarc_tag_dm values (1,111,'Наименование мероприятия/временного коллектива/организации как основной поисковый признак (заголовок, содержащий наименование мероприятия/временного коллектива/организации)','тип начального элемента ввода наименования мероприятия','не определен','N'); -- Main entry--meeting name
insert into %prfx%usmarc_tag_dm values (1,130,'Унифицированное заглавие как основной поисковый признак (заголовок, содержащий унифицированное заглавие)','количество нерасстановочных символов','не определен','N'); -- Main entry--uniform title
insert into %prfx%usmarc_tag_dm values (2,210,'Сокращённое заглавие','добавочный поисковый признак/точка доступа на заглавие','тип заглавия','Y'); -- Abbreviated title
insert into %prfx%usmarc_tag_dm values (2,222,'Ключевое заглавие сериального издания','Specifies whether variant title and/or added entry is required','количество нерасстановочных символов','Y'); -- Key title
insert into %prfx%usmarc_tag_dm values (2,240,'Условное заглавие','вывод заглавия на печать или экран','количество нерасстановочных символов','N'); -- Uniform title
insert into %prfx%usmarc_tag_dm values (2,242,'Перевод заглавия каталогизирующей организацией','добавочный поисковый признак/точка доступа на заглавие','количество нерасстановочных символов','Y'); -- Translation of title by cataloging agency
insert into %prfx%usmarc_tag_dm values (2,243,'Обобщающее заглавие','вывод заглавия на печать или экран','количество нерасстановочных символов','N'); -- Collective uniform title
insert into %prfx%usmarc_tag_dm values (2,245,'Область заглавия и сведений об ответственности','добавочный поисковый признак/точка доступа на заглавие','количество нерасстановочных символов','N'); -- Title statement
insert into %prfx%usmarc_tag_dm values (2,246,'Вариант заглавия','примечание/добавочный поисковый признак','тип заглавия','Y'); -- Varying form of title
insert into %prfx%usmarc_tag_dm values (2,247,'Предыдущее/прежнее заглавие продолжающегося ресурса','добавочный поисковый признак/точка доступа на заглавие','генерация примечания','Y'); -- Former title or title variations
insert into %prfx%usmarc_tag_dm values (2,250,'Область издания','не определен','не определен','N'); -- Edition statement
insert into %prfx%usmarc_tag_dm values (2,254,'Форма изложения нотного текста','не определен','не определен','N'); -- Musical presentation statement
insert into %prfx%usmarc_tag_dm values (2,255,'Математическая основа картографического произведения','не определен','не определен','Y'); -- Cartographic mathematical data
insert into %prfx%usmarc_tag_dm values (2,256,'Характеристики электронного ресурса','не определен','не определен','N'); -- Computer file characteristics
insert into %prfx%usmarc_tag_dm values (2,257,'Country of producing entity for archival films','не определен','не определен','N');
-- 258	Данные о филателистическом материале
insert into %prfx%usmarc_tag_dm values (2,260,'Область выходных данных','хронологический порядок выходных данных','не определен','Y'); -- Publication, distribution, etc. (imprint)
insert into %prfx%usmarc_tag_dm values (2,261,'Imprint statement for films (pre-aacr 1 revised)  [local]','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (2,262,'Imprint statement for sound recordings (pre-aacr 2)  [local]','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (2,263,'Планируемая дата публикации','не определен','не определен','N'); -- Projected publication date
insert into %prfx%usmarc_tag_dm values (2,270,'Адрес','приоритет адреса','тип адреса','Y'); -- Address
insert into %prfx%usmarc_tag_dm values (3,300,'Область количественной характеристики','не определен','не определен','Y'); -- Physical description
insert into %prfx%usmarc_tag_dm values (3,306,'Продолжительность проигрывания/время звучания','не определен','не определен','N'); -- Playing time
insert into %prfx%usmarc_tag_dm values (3,307,'Часы работы, доступа и т. д.','константа отображения данных поля','не определен','Y'); -- Hours, etc.
insert into %prfx%usmarc_tag_dm values (3,310,'Периодичность в настоящее время','не определен','не определен','N'); -- Current publication frequency
-- 321	Прежняя периодичность
insert into %prfx%usmarc_tag_dm values (3,340,'Физический носитель','не определен','не определен','Y'); -- Physical medium
insert into %prfx%usmarc_tag_dm values (3,342,'Геопространственные справочные данные','геопространственное измерение','геопространственный метод','Y'); -- Geospatial reference data
insert into %prfx%usmarc_tag_dm values (3,343,'Данные о плоских координатах','не определен','не определен','Y'); -- Planar coordinate data
insert into %prfx%usmarc_tag_dm values (3,351,'Внутренняя организация материала','не определен','не определен','Y'); -- Organization and arrangement of materials
insert into %prfx%usmarc_tag_dm values (3,352,'Digital graphic representation','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (3,355,'Управление защитой информации от несанкционированного доступа','Controlled element','не определен','Y'); -- Security classification control
-- 357	Авторский контроль за распространением
insert into %prfx%usmarc_tag_dm values (3,362,'Даты публикации и/или обозначение и номер тома','формат даты','не определен','Y'); -- Dates of publication and/or sequential designation
-- 365	Розничная цена
-- 366	Сведения для покупки у издателя
insert into %prfx%usmarc_tag_dm values (4,400,'Series statement/added entry--personal name   [us-local]','Type of personal name entry element','Pronoun represents main entry','Y');
insert into %prfx%usmarc_tag_dm values (4,410,'Series statement/added entry--corporate name  [us-local]','тип начального элемента ввода наименования коллектива','Pronoun represents main entry','Y');
insert into %prfx%usmarc_tag_dm values (4,411,'Series statement/added entry--meeting name  [us-local]','Type of meeting name entry element','Pronoun represents main entry','Y');
insert into %prfx%usmarc_tag_dm values (4,440,'Область серии/добавочный поисковый признак на заглавие серии','не определен','количество нерасстановочных символов','Y'); -- Series statement/added entry--title
insert into %prfx%usmarc_tag_dm values (4,490,'Область серии','наличие добавочного поискового признака','не определен','Y'); -- Series statement
insert into %prfx%usmarc_tag_dm values (5,500,'Примечание общего характера','не определен','не определен','Y'); -- General note
insert into %prfx%usmarc_tag_dm values (5,501,'Примечание о наличии в одной физической единице нескольких библиографических объектов/Владельческий или издательский конволют','не определен','не определен','Y'); -- With note
insert into %prfx%usmarc_tag_dm values (5,502,'Примечание к диссертации','не определен','не определен','Y'); -- Dissertation note
insert into %prfx%usmarc_tag_dm values (5,504,'Примечание о наличии библиографических перечней и ссылок','не определен','не определен','Y'); -- Bibliography, etc. note
insert into %prfx%usmarc_tag_dm values (5,505,'Форматированное примечание о содержании','константа отображения данных','степень идентификации данных','Y'); -- Formatted contents note
insert into %prfx%usmarc_tag_dm values (5,506,'Ограничения на доступ к материалу','не определен','не определен','Y'); -- Restrictions on access note
insert into %prfx%usmarc_tag_dm values (5,507,'Scale note for graphic material','не определен','не определен','N');
insert into %prfx%usmarc_tag_dm values (5,508,'Creation/production credits note','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (5,510,'Примечание о цитировании/ссылках','охват/местонахождение в источнике','не определен','Y'); -- Citation/references note
insert into %prfx%usmarc_tag_dm values (5,511,'Participant or performer note','константа отображения данных поля','не определен','Y');
insert into %prfx%usmarc_tag_dm values (5,513,'Вид отчёта и отчётный период','не определен','не определен','Y'); -- Type of report and period covered note
insert into %prfx%usmarc_tag_dm values (5,514,'Примечание о качестве данных','не определен','не определен','N'); -- Data quality note
insert into %prfx%usmarc_tag_dm values (5,515,'Примечание об особенностях нумерации','не определен','не определен','Y'); -- Numbering peculiarities note
insert into %prfx%usmarc_tag_dm values (5,516,'Примечание о типе компьютерного файла или данных','константа отображения данных поля','не определен','Y'); -- Type of computer file or data note
insert into %prfx%usmarc_tag_dm values (5,518,'Date/time and place of an event note','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (5,520,'Резюме, аннотация, реферат и т. д.','константа отображения данных','не определен','Y'); -- Summary, etc.
insert into %prfx%usmarc_tag_dm values (5,521,'Читательское назначение','константа отображения данных поля','не определен','Y'); -- Target audience note
insert into %prfx%usmarc_tag_dm values (5,522,'Примечание о географическом регионе','константа отображения данных поля','не определен','Y'); -- Geographic coverage note
insert into %prfx%usmarc_tag_dm values (5,524,'Preferred citation of described materials note','константа отображения данных поля','не определен','Y');
insert into %prfx%usmarc_tag_dm values (5,525,'Примечание о приложениях','не определен','не определен','Y'); -- Supplement note
insert into %prfx%usmarc_tag_dm values (5,526,'Study program information note','константа отображения данных поля','не определен','Y');
insert into %prfx%usmarc_tag_dm values (5,530,'Примечание о наличии документа в другой физической форме','не определен','не определен','Y'); -- Additional physical form available note
insert into %prfx%usmarc_tag_dm values (5,533,'Примечание о копиях','не определен','не определен','Y'); -- Reproduction note
insert into %prfx%usmarc_tag_dm values (5,534,'Примечание об оригинале','не определен','не определен','Y'); -- Original version note
insert into %prfx%usmarc_tag_dm values (5,535,'Примечание о местонахождении оригинала/дубликатов','дополнительные сведения о держателе','не определен','Y'); -- Location of originals/duplicates note
insert into %prfx%usmarc_tag_dm values (5,536,'Примечание о проекте, контракте и т. д., по которому финансировалась подготовка материала','не определен','не определен','Y'); -- Funding information note
insert into %prfx%usmarc_tag_dm values (5,538,'Примечание о системных характеристиках и требованиях для электронного ресурса','не определен','не определен','Y'); -- System details note
insert into %prfx%usmarc_tag_dm values (5,540,'Примечание о правах на использование и воспроизведение','не определен','не определен','Y'); -- Terms governing use and reproduction note
insert into %prfx%usmarc_tag_dm values (5,541,'Непосредственный источник получения, приобретения','не определен','не определен','Y'); -- Immediate source of acquisition note
insert into %prfx%usmarc_tag_dm values (5,544,'Примечание о местонахождении других архивных материалов','связь','не определен','Y'); -- Location of other archival materials note
insert into %prfx%usmarc_tag_dm values (5,545,'Биографическая или историческая справка','тип данных','не определен','Y'); -- Biographical or historical data
insert into %prfx%usmarc_tag_dm values (5,546,'Примечание о языке','не определен','не определен','Y'); -- Language note
insert into %prfx%usmarc_tag_dm values (5,547,'Справка на предыдущее/прежнее заглавие продолжающегося ресурса','не определен','не определен','Y'); -- Former title complexity note
insert into %prfx%usmarc_tag_dm values (5,550,'Справка на издающий коллектив','не определен','не определен','Y'); -- Issuing body note
insert into %prfx%usmarc_tag_dm values (5,552,'Entity and attribute information note','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (5,555,'Примечание о кумулятивном указателе/вспомогательных указателях','константа отображения данных поля','не определен','Y'); -- Cumulative index/finding aids note
insert into %prfx%usmarc_tag_dm values (5,556,'Примечание о сопроводительной документации','константа отображения данных поля','не определен','Y'); -- Information about documentation note
insert into %prfx%usmarc_tag_dm values (5,561,'История бытования, владельцы','не определен','не определен','Y'); -- Ownership and custodial history
insert into %prfx%usmarc_tag_dm values (5,562,'Идентифицирующие признаки копий или версий архивных и рукописных материалов','не определен','не определен','Y'); -- Copy and version identification note
-- 563	Примечание о переплёте
insert into %prfx%usmarc_tag_dm values (5,565,'Характеристики картотеки/файла учёта','константа отображения данных поля','не определен','Y'); -- Case file characteristics note
insert into %prfx%usmarc_tag_dm values (5,567,'Примечание о применённом методе','константа отображения данных поля','не определен','Y'); -- Methodology note
insert into %prfx%usmarc_tag_dm values (5,580,'Справка о связи описываемой единицы с другими материалами','не определен','не определен','Y'); -- Linking entry complexity note
insert into %prfx%usmarc_tag_dm values (5,581,'Публикации об описываемом материале','константа отображения данных поля','не определен','Y'); -- Publications about described materials note
insert into %prfx%usmarc_tag_dm values (5,583,'Операции с экземпляром','не определен','не определен','Y'); -- Action note
insert into %prfx%usmarc_tag_dm values (5,584,'Обращаемость к материалу, темпы накопления','не определен','не определен','Y'); -- Accumulation and frequency of use note
insert into %prfx%usmarc_tag_dm values (5,585,'Примечание об экспонировании','не определен','не определен','Y'); -- Exhibitions note
insert into %prfx%usmarc_tag_dm values (5,586,'Примечание о наградах','константа отображения данных поля','не определен','Y'); -- Awards note
insert into %prfx%usmarc_tag_dm values (6,600,'Имя лица как добавочный предметный поисковый признак (персоналия)','тип начального элемента ввода имени лица','тезаурус','Y'); -- Subject added entry--personal name
insert into %prfx%usmarc_tag_dm values (6,610,'Наименование коллектива/постоянной организации как добавочный предметный поисковый признак','тип начального элемента ввода наименования коллектива','тезаурус','Y'); -- Subject added entry--corporate name
insert into %prfx%usmarc_tag_dm values (6,611,'Наименование мероприятия/временного коллектива/организации как добавочный предметный поисковый признак','тип начального элемента ввода наименования мероприятия','тезаурус','Y'); -- Subject added entry--meeting name
insert into %prfx%usmarc_tag_dm values (6,630,'Унифицированное, условное, обобщающее заглавие как добавочный предметный поисковый признак','количество нерасстановочных символов','тезаурус','Y'); -- Subject added entry--uniform title
-- 648	Хронологическое понятие как добавочный предметный поисковый признак
insert into %prfx%usmarc_tag_dm values (6,650,'Тематическое понятие как добавочный предметный поисковый признак','роль предмета в содержании','тезаурус','Y'); -- Subject added entry--topical term
insert into %prfx%usmarc_tag_dm values (6,651,'Географическое название как добавочный предметный поисковый признак','не определен','тезаурус','Y'); -- Subject added entry--geographic name
insert into %prfx%usmarc_tag_dm values (6,653,'Неконтролируемые ключевые слова','роль понятия в содержании','не определен','Y'); -- Index term--uncontrolled
insert into %prfx%usmarc_tag_dm values (6,654,'Subject added entry--faceted topical terms','Level of subject','не определен','Y');
insert into %prfx%usmarc_tag_dm values (6,655,'Index term--genre/form','Type of heading','Source of term','Y');
insert into %prfx%usmarc_tag_dm values (6,656,'Index term--occupation','не определен','Source of term','Y');
insert into %prfx%usmarc_tag_dm values (6,657,'Index term--function','не определен','Source of term','Y');
insert into %prfx%usmarc_tag_dm values (6,658,'Index term--curriculum objective','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (7,700,'Имя лица как добавочный поисковый признак','тип начального элемента ввода имени лица','тип добавочного поискового признака','Y'); -- Added entry--personal name
insert into %prfx%usmarc_tag_dm values (7,710,'Наименование коллектива/постоянной организации как добавочный поисковый признак','тип начального элемента ввода наименования коллектива','тип добавочного поискового признака','Y'); -- Added entry--corporate name
insert into %prfx%usmarc_tag_dm values (7,711,'Наименование мероприятия/временного коллектива/организации как добавочный поисковый признак','тип начального элемента ввода наименования мероприятия','тип добавочного поискового признака','Y'); -- Added entry--meeting name
insert into %prfx%usmarc_tag_dm values (7,720,'Неконтролируемое имя/наименование как добавочный поисковый признак','Type of name','не определен','Y'); -- Added entry--uncontrolled name
insert into %prfx%usmarc_tag_dm values (7,730,'Унифицированное, условное, обобщающее заглавие как добавочный поисковый признак','количество нерасстановочных символов','тип добавочного поискового признака','Y'); -- Added entry--uniform title
insert into %prfx%usmarc_tag_dm values (7,740,'Неконтролируемое связанное/аналитическое заглавие как добавочный поисковый признак','количество нерасстановочных символов','тип добавочного поискового признака','Y'); -- Added entry--uncontrolled related/analytical title
insert into %prfx%usmarc_tag_dm values (7,752,'Added entry--hierarchical place name','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (7,753,'Системные характеристики как добавочные поисковые признаки','не определен','не определен','Y'); -- System details access to computer files
insert into %prfx%usmarc_tag_dm values (7,754,'Added entry--taxonomic identification','не определен','не определен','Y');
insert into %prfx%usmarc_tag_dm values (7,760,'Поисковый признак на основную серию','примечание','константа отображения данных поля','Y'); -- Main series entry
insert into %prfx%usmarc_tag_dm values (7,762,'Поисковый признак на подсерию','примечание','константа отображения данных поля','Y'); -- Subseries entry
insert into %prfx%usmarc_tag_dm values (7,765,'Поисковый признак на публикацию на языке оригинала','примечание','константа отображения данных поля','Y'); -- Original language entry
insert into %prfx%usmarc_tag_dm values (7,767,'Поисковый признак на перевод','примечание','константа отображения данных поля','Y'); -- Translation entry
insert into %prfx%usmarc_tag_dm values (7,770,'Поисковый признак на приложение/специальный выпуск','примечание','константа отображения данных поля','Y'); -- Supplement/special issue entry
insert into %prfx%usmarc_tag_dm values (7,772,'Поисковый признак на основную единицу, к которой относится приложение','примечание','константа отображения данных поля','Y'); -- Supplement parent entry
insert into %prfx%usmarc_tag_dm values (7,773,'Поисковый признак на основную единицу, составной частью которой является описываемый материал','примечание','константа отображения данных поля','Y'); -- Host item entry
insert into %prfx%usmarc_tag_dm values (7,774,'Поисковый признак на составную часть','примечание','константа отображения данных поля','Y'); -- Constituent unit entry
insert into %prfx%usmarc_tag_dm values (7,775,'Поисковый признак на другое издание/редакцию','примечание','константа отображения данных поля','Y'); -- Other edition entry
insert into %prfx%usmarc_tag_dm values (7,776,'Поисковый признак на единицу в другой физической форме','примечание','константа отображения данных поля','Y'); -- Additional physical form entry
insert into %prfx%usmarc_tag_dm values (7,777,'Поисковый признак на единицу, изданную в одной обложке с описываемым материалом','примечание','константа отображения данных поля','Y'); -- Issued with entry
insert into %prfx%usmarc_tag_dm values (7,780,'Поисковый признак на предшествующее издание','примечание','константа отображения данных поля/тип связи','Y'); -- Preceding entry
insert into %prfx%usmarc_tag_dm values (7,785,'Поисковый признак на последующее издание','примечание','константа отображения данных поля/тип связи','Y'); -- Succeeding entry
insert into %prfx%usmarc_tag_dm values (7,786,'Поисковый признак на источник данных','примечание','константа отображения данных поля','Y'); -- Data source entry
insert into %prfx%usmarc_tag_dm values (7,787,'Поисковый признак на единицу, связанную с описываемой прочими отношениями','примечание','константа отображения данных поля','Y'); -- Nonspecific relationship entry
insert into %prfx%usmarc_tag_dm values (8,800,'Имя лица как добавочный поисковый признак на серию','тип начального элемента ввода имени лица','не определен','Y'); -- Series added entry--personal name
insert into %prfx%usmarc_tag_dm values (8,810,'Наименование коллектива/постоянной организации как добавочный поисковый признак на серию','тип начального элемента ввода наименования коллектива','не определен','Y'); -- Series added entry--corporate name
insert into %prfx%usmarc_tag_dm values (8,811,'Наименование мероприятия/временного коллектива как добавочный поисковый признак на серию','тип начального элемента ввода наименования мероприятия','не определен','Y'); -- Series added entry--meeting name
insert into %prfx%usmarc_tag_dm values (8,830,'Унифицированное, условное заглавие как добавочный поисковый признак на серию','не определен','количество нерасстановочных символов','Y'); -- Series added entry--uniform title
insert into %prfx%usmarc_tag_dm values (8,850,'Организации-держатели','не определен','не определен','Y'); -- Holding institution
insert into %prfx%usmarc_tag_dm values (8,852,'Местонахождение единицы хранения','схема расстановки','порядок расстановки на полке','Y'); -- Location
insert into %prfx%usmarc_tag_dm values (8,856,'Местонахождение электронного ресурса и доступ к нему','способ доступа','связь','Y'); -- Electronic location and access
insert into %prfx%usmarc_tag_dm values (8,880,'Данные в иной графике','то же, что и в поле с основной графикой','то же, что и в поле с основной графикой','Y'); -- Alternate graphic representation
insert into %prfx%usmarc_tag_dm values (8,886,'Поле MARC-формата, отличного от MARC 21','тип поля','не определен','Y'); -- Foreign marc information field
insert into %prfx%usmarc_tag_dm values (8,887,'Поле формата, отличного от MARC','не определен','не определен','Y'); -- Non-marc information field
