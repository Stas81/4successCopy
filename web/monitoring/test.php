<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$repeatableEventStartSate = new \DateTime('2013-01-01 13:10:15');
//echo 'start date: '.$start->format('d.m.Y H:i:s').'<br>';
echo "";
echo "";
echo "";
echo "";

$start = new \DateTime();
$end = new \DateTime('2014-10-27');
echo 'start date: '.date('w', $start->getTimestamp());
echo 'end date: '.$end->format('l d.m.Y H:i:s').'<br>';

echo ' <input type="checkbox" name="vehicle" value="Car" checked> I have a car<br>';
echo md5('masterkey');