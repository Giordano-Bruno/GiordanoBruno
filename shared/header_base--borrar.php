<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../classes/Localize.php");
  require_once("../classes/Query.php");

  $headerLoc = new Localize(OBIB_LOCALE,"shared");


// code html tag with language attribute if specified.
echo "<html";
if (OBIB_HTML_LANG_ATTR != "") {
  echo " lang=\"".H(OBIB_HTML_LANG_ATTR)."\"";
}
echo ">\n";

// code character set if specified
if (OBIB_CHARSET != "") { ?>
<META http-equiv="content-type" content="text/html; charset=<?php echo H(OBIB_CHARSET); ?>">
<?php } ?>

<head>
<style type="text/css">
  <?php include("../css/style.php");?>
</style>
<meta name="description" content="OpenBiblio Library Automation System">
<title><?php echo H(OBIB_LIBRARY_NAME);?></title>

<script language="JavaScript">
<!--
function popSecondary(url) {
    var SecondaryWin;
    SecondaryWin = window.open(url,"secondary","resizable=yes,scrollbars=yes,width=535,height=400");
    self.name="main";
}
function popSecondaryLarge(url) {
    var SecondaryWin;
    SecondaryWin = window.open(url,"secondary","toolbar=yes,resizable=yes,scrollbars=yes,width=700,height=500");
    self.name="main";
}
function backToMain(URL) {
    var mainWin;
    mainWin = window.open(URL,"main");
    mainWin.focus();
    this.close();
}
-->
</script>


</head>
<body dir="<?php echo $headerLoc->getText("direction"); ?>" bgcolor="<?php echo H(OBIB_PRIMARY_BG);?>" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0" marginwidth="0" <?php
  if (isset($focus_form_name) && ($focus_form_name != "")) {
    if (preg_match('/^[a-zA-Z0-9_]+$/', $focus_form_name)
        && preg_match('/^[a-zA-Z0-9_]+$/', $focus_form_field)) {
      echo 'onLoad="self.focus();document.'.$focus_form_name.".".$focus_form_field.'.focus()"';
    }
  } ?> >

<!-- **************************************************************************************
     * Library Name and hours
     **************************************************************************************-->
<table class="primary" width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr bgcolor="<?php echo H(OBIB_TITLE_BG);?>">
    <td width="100%" class="title" valign="top">
       <?php
         if (OBIB_LIBRARY_IMAGE_URL != "") {
           echo "<img align=\"middle\" src=\"".H(OBIB_LIBRARY_IMAGE_URL)."\" border=\"0\">";
         }
         if (!OBIB_LIBRARY_USE_IMAGE_ONLY) {
           echo " ".H(OBIB_LIBRARY_NAME);
         }
       ?>
    </td>
    <td valign="top" class="title" nowrap="yes">
      <form action="" method="get">
      <?php 
        if (isset($_GET["lang_select"])) { ?>
          <select name="lang" onchange="this.form.submit()">
            <?php
                $localsq = new Query();
                $InstaledLocals = $localsq->InstalledLocales();
                $stng = new Settings();
                $arr_lang = $stng->getLocales();
                foreach ($InstaledLocals as &$instlang) {
                    if (strlen($lang["description"]) <= 0) {
                        $instlang["description"] = $arr_lang[ $instlang["id"] ];
                    }
                    unset($instlang);
                }
                
              #$_GET["lang"] = $_GET["lang_select"];
              foreach ($InstaledLocals as $langItem) {
                $localid = $langItem["id"];
                echo "<option value=\"".H($localid)."\"";
                if ($localid == $_GET["lang_select"]) {
                  echo " selected";
                }
                echo ">".H($langItem["description"])."</option>\n";
              }
              unset($_GET["lang_select"]);
            ?>
          </select>
      <?php } else {  ?>
            <input type="submit" name="lang_select" value=<?php echo H(OBIB_LOCALE);  ?> >
      <?php }?>
      </form>
    </td>
    <td valign="top">
      <table class="primary" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php echo $headerLoc->getText("headerTodaysDate"); ?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php echo H(date($headerLoc->getText("headerDateFormat")));?></font></td>
        </tr>
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_HOURS != "") echo $headerLoc->getText("headerLibraryHours");?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_HOURS != "") echo H(OBIB_LIBRARY_HOURS);?></font></td>
        </tr>
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_PHONE != "") echo $headerLoc->getText("headerLibraryPhone");?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_PHONE != "") echo H(OBIB_LIBRARY_PHONE);?></font></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
