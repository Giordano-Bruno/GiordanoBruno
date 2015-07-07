insert ignore into %prfx%locale_describe (`tabl_scode`, `description`, `langid`, `tabl_name`) VALUES
('adult', 'volwassene',			%localeid%, 'mbr_classify_dm'),
('juvenile', 'jeugd',	        %localeid%, 'mbr_classify_dm');
