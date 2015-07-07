<?php
//this code inlines to InstallQuery.check_SqlRelations.
//environment have  $dir, $dir_sub,  &$files, $rel_script, $script_dir
    echo '<h3>'."default install sql update relations on files ".'</h3>';
    echo '<table> <tr>';
    if (!empty($files))
    foreach ($files as $name) {
      echo '<tr><td>'.H($name).'</td></tr>';
    }
    echo '</table>';

//checkup locale ver 1.0.0
	$loc080 = $script_dir.'/../../../'.$this->_locale.'/sql/1.0.0';
	if (is_dir($dir.'/'.$loc080)){
		echo '<h3>'."check locale contents:".$dir.'/'.$loc080.'/'.$dir_sub.'</h3>';
		$this->addNewSqlFilesInDir($files, $dir, $loc080.'/'.$dir_sub);
	}
	else {
		$this->addNewSqlFilesInDir($files, $dir, $script_dir.'/../0.9.0/'.$dir_sub);
	}
	//$this->append_SqlRelations($dir???, $files);

    echo '<h3>'."install sql updated by relations ".H($script_name).'</h3>';
    echo '<table><tr>';
    foreach ($files as $name) {
      echo '<tr><td>'.H($name).'</td></tr>';
    }
    echo '</table>';