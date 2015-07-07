create table IF NOT EXISTS %prfx%lang (
  code smallint auto_increment primary key
  ,id char(8) not null UNIQUE
  ,charset char(8) null
  ,description varchar(40) null
  ,default_flg char(1) not null
)
  ENGINE=MyISAM
;
create table IF NOT EXISTS %prfx%locale_describe (
   code smallint auto_increment primary key
  ,langid smallint not null
  ,tabl_name  varchar(40) not null
  ,tabl_code  smallint not null default 0
  ,tabl_scode  varchar(40) character set ascii not null default ""
  ,description varchar(127) null
)
  ENGINE=MyISAM
;
ALTER TABLE %prfx%locale_describe ADD UNIQUE (
langid ,
tabl_name ,
tabl_code ,
tabl_scode
);
