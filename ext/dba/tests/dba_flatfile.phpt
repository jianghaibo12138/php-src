--TEST--
DBA FlatFile handler test
--SKIPIF--
<?php
	$handler = 'flatfile';
	require_once(__DIR__ .'/skipif.inc');
?>
--FILE--
<?php
    $handler = 'flatfile';
    require_once(__DIR__ .'/test.inc');
    require_once(__DIR__ .'/dba_handler.inc');
?>
--CLEAN--
<?php
	require(__DIR__ .'/clean.inc');
?>
--EXPECT--
database handler: flatfile
3NYNYY
Content String 2
Content 2 replaced
Read during write: not allowed
"key number 6" written
Failed to write "key number 6" 2nd time
Content 2 replaced 2nd time
The 6th value
array(3) {
  ["key number 6"]=>
  string(13) "The 6th value"
  ["key2"]=>
  string(27) "Content 2 replaced 2nd time"
  ["key5"]=>
  string(23) "The last content string"
}
--NO-LOCK--
3NYNYY
Content String 2
Content 2 replaced
Read during write: not allowed
"key number 6" written
Failed to write "key number 6" 2nd time
Content 2 replaced 2nd time
The 6th value
array(3) {
  ["key number 6"]=>
  string(13) "The 6th value"
  ["key2"]=>
  string(27) "Content 2 replaced 2nd time"
  ["key5"]=>
  string(23) "The last content string"
}
