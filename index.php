<?php
include_once 'Queue.php';

$queue = new Queue(4);
$queue->cuttingFirst();
//$queue->add(1);
//$queue->add(1);