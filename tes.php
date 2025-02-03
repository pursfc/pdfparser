<?php
require 'pdfparser/vendor/autoload.php';

// Parse PDF file and build necessary objects.
//$parser = new \Smalot\PdfParser\Parser();
//$pdf = $parser->parseFile('/path/to/document.pdf');

$parser = new \Smalot\PdfParser\Parser();

$pdf = $parser->parseFile('kanban.pdf');


$text = $pdf->getText();
echo $text;

?>