<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
//jal 5/jul/2015 para alx mu.ltiidioma  
require_once("../shared/global_constants.php");
require_once("../classes/InstallQuery.php");
require_once("../classes/Settings.php");

class LocaleQuery extends InstallQuery {
  public    $_locale = "en";
  public    $_localeDescr = "";
  public    $_isdefaultlocale = false;
  public    $_charset = '';
  public    $_version = '0.8.0';
  public    $tablePrfx = DB_TABLENAME_PREFIX;
  public    $localekey = -1;

  /* Override constructor so the installer can test the database connection */
  function __construct($locale, $charset='', $version = '', $prfx = DB_TABLENAME_PREFIX) {
        parent::__construct();
        
        $this->_locale    = $locale;
        $this->_charset   = $charset;
        $this->_version   = $version;
        $this->tablePrfx  = $prfx;
  }

  function _readLocaleInfo() {
//    $sql = $this->mkSQL('SHOW TABLES LIKE %Q ', $tablePrfx.'lang');
//    $row = $this->select01($sql);
//    if (!$row) {
//      return false;
//    }
    $sql = $this->mkSQL('SELECT * FROM %I WHERE id = %Q', $this->tablePrfx.'lang', $this->_locale);
    return $this->select01($sql);
  }

  function _readDefaultLocaleInfo() {
//    $sql = $this->mkSQL('SHOW TABLES LIKE %Q ', $tablePrfx.'lang');
//    $row = $this->select01($sql);
//    if (!$row) {
//      return false;
//    }
    $sql = $this->mkSQL('SELECT * FROM %I WHERE default_flg = "Y"', $this->tablePrfx.'lang');
    return $this->select01($sql);
  }

  //read ifo of locale from lang_dm table
  function UseDefaultLocale() {
    $array = $this->_readDefaultLocaleInfo();
    if($array == false ||
      !isset($array["id"])) {
      return 'en'; //Earlier versions of Openbiblio only supported English
    }
    else {
        $this->_locale = $array["id"];
        $this->localekey = $array["code"];
        //$this->_charset  = $array["charset"];
        $this->_isdefaultlocale = ($array["default_flg"] == "Y");
		$this->_localeDescr = $array["description"];
      return $array["id"];  
    }
  }

  function GetDefaultLocale() {
    $array = $this->_readDefaultLocaleInfo();
    if($array == false ||
      !isset($array["id"])) {
      return 'en'; //Earlier versions of Openbiblio only supported English
    }
    return $array["id"];  
  }
  
  //read ifo of locale from lang_dm table
  function _getLocaleInfo() {
    $array = $this->_readLocaleInfo();
    if($array == false ||
      !isset($array["id"])) {
      return 'en'; //Earlier versions of Openbiblio only supported English
    }
    else {
        $this->localekey = $array["code"];
        $this->_isdefaultlocale = ($array["default_flg"] == "Y");
        $this->_isdefaultlocale = ($array["default_flg"] == "Y");
		$this->_localeDescr = $array["description"];
      return $array["id"];  
    }
  }

  function PrepareLocale() {
    $array = $this->_readLocaleInfo();
    if ($array != false) {
        $this->localekey = $array["code"];
        $this->_isdefaultlocale = ($array["default_flg"] == "Y");
        return $this->UpdateLocale();
    }
    if (!$this->freshInstallLocale()){
        return false;
    }
    if ($this->localekey < 0){
        return false;
    }
    return true;
  }
  
  function PrepareLocaleSeance() {
    $result = $this->PrepareLocale( );
    return $result;
  }
 
  function UpdateLocale(){
    return $this->freshInstallLocale();
  }

  function freshInstallLocale() {
    if ($this->_isdefaultlocale) 
        return true;

    if ($this->_version == ''){
        $this->_version = $this->getCurrentDatabaseVersion($this->tablePrfx);
    }

	$meta = Settings::getLocaleMeta($this->_locale);
	$this->_localeDescr = $meta[$this->_locale];
	if (!isset($this->_localeDescr)){
	    Fatal::error("desired local ".$this->_locale ." absent");
		return;
	}
	
    $localeDir = OBIB_LOCALE_ROOT.'/'.$this->_locale . '/sql/' . $this->_version;
    if (!is_dir($localeDir) )
		$localeDir = OBIB_LOCALE_ROOT.'/default/sql/' . $this->_version;
    if (!is_dir($localeDir) ){
	    Fatal::error("DB sql for desired local ".$this->_locale ." absent");
		return;
	}

    $lang_sqls[] = 'lang.sql';
	$lang_files['lang.sql'] = 1;
    $lang_dir = $localeDir.'/append';
	$sqlfiles = $this->getSqlFilesInDir($lang_dir ,$this->tablePrfx);
	$this->append_SqlRelations($lang_dir, $sqlfiles);
	$lang_sqls = $this->filter_files($sqlfiles, $lang_files);
	
	{
    echo '<h3>'."install sql update relations on lang_sqls at ".$lang_dir.'</h3>';
    echo '<table> <tr>';
    foreach ($lang_sqls as $item) {
      echo '<tr><td>'.H($item).'</td></tr>';
    }
    echo '</table>';
	}

    $this->executeSqlFiles($lang_dir, $lang_sqls, $this->tablePrfx, true);
    $array = $this->_readLocaleInfo();
    if ($array == false){
        Fatal::error("fail _readLocaleInfo: ".$this->_locale);
        return false;
    }
    $this->localekey = $array["code"];

	$sqlfiles = $this->remove_files($sqlfiles, $lang_sqls);
	if (!empty($sqlfiles))
	{
    echo '<h3>'."install sqls ".'</h3>';
    echo '<table> <tr>';
    foreach ($sqlfiles as $item) {
      echo '<tr><td>'.H($item).'</td></tr>';
    }
    echo '</table>';
    $this->executeSqlFiles($localeDir . '/append', $sqlfiles, $this->tablePrfx);
	}

    $this->GenerateLocaleInterface();
    return true;
  }

  function PreprocessSQL($sql){
    if ($this->localekey >= 0)
        $sql = str_replace("%localeid%",$this->localekey,$sql);
    $sql = str_replace("%locale%", "'".$this->_locale."'", $sql);
    $sql = str_replace("%localeName%", "'".$this->_localeDescr."'", $sql);
    return $sql;
  }

  function getLocaleCharset(){
    return $this->_charset;
  }
  
  function GenLocalTable_PrepareDescr($table, $local_descr, $descrlen = 124){
        $use_charset = "";
        if (strlen(DB_CHARSET)> 0)
            $use_charset = 'CHARACTER SET '.$this->CharSet2MySQL(DB_CHARSET);
        $sql = $this->mkSQL('alter ignore table %I add %C varchar(%N) %! NULL default NULL', $table, $local_descr, $descrlen, $use_charset);
        $result = $this->tryact($sql);
       
        if ($result === false){
            $sql = $this->mkSQL('alter ignore table %I change %C %C varchar(%N) %! NULL default NULL', $table, $local_descr, $local_descr, $descrlen, $use_charset);
            $result = $this->tryact($sql);
        }
        //$this->act($sql);
        return $result;
  }
  
  function SelectLocalsSql($table, $selector = 'description'){
        $use_tabl_def = $table;
        if ($selector != 'description')
            $use_tabl_def .= '_'.$selector;
        $sql_locals = $this->mkSQL('select code, tabl_code, tabl_scode, description from locale_describe as lang where ((lang.langid = %N) and (lang.tabl_name = %Q))', $this->localekey, $use_tabl_def);
        return $sql_locals;
  }
  
  function GenLocalTable_StrLocaledKey($table , $key, $selection='', $keylocale = 'en'){
		$descr = $key;//'description'
		if (!$this->_isdefaultlocale) {
			$local_descr = $descr.'_'.$this->_locale;
			$this->GenLocalTable_PrepareDescr($table, $local_descr);
		}
		else
			$local_descr = $descr;

		if ($keylocale != '')
		if ($keylocale != $this->_defaultlocale){
			$key .='_'.$keylocale;
		}
		if ($selection == '')
			$selection = $descr;
        $sql_locals = $this->SelectLocalsSql($table, $selection);
        $sql_upd_locals = $this->mkSQL('update %I as dst, (%!) as src set dst.%i = src.description where (dst.%i = src.tabl_scode)'
                                        , $table, $sql_locals, $local_descr, $key);//, $local_descr);// and isnull(dst.%i))
        $result = $this->act($sql_upd_locals);
        return $result;
  }

  function GenLocalTable_StrKey($table , $key, $descr = 'description'){
		if (!$this->_isdefaultlocale){
        $local_descr = $descr.'_'.$this->_locale;
        $this->GenLocalTable_PrepareDescr($table, $local_descr);
		}
		else
			$local_descr = $descr;
        $sql_locals = $this->SelectLocalsSql($table, $descr);
        $sql_upd_locals = $this->mkSQL('update %I as dst, (%!) as src set dst.%i = src.description where (dst.%i = src.tabl_scode)'
                                        , $table, $sql_locals, $local_descr, $key);//, $local_descr);// and isnull(dst.%i))
        $result = $this->act($sql_upd_locals);
		return $result;
  }
  
    function GenLocalTable_IntKey($table , $key, $descr = 'description'){
		if (!$this->_isdefaultlocale){
        $local_descr = $descr.'_'.$this->_locale;
        $this->GenLocalTable_PrepareDescr($table, $local_descr);
		}
		else
			$local_descr = $descr;
        $sql_locals = $this->SelectLocalsSql($table, $descr);
        $sql_upd_locals = $this->mkSQL('update %I as dst, (%!) as src set dst.%i = src.description where (dst.%i = src.tabl_code)'
                                        , $table, $sql_locals, $local_descr, $key);//, $local_descr);// and isnull(dst.%i)
        $result = $this->act($sql_upd_locals);
        return $result;
    }

    function LocaliseKeyExpr($key, $table_prefix = ''){
        //ru: генерит выражение строковое - контеканацию всех полей в $key, 
        //при этом числовые поля переводятся к 10ного вида строке - они маркируются знаком  # <например #tag>
        //маркировка этих полей не обязательна
        $result = '';
        for($i=0; $i<count($key); $i++) {
            $field = $key[$i];
            if ($result != '')
                $result .= ',\' \',';
            if ($field[0] == '#'){
                $field = ltrim($field, '#');
            }
            if (ctype_digit($field[0])){
				$digits = $field[0];
				$field = 'LPAD(CAST('.$table_prefix.substr($field, 1).' as CHAR), '.$digits.', \'0\')';
			}
			else
				$field = $table_prefix.$field;
            $result .= $field;
        }
        $result = 'concat('.$result.')';
        return $result;
    }
    
    function GenLocalTable_CombKey($table , $key, $descr = 'description'){
		if (!$this->_isdefaultlocale){
        $local_descr = $descr.'_'.$this->_locale;
        $this->GenLocalTable_PrepareDescr($table, $local_descr);
		}
		else
			$local_descr = $descr;
        $sql_locals = $this->SelectLocalsSql($table, $descr);
        $keyexpr = $this-> LocaliseKeyExpr($key, 'dst.');
        $sql_upd_locals = $this->mkSQL('update %I as dst, (%!) as src set dst.%i = src.description where (%! = src.tabl_scode)'
                                        , $table, $sql_locals, $local_descr, $keyexpr);//, $local_descr);// and isnull(dst.%i)
        $result = $this->act($sql_upd_locals);
        return $result;
    }
    
  function GenerateLocaleInterface(){
	$this->_defaultlocale = $this->GetDefaultLocale();

    //generate tables\views wis localised 'description' fields in form <localeid>_<tablename>
    $this->GenLocalTable_StrKey('biblio_copy_fields_dm' , 'code');
    $this->GenLocalTable_StrKey('biblio_status_dm'      , 'code');
    $this->GenLocalTable_IntKey('material_type_dm'      , 'code');
    $this->GenLocalTable_StrLocaledKey('collection_dm'  , 'description');
    $this->GenLocalTable_StrLocaledKey('theme'  		, 'theme_name');
    $this->GenLocalTable_IntKey('material_usmarc_xref'  , 'xref_id', 'descr');
    
    $this->GenLocalTable_StrLocaledKey('mbr_classify_dm', 'description');
    $this->GenLocalTable_StrKey('member_fields_dm'      , 'code');
    $this->GenLocalTable_StrKey('transaction_type_dm'   , 'code');
    $this->GenLocalTable_IntKey('usmarc_block_dm'       , 'block_nmbr');

    $this->GenLocalTable_StrLocaledKey('usmarc_subfield_dm', 'description', 'description_en');
    $this->GenLocalTable_CombKey('usmarc_subfield_dm'   , array('#tag', 'subfield_cd') );
    $this->GenLocalTable_CombKey('usmarc_subfield_dm'   , array('#3tag', 'subfield_cd') );
    $this->GenLocalTable_StrLocaledKey('usmarc_indicator_dm', 'description', 'description_en');
    $this->GenLocalTable_CombKey('usmarc_indicator_dm'  , array('#tag', 'indicator_nmbr', 'indicator_cd') );
    $this->GenLocalTable_CombKey('usmarc_indicator_dm'  , array('#3tag', 'indicator_nmbr', 'indicator_cd') );
    $this->GenLocalTable_StrLocaledKey('usmarc_tag_dm', 'description', 'description_en');
    $this->GenLocalTable_StrLocaledKey('usmarc_tag_dm', 'ind1_description', 'ind1_description_en');
    $this->GenLocalTable_StrLocaledKey('usmarc_tag_dm', 'ind2_description', 'ind2_description_en');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#tag', '#block_nmbr') );
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#tag', '#block_nmbr') , 'ind1_description');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#tag', '#block_nmbr') , 'ind2_description');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#3tag', '#block_nmbr') );
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#3tag', '#block_nmbr') , 'ind1_description');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#3tag', '#block_nmbr') , 'ind2_description');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#block_nmbr', '#tag') );
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#block_nmbr', '#tag') , 'ind1_description');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#block_nmbr', '#tag') , 'ind2_description');
	$this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#block_nmbr', '#3tag') );
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#block_nmbr', '#3tag') , 'ind1_description');
    $this->GenLocalTable_CombKey('usmarc_tag_dm'        , array('#block_nmbr', '#3tag') , 'ind2_description');
        
    return true;
  }
}