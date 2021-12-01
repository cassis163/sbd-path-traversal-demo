<?php
// Basically, realpath() will resolve the provided path to an actual hard physical path (resolving symlinks, .., ., /, //, etc)...
// So if the real user path does not start with the real base path, it is trying to do a traversal.
// Note that the output of realpath will not have any "virtual directories" such as . or .....

$basepath = '';
$realBase = realpath($basepath);

$userpath = $basepath . $_GET['file'];
$realUserPath = realpath($userpath);

if ($realUserPath === false || strpos($realUserPath, $realBase) !== 0) {
    echo('Path Traversal detected!');
} else {
    include($userpath);
}
?>
