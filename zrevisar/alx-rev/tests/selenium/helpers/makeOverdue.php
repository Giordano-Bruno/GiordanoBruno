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
$res = mysql_query("UPDATE biblio_copy set due_back_dt=now() - interval 30 day "
  . "WHERE status_cd='out'");
if (!$res) {
  die("Can't change due date:".mysql_error());
}
echo "Changed Due Date"
?>
