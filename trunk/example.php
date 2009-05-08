<?php


$header = array('Product','Price');

$lines = array(
  array('Casa', '90 mil'),
  array('Carro', '15 mil')
);

xlsDoc('inscritos',$header,$lines);
die();