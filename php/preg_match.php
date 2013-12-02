<?php
//usage:
//preg_match(string $pattern,string $subject[,array &$matches[,int $flags=0[,int $offset=0]]])
$reg='/^(#)([^.]+)/i';
$string='#who are you';
preg_match($reg, $string, $matches);
print_r($matches);
?>