<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

echo "<pre>";
print_r($_POST);
echo "<pre>";
 
 
require_once("../shared/global_constants.php");
require_once("../classes/Query.php");
require_once("../classes/BiblioSearch.php");
require_once("../classes/BiblioField.php");
require_once("../classes/Localize.php");

/******************************************************************************
 * BiblioQuery data access component for library bibliographies
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */

$BibSearchesId = array(
	"barcodeNmbr"	=> OBIB_SEARCH_BARCODE,
	"title"			=> OBIB_SEARCH_TITLE,
	"author"		=> OBIB_SEARCH_AUTHOR,
	"subject"		=> OBIB_SEARCH_SUBJECT,
	"keyName"		=> OBIB_SEARCH_NAME,
	"callno"		=> OBIB_SEARCH_CALLNO,
	"keyword"		=> OBIB_SEARCH_KEYWORD,
	"material"		=> OBIB_SEARCH_MATERIAL,
	"collection"    => OBIB_SEARCH_COLLECTION
);

$TagsAutorList = "'110', '700', '710'";
$TagsAutorSubs = "'a', 'b', 'c', 'q', 't', 'v', 'x'";

$TagsSubjectList = "'600', '610', '611', '630', '650', '651',
	'653', '654', '655', '656', '657', '658',
	'690', '691', '692', '693', '694', '695',
	'696', '697', '698', '699'
	";
$TagsSubjectSubs = "'a', 'c', 'e', 'p', 'q', 't', 'v', 'x'";

$TagsIndexList = "'130', '250', '260',
	'300', '336', '337', '338', '340',
	'380', '381', '382', '384', '383', '384',
	'400', '410', '440', '490',
	'500', '501', '502', '505', '511', '520',
	'521', '526',
	'600', '610', '611', '630', '650', '651',
	'653', '654', '655', '656', '657', '658',
	'690', '691', '692', '693', '694', '695',
	'696', '697', '698', '699',
	'730',
	'800', '810', '830', '856'
	";
$TagsIndexSubs = $TagsSubjectSubs;

$SearchTagsSelector = array();
$SearchCriteriaSelector = array();

$SearchTagsSelector[OBIB_SEARCH_BARCODE] = '';
$SearchCriteriaSelector[OBIB_SEARCH_BARCODE] = array("cast(biblio_copy.barcode_nmbr as char)");

$SearchTagsSelector[OBIB_SEARCH_MATERIAL] = '';
$SearchCriteriaSelector[OBIB_SEARCH_MATERIAL] = array("material");

$SearchTagsSelector[OBIB_SEARCH_COLLECTION] = '';
$SearchCriteriaSelector[OBIB_SEARCH_COLLECTION] = array("collection");

$SearchTagsSelector[OBIB_SEARCH_TITLE]   = "tag in (
	'210', '222', '240', '242', '243', '245', '246', '247'
	) and subfield_cd in ('a', 'b', 'k', 'p')";
$SearchCriteriaSelector[OBIB_SEARCH_TITLE]   = array("biblio.title","biblio.title_remainder");

$SearchTagsSelector[OBIB_SEARCH_AUTHOR]   = "tag in (".$TagsAutorList.") and subfield_cd in (".$TagsAutorSubs.")";
$SearchCriteriaSelector[OBIB_SEARCH_AUTHOR]   = array("biblio.author","biblio.responsibility_stmt");

$SearchTagsSelector[OBIB_SEARCH_SUBJECT]  = "tag in (".$TagsSubjectList.") and subfield_cd in (".$TagsSubjectSubs.")";
$SearchCriteriaSelector[OBIB_SEARCH_SUBJECT] = array("biblio.topic1","biblio.topic2","biblio.topic3","biblio.topic4","biblio.topic5");

$SearchTagsSelector[OBIB_SEARCH_NAME]     = "tag in (
	'100', '110', '111', '700', '710', '711'
	) and subfield_cd in ('a', 'q')";
$SearchTagsSelector[OBIB_SEARCH_CALLNO] = '';
$SearchCriteriaSelector[OBIB_SEARCH_CALLNO] = array("biblio.call_nmbr1","biblio.call_nmbr2","biblio.call_nmbr3");

$SearchTagsSelector[OBIB_SEARCH_KEYWORD]  = "tag in (".$TagsIndexList.") 
	and subfield_cd in (".$TagsIndexSubs.")
	and not (tag = '260' and subfield_cd in ('a', 'b', 'e', 'f', 'g'))";
$SearchCriteriaSelector[OBIB_SEARCH_KEYWORD] = array(
	 "biblio.topic1"
	,"biblio.topic2"
	,"biblio.topic3"
	,"biblio.topic4"
	,"biblio.topic5"
	);

function SearchCriteriaFields($aType){
    global $SearchCriteriaSelector;
    if ($aType == OBIB_SEARCH_BARCODE)
        return array("cast(barcode_nmbr as char)"); //
    else
        return $SearchCriteriaSelector[$aType];
}


class BiblioSearchQueryItem {
	var $_Type=NULL;
	var $_words = array();
	function BiblioSearchQueryItem($aType, $aText){
		$this->_Type = $aType;
		$this->_words = $aText;
	}
}

class BiblioSearchQuery extends Query {
  var $_itemsPerPage = 1;
  var $_rowNmbr = 0;
  var $_currentRowNmbr = 0;
  var $_currentPageNmbr = 0;
  var $_rowCount = 0;
  var $_pageCount = 0;
  var $_loc;
  var $_lastSelect=NULL;
  var $opacFlg = false;

  function BiblioSearchQuery() {
	parent::__construct(OBIB_CHARSET);
    $this->_loc = new Localize(OBIB_LOCALE,"classes");
  }
  function setItemsPerPage($value) {
    $this->_itemsPerPage = $value;
  }
  function getLineNmbr() {
    return $this->_rowNmbr;
  }
  function getCurrentRowNmbr() {
    return $this->_currentRowNmbr;
  }
  function getRowCount() {
    return $this->_rowCount;
  }
  function getPageCount() {
    return $this->_pageCount;
  }

  /****************************************************************************
   * Executes a query
   * @param string $type one of the global constants
   *               OBIB_SEARCH_BARCODE,
   *               OBIB_SEARCH_TITLE,
   *               OBIB_SEARCH_AUTHOR,
   *               or OBIB_SEARCH_SUBJECT
   * @param string @$words pointer to an array containing words to search for
   * @param integer $page What page should be returned if results are more than one page
   * @param string $sortBy column name to sort by.  Can be title or author
   *		if suffixed with '-' - used descending order
   * @return boolean returns false, if error occurs
   * @access public
   ****************************************************************************
   */
   
   /*
		makeSearch prepares search query with sofisticated way:
		if $justonce == true - returns the query expression
		else generates qury into temp table $_lastSelect - stored for later usage
			and returns query selecting all from it
   */
   function DumpSQL($msg, $SQL){
      echo "<h3>SQL dump ".$msg." :</h3>\n";
	  echo "<p> Query:".H($SQL)."</p>\n";
   }
   
  function makeSearch($searches, $page, $sortBy, $justonce = true) {
    # reset stats
	global $SearchCriteriaSelector;
	global $SearchTagsSelector;
    $this->_rowNmbr = 0;
    $this->_currentRowNmbr = 0;
    $this->_currentPageNmbr = $page;
    $this->_rowCount = 0;
    $this->_pageCount = 0;

    # setting sql join clause
	$join = "from biblio ";
    $joinnext = $join;
    $joins = 0;
    $drop=1;
    $short = 0;
    $havecopy = false;
	$havematerial = false;
	$havecollection = false;

	foreach ($searches as $si => $sitem) {
		$type = $sitem->_Type; 
		$words= $sitem->_words;
        $fields = "* ";

    # setting sql where clause
    $criteria = "";
    //$words = array_unique(unserialize(strtolower(serialize($words))));
    if ((sizeof($words) == 0) || ($words[0] == "")) {
    } else {
		if (!isset($SearchCriteriaSelector[$type]))
			Fatal::dbError($sql, 'Database query report', 'no OBIB_SEARCH_AUTHOR criteria');
		if (!isset($SearchTagsSelector[$type]))
			Fatal::dbError($sql, 'Database query report', 'no OBIB_SEARCH_AUTHOR tags');
		$join = $joinnext;
      if ($type == OBIB_SEARCH_BARCODE) {
        if (!$havecopy) {
            $fields = " biblio.* , copyid "
                    .",barcode_nmbr "
                    .",status_cd "
                    .",due_back_dt "
                    .",mbrid ";
            $join .= " join biblio_copy on biblio.bibid=biblio_copy.bibid ";
            $havecopy = true;
        }
        //$join .= $this->_getJoins($SearchTagsSelector[OBIB_SEARCH_BARCODE], $words ,$joins, $bField=$si,$drop);
        //$criteria = 
        $join .= " and ".$this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_BARCODE],$words);
      } elseif ($type == OBIB_SEARCH_AUTHOR) {
		$join .= $this->_getJoins($SearchTagsSelector[OBIB_SEARCH_AUTHOR], $words ,$joins, $bField=$si,$drop);
        $criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_AUTHOR],$words, $bField=$si,$drop);
      } elseif ($type == OBIB_SEARCH_SUBJECT) {
		$join .= $this->_getJoins($SearchTagsSelector[OBIB_SEARCH_SUBJECT], $words ,$joins, $bField=$si, $drop);
        $criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_SUBJECT], $words, $bField=$si,$drop);
      } elseif ($type == OBIB_SEARCH_CALLNO) {
        $criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_CALLNO], $words);
      } elseif ($type == OBIB_SEARCH_KEYWORD) {
		$join .= $this->_getJoins($SearchTagsSelector[OBIB_SEARCH_KEYWORD], $words ,$joins, $bField=$si, $drop);
        $criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_KEYWORD], $words, $bField=$si, $drop);
      } elseif ($type == OBIB_SEARCH_TITLE) {
		$join .= $this->_getJoins($SearchTagsSelector[OBIB_SEARCH_TITLE], $words ,$joins, $bField=$si, $drop);
        $criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_TITLE], $words, $bField=$si, $drop);
      } elseif ($type == OBIB_SEARCH_MATERIAL) {
        if (!$havematerial) {
            $fields = " biblio.*, material ";
            $join .= $this->mkSQL(
			              " join (select * from (select code, %L as material from material_type_dm) as mtlist where (%i)) as mtinfo on biblio.material_cd=mtinfo.code "
						, "description"
						, $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_MATERIAL] ,$words)
						);
            $havematerial = true;
        }		else {
			$criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_MATERIAL] ,$words); //
		}
      } elseif ($type == OBIB_SEARCH_COLLECTION) {
        if (!$havecollection) {
            $fields = " biblio.*, collection ";
            $join .= $this->mkSQL(
			              " join (select * from (select code, %L as collection from collection_dm) as cllist where (%i)) as clinfo on biblio.material_cd=clinfo.code "
						, "description"
						, $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_COLLECTION] ,$words)
						);
            $havecollection = true;
        }		else {
			$criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_COLLECTION] ,$words);
		}      } else {
		$join .= $this->_getJoins($SearchTagsSelector[$type], $words ,$joins, $bField=$si, $drop);
        $criteria = $this->_getCriteria($SearchCriteriaSelector[$type], $words, $bField=$si, $drop);
	  }
    }

    # limit number of joins and short words
    if ($joins > 29 or $short > 3) {
      $msg = "Enclose adjacent \"words to be found\" with quotation marks.";
      if ($this->opacFlg) header("Location: ../opac/index.php?msg=".U($msg));
      else header("Location: ../catalog/index.php?msg=".U($msg));
      exit();
    }

	//Fatal::dbError($join, "db report", 'sql ok');

	if (strlen($criteria)>0) {
		$join .= "where ".$criteria;
		if (strlen($join)>0) {
			$joinnext = "from (select ".$fields.$join.") as biblio ";
			$join = $joinnext;
		}
    }
    else
        $joinnext = "from (select ".$fields.$join.") as biblio ";
		$join = $joinnext;
	}//foreach
    
    # setting query that will return all the data
    # sql_calc_found_rows is efficient for counting rows on unefficient queries...
    $sql = "select sql_calc_found_rows ";
    if ($bField) $sql .= "distinct ";

    if (!$havecopy) {
        $sql .= "biblio.* ";
        $sql .= ",copyid "; //biblio_copy
        $sql .= ",barcode_nmbr ";
        $sql .= ",status_cd ";
        $sql .= ",due_back_dt ";
        $sql .= ",mbrid ";
        $join .= " left join biblio_copy on biblio.bibid=biblio_copy.bibid ";
    }
    else{
        $sql .= "* ";
    }

    $sql .= $join;

	if ($this->opacFlg) {
		$sql .= "where opac_flg = 'Y' ";
	}

	if (strlen($sortBy)>0){
		$desc = false;
		if (mb_substr($sortBy, 0, -1, OBIB_CHARSET) == '-'){
			$desc = true;
			$sortBy = mb_substr($sortBy, 0, mb_strlen($sortBy, OBIB_CHARSET)-1, OBIB_CHARSET);
		}
		$sql .= $this->mkSQL(" order by %C ", $sortBy);
		if ($desc)
			$sql .= " DESC ";
	}
	//Fatal::dbError($sql, "db report charset ".OBIB_CHARSET, 'sql ok');
	//Fatal::dbError($sql, "db report", 'sql ok');

	if ($justonce) return $sql;
	$dst = 'SearchContent';
	$this->act('drop table if exists '.$dst);
	$this->_lastSelect = NULL;
	$tablesql = $this->mkSQL('create temporary table %I as %!', $dst, $sql);//temporary 
	//$this->DumpSQL("makeSearch", $tablesql);
	if(!$this->act($tablesql)){
		return NULL;
	}
	$this->_lastSelect = $dst;
	return $this->mkSQL("select sql_calc_found_rows * from %I ", $this->_lastSelect);
  }
 
  function search($type, &$words, $page, $sortBy, $opacFlg=true) {
	$this->opacFlg = $opacFlg;
    $searches = array(new BiblioSearchQueryItem($type, $words));
	return $this->SearchEx($searches, $page, $sortBy);
   }

  function SearchEx(&$searches, $page, $sortBy) {
	$sql = $this->makeSearch($searches, $page, $sortBy, /*$justonce*/ true);
	$this->opacFlg = $opacFlg;
	if (!$sql) return false;
    # setting limit so we can page through the results
    $offset = ($page - 1) * $this->_itemsPerPage;
    # setting limit so we can page through the results
    if ($page > 0)
        $offset = ($page - 1) * $this->_itemsPerPage;
    else
        $offset = -$page;
	$limit = $this->_itemsPerPage;

    $sql .= $this->mkSQL(" limit %N, %N", $offset, $limit);
	//Fatal::dbError($sql, "db report", 'sql ok');

    //exit("sql=[".$sql."]<br>\n");

		echo $sql;

    # Running search sql statement
    if (!$this->_query($sql, $this->_loc->getText("biblioSearchQueryErr2"))) {
      return false;
    }

    # Calculate stats based on row count
    $sqlrows = $this->select1("SELECT FOUND_ROWS()");
	$this->_rowCount = $sqlrows["FOUND_ROWS()"];
    $this->_pageCount = $this->_rowCount / $this->_itemsPerPage;

    return true;

  }

	// $page < 0 - defines exact offset as row count
    function Lookup($look4type, $type, &$words, $page, $sortBy, $searches=NULL) {
		global $SearchTagsSelector;
		global $SearchCriteriaSelector;

		if (!$searches){
			$searches = array(new BiblioSearchQueryItem($type, $words));
		}

        //$lookupword = $words[0];
        $lookupword = $words[count($words)-1];
        //$lookupword = $searches[0]->_words[0];

        //Fatal::dbError($this->decoratedWord($lookupword), "db report charset ".OBIB_CHARSET, 'sql ok');

		$src = $this->makeSearch($searches, $page, "" /*$sortBy*/, /*$justonce*/ false);
		if (!$src) return false;

		if (!isset($SearchCriteriaSelector[$look4type]))
			Fatal::dbError($sql, 'Database query report', 'no OBIB_SEARCH_AUTHOR criteria');
		if (!isset($SearchTagsSelector[$look4type]))
			Fatal::dbError($sql, 'Database query report', 'no OBIB_SEARCH_AUTHOR tags');
		$union = "";

		$criterias = SearchCriteriaFields($look4type);
		$lookuptable = 'LookupContent';
		$this->act('drop table if exists '.$lookuptable);
		$this->act($this->mkSQL("create temporary  table %I (lookup varchar(127) character set ".$this->CharSet2MySQL(DB_CHARSET)." null)" , $lookuptable));//temporary 
		for ($i = 0; $i < count($criterias); $i++) {
			//!!! since mySQL cant use temporary table in single query twice, have to copy it in separate tempoparies for unioning 
            $sql = $this->mkSQL("insert ignore into %I (lookup) select distinct %i as lookup from (%i)"
						,$lookuptable ,$this->ExtractColName($criterias[$i]), $this->_lastSelect);
            //Fatal::dbError($sql, "db report", 'sql ok');
			//$this->DumpSQL("Lookup collect ".$this->ExtractColName($criterias[$i]), $sql);
			$this->act($sql);
		}
		$tags = $SearchTagSelector[$look4type];
		if (strlen($tags) > 0) {
			$sql = $this->mkSQL("insert ignore into %I (lookup) 
					select distinct field_data as lookup from biblio_field where (".$tags." and (bibid in (select bibid from %i)))"
					,$lookuptable , $this->_lastSelect);
			//$this->DumpSQL("Lookup select tags ".$tags, $sql);
			$this->act($sql);
		}
		$drop = 1;
		$sql = $this->mkSQL("select distinct lookup from %I as src where src.lookup like %Q ", $lookuptable, $this->decoratedWord($lookupword) );
		if (strlen($sortBy) >0){
			$sql .= " ORDER BY lookup ";
			if (mb_substr($sortBy, 0, -1, OBIB_CHARSET) == '-')
				$sql .= " DESC ";
		}
        //Fatal::dbError($sql, "db report charset ".OBIB_CHARSET, 'sql ok for:'.$words);

		# setting limit so we can page through the results
		if ($page > 0)
			$offset = ($page - 1) * $this->_itemsPerPage;
		else
			$offset = -$page;
		$limit = $this->_itemsPerPage;
		$sql .= $this->mkSQL(" limit %N, %N", $offset, $limit);
		//Fatal::dbError($sql, "db report", 'sql ok');
		//$this->DumpSQL("Lookup select ", $sql);

		# Running search sql statement
		$result = $this->select($sql);
		return $result;
  }


  /****************************************************************************
   * Utility function to get the selection criteria for a given column and set of values
   * @param string $col bibid of bibliography to select
   * @param array reference &$words array of words to search for
   * @return string returns SQL criteria syntax for the given column and set of values
   * @access private
   ****************************************************************************
   */
  function _getCriteria($cols,&$words,$bField=null,$drop=0) {
    # setting selection criteria sql
    $prefix = "";
    $criteria = "";
	if ($cols == NULL)
		$cols = array();
    for ($i = 0; $i < count($words); $i++) {
      # Drop very short words when querying biblio_field
      if ($bField and mb_strlen($words[$i], OBIB_CHARSET) > $drop) array_push($cols, "bf".$bField.$i."field_data");
      $criteria .= $prefix.$this->_getLike($cols,$words[$i]);
      $prefix = " and ";
      if ($bField and mb_strlen($words[$i], OBIB_CHARSET) > $drop) array_pop($cols);
    }
    return $criteria;
  }

  function _getLike(&$cols,$word) {
    $prefix = "";
    $suffix = "";
    if (count($cols) > 1) {
      $prefix = "(";
      $suffix = ")";
    }
    $like = "";
    for ($i = 0; $i < count($cols); $i++) {
      $like .= $prefix;
      $like .= $this->mkSQL("%i like %Q ", $cols[$i], $this->decoratedWord($word));
      $prefix = " or ";
    }
    $like .= $suffix;
    return $like;
  }

  function decoratedWord($word){
	if (mb_strlen($word, OBIB_CHARSET) == 0){
		$word = '%';
	}
    elseif (mb_substr($word, 0, 1, OBIB_CHARSET) == '%')
        return $word;
    elseif (mb_substr($word, -1, 1, OBIB_CHARSET) == '%')
        return $word;
	elseif (mb_strlen($word, OBIB_CHARSET) > 4){
		 if (mb_substr($word, -1, 1, OBIB_CHARSET) != '%')
			$word = "%".$word."%";
	}
	else {
		$word .= '%';
	}
	return $word;
  }
  
  function _getJoins($TagSelector, &$words, &$joins, $bField, $drop=0) {
    # setting selection criteria sql
	if (strlen($TagSelector)<= 0) return "";
    $prefix = "where ";
    $join = "";
	for ($i = 0; $i < count($words); $i++) {
		if (strlen($words[$i]) <= $drop) continue;
		$joins = $joins + 1;
		$join .= "left join (select bibid as bf".$bField.$i."bibid, field_data as bf".$bField.$i."field_data from biblio_field where (".$TagSelector.") ) as bf".$bField.$i." on bf".$bField.$i."bibid=biblio.bibid ";
		$join .= "and bf".$bField.$i."field_data ";
		$join .= $this->mkSQL("like %Q ", $this->decoratedWord($words[$i]));
		  # word boundaries for short words: prevent excessive wildcard matching in WHERE
		if (mb_strlen($words[$i], OBIB_CHARSET) < $drop + 3) {
			$join .= "and bf".$bField.$i."field_data ";
            $wordsQ = preg_quote($words[$i]);
			$join .= $this->mkSQL("rlike %Q ", "[[:<:]]".$wordsQ);
		}
	}
    return $join;
  }

  /****************************************************************************
   * Executes a query to select ONLY ONE SUBFIELD
   * @param string $bibid bibid of bibliography copy to select
   * @param string $fieldid copyid of bibliography copy to select
   * @return BiblioField returns subfield or false, if error occurs
   * @access public
   ****************************************************************************
   */
  function doQuery($statusCd,$mbrid="") {
    $sql = "select biblio.* ";
    $sql .= ",biblio_copy.copyid ";
    $sql .= ",biblio_copy.barcode_nmbr ";
    $sql .= ",biblio_copy.status_cd ";
    $sql .= ",biblio_copy.status_begin_dt ";
    $sql .= ",biblio_copy.due_back_dt ";
    $sql .= ",biblio_copy.mbrid ";
    $sql .= ",biblio_copy.renewal_count ";
    $sql .= ",greatest(0,to_days(sysdate()) - to_days(biblio_copy.due_back_dt)) days_late ";
    $sql .= "from biblio, biblio_copy ";
    $sql .= "where biblio.bibid = biblio_copy.bibid ";
    if ($mbrid != "") {
        $sql .= $this->mkSQL("and biblio_copy.mbrid = %N ", $mbrid);
    }
    $sql .= $this->mkSQL(" and biblio_copy.status_cd=%Q ", $statusCd);
    $sql .= " order by biblio_copy.status_begin_dt desc";

    if (!$this->_query($sql, $this->_loc->getText("biblioSearchQueryErr3"))) {
      return false;
    }
    $this->_rowCount = $this->_conn->numRows();
    return true;
  }

  /****************************************************************************
   * Fetches a row from the query result and populates the BiblioSearch object.
   * @return BiblioSearch returns bibliography search record or false if no more bibliographies to fetch
   * @access public
   ****************************************************************************
   */
  function fetchRow() {
    $array = $this->_conn->fetchRow();
    if ($array == false) {
      return false;
    }

    # increment rowNmbr
    $this->_rowNmbr = $this->_rowNmbr + 1;
    $this->_currentRowNmbr = $this->_rowNmbr + (($this->_currentPageNmbr - 1) * $this->_itemsPerPage);

    $bib = new BiblioSearch();
    $bib->setBibid($array["bibid"]);
    $bib->setCopyid($array["copyid"]);
    $bib->setCreateDt($array["create_dt"]);
    $bib->setLastChangeDt($array["last_change_dt"]);
    $bib->setLastChangeUserid($array["last_change_userid"]);
    $bib->setMaterialCd($array["material_cd"]);
    $bib->setCollectionCd($array["collection_cd"]);
    $bib->setCallNmbr1($array["call_nmbr1"]);
    $bib->setCallNmbr2($array["call_nmbr2"]);
    $bib->setCallNmbr3($array["call_nmbr3"]);
    $bib->setTitle($array["title"]);
    $bib->setTitleRemainder($array["title_remainder"]);
    $bib->setResponsibilityStmt($array["responsibility_stmt"]);
    $bib->setAuthor($array["author"]);
    $bib->setTopic1($array["topic1"]);
    $bib->setTopic2($array["topic2"]);
    $bib->setTopic3($array["topic3"]);
    $bib->setTopic4($array["topic4"]);
    $bib->setTopic5($array["topic5"]);
    if (isset($array["barcode_nmbr"])) {
      $bib->setBarcodeNmbr($array["barcode_nmbr"]);
    }
    if (isset($array["status_cd"])) {
      $bib->setStatusCd($array["status_cd"]);
    }
    if (isset($array["status_begin_dt"])) {
      $bib->setStatusBeginDt($array["status_begin_dt"]);
    }
    if (isset($array["status_mbrid"])) {
      $bib->setStatusMbrid($array["status_mbrid"]);
    }
    if (isset($array["due_back_dt"])) {
      $bib->setDueBackDt($array["due_back_dt"]);
    }
    if (isset($array["days_late"])) {
      $bib->setDaysLate($array["days_late"]);
    }
    if (isset($array["renewal_count"])) {
      $bib->setRenewalCount($array["renewal_count"]);
    }
    return $bib;
  }
}
?>