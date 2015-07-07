insert ignore into %prfx%locale_describe (`tabl_scode`, `description`, `langid`, `tabl_name`) VALUES
('in', 'nello scaffale', 					%localeid%, 'biblio_status_dm'),
('out', 'in prestito', 						%localeid%, 'biblio_status_dm'),
('mnd', 'danneggiato/fuori per riparazione', %localeid%, 'biblio_status_dm'),
('dis', 'in vetrina', 						%localeid%, 'biblio_status_dm'),
('hld', 'prenotato', 						%localeid%, 'biblio_status_dm'),
('lst', 'perso', 							%localeid%, 'biblio_status_dm'),
('ln', 'in sala lettura', 					%localeid%, 'biblio_status_dm'),
('ord', 'in ordinazione', 					%localeid%, 'biblio_status_dm'),
('crt', 'da archiviare', 					%localeid%, 'biblio_status_dm');
