<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  session_cache_limiter(null);

  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************
  if (count($_POST) == 0) {
    header("Location: ../catalog/index.php");
    exit();
  }

  #****************************************************************************
  #*  Checking for tab name to show OPAC look and feel if searching from OPAC
  #****************************************************************************
  $tab = "cataloging";
  $helpPage = "biblioSearch";
  $lookup = "N";
  if (isset($_POST["tab"])) {
    $tab = $_POST["tab"];
  }
  if (isset($_POST["lookup"])) {
    $lookup = $_POST["lookup"];
    if ($lookup == 'Y') {
      $helpPage = "opacLookup";
    }
  }

  $nav = "search";
  if ($tab != "opac") {
    require_once("../shared/logincheck.php");
  }
  require_once("../classes/BiblioSearch.php");
  require_once("../classes/BiblioSearchQuery.php");
  require_once("../functions/searchFuncs.php");

  #****************************************************************************
  #*  Retrieving post vars and scrubbing the data
  #****************************************************************************
  // page < 0 defines exact ofsset as row number
  if (isset($_POST["page"])) {
    $currentPageNmbr = $_POST["page"];
  } else {
    $currentPageNmbr = 1;
  }

  if (isset($_POST["pageSize"])) {
    $currentPageSize = $_POST["pageSize"];
  } else {
    $currentPageSize = OBIB_ITEMS_PER_PAGE;
  }

  $searchType = $_POST["searchType"];
  $sortBy = $_POST["sortBy"];
  if ($sortBy == "default") {
    if ($searchType == "author") {
      $sortBy = "author";
    } else {
      $sortBy = "title";
    }
  }
  $searchText = trim(rawurldecode($_POST["searchText"]));
  # remove redundant whitespace
  $searchText = preg_replace('/\s+/', " ", $searchText);
	$sType = OBIB_SEARCH_TITLE;
  if (isset($BibSearchesId[$searchType]))
	$sType = $BibSearchesId[$searchType];

  if ($sType == OBIB_SEARCH_BARCODE) {
    $words[] = $searchText;
  } else {
    $words = FixWordsPercent(explodeQuoted($searchText));
  }

  $look4type = $_REQUEST["look4type"];
  if (isset($BibSearchesId[$look4type]))
	$resType = $BibSearchesId[$look4type];
  else
	$resType = OBIB_SEARCH_TITLE;

  $searches =NULL;
  if (isset($_REQUEST["searches"])){
	$searches = explodeSearches($_REQUEST["searches"]);
  }

  #****************************************************************************
  #*  Search database
  #****************************************************************************
  
  $biblioQ = new BiblioSearchQuery();
  $biblioQ->setItemsPerPage($currentPageSize);
  $biblioQ->connect();
  if ($biblioQ->errorOccurred()) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
  }
  # checking to see if we are in the opac search or logged in
  $biblioQ->opacFlg = ($tab == "opac");
  $found = $biblioQ->Lookup($resType, $sType, $words, $currentPageNmbr,$sortBy, $searches);
  if (!$found) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
  }

  #**************************************************************************
  #*  Show search results
  #**************************************************************************
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,"shared");

  # Display no results message if no results returned from search.
  if ($found->count() == 0) {
    $biblioQ->close();
    echo $loc->getText("biblioSearchNoResults");
    exit();
  }
?>
<!--**************************************************************************
    *  Printing result table
    ************************************************************************** -->
<?php
	switch ($_REQUEST["answer"]){
		case "plaintext":
			while ($row = $found->next()) {
				echo H($row["lookup"])."\n";
			}
			break;
		default : 
			while ($row = $found->next()) {
				echo "<option>".H($row["lookup"])."</option>\n";
			}
	}
	$biblioQ->close();
  ?>
