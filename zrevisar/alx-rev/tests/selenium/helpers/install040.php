<?php
# So require and include get the right path
chdir('../..');

$doing_install = true;
require_once('../shared/common.php');
require_once('../classes/InstallQuery.php');
if (!defined('OBIB_TESTS_DESTROY_DB') or OBIB_TESTS_DESTROY_DB != "yes") {
  die("database_constants: OBIB_TESTS_DESTROY_DB is not 'yes'");
}

$installQ = new InstallQuery;
$e = $installQ->connect_e();
if ($e) {
  echo $e->toStr();
}
$installQ->freshInstall('en', true, '0.4.0');
echo 'Installed 0.4.0';

