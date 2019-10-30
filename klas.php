<?php
echo "> who is in your clas?" . PHP_EOL;
$name = readline("> ");
$bruh = explode(" ",$name);
foreach ($bruh as $final) {
    echo "> $final " . PHP_EOL;
  }
exit;