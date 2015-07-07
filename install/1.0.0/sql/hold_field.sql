drop table if exists %prfx%hold_field;
create table %prfx%hold_field like %prfx%biblio_field;
alter table %prfx%hold_field
  add column copyid integer null default null
;
