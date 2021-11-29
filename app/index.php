<?php
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
