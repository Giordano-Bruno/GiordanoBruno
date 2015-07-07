insert ignore into %prfx%locale_describe (`tabl_scode`, `description`, `langid`, `tabl_name`) VALUES
('adult', 'Erwachsene',			%localeid%, 'mbr_classify_dm'),
('juvenile', 'Jugendliche',	%localeid%, 'mbr_classify_dm');
