<?php
/**
 * Pangrams
 *
 * This snippet of code is a php solution to the problem described at HakerRank.com:
 * https://www.hackerrank.com/challenges/pangrams
 */
$_fp = fopen("php://stdin", "r");
$input = fread($_fp, 1000);
$input = str_split(strtolower($input));
$alphabet = range('a', 'z');
$pangram = true;
foreach ($alphabet as $letter) {
  if (! in_array($letter, $input)) {
      $pangram = false;
  }
}
echo $pangram ? "pangram" : "not pangram";
fclose($_fp);
