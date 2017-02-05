<?php

  $quotes = ['Life is like a box of chocolates - you never know what you are going to get', 'You know nothing John Snow!', 'A girl has no name'];
  function generateQuote ($quotes) {
      $quoteNumber = array_rand ($quotes,1);
      echo $quotes[$quoteNumber];
    }
?>
