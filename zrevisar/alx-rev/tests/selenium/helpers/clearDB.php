<?php
require_once('../../../database_constants.php');
if (!mysql_connect(OBIB_HOST, OBIB_USERNAME, OBIB_PWD)) {
  die("Can't connect to DB");
}
if (!mysql_select_db(OBIB_DATABASE)) {
  die("Can't select DB");
}
if (!defined('OBIB_TESTS_DESTROY_DB') or OBIB_TESTS_DESTROY_DB != "yes") {
  die("database_constants: OBIB_TESTS_DESTROY_DB is not 'yes'");
}
$res = mysql_query('SHOW TABLES');
while ($row = mysql_fetch_row($res)) {
  if (!mysql_query('DROP TABLE '.$row[0])) {
    die("Can't drop table ".$row[0]);
  }
}
echo "Tables dropped"
?>
