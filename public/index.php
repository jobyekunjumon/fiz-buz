<?php
require_once('../app/includes/autoloader.php'); 
$number = new Number();
$number->setRange(range(1, 100));
$numberSequence = $number->getSequence();

echo '<h1>Number Sequence</h1>';
if(!empty($numberSequence)) {
    $ui = new Renderer();
    $ui->setNumberSequence($numberSequence);
    echo $ui->getNumberSequenceString() ?? '<h2>Could not generate sequence</h2>';
}
