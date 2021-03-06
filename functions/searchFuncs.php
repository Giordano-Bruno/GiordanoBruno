<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/*********************************************************************************
 * explodes a quoted string into words
 * @param string $str String to be exploded
 * @return stringArray
 * @access public
 *********************************************************************************
 */
function explodeQuoted($str, $extended = false) {
  if ($str == ""){
    $elements[]="";
    return $elements; 
  }

  $inQuotes=false;

  mb_regex_encoding(OBIB_CHARSET); // JALG from ALX 11-07-2015
  $words=mb_split(" ", $str);  // JALG from ALX 11-07-2015

  // Extended keyword with AND, OR, NOT clause.
  if ($extended) {
    // Raw: a% AND "b% c"
    $str = str_replace('%', '[percent_mrk]', $str);
    // a[percent_mrk] AND "b[percent_mrk] c"
    $str = str_ireplace(' and ', "%and%", $str);
    $str = str_ireplace(' or ', "%or%", $str);
    $str = str_ireplace(' not ', "%not%", $str);
    if (stripos($str, 'not ') === 0) 
      $str = '%not%' . substr($str, 4);
    // a[percent_mrk]%and%"b[percent_mrk] c"
    
    $find_end_quote = false;
    $start_pos = -1;
    
    while (($qpos = strpos($str, '"')) !== false) {
      if ($find_end_quote) {
        $qstr = substr($str, $start_pos, $qpos - $start_pos);
        $replace_qstr = str_replace(" ", "%space_bar%", $qstr);
        $replace_qstr = preg_replace("(%(not|and|or)%)", "%space_bar%$1%space_bar%", $replace_qstr);
        $str = str_replace($qstr, $replace_qstr, $str);
        $find_end_quote = false;
      }
      else {
        $start_pos = $qpos;
        $str = substr($str, 0, $qpos) . substr($str, $qpos + 1);
        $find_end_quote = true;
      }
    }
  }
  
  $words=explode(" ", $str);
  foreach($words as $word) { 
    if($inQuotes==true) { 
      // add word to the last element 
      $elements[sizeof($elements)-1].=" ".mb_ereg_replace('"','',$word); // JALG from ALX 11-07-2015
//      $elements[sizeof($elements)-1].=" ".str_replace('"','',$word); 
      if($word[strlen($word)-1]=="\"") $inQuotes=false; 
    } else { 
      // create a new element 
      $elements[]=mb_ereg_replace('"','',$word); // JALG from ALX 11-07-2015
      if($word[0]=="\"" && $word[mb_strlen($word, $encoding = OBIB_CHARSET)-1]!="\"") $inQuotes=true; // JALG from ALX 11-07-2015
//      $elements[]=str_replace('"','',$word);
//      if($word[0]=="\"" && $word[strlen($word)-1]!="\"") $inQuotes=true; 
    }
  } 
  return $elements; 
}

//explodeQuoted breaks patterns like "% some % another" so it must be reverced back to "% some %"+"% another"
function FixWordsPercent($words){ // JALG from ALX 11-07-2015
	if (empty($words))
		return $words;
	$res = array();
	$lastword = "";
	$lastwasmark = false;
    foreach($words as $word) {
		if ($word != '%'){
			if ($lastword == ""){
				$lastword = $word;
			}
			else{
				if (!$lastwasmark){
					$res[] = $lastword;
					$lastword = $word;
				}
				else {
					$lastword .= " ".$word;
					$lastwasmark = false;
				}
			}
		}
		else {
			if ($lastword != ""){
				$lastword .= " ".$word;
				$res[] = $lastword;
			}
			$lastword = $word;
			$lastwasmark = true;
		}
	}
	if ($lastword != "")
		$res[] = $lastword;
	return $res;
}

require_once("../classes/BiblioSearchQuery.php");

function explodeSearches($searchcode){ // JALG from ALX 11-07-2015
    global $BibSearchesId;
    mb_regex_encoding(OBIB_CHARSET);
	$searchparts = mb_split('\n', $searchcode);
	$searches =array();
	$i = 0;
	for($i = 0; $i < count($searchparts); $i++){
		$dcol = mb_strpos($searchparts[$i], ':', 0, $encoding = OBIB_CHARSET);
		if (!$dcol) continue;
		$typename = mb_substr($searchparts[$i], 0, $dcol,  $encoding = OBIB_CHARSET);
		if (!isset($BibSearchesId[$typename])) continue;
		$stype = $BibSearchesId[$typename];
        $stext = mb_substr($searchparts[$i], $dcol+1);
        $stext = mb_ereg_replace( '((^[[:blank:][:cntrl:]]+)|([[:blank:][:cntrl:]]+$))' , '', $stext);
		$stext = rawurldecode($stext);
		$swords = explodeQuoted($stext);
		//$swords = array($stext);
		$item = new BiblioSearchQueryItem($stype, $swords);
		$searches[] = $item;
	}
    return $searches;
}