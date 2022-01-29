<?php
$file = 'readme.txt';

// open a file for reading
$handle = fopen($file, 'r');
// open a file for reading and writing
// $handle = fopen($file, 'r+');
// open a file with pointer at end for reading and writing
// $handle = fopen($file, 'a+');

// read the file
// echo fread($handle, filesize($file)) . "<br />";

// read a single line
// echo fgets($handle);
// echo fgets($handle);
// echo fgets($handle);

// read a single character
echo fgetc($handle);

// writing to a file
// fwrite($handle, "\n Everything popular is here");

// closing the file
fclose($handle);

// deleting a file
// unlink($handle);
