What is this repository for?

- Quick summary

look for OpenBiblio info here http://obiblio.sourceforge.net/

en: this is an fork of mstemson old OpenBiblio 0.7.1 with improvements:

* MultiLingual UI - it possible install multiple UI languages and switch between them in website. database now forces to work at utf8 charset to provide languages compatibility. installation alredy have include arabic(ar), denmark(de), france(fr), espaniol(es), italy(it), russian(ru), niderland(nl), polska(pl) languages
* Poly Biblio Search - serching now can set multiple criterias
* Live Lookup on Biblio Search - gives an lookup on entering serach criteria at live
* MARC import holding fields - now can generate copyes if MARC record contains holding fields. at present supports generate BarCodes on 852p (MARC21), 949i(OCLC) and 952p(koha)
* Holding MARC fields support - allow generate an thouse fields per copyes. those tags saves in separate table (hold_fields) and in accompany with custom fields can be edited in copy item editor form. this info now can be splitted from biblio-records in MARC import, and can be viewed\delpoyed from biblio tags by reports of "Holding info".


Minor improves:

1) MARC import now can generate copyes even with empty barcode.
2) biblio view now contains dinamic lookup info on copy items

ru: это форк старого OpenBiblio 0.7.1 от mstemson со следующими дополнениями:

* Многоязычный интерфейс - можно устанавливать несколько языков интерфейса и переключаться между ними в процессе работы. Набор символов БД теперь должен быть UTF чтобы обеспечить ее многоязычность. В релиз включены арабская(ar), немецкая(de), французская(fr), испанская(es), итальянская(it), английская(en), нидерладнская(nl), польская(pl) локали.
* Библиографический поиск по нескольким критериям
* Динамический лукап на поля критериев библиографического поиска.
* импорт MARC записей позволяет генерить экземпляры автоматично с назначением штрих-кода/учетного номера из полей 852p (MARC21), 949i(OCLC) и 952p(koha)
* поддержка MARCтегов экземпляров - можно генерировать теги персонально для экзепляров. эти теги хранятся отдельно от тегов библиорафических (в hold_fields) и вместе с пользовательскими тегами могут быть просмотрены\отредактированы в редакторе экземпляра. Импорт MARC записей тоже автоматично выгружает эти теги к сгенерированным экземплярам. они могут так же быть просмотрены и отделены от библиографических тегов отчетами группы "Записи о хранении"

Мелкие полезняшки:

1) импорт MARCзаписей позволяет автоматично создавать экземпляры и без штрих-кода
2) просмотр библиографии теперь содержит динамический просмотр информации о экземплярах

- Future plans

1) Made an extended Tagging index or tags cloud. this should use search-index MARC fields as tags, and provide an tags-on-tag - somewhat like rubrication.

- Version last DB version 9.0

How do I get set up?

    Summary of set up installation always setup en locale as base, and selected locale as secondary additional - so en locale is always available

- Configuration

    Database configuration Better set for new database charset and comparison style for utf8

Contribution guidelines

    Code review

    Other guidelines

Who do I talk to?

    Repo owner or admin
    Other community or team contact