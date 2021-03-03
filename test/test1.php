<?php

preg_match('/(vin)(cent)/', 'vincent', $matches);
echo "<pre>";
print_r($matches[0]);
echo "</pre>";