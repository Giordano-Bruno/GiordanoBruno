insert ignore into %prfx%locale_describe (`tabl_scode`, `description`, `langid`, `tabl_name`) VALUES
('in','в наличии',%localeid%, 'biblio_status_dm'),
('out','выдано',%localeid%, 'biblio_status_dm'),
('mnd','повреждено/ремонт',%localeid%, 'biblio_status_dm'),
('dis','на выставке',%localeid%, 'biblio_status_dm'),
('hld','удерживается',%localeid%, 'biblio_status_dm'),
('lst','утеряно',%localeid%, 'biblio_status_dm'),
('ln','заем',%localeid%, 'biblio_status_dm'),
('ord','заказано',%localeid%, 'biblio_status_dm'),
('crt','на полке',%localeid%, 'biblio_status_dm');
