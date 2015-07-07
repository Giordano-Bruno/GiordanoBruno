<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
Codigo de alexrayne
 */
 
/******************************************************************************
 * Localize
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */

//
/*
echo "<pre>";
print_r($_REQUEST);
//print_r($loc);
echo "</pre>";
*/
#fixme revisar si es necesario, cuando se activa solo muestr el idioma predefinido
//const BASELOCALE = OBIB_LOCALE;//para predefinirlo en shared/global_constants.php

class Localize {
  var $_trans = NULL;
  var $_base = NULL;
  var $marc   = NULL;
  var $basemarc   = NULL;
  var $localePath = "";
  var $localeSection = "";
  var $_transcache = array();
  static $_cache = array();

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function Localize ($locale, $section) {
echo $locale;//test
	$this->localePath = $locale;
	$this->localeSection = $section;
	$this->_trans = $this->GetTrans($locale, "trans");
	$this->AppendTrans($this->_trans, $locale, $section);
    return true;
  }
  
  function GetTrans($locale, $section){
    $localePath = OBIB_LOCALE_ROOT."/".$locale."/".$section.".php";
	if (isset($this->_cache[$localePath]))
		return $this->_cache[$localePath];
	else
		return $this->LoadTrans($localePath);
  }
  
  function AppendTrans(&$target, $locale, $section){
	$trans = $this->GetTrans($locale,$section);
	if (!empty($trans)){
		if (!empty($target)){
			$target = array_replace_recursive($target, $trans);
		}
		else
			$target = $trans;
	}
	return $target;
  }

  function IsHaveSection($section){
		$localePath = OBIB_LOCALE_ROOT."/".$this->localePath ."/".$section.".php";
		return is_readable($localePath);
  }
 
  /* loads rqured translation and stores it to cache*/
  function LoadTrans($localePath){
    if (is_readable($localePath)) {
        include($localePath);
		$this->_cache[$localePath] = $trans;
		return $trans;
	}
	return NULL;
  }

  function LoadBase(){
	if ($this->localePath != BASELOCALE){
	$this->_base = $this->GetTrans(BASELOCALE, "trans");
	$this->AppendTrans($this->_base, BASELOCALE, $this->localeSection);
	}
	else{
		$this->_base = $this->_trans;
	}
	return $this->_base;
  }

	public function getMarc($key) {
		SureMarc();
		if (isset($this->marc[$key])) {
			return $this->marc[$key];
		} else {
			return $this->getText('Undefined');
		}
	}
	
	public function loadMarc($locale) {
		$marc = array();
		$files = array('marc', 'custom_marc');
		foreach ($files as $f) {
			$this->AppendTrans($marc, $locale, $f);
		}
		return $marc;
	}
	
	public function SureMarc() {
		if ($this->marc == NULL) {
			$this->basemarc = $this->loadMarc(BASELOCALE);
			if ($this->localePath != BASELOCALE) {
			$this->marc = $this->loadMarc($this->localePath);
			if (!empty($this->basemarc))
				$this->marc = array_replace_recursive($this->marc, $this->basemarc);
			}
			else
				$this->marc = $this->basemarc;
		}
		return $this->marc;
	}
  
  /****************************************************************************
   * @return string returns the translated text for the specified key
   *                If the key is not found in the translation table then the
   *                key will be returned instead of the translated value.
   * @param string $key key name for the translation table
   * @param array $vars associative array containing substitution variables
   * @access public
   ****************************************************************************
   */
    function _($key, $vars=NULL) {
        return $this->getText ($key, $vars);
    }
    
   function getText ($key, $vars=NULL) {
	$text = NULL;
	if ($vars == NULL) {
		$text = @$this->_transcache[$key];
	}
	if ($text == NULL) {
    $text = $key;
    $transFunc = @$this->_trans[$key];
	if ($transFunc == NULL){
		if ($this->_base == NULL){
			$this->LoadBase();
		}
		$transFunc = @$this->_base[$key];
		if ($transFunc){
			$retrans = @$this->_trans[$transFunc];
			if ($retrans)
				$transFunc = $retrans;
		}
	}

    if ($vars != NULL) {
      foreach($vars as $varKey => $value) {
        $search = "%".$varKey."%";
        if ($transFunc) {
          $transFunc = mb_ereg_replace($search,addslashes(H($value)),$transFunc);
        } else {
          $text = mb_ereg_replace($search,$value,$text);
        }
      }
    }
	if ($transFunc){
		$lastch = mb_substr($transFunc, -1, 1, OBIB_CHARSET);
		if (($lastch == ';') || ($lastch == '}'))
			@eval ($transFunc);
		else 
			$text = $transFunc;
	}

	if ($vars == NULL)
		$this->_transcache[$key] = $text;
	}//if ($text == NULL)
    if (OBIB_HIGHLIGHT_I18N_FLG) {
      $text = "<i>".$text."</i>";
    }
    return $text;
  }
}