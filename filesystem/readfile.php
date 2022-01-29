<?php
echo exec('whoami') . "<br/>";
$file = 'readme.txt';
if (file_exists($file)) {
    // read file
    echo readfile($file) . "<br/>";
    // copy file
    copy($file, 'quotes.txt');
    // absolute path
    echo realpath($file) . "<br/>";
    // file size
    echo filesize($file) . "<br/>";
    // rename file
    rename($file, 'test.txt');
} else {
    echo 'file does not exists';
}

// make directory
mkdir('quotes');
