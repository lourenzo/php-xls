<?php
include 'xls.class.inc';

$xlsDoc = new xlsDocument('inscritos');

$header = array('Product','Price');

$lines = array(
  array('Casa', '90 mil'),
  array('Carro', '15 mil')
);

$xlsDoc->output($header, $lines);