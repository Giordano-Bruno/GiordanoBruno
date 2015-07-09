insert ignore into %prfx%locale_describe set langid=%localeid%, tabl_name='transaction_type_dm', tabl_scode='-p', description='оплачено';
insert ignore into %prfx%locale_describe set langid=%localeid%, tabl_name='transaction_type_dm', tabl_scode='-r', description='кредит';
insert ignore into %prfx%locale_describe set langid=%localeid%, tabl_name='transaction_type_dm', tabl_scode='+c', description='задолженность';
