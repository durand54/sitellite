--TEST--
saf.XML.RSS.Simple
--FILE--
<?php

// test setup

// remove this when test is ready to be run
return;

include_once ('../init.php');

// include library

loader_import ('saf.XML.RSS.Simple');

// constructor method

$simplerss = new SimpleRSS;

// fetch() method

var_dump ($simplerss->fetch ('$url', '$expires'));

?>
--EXPECT--
