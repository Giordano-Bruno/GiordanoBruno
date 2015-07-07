<?php 
/**
 * Template used when there is no database_constants.php file
 */
if (!isset($_POST['submit'])){ 
  include("../install/header.php");
?>
   <body>
       <div class='error'>
       <p>database_constants.php not found.</p>
       <p>
           Please setup the database and place database_constants.php in your OpenBiblio installation path then proceed to the <a href="../install/index.php"> set up page</a>.
       </p>
       <p>
           You can use the form below to generate and download the file "database_constats.php", you will have to modify the database connection variables below to match the MySQL database and user that you have created for OpenBiblio. you still need to place the downloaded file in the OpenBiblio installation path! 
       </p>
        <form align="left" method="POST">
          Database Host: <br/>
          <input type="text" name="db_host" value="localhost"/>
          <br/>
          Database Name: <br/>
          <input type="text" name="db_name" value="OBiblio"/>
          <br/>
          Database user: <br/>
          <input type="text" name="db_username" value="dbuser"/>
          <br/>
          Database password: <br/>
          <input type="text" name="db_password" value="dbpass"/>
          <br/>
          Database charset: <br/>
          <input type="text" name="db_charset" value="utf-8"/>
          <br/>
          <br/>
          <input type="submit" name="submit" value="Generate file"/>
          <br/>
        </form>
       </div>
   </body>
</html>
        <?php } else {
		$filecontent= '<?php
/*********************************************************************************
 *
 *                           A T T E N T I O N !
 *
 *  ||  Please modify the following database connection variables to match  ||
 *  \/  the MySQL database and user that you have created for OpenBiblio.   \/
 *********************************************************************************
 */
define("OBIB_HOST",     "'.$_POST['db_host'].'");
define("OBIB_DATABASE", "'.$_POST['db_name'].'");
define("OBIB_USERNAME", "'.$_POST['db_username'].'");
define("OBIB_PWD",      "'.$_POST['db_password'].'");
define("DB_CHARSET",      "'.$_POST['db_charset'].'");
/*********************************************************************************
 *  /\                                                                      /\
 *  ||                                                                      ||
 *********************************************************************************
 */
?>
' ;
$filename="database_constants.php";
header("Cache-Control: public");
header("Content-Description: File Transfer");
//header("Content-Length: ". filesize("$filename").";");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/octet-stream; "); 
header("Content-Transfer-Encoding: binary");
echo $filecontent;
	}