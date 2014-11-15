<?php
/**
 * Include library, should be autoloaded
 */
require 'PDFMerge.php';

use \Jurosh\PDFMerge\PDFMerger;

/**
 * Create new merger instance
 */
$merger = new PDFMerger;

/**
 * Put files IN
 */
$merger
    ->addPDF('path/to/file.pdf')
    ->addPDF('path/to/second/file.pdf')
   ->merge('file', 'path/to/output/directory/file.pdf');
