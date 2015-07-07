insert into %prfx%lang set id='ru', description = 'русский', charset='utf-8', default_flg=DEFAULT 
       ON DUPLICATE KEY UPDATE description = 'русский', charset='utf-8';

