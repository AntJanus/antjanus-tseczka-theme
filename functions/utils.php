<?php

function readTime($content, $short = false) {
  $wordCount = str_word_count(strip_tags($content));
  $m = floor($wordCount / 200);
  $s = floor($wordCount % 200 / 200 / (200 / 60));
  $m = $s >= 30 ? $m++ : $m;
  $message = '';

  if($short == true) {
    return $m. 'm';
  }

  return $m . ' minute' . ($m == 1 ? '' : 's');
}
