<!-- we place these JS files here because several JS modules loaded in line -->
<!-- depend on them being in place. -->
<!--[if lt IE 9]><script src="../shared/jquery/jquery-1.10.2.min.js"></script><!--<![endif]-->
<!--[if gt IE 8]><!-->
<!--<script src="../shared/jquery/jquery-2.0.3.min.js"></script>-->
<!--<![endif]-->

<script language="JavaScript" defer >
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

/**
 * JavaScript portion of the Biblio ExistingItem Manager
 * @author Luuk Jansen
 * @author Fred LaPlante
 * @author AlexRayne
 */
"use strict";
<?php
	// If a circulation user and NOT a cataloging user the system should treat the user as opac
//	if(strtolower($tab) == 'opac' || ($_SESSION["hasCircAuth"] && !$_SESSION["hasCatalogAuth"]))
	if(strtolower($tab) == 'opac' || strtolower($tab) == 'circulation' )
	  echo "var opacMode = true;\n";
	else
	  echo "var opacMode = false;\n";
	echo "var PageTab = '".$tab."';\n";
?>

function ById(name){
    return document.getElementById(name);
};

if (!String.prototype.trim) {
 String.prototype.trim = function() {
  return this.replace(/^\s+|\s+$/g,'');
 }
};

// IE does not know about the target attribute. It looks for srcElement
// This function will get the event target in a browser-compatible way
function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement; 
}

function DropChildren(elem) {
  try {
    elem.innerHTML = '';
  } catch(e) {
    while(elem.firstChild) {
      elem.removeChild(elem.firstChild);
    }
  }
}

var LastDigitR = /\d+$/;

function RowOfId(id){
	var idNo = LastDigitR.exec(id);
	var res;
	if ((idNo) && (idNo[0])) {
		res = idNo[0];
	}
	else
		res = "";
	return res;
}
//------------------------------------------------------------------------------

var bs = {
	<?php
		echo "showMarc: '".$loc->_("Show Marc Tags")."',\n";
		echo "hideMarc: '".$loc->_("Hide Marc Tags")."',\n";
	?> 
	lookcopy : "",
	
	init: function (event) {
		// get header stuff going first
		bs.initWidgets();
		bs.urlServer = '../catalog/Server.php';

		for (var idx = 0; idx < ById('copyInfo').rows.length; idx++){
			var line = ById('copyInfo').rows[idx];
			line.onclick	= bs.clickCopy;
			line.onmouseover= bs.overCopy;
		}
	},
	//------------------------------
	showMsg: function(msg) {
		var target = ById('errSpace');
		target.innerHTML = msg;
		target.style.display = 'block';
	},

	initWidgets: function () {
	},

	resetForms: function () {
		ById('errSpace').style.display = 'none';
	},
	
	descrOfCopy: function(copyid){
		if (!ById("descr_copy"+copyid)) return "";
		var descr = ById("descr_copy"+copyid).innerHTML;
		return descr;
	},
	
	overCopy: function (event) {
		return;
		var target = getEventTarget(event);
		var copyid = RowOfId(this.id);
		if (copyid.length <= 0) return;
		var descr = bs.descrOfCopy(copyid);
		if (descr.length <= 0) return;
		bs.showDescr(copyid, descr);
	},
	
	clickCopy: function (event) {
		var target = getEventTarget(event);
		var copyid = RowOfId(this.id);
		if (copyid.length <= 0) return;
		var descr = bs.descrOfCopy(copyid);
		if (descr.length <= 0) {
			bs.loadDescr(copyid);
			return;
		}
		bs.showDescr(copyid, descr);
	},

	showDescr : function (copyid, descr) {
		ById("CI_barcode").innerHTML = ById("bar_copy"+copyid).value;
		ById("CopyInfoContent").innerHTML = descr;
		ById("CopyInfoDiv").hidden = (descr.length <= 0);
	},
	
	loadDescr : function (copyid) {
		var bibid = ById("bilioid").value;
		var xhr = new XMLHttpRequest();
		var params = "mode=copyesListDescribe"
			+'&bibid='+ bibid
			;

		xhr.open("POST", bs.urlServer, true);
		xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.onreadystatechange = function(){
			if (this.readyState != 4) return;

			bs.lookupxhr = null;

			if ((this.status != 200)||(this.statusText.indexOf('error') >= 0)) {
				bs.showMsg(this.statusText+'\n'+this.responseText);
				return;
			};
			var records = json_decode(this.responseText);
			for (var idx = 0; idx < records.length; idx++){
				var copyid = records[idx].copyid;
				var descr  = records[idx].descr;
				var target = ById("descr_copy"+copyid);
				if (target)
					target.innerHTML = descr;
			}
			
			if (bs.lookcopy.length >= 0){
				showDescr(bs.lookcopy, ById("copy_descr"+bs.lookcopy).innerHTML);
			}
		};
		bs.lookupxhr = xhr;
		bs.lookcopy = copyid;
		xhr.send(params);
	}

};
//$(document).ready(bs.init);
window.onload = bs.init;

</script>
