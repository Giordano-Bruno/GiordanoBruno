insert ignore into %prfx%locale_describe (`tabl_scode`, `description`, `langid`, `tabl_name`) VALUES
('in','verfügbar',%localeid%, 'biblio_status_dm'),
('out','ausgeliehen',%localeid%, 'biblio_status_dm'),
('mnd','beschädigt',%localeid%, 'biblio_status_dm'),
('dis','in Präsentation',%localeid%, 'biblio_status_dm'),
('hld','vorbestellt',%localeid%, 'biblio_status_dm'),
('lst','verloren',%localeid%, 'biblio_status_dm'),
('ln','Leihgabe',%localeid%, 'biblio_status_dm'),
('ord','bestellt',%localeid%, 'biblio_status_dm'),
('crt','in Eingangsablage',%localeid%, 'biblio_status_dm');
