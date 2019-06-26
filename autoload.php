<?php
//File path
foreach (__AutoLoad(__DIR__.'/inc/') as $value) {
    require_once ($value);
}
function __AutoLoad($Pathe) {
    $path = realpath($Pathe);
    static $files = [];
    $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
    foreach ($objects as $name => $object) {
        if (pathinfo($name, PATHINFO_EXTENSION) == 'php') $files[] = $name;
    }
    return $files;
}
?>