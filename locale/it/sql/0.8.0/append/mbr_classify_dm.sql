insert ignore into %prfx%locale_describe (`tabl_scode`, `description`, `langid`, `tabl_name`) VALUES
('adult', 'adulto',			%localeid%, 'mbr_classify_dm'),
('juvenile', 'giovanile',	%localeid%, 'mbr_classify_dm'),
('teachers', 'Docenti', 	%localeid%, 'mbr_classify_dm'),
('students', 'Studenti', 	%localeid%, 'mbr_classify_dm'),
('parents', 'Genitori', 	%localeid%, 'mbr_classify_dm'),
('head teacher', 'Dirigente scolastico', %localeid%, 'mbr_classify_dm'),
('other', 'Altri', 			%localeid%, 'mbr_classify_dm');
