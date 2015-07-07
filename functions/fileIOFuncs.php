<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/*********************************************************************************
 * Does the same as file_get_contents but will work with PHP version < 4.3
 * @return string
 * @access public
 *********************************************************************************
 */
function fileGetContents($filename){
  $result = "";
  $handle = @fopen ($filename, "rb");
  if ($handle === FALSE) {
    return FALSE;
  }
  while (!feof ($handle)) {
    $buffer = fgets($handle, 4096);
    if ($buffer === FALSE && !feof($handle)) {
      return FALSE;
    }
    $result .= $buffer;
  }
  if (!fclose ($handle)) {
    /* We don't care because we've finished reading. */
    // return FALSE;
  }
  return $result;
}

function relativePath($from, $to)
{
    $fromPath = absolutePath($from);
    $toPath = absolutePath($to);

    $fromPathParts = explode(DIRECTORY_SEPARATOR, rtrim($fromPath, DIRECTORY_SEPARATOR));
    $toPathParts = explode(DIRECTORY_SEPARATOR, rtrim($toPath, DIRECTORY_SEPARATOR));
    while(count($fromPathParts) && count($toPathParts) && ($fromPathParts[0] == $toPathParts[0]))
    {
        array_shift($fromPathParts);
        array_shift($toPathParts);
    }
    return str_pad("", count($fromPathParts)*3, '..'.DIRECTORY_SEPARATOR).implode(DIRECTORY_SEPARATOR, $toPathParts);
}

function absolutePath($path)
{
    $isEmptyPath    = (strlen($path) == 0);
    $isRelativePath = ($path{0} != '/');
    $isWindowsPath  = !(strpos($path, ':') === false);

    if (($isEmptyPath || $isRelativePath) && !$isWindowsPath)
        $path= getcwd().DIRECTORY_SEPARATOR.$path;

    // resolve path parts (single dot, double dot and double delimiters)
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $pathParts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutePathParts = array();
    foreach ($pathParts as $part) {
        if ($part == '.')
            continue;

        if ($part == '..') {
            array_pop($absolutePathParts);
        } else {
            $absolutePathParts[] = $part;
        }
    }
    $path = implode(DIRECTORY_SEPARATOR, $absolutePathParts);

    // resolve any symlinks
    if (file_exists($path) && is_link($path))
        $path = readlink($path);

    // put initial separator that could have been lost
    $path= (!$isWindowsPath ? '/'.$path : $path);

    return $path;
}

?>
