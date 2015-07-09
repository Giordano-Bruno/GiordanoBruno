<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
require_once("../shared/global_constants.php");
require_once("../classes/Query.php");
require_once("../functions/fileIOFuncs.php");

class InstallQuery extends Query {
  /* Override constructor so the installer can test the database connection */
	public function __construct() {
		parent::__construct('DB_CHARSET');
	}

  function dropTable($tableName) {
    $sql = $this->mkSQL("drop table if exists %I ", $tableName);
    $this->exec($sql);
  }
  
  function renameTables($fromTablePrfx, $toTablePrfx = DB_TABLENAME_PREFIX) {
    $fromTableNames = $this->getTableNames($fromTablePrfx.'%');
    foreach($fromTableNames as $fromTableName) {
      $toTableName = str_replace($fromTablePrfx, $toTablePrfx, $fromTableName);
      $this->renameTable($fromTableName, $toTableName);
    }
  }
  
  function renameTable($fromTableName, $toTableName) {
      $this->dropTable($toTableName);
      $sql = "rename table ".$fromTableName." to ".$toTableName;
      $this->exec($sql);
  }

  function getTableNames($pattern = "") {
    if($pattern == "") {
      $pattern = DB_TABLENAME_PREFIX.'%';
    }
    $sql = "show tables like '".$pattern."'";
    $rows = $this->exec($sql, OBIB_NUM);

    $tablenames = array();
    foreach ($rows as $row) {
      $tablenames[] = $row[0];
    }
    return $tablenames;
  }
  
  function _getSettings($tablePrfx) {
    $sql = $this->mkSQL('SHOW TABLES LIKE %Q ', $tablePrfx.'settings');
    $row = $this->select01($sql);
    if (!$row) {
      return false;
    }
    $sql = $this->mkSQL('SELECT * FROM %I ', $tablePrfx.'settings');
    $row = $this->select01($sql);
    if (!$row) {
        // if settings empty - looks like it not initialised
      return false;
    }
    return $row;
  }
  
  function getCurrentLocale($tablePrfx = DB_TABLENAME_PREFIX) {
    $array = $this->_getSettings($tablePrfx);
    if($array == false ||
      !isset($array["locale"])) {
      return 'en'; //Earlier versions of Openbiblio only supported English
    }
    else {
      return $array["locale"];  
    }
  }

  function getCurrentCharset($tablePrfx = DB_TABLENAME_PREFIX) {
    $array = $this->_getSettings($tablePrfx);
    if($array == false ||
      !isset($array["charset"])) {
      return 'utf-8'; //Earlier versions of Openbiblio only supported English
    }
    else {
      return $array["charset"];  
    }
  }
  
  function getCurrentDatabaseVersion($tablePrfx = DB_TABLENAME_PREFIX) {
    $array = $this->_getSettings($tablePrfx);
    if($array == false) {
      return false;
    }
    else {
      return $array["version"];
    }
  }
  
  function freshInstall($locale, $sampleDataRequired = false,

#FIXME hacer que funcione el discriminativo par alos valor seiguientes: ver funcion anterior abajo
/*
  	$sampleDataRequired =	false,
	$CDU		=	false,
	$CDD		=	false,
	$IBIC		=	false,
	$CUTTER		=	false,
 */
                        $version=OBIB_LATEST_DB_VERSION,
                        $tablePrfx = DB_TABLENAME_PREFIX) {
    $rootDir = '../install/' . $version . '/sql';
    $localeDir = '../locale/' . $locale . '/sql/' . $version;
    
    $this->executeSqlFilesInDir($rootDir, $tablePrfx);
    $this->executeSqlFilesInDir($localeDir . '/domain', $tablePrfx);
    if($sampleDataRequired) {
      $this->executeSqlFilesInDir($localeDir . '/sample', $tablePrfx);
    }
    $sql = $this->mkSQL('update ignore '.$tablePrfx.'lang set default_flg=\'Y\' where id = %Q ', $locale);
    $this->act($sql);
    $sql = $this->mkSQL('update ignore '.$tablePrfx.'settings set version=%Q', $version);
    $this->act($sql);
  }
  
/*
  function freshInstall($locale, $parament,  //jalg para descrimitarios 
	$sampleDataRequired =	false,
	$CDU		=	false,
	$CDD		=	false,
	$IBIC		=	false,
	$CUTTER		=	false,
	$version	=	OBIB_LATEST_DB_VERSION,
	$tablePrfx	=	DB_TABLENAME_PREFIX) {

			$rootDir   = '../install/' . $version . '/sql';
			$ComunDir = '../install/GB-0.33/comun';
			$localeDir = '../locale/' . $locale . '/sql/' . $version;
			$updateDir = '../install/GB-0.33/update';//revisar si es necesario en la instalacio jalg

		if( !($parament == 'CDU' || $parament == 'CDD' || $parament == 'IBIC' || $parament == 'CUTTER')) {//jal jul-2013 para discrimitavos
			    $this->executeSqlFilesInDir($ComunDir , $tablePrfx);
			    $this->executeSqlFilesInDir($rootDir , $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/domain/'	,  $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/MARC/'	,  $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/lookup2/'	,  $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/theme/'	,  $tablePrfx);
				if($sampleDataRequired) {
						$this->executeSqlFilesInDir($localeDir . '/sample/',  $tablePrfx);
				}
			  	$this->executeSqlFilesInDir($updateDir, $tablePrfx);
		 }

		switch ($parament) {

			case  'CDU' :
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/CDU/',  $tablePrfx);
			    }
				break;
			case   'CDD':
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/CDD/',  $tablePrfx);
			    }
 				break;
			case  'IBIC':
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/IBIC/', $tablePrfx);
			    }
				break;
			case  'CUTTER':
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/CUTTER/', $tablePrfx);
			    }
 			break;
	 	}//case
	}//funtion
*/

  function getSqlFilesInDir($dir, $tablePrfx = "") {
    if (!is_dir($dir))
       $dir = absolutePath($dir);
    if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        $files = array();
        while (($filename = readdir($dh)) !== false) {
          if(preg_match('/\\.sql$/', $filename)) {
            $files[] = $filename;
          }
        }
        closedir($dh);
        if (count($files) == 0)
            return false;
        return $files;
      }
    }
    return false;
  }

	function addSqlFilesInDir(&$target, $basedir, $dir) {
		$appends = $this->getSqlFilesInDir($basedir.'/'.$dir);
		//$this->remove_files($appends, $target);
		if(!empty($appends))
		foreach ($appends as $item){
			$target[] = $dir.'/'.$item;
		}
		return $target;
	}

	function addNewSqlFilesInDir(&$target, $basedir, $dir) {
		$appends = $this->getSqlFilesInDir($basedir.'/'.$dir);

        $skipnames = array();
        if(!empty($target))
        foreach ($target as $skipitem){
            $skipnames[] = basename($skipitem);
        }

            //$this->remove_files($appends, $target);
		if(!empty($appends))
		foreach ($appends as $item){
            if (!empty($skipnames))
            if (in_array($item, $skipnames))
                continue;
			$target[] = $dir.'/'.$item;
		}
		return $target;
	}

  function executeSqlFilesInDir($dir, $tablePrfx = "") {
    $files = $this->getSqlFilesInDir($dir ,$tablePrfx);
	$this->append_SqlRelations($dir, $files);
    if ($files == false)
        return false;
    sort($files, SORT_STRING);
    $this->executeSqlFiles($dir, $files, $tablePrfx);
    return true;
  }

  function executeSqlFilesInDirSkips($dir, $skipfiles, $tablePrfx = "") {
    $files = $this->getSqlFilesInDir($dir, $tablePrfx);
	$this->remove_files($files, $skipfiles);
	$this->append_SqlRelations($dir, $files);
	$this->remove_files($files, $skipfiles);
    if ($files == false)
        return false;
    sort($files, SORT_STRING);
    $this->executeSqlFiles($dir, $files, $tablePrfx);
    return true;
  }
  
  function append_SqlRelations($dir, &$files){
    $fp = false;
	//$files = $this->exists_files($dir, $files);
//print_r ($files);
//echo "</br>";
	$skipfiles = $files;
	$rel_script  = 'relations_sql.php';
	$dir_sub = basename($dir);

	$script_dir = '.'; 
	$script_name = $dir.'/'.$script_dir.'/'.$rel_script; 
    echo '<h3>'."install sql check relations ".H($script_name).'</h3>';
    if (!file_exists($script_name))
       $script_name = absolutePath($script_name);
    echo '<h3>'."install sql check relations ".H($script_name).'</h3>';
    if (file_exists($script_name)) {
		include($script_name);
        $this->drop_files($files, $skipfiles);
        return;
	}

	$script_dir  = '..'; 
	$script_name = $dir.'/'.$script_dir.'/'.$rel_script; 
    echo '<h3>'."install sql check relations lara1".H($script_name).'</h3>';
    if (!file_exists($script_name))
       $script_name = absolutePath($script_name);
    if (file_exists($script_name)) {
		include($script_name);
	}
    $this->drop_files($files, $skipfiles);
  }
  
  function exists_files($basedir, $files){
	$res = array();
	if (!empty($files))
	foreach ($files as $item){
            $filename = $basedir.'/'.$item;
            if (!file_exists($filename))
                $filename = absolutePath($filename);
	    if (file_exists($filename))
	       $res[] = $item;
	}
	return $res;
  }
  
  function remove_files($target, $removes){
	$skipnames = array();
	if(!empty($removes))
	foreach ($removes as $skipitem){
		$skipnames[] = basename($skipitem);
	}

	if (empty($skipnames))
		return $target;
	
	$res = array();
	foreach($target as $item){
		$name = basename($item);
		if (!in_array($name, $skipnames))
			$res[] = $item;
	}
	return $res;
  }

  function drop_files(&$target, $removes){
	$skipnames = array();
	if(!empty($removes))
	foreach ($removes as $skipitem){
		$skipnames[] = basename($skipitem);
	}

	if (empty($skipnames))
		return $target;

    $drops = array();
	foreach($target as $key=>$item){
        if (in_array($item, $removes)) continue;
		$name = basename($item);
		if (in_array($name, $skipnames))
            $drops[] = $key;
	}

    foreach($drops as $item){
        unset($target[$item]);
    }

	return $target;
  }
  
  function filter_files($target, $filter){
	if (empty($filter))
		return false;
	
	$res = array();
	foreach($target as $key => $item){
		$name = basename($item);
		if (array_key_exists($name, $filter))
			$res[] = $item;
	}
	return $res;
  }
  
  /**********************************************************************************
   * Function to read through an sql file executing SQL only when ";" is encountered
   **********************************************************************************/
  function executeSqlFiles($dir, $files, $tablePrfx = DB_TABLENAME_PREFIX, $Quiet = false) {
        for($i=0; $i<count($files); $i++) {
            $filename = $files[$i];
            $this->executeSqlFile($dir.'/'.$filename, $tablePrfx, $Quiet);
        }
  }

  function PreprocessSQL($sql){
    //preprocess macro and params in sql
    return $sql;
  }

  function executeSqlFile($filename, $tablePrfx = DB_TABLENAME_PREFIX, $Quiet = false) {
    $fp = false;
    if (!file_exists($filename))
       $filename = absolutePath($filename);
    if (file_exists($filename))
        $fp = fopen($filename, "r");
    # show error if file could not be opened
    if ($fp == false) {
      if ($Quiet) {
            return false;
      }
      Fatal::error("Error reading file: ".H($filename));
    } else {
		$dir = dirname($filename);
		$sql_charset = DB_CHARSET;
		if (file_exists($dir."/sqlcharset.php")) {
			include($dir."/sqlcharset.php");
		}
		$this->UseLinkCharset($sql_charset);
		
      $sqlStmt = "";
      while (!feof ($fp)) {
        $char = fgetc($fp);
        $sqlStmt .= $char;
        if ($char == ";") {
          //replace table prefix, we're doing it here as the install script may
          //want to override the required prefix (eg. during upgrade / conversion 
          //process)
          $sql = str_replace("%prfx%",$tablePrfx,$sqlStmt);
          $sql = $this->PreprocessSQL($sql);
          //replace ENGINE with TYPE for old MySQL versions
          $MySQLn = explode('.', implode('', explode('-', $this->server_info)));
          if ($MySQLn[0] < '5') {
            $sql = str_replace("ENGINE=","TYPE=",$sql);
            $sql = str_replace("engine=","type=",$sql);
          } else {
            $sql = str_replace("TYPE=","ENGINE=",$sql);
            $sql = str_replace("type=","engine=",$sql);
          }
          $this->exec($sql);
          $sqlStmt = "";
        }
      }
      fclose($fp);
    }
    return true;
  }
}