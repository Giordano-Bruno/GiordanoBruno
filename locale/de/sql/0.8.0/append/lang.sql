insert into %prfx%lang set id='de', description = 'Deutsche', charset='utf-8', default_flg=DEFAULT
       ON DUPLICATE KEY UPDATE description = 'Deutsche', charset='utf-8';


