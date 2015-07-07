insert into %prfx%lang set id=%locale%, description = %localeName%, charset='utf-8', default_flg=DEFAULT
       ON DUPLICATE KEY UPDATE description = %localeName%, charset='utf-8';


