<?php
//this code inlines to InstallQuery.check_SqlRelations.
//environment have  $dir, $dir_sub,  &$files, $rel_script, $script_dir
    echo '<h3>'."install sql update relations on files ".'</h3>';
    echo '<table> <tr>';
    foreach ($files as $name) {
      echo '<tr><td>'.H($name).'</td></tr>';
    }
    echo '</table>';

	$this->addNewSqlFilesInDir($files, $dir, $script_dir.'/../0.8.1/'.$dir_sub);
	$this->append_SqlRelations(absolutePath($dir.'/'.$script_dir.'/../0.8.1/'.$dir_sub), $files);

    echo '<h3>'."install sql updated by relations ".H($script_name).'</h3>';
    echo '<table><tr>';
    foreach ($files as $name) {
      echo '<tr><td>'.H($name).'</td></tr>';
    }
    echo '</table>';