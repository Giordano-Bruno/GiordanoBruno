insert into %prfx%lang set id='it', description = 'Italaiano', charset='UTF-8', default_flg=DEFAULT 
       ON DUPLICATE KEY UPDATE description = 'Español-IT', charset='UTF-8';

