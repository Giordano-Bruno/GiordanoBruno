
CREATE TABLE IF NOT EXISTS `biblio` (
  `bibid` int(11) NOT NULL AUTO_INCREMENT,
  `create_dt` datetime NOT NULL,
  `last_change_dt` datetime NOT NULL,
  `last_change_userid` int(11) NOT NULL,
  `material_cd` smallint(6) NOT NULL,
  `collection_cd` smallint(6) NOT NULL,
  `call_nmbr1` varchar(20) DEFAULT NULL,
  `call_nmbr2` varchar(20) DEFAULT NULL,
  `call_nmbr3` varchar(20) DEFAULT NULL,
  `title` text,
  `title_remainder` text,
  `responsibility_stmt` text,
  `author` text,
  `topic1` text,
  `topic2` text,
  `topic3` text,
  `topic4` text,
  `topic5` text,
  `opac_flg` char(1) NOT NULL,
  PRIMARY KEY (`bibid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

CREATE TABLE IF NOT EXISTS `biblio_copy` (
  `bibid` int(11) NOT NULL,
  `copyid` int(11) NOT NULL AUTO_INCREMENT,
  `create_dt` datetime NOT NULL,
  `copy_desc` varchar(160) DEFAULT NULL,
  `barcode_nmbr` varchar(20) NOT NULL,
  `status_cd` char(3) NOT NULL,
  `status_begin_dt` datetime NOT NULL,
  `due_back_dt` date DEFAULT NULL,
  `mbrid` int(11) DEFAULT NULL,
  `renewal_count` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`bibid`,`copyid`),
  UNIQUE KEY `copy_key` (`copyid`),
  KEY `barcode_index` (`barcode_nmbr`),
  KEY `mbr_index` (`mbrid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

CREATE TABLE IF NOT EXISTS `biblio_copy_fields` (
  `bibid` int(11) NOT NULL,
  `copyid` int(11) NOT NULL,
  `code` varchar(16) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`bibid`,`copyid`,`code`),
  KEY `code_index` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `biblio_copy_fields_dm` (
  `code` varchar(16) CHARACTER SET ascii NOT NULL,
  `description` char(32) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `biblio_field` (
  `bibid` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `tag` smallint(6) NOT NULL,
  `ind1_cd` char(1) DEFAULT NULL,
  `ind2_cd` char(1) DEFAULT NULL,
  `subfield_cd` char(1) NOT NULL,
  `field_data` text,
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `biblio_hold` (
  `bibid` int(11) NOT NULL,
  `copyid` int(11) NOT NULL,
  `holdid` int(11) NOT NULL AUTO_INCREMENT,
  `hold_begin_dt` datetime NOT NULL,
  `mbrid` int(11) NOT NULL,
  PRIMARY KEY (`bibid`,`copyid`,`holdid`),
  KEY `mbr_index` (`mbrid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `biblio_status_dm` (
  `code` char(3) CHARACTER SET ascii NOT NULL,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `biblio_status_hist` (
  `bibid` int(11) NOT NULL,
  `copyid` int(11) NOT NULL,
  `status_cd` char(3) NOT NULL,
  `status_begin_dt` datetime NOT NULL,
  `due_back_dt` date DEFAULT NULL,
  `mbrid` int(11) DEFAULT NULL,
  `renewal_count` tinyint(3) unsigned NOT NULL,
  KEY `mbr_index` (`mbrid`),
  KEY `copy_index` (`bibid`,`copyid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `checkout_privs` (
  `material_cd` smallint(6) NOT NULL,
  `classification` smallint(6) NOT NULL,
  `checkout_limit` tinyint(3) unsigned NOT NULL,
  `renewal_limit` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`material_cd`,`classification`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `collection_dm` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `days_due_back` smallint(5) unsigned NOT NULL,
  `daily_late_fee` decimal(4,2) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

CREATE TABLE IF NOT EXISTS `hold_field` (
  `bibid` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `tag` smallint(6) NOT NULL,
  `ind1_cd` char(1) DEFAULT NULL,
  `ind2_cd` char(1) DEFAULT NULL,
  `subfield_cd` char(1) NOT NULL,
  `field_data` text,
  `copyid` int(11) DEFAULT NULL,
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `lang` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `id` char(8) NOT NULL,
  `charset` char(8) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `default_flg` char(1) NOT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `locale_describe` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `langid` smallint(6) NOT NULL,
  `tabl_name` varchar(40) NOT NULL,
  `tabl_code` smallint(6) NOT NULL DEFAULT '0',
  `tabl_scode` varchar(40) CHARACTER SET ascii NOT NULL DEFAULT '',
  `description` varchar(127) DEFAULT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `langid` (`langid`,`tabl_name`,`tabl_code`,`tabl_scode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `material_type_dm` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `image_file` varchar(128) DEFAULT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

CREATE TABLE IF NOT EXISTS `material_usmarc_xref` (
  `xref_id` int(11) NOT NULL AUTO_INCREMENT,
  `materialCd` int(11) NOT NULL DEFAULT '0',
  `tag` char(3) NOT NULL DEFAULT '',
  `subfieldCd` char(1) NOT NULL DEFAULT '',
  `descr` varchar(64) NOT NULL DEFAULT '',
  `required` char(1) NOT NULL DEFAULT '',
  `cntrltype` char(1) NOT NULL DEFAULT '',
  `descr_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`xref_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `mbr_classify_dm` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `max_fines` decimal(4,2) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `member` (
  `mbrid` int(11) NOT NULL AUTO_INCREMENT,
  `barcode_nmbr` varchar(20) NOT NULL,
  `create_dt` datetime NOT NULL,
  `last_change_dt` datetime NOT NULL,
  `last_change_userid` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `address` text,
  `home_phone` varchar(15) DEFAULT NULL,
  `work_phone` varchar(15) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `classification` smallint(6) NOT NULL,
  PRIMARY KEY (`mbrid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

CREATE TABLE IF NOT EXISTS `member_account` (
  `mbrid` int(11) NOT NULL,
  `transid` int(11) NOT NULL AUTO_INCREMENT,
  `create_dt` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `transaction_type_cd` char(2) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`mbrid`,`transid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `member_fields` (
  `mbrid` int(11) NOT NULL,
  `code` varchar(16) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`mbrid`,`code`),
  KEY `code_index` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `member_fields_dm` (
  `code` varchar(16) CHARACTER SET ascii NOT NULL,
  `description` char(32) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `session` (
  `userid` int(5) NOT NULL,
  `last_updated_dt` datetime NOT NULL,
  `token` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `settings` (
  `library_name` varchar(128) DEFAULT NULL,
  `library_image_url` text,
  `use_image_flg` char(1) NOT NULL,
  `library_hours` varchar(128) DEFAULT NULL,
  `library_phone` varchar(40) DEFAULT NULL,
  `library_url` text,
  `opac_url` text,
  `session_timeout` smallint(6) NOT NULL,
  `items_per_page` tinyint(4) NOT NULL,
  `version` varchar(10) NOT NULL,
  `themeid` smallint(6) NOT NULL,
  `purge_history_after_months` smallint(6) NOT NULL,
  `block_checkouts_when_fines_due` char(1) NOT NULL,
  `hold_max_days` smallint(6) NOT NULL,
  `locale` varchar(30) NOT NULL,
  `charset` varchar(20) DEFAULT NULL,
  `html_lang_attr` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `staff` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `create_dt` datetime NOT NULL,
  `last_change_dt` datetime NOT NULL,
  `last_change_userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` char(32) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `suspended_flg` char(1) NOT NULL,
  `admin_flg` char(1) NOT NULL,
  `circ_flg` char(1) NOT NULL,
  `circ_mbr_flg` char(1) NOT NULL,
  `catalog_flg` char(1) NOT NULL,
  `reports_flg` char(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `theme` (
  `themeid` smallint(6) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(40) NOT NULL,
  `title_bg` varchar(20) NOT NULL,
  `title_font_face` varchar(128) NOT NULL,
  `title_font_size` tinyint(4) NOT NULL,
  `title_font_bold` char(1) NOT NULL,
  `title_font_color` varchar(20) NOT NULL,
  `title_align` varchar(30) NOT NULL,
  `primary_bg` varchar(20) NOT NULL,
  `primary_font_face` varchar(128) NOT NULL,
  `primary_font_size` tinyint(4) NOT NULL,
  `primary_font_color` varchar(20) NOT NULL,
  `primary_link_color` varchar(20) NOT NULL,
  `primary_error_color` varchar(20) NOT NULL,
  `alt1_bg` varchar(20) NOT NULL,
  `alt1_font_face` varchar(128) NOT NULL,
  `alt1_font_size` tinyint(4) NOT NULL,
  `alt1_font_color` varchar(20) NOT NULL,
  `alt1_link_color` varchar(20) NOT NULL,
  `alt2_bg` varchar(20) NOT NULL,
  `alt2_font_face` varchar(128) NOT NULL,
  `alt2_font_size` tinyint(4) NOT NULL,
  `alt2_font_color` varchar(20) NOT NULL,
  `alt2_link_color` varchar(20) NOT NULL,
  `alt2_font_bold` char(1) NOT NULL,
  `border_color` varchar(20) NOT NULL,
  `border_width` tinyint(4) NOT NULL,
  `table_padding` tinyint(4) NOT NULL,
  `theme_name_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`themeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `transaction_type_dm` (
  `code` char(2) CHARACTER SET ascii NOT NULL,
  `description` varchar(40) NOT NULL,
  `default_flg` char(1) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usmarc_block_dm` (
  `block_nmbr` tinyint(4) NOT NULL,
  `description` varchar(80) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`block_nmbr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usmarc_indicator_dm` (
  `tag` smallint(6) NOT NULL,
  `indicator_nmbr` tinyint(4) NOT NULL,
  `indicator_cd` char(1) NOT NULL,
  `description` varchar(80) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`tag`,`indicator_nmbr`,`indicator_cd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usmarc_subfield_dm` (
  `tag` smallint(6) NOT NULL,
  `subfield_cd` char(1) NOT NULL,
  `description` varchar(80) NOT NULL,
  `repeatable_flg` char(1) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`tag`,`subfield_cd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usmarc_tag_dm` (
  `block_nmbr` tinyint(4) NOT NULL,
  `tag` smallint(6) NOT NULL,
  `description` varchar(80) NOT NULL,
  `ind1_description` varchar(80) NOT NULL,
  `ind2_description` varchar(80) NOT NULL,
  `repeatable_flg` char(1) NOT NULL,
  `description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  `ind1_description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  `ind2_description_es` varchar(124) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`block_nmbr`,`tag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
