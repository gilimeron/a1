<?php

  $quotes = ['Normal is an illusion. What is normal for the spider is chaos for the fly. - Morticia Addams', 'We build too many walls and not enough bridges. - Isaac Newton', 'Success is walking from failure to failure with no loss of enthusiasm. - Winston Churchill'];
  function generateQuote ($quotes) {
      $quoteNumber = array_rand ($quotes,1);
      echo $quotes[$quoteNumber];
    }
