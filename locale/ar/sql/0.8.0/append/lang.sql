insert ignore into %prfx%lang set id='ar', description = 'عربي', charset='utf-8', default_flg=DEFAULT
       ON DUPLICATE KEY UPDATE description = 'عربي', charset='utf-8';


