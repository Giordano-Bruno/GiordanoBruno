<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
require_once("../shared/global_constants.php");
require_once("../classes/Query.php");
require_once("../classes/BiblioField.php");
require_once("../classes/Localize.php");

/******************************************************************************
 * BiblioFieldQuery data access component for library bibliography fields
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */

$GLOBALS['usmarc_tags_holding'] = array( // jalg multi 5-7-2015 ALX
	"541","852", "949", "952"
 );

class BiblioFieldQuery extends Query {
  var $_rowCount = 0;
//  var $_loc;  // jalg multi 5-7-2015 ALX
  static $_loc = NULL;

  function __construct() {
    parent::__construct();
	if (is_null($this->_loc))

//  function BiblioFieldQuery() {
//    $this->Query();  // jalg multi 5-7-2015 ALX
    $this->_loc = new Localize(OBIB_LOCALE,"classes");
  }

  function getRowCount() {
    return $this->_rowCount;
  }

  /****************************************************************************
   * Executes a query to select ONLY ONE SUBFIELD
   * @param string $bibid bibid of bibliography copy to select
   * @param string $fieldid copyid of bibliography copy to select
   * @return BiblioField returns subfield or false, if error occurs
   * @access public
   ****************************************************************************
   */

  function doQuery($bibid,$fieldid, $copyid = NULL) { // jalg multi 5-7-2015 ALX
    # setting query that will return all the data in biblio
    $src = 'biblio_field';
    if (!is_null($copyid))
        $src = 'hold_field';
    $sql = $this->mkSQL("select * from %I "
                        . "where bibid = %N "
                        . "and fieldid = %N ", $src, $bibid, $fieldid);
    if (!is_null($copyid))
        $sql .= " and copyid = ".strval($copyid);

	$this->_conn = $this->selectFull($sql); //$this->_loc->getText("biblioFieldQueryErr1")
    $this->_rowCount = $this->_conn->count();
    return $this->fetchField();
  }
/*
  function doQuery($bibid,$fieldid) {
    # setting query that will return all the data in biblio
    $sql = $this->mkSQL("select biblio_field.* from biblio_field "
                        . "where biblio_field.bibid = %N "
                        . "and biblio_field.fieldid = %N ", $bibid, $fieldid);

    if (!$this->_query($sql, $this->_loc->getText("biblioFieldQueryErr1"))) {
      return false;
    }
    $this->_rowCount = $this->_conn->numRows();
    return $this->fetchField();
  }
*/

  /****************************************************************************
   * Executes a query
   * @param string $bibid bibid of bibliography fields to select
   * @return boolean returns false, if error occurs
   * @access public
   ****************************************************************************
   */
  function execSelect($bibid, $copyid = NULL) { // jalg multi 5-7-2015 ALX
    # setting query that will return all the data in biblio
    $src = 'biblio_field';
    if (!is_null($copyid))
        $src = 'hold_field';
    $sql = $this->mkSQL("select * "
                        . "from %I "
                        . "where bibid = %N "
                        , $src, $bibid
                        );
    if (!is_null($copyid))
        $sql .= " and copyid = ".strval($copyid);
    $sql .= " order by tag, subfield_cd ";
	$this->_conn = $this->selectFull($sql);//, $this->_loc->getText("biblioFieldQueryErr2")
    $this->_rowCount = $this->_conn->count();
    return;
  }
/*
  function execSelect($bibid, $fulltag = '') {
    // Add ability to specific tag
    $tag_filter = '';
    if (!empty($fulltag)) {
      $tag = substr($fulltag, 0, 3);
      $subfield_cd = substr($fulltag, 3);
      $tag_filter = " and biblio_field.tag = '$tag' and biblio_field.subfield_cd='$subfield_cd' ";
    }
    # setting query that will return all the data in biblio
    $sql = $this->mkSQL("select biblio_field.* "
                        . "from biblio_field "
                        . "where biblio_field.bibid = %N $tag_filter"
                        . "order by tag, subfield_cd ",
                        $bibid);
    if (!$this->_query($sql, $this->_loc->getText("biblioFieldQueryErr2"))) {
      return false;
    }
    $this->_rowCount = $this->_conn->numRows();
    return;
  }
*/
  /****************************************************************************
   * Fetches a row from the query result and populates the Theme object.
   * @return Theme returns theme or false if no more themes to fetch
   * @access public
   ****************************************************************************
   */
  function fetchField() { // jalg multi 5-7-2015 ALX
    $array = $this->_conn->fetch_assoc();
    if ($array == false) {
      return false;
    }
    $fld = new BiblioField();
    $fld->setBibid($array["bibid"]);
    $fld->setFieldid($array["fieldid"]);
    $fld->setTag($array["tag"]);
    $fld->setInd1Cd($array["ind1_cd"]);
    $fld->setInd2Cd($array["ind2_cd"]);
    $fld->setSubfieldCd($array["subfield_cd"]);
    $fld->setFieldData($array["field_data"]);
    if (isset($array["copyid"]))
        $fld->setCopyid($array["copyid"]);

    return $fld;
  }

/*  function fetchField() {
    $array = $this->_conn->fetchRow();
    if ($array == false) {
      return false;
    }
    $fld = new BiblioField();
    $fld->setBibid($array["bibid"]);
    $fld->setFieldid($array["fieldid"]);
    $fld->setTag($array["tag"]);
    $fld->setInd1Cd($array["ind1_cd"]);
    $fld->setInd2Cd($array["ind2_cd"]);
    $fld->setSubfieldCd($array["subfield_cd"]);
    $fld->setFieldData($array["field_data"]);

    return $fld;
  }
*/

  function fetchFields() { // jalg multi 5-7-2015 ALX
	$res = array();
	while ($fld = $this->fetchField()) {
		$tag = sprintf("%03d",$fld->getTag());
		$index = $tag.$fld->getSubfieldCd();
		$keySuffix = "";
		while (array_key_exists($index.$keySuffix, $res)) {
		  if ($keySuffix == "") {
			$keySuffix = 1;
		  } else {
			$keySuffix = $keySuffix + 1;
		  }
		}    
		$res[$index.$keySuffix] = $fld;
	}//while
	return $res;
}

  /****************************************************************************
   * Inserts new bibliography field into the biblio_field table.
   * @param BiblioField $field bibliography field to insert
   * @return boolean returns true if insert was successful or false, if error occurs
   * @access public
   ****************************************************************************
   */

  static function insertField($field, $link) { // jalg multi 5-7-2015 ALX
    # inserting biblio field row
    if (is_null($field->getCopyid()))
    $sql = $link->mkSQL("insert into biblio_field (bibid, tag, ind1_cd, ind2_cd, subfield_cd, field_data) values "
                        . "(%N, %N, %Q, %Q, %Q, %Q) ",
                        $field->getBibid(), $field->getTag(),
                        $field->getInd1Cd(), $field->getInd2Cd(),
                        $field->getSubfieldCd(), $field->getFieldData());
    else
    $sql = $link->mkSQL("insert into hold_field (bibid, tag, ind1_cd, ind2_cd, subfield_cd, field_data, copyid) values "
                        . "(%N, %N, %Q, %Q, %Q, %Q, %N) ",
                        $field->getBibid(), $field->getTag(),
                        $field->getInd1Cd(), $field->getInd2Cd(),
                        $field->getSubfieldCd(), $field->getFieldData()
                        , $field->getCopyid()
                        );

    if (!$link->_query($sql, $link->_loc->getText("biblioFieldQueryInsertErr"))) {
      return false;
    }
    return true;
  }

  static function insertFields($bibid, $copyid, $fields, $link) { // jalg multi 5-7-2015 ALX
    # inserting biblio field row
	$vals = array();
	$copye = false;
	if (empty($bibid))
		$bibid = $field->getBibid();
	if (empty($copyid))
		$copyid = $field->getCopyid();
	foreach($fields as $field){
		if (is_null($copyid)){
			$vals[] = $link->mkSQL("(%N, %N, %Q, %Q, %Q, %Q) ",
                        $bibid, $field->getTag(),
                        $field->getInd1Cd(), $field->getInd2Cd(),
                        $field->getSubfieldCd(), $field->getFieldData()
                        );
		}
		else {
			$vals[] = $link->mkSQL("(%N, %N, %Q, %Q, %Q, %Q, %N) ",
                        $bibid, $field->getTag(),
                        $field->getInd1Cd(), $field->getInd2Cd(),
                        $field->getSubfieldCd(), $field->getFieldData()
                        , $copyid
                        );
			$copye = true;
		}
	}
	if ($copye){
		$sql = "insert into hold_field (bibid, tag, ind1_cd, ind2_cd, subfield_cd, field_data, copyid) values ";
	}
	else{
		$sql = "insert into biblio_field (bibid, tag, ind1_cd, ind2_cd, subfield_cd, field_data) values ";
	}
	$sql .= implode(',', $vals);

    if (!$link->act($sql)) { //$link->_loc->getText("biblioFieldQueryInsertErr")
      return false;
    }
    return true;
  }
  
  function insert($field) { // jalg multi 5-7-2015 ALX
	return insertField($field, $this);
  }

/*
  function insert($field) {
    # inserting biblio field row
    $sql = $this->mkSQL("insert into biblio_field values "
                        . "(%N, null, %N, %Q, %Q, %Q, %Q) ",
                        $field->getBibid(), $field->getTag(),
                        $field->getInd1Cd(), $field->getInd2Cd(),
                        $field->getSubfieldCd(), $field->getFieldData());

    if (!$this->_query($sql, $this->_loc->getText("biblioFieldQueryInsertErr"))) {
      return false;
    }
    return true;
  }
*/


  /****************************************************************************
   * Updates a bibliography field in the biblio_field table.
   * @param BiblioField $field bibliography field to insert
   * @return boolean returns false, if error occurs
   * @access public
   ****************************************************************************
   */

  function update($field) { // jalg multi 5-7-2015 ALX
    # updating biblio table
    $src = 'biblio_field';
    if (!is_null($field->getCopyid()))
        $src = 'hold_field';
    $sql = $this->mkSQL("update %I set tag=%N, "
                        . "ind1_cd=%Q, ind2_cd=%Q, subfield_cd=%Q, field_data=%Q "
                        . "where bibid=%N and fieldid=%N",
                        $src
                        ,$field->getTag(), $field->getInd1Cd(),
                        $field->getInd2Cd(), $field->getSubfieldCd(),
                        $field->getFieldData(), $field->getBibid(),
                        $field->getFieldid());
    /*if (!is_null($field->getCopyid()))
        $sql .= " and copyid = ".$field->getCopyid();
    */
    return $this->_query($sql, $this->_loc->getText("biblioFieldQueryUpdateErr"));
  }

/*
  function update($field) {
    # updating biblio table
    $sql = $this->mkSQL("update biblio_field set tag=%N, "
                        . "ind1_cd=%Q, ind2_cd=%Q, subfield_cd=%Q, field_data=%Q "
                        . "where bibid=%N and fieldid=%N",
                        $field->getTag(), $field->getInd1Cd(),
                        $field->getInd2Cd(), $field->getSubfieldCd(),
                        $field->getFieldData(), $field->getBibid(),
                        $field->getFieldid());
    return $this->_query($sql, $this->_loc->getText("biblioFieldQueryUdateErr"));
  }
*/

  /****************************************************************************
   * Deletes a bibliography field from the biblio_field table.
   * @param string $bibid bibliography id of bibliography field to delete
   * @param string $fieldid field id of bibliography field to delete
   * @return boolean returns false, if error occurs
   * @access public
   ****************************************************************************
   */

  function delete($bibid, $fieldid, $copyid = NULL) { // jalg multi 5-7-2015 ALX
    $src = 'biblio_field';
    if (!is_null($copyid))
        $src = 'hold_field';
    $sql = $this->mkSQL("delete from %I "
                        . "where bibid=%N and fieldid=%N ",
                        $src, $bibid, $fieldid);
    /*if (!is_null($field->getCopyid()))
        $sql .= " and copyid = ".$field->getCopyid();
    */

    return $this->_query($sql, $this->_loc->getText("biblioFieldQueryDeleteErr"));
  }

/*
  function deleteCustomField($bibid, $fieldid) {
    $sql = $this->mkSQL("delete from biblio_field "
                        . "where bibid=%N and fieldid=%N ",
                        $bibid, $fieldid);

    return $this->_query($sql, $this->_loc->getText("biblioFieldQueryDeleteErr"));
  }
*/
}