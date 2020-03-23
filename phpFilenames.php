<?php


echo "File basename: " . basename(__FILE__);
echo "<br>";
echo "File: " . __FILE__;
echo "<br>";
echo "Dir: " . __DIR__;
echo "<br>";
echo "PHP_SELF basename: " .basename($_SERVER['PHP_SELF']);
echo "<br>";
echo "PHP_SELF: " . $_SERVER['PHP_SELF'];
echo "<br>";

echo "PATH INFO: " . pathinfo($_SERVER['PHP_SELF'])['dirname'];
// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
echo "<br>";
echo __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
echo "<br>";
echo "SERVER ROOT: " . $_SERVER['DOCUMENT_ROOT'];
?>